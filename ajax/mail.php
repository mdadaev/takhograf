<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
use \Bitrix\Main\Application;
use \Bitrix\Main\Loader,
    \Bitrix\Iblock\IblockTable,
    \Bitrix\Iblock\SectionTable;

Loader::includeModule("iblock");
$obRequest = Application::getInstance()->getContext()->getRequest()->getPostList();
$fio = $obRequest->getRaw('NAME');
$email = $obRequest->getRaw('CODE');
if (!empty($email) && !preg_match('/[a-zA-z0-9]+@[a-z0-9]+\.[a-z]{2,10}/', $email)) {
    echo json_encode(array('ERROR' => true, 'ERROR_FIELDS' => array('CODE')));
    return;
}

/*Инфоблок для добавления*/
$arIblock = IblockTable::getList(
    array(
        'filter' => array('CODE' => 'Forms_Forms'),
        'select' => array('ID'),
        'limit' => 1
    )
)->fetch();

/*Раздел для добавления*/
$arSection = SectionTable::getList(
    array(
        'filter' => array('CODE' => $obRequest->getRaw('SECTION_CODE')),
        'select' => array('ID'),
        'limit' => 1
    )
)->fetch();

/*Добавляем элемент*/


$orderList = "";
if ($obRequest->getRaw('ORDER_LIST')) {
    $arOrder = json_decode($obRequest->getRaw('ORDER_LIST'), true);
    foreach ($arOrder as $orderItem) {
        if (!intval($orderItem["COUNT"])) {
            continue;
        }
        $orderList .= $orderItem["NAME"] . " - " . $orderItem["COUNT"];
        if ($orderItem != end($arOrder)) {
            $orderList .= ";\n";
        }
    }
}

if (!empty($fio)) {
    $arFields = array(
        'NAME' => $fio,
        'IBLOCK_ID' => $arIblock['ID'],
        'CODE' => $email,
        'PREVIEW_TEXT' => $obRequest->getRaw('PREVIEW_TEXT'),
        'DETAIL_TEXT' => $orderList,
        'IBLOCK_SECTION_ID' => $arSection['ID'],
        'PROPERTY_VALUES' => array(
            'PHONE_NUMBER' => $obRequest->getRaw('PHONE_NUMBER')
        ),
    );

    $obElem = new \CIBlockElement();
    if ($elemId = $obElem->add($arFields)) {

        /*Отправляем уведомление*/
        $templateId = $orderList ? "9" : "8";
        $eventId = \CEvent::Send(
            'FORM_FILLED',
            's1',
            array(
                'NAME' => $fio,
                'EMAIL' => $email,
                'PHONE' => $obRequest->getRaw('PHONE_NUMBER'),
                'COMMENT' => $obRequest->getRaw('PREVIEW_TEXT'),
                'ORDER' => $orderList,
                'FORM' => $obRequest->getRaw('FORM_NAME'),
            ),
            "Y",
            $templateId
        );

        echo json_encode(array('SUCCESS' => true, 'ELEMENT_ID' => $elemId));
    }
    else {
        echo json_encode(array('ERROR' => true, 'ERROR_MESS' => $obElem->LAST_ERROR));
    }
}
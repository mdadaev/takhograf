<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use \Bitrix\Main\Application;
use \Bitrix\Main\Loader;

Loader::includeModule("iblock");

global $APPLICATION;
$obRequest = Application::getInstance()->getContext()->getRequest()->getPostList();
$elId = $obRequest->getRaw('ID');
$ibId = $obRequest->getRaw('IBLOCK');
if($elId && $ibId) {
    ob_start();
    $APPLICATION->IncludeComponent("bitrix:news.detail","detail",Array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "SHARE_SHORTEN_URL_LOGIN" => "",
            "SHARE_SHORTEN_URL_KEY" => "",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "Content",
            "IBLOCK_ID" => $ibId,
            "ELEMENT_ID" => $elId,
            "ELEMENT_CODE" => "",
            "FIELD_CODE" => Array("PREVIEW_PICTURE", "PREVIEW_TEXT"),
            "PROPERTY_CODE" => Array("PHOTO", "ICON_PATH"),
            "DETAIL_URL" => "",
            "SET_TITLE" => "N",
            "SET_CANONICAL_URL" => "N",
            "SET_BROWSER_TITLE" => "N",
            "BROWSER_TITLE" => "-",
            "SET_META_KEYWORDS" => "N",
            "META_KEYWORDS" => "-",
            "SET_META_DESCRIPTION" => "N",
            "META_DESCRIPTION" => "-",
            "SET_STATUS_404" => "N",
            "SET_LAST_MODIFIED" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "ADD_ELEMENT_CHAIN" => "N",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "USE_PERMISSIONS" => "N",
            "GROUP_PERMISSIONS" => Array(),
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_GROUPS" => "Y",
            "IMAGE_WIDTH" => "100",
            "IMAGE_HEIGHT" => "100"
        )
    );
    $returnStr = ob_get_contents();
    ob_clean();
    echo $returnStr;
}
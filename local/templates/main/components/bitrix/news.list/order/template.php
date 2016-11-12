<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
if (empty($arResult['ITEMS'])) {
    return;
}
?>
<?foreach ($arResult['ITEMS'] as $k => $arItem) {
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
    if ($arItem['PREVIEW_PICTURE']["RESIZE"]) {
        ?>
        <div class="js-order-product-container forma__cout-item row" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" >
            <div class="col-sm-3 col-xs-5">
                <div class="forma__picture">
                    <img class="forma__picture-img" src="<?= $arItem['PREVIEW_PICTURE']["RESIZE"]["src"] ?>" alt="">
                </div>
            </div>
            <div class="col-sm-6 col-xs-7">
                <p class="forma__cout-text js-order-product-name"><?= $arItem['NAME'] ?></p>

            </div>
            <div class="col-sm-3 col-xs-12">
                <input type="number" class="js-order-product-count" id="gsm1" name="gsm1" value="0" min="0" max="200" />
            </div>
        </div>

    <?
    }
}
?>




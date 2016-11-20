<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="row advantage_row">
    <? $counter = 0;
    foreach ($arResult['ITEMS'] as $k => $arItem) {
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-sm-4 advantage__item wow fadeInDownShort <?= ($counter == 0) ? "col-md-offset-2" : "" ?>" data-id='<?= $k ?>' id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <a href="#wawes-js-<?= $k ?>" class="fancybox fancybox-ajax" data-id="<?= $arItem['ID'] ?>" data-iblock="<?= $arItem['IBLOCK_ID'] ?>">
                <i class="capabilities__pic">
                    <img class="advantage__img" src="<?= $arItem['DISPLAY_PROPERTIES']['ICON_PATH']['VALUE'] ?>" width="75px" height="75px">
                </i>
            </a>
            <p class="advantage__text"><?= $arItem['PREVIEW_TEXT'] ?></p>
        </div>

        <?
        $counter++;
    }
    ?>
</div>


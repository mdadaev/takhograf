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
<div class="col-md-6 animated bounceInLeft delay-750">
    <div class="about__pictures row">
        <? foreach ($arResult['ITEMS'] as $k => $arItem) {
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
            if ($arItem['PREVIEW_PICTURE']["RESIZE"]) {
                ?>
                <div class="about__pic col-xs-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <? if ($arItem['DETAIL_PICTURE']['SRC']) { ?>
                    <a href="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" class="fancybox">
                        <? } ?>
                        <img class="about__img" src="<?= $arItem['PREVIEW_PICTURE']["RESIZE"]["src"] ?>" alt="">
                        <? if ($arItem['DETAIL_PICTURE']['SRC']) { ?>
                    </a>
                <? } ?>
                </div>
                <?
            }
        }
        ?>

    </div>
    <!-- <img class="about__image about__image_mob" src="img/product_m.jpg" alt=""> -->
</div>



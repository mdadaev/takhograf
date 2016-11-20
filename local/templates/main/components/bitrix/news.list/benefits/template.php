<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
if( empty($arResult['ITEMS']) ){
    return;
}

?><section class="advantage2 sect-pad2" id="advantage">
    <div class="container">
        <h2 class="regtitle regtitle_blu advantage2_regtitle  wow fadeInUpShort" data-id='0'><?=$arParams['SECTION_HEADER']?></h2><?
		foreach($arResult['ITEMS'] as $k => $arItem){
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));		
			?><div class="advantage2__item animated fadeInUpShort" data-id='<?=$k?>' id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<i class="advantage2__pic">
					<img class="advantage__img" src="<?=$arItem['DISPLAY_PROPERTIES']['ICON_PATH']['VALUE']?>" width="75px" height="75px">
				</i>
				<p class="advantage2__text"><?=$arItem['PREVIEW_TEXT']?></p><?
				if( count($arItem['PHOTOS']) > 1 ){
					?><div class="row four-pic"><?
						foreach ($arItem['PHOTOS'] as $src){
							?><div class="col-sm-3 four-pic__itm"><img class="four-pic__img" src="<?=$src?>"></div><?
						}
					?></div><?
				}
			elseif( count($arItem['PHOTOS']) == 1 ){
				?><div class="four-pic col-sm-12">
					<img class="four-pic__img" src="<?=reset($arItem['PHOTOS'])?>">
				</div><?
			}
			?></div><?
		}
	?></div>
</section>


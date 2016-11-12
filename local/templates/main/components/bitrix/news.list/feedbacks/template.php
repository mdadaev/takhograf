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

?><section class="reviews sect-pad" id="reviews">
	<div class="container animatedParent">
		<h2 class="regtitle center regtitle_blu animated fadeInUpShort"><?=$arParams['SECTION_HEADER']?></h2>
		<div class="reviews__wrap owl-carousel2"><?
			foreach($arResult['ITEMS'] as $k => $arItem){
				$this->AddEditAction($arItem['ID'], "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=" . $arParams['IBLOCK_ID'] . "&type=Content&ID=" . $arItem['ID'] . "&bxpublic=Y", "Изменить элемент");
				?><div class="reviews__item animated fadeInUpShort slowest col-md-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="reviews__img">
						<img class="reviews__facepic" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
					</div>
					<div class="reviews__infa">
						<h5 class="reviews__fio"><?=$arItem['NAME']?></h5><?
						if( !empty($arItem['DISPLAY_PROPERTIES']['POST']['VALUE']) ){
							?><p class="reviews__post"><?=$arItem['DISPLAY_PROPERTIES']['POST']['VALUE']?></p><?
						}
						?><p class="reviews__post-text"><?=$arItem['PREVIEW_TEXT']?></p>
					</div>
				</div><?
			}
		?></div> <!-- class="reviews__wrap"> -->
	</div> <!-- class="container"> -->
</section>

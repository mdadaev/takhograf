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

?><section class="licenz sect-pad" id="licenz">
	<div class="container animatedParent">
		<h2 class="regtitle cente animated bounceIn"><?=$arParams['SECTION_HEADER']?></h2>
		<div class="licenz__slider animated bounceIn delay-250">
			<div class="owl-carousel"><?
				foreach($arResult['ITEMS'] as $arItem){
					$this->AddEditAction($arItem['ID'], "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=" . $arParams['IBLOCK_ID'] . "&type=Content&ID=" . $arItem['ID'] . "&bxpublic=Y", "Изменить элемент");
					?><div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<a class="licenz__im-link" href="<?=$arItem['DETAIL_PICTURE']['SRC']?>"  rel="sertif">
							<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
					</a><?
					if( !empty($arItem['ADDITIONAL_PHOTO']) ){
						foreach($arItem['ADDITIONAL_PHOTO'] as $src){
							?><a class="licenz__im-link hidden" href="<?=$src?>"  rel="sertif"></a><?
						}
					}
					?></div><?
				}
			?></div> <!-- class="owl-carousel"> -->
		</div> <!-- class="licenz__slider"> -->
	</div><!--  class="container"> -->
</section>


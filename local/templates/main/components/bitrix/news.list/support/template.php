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

?><section class="support sect-pad" id="support">
	<div class="container">
		<div class="animatedParent"> <h2 class="regtitle animated fadeInDown go"><?=$arParams['SECTION_HEADER']?></h2></div>
		<div class="row support__row"><?
			$halfOfItems = ceil(count($arResult['ITEMS']) / 2);
			?><div class="col-sm-7">
				<ul class="support__ul animatedParent" data-sequence="350"><?
					foreach ($arResult['ITEMS'] as $k => $arItem){
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
						?><li class="support__ul-item animated fadeInDownShort go" data-id="<?=( $k <= $halfOfItems - 1 ) ? $k : $k % $halfOfItems?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<svg class="support__picto" width="26px" height="28px">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pdf"></use>
							</svg>
							<a class="support__link" target="_blank" href="<?=$arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC']?>"><?=$arItem['NAME']?></a>
						</li><?
						if( $k == $halfOfItems - 1 ){
								?></ul>
							</div>
							<div class="col-sm-5">
								<ul class="support__ul support__ul_pad animatedParent" data-sequence="400"><?
						}
					}
				?></ul>
			</div>
			<div class="capabilities__button support_button animatedParent">
				<a href="/upload/PDF/all.zip" target="_blank" class="btn btn-lblue tahio_btn-lblue animated fadeInUp">Скачать все материалы</a>
			</div>
		</div> <!-- class="row"> -->
	</div> <!-- class="container"> -->
</section>
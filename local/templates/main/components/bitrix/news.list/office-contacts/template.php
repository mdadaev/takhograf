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
if( !empty($arResult['ITEMS']) )
{
	?><div class="footer__proezd-w wow fadeInLeft delay-750" data-id='7'>
		<b class="footer__proezd-name">Проезд:</b>
		<ul class="footer__proezd-list"><?
			foreach($arResult["ITEMS"] as $arItem)
			{
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?><li class="footer__proezd-itm" id="<?= $this->GetEditAreaId($arItem['ID']);?>">
					<a class="footer__proezd-link fancybox-ajax fancybox" href="#<?=$arItem['ID']?>" data-id="<?=$arItem['ID']?>" data-iblock="<?=$arParams['IBLOCK_ID']?>"><?=$arItem['NAME']?></a>
				</li><?
			}
		?></ul>
	</div><?
}



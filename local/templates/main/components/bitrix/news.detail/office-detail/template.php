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

<div class="capabilities-windows center">
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
	<h2 class="regtitle regtitle_blu"><?=$arResult["PROPERTIES"]["HEADER"]["VALUE"]?></h2>
	<?endif;?>
	<p>
	<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty) {
		if ($pid != 'HEADER' && $pid != 'MAP') {
			echo $arProperty["NAME"] ?>:&nbsp;
			<? if (is_array($arProperty["DISPLAY_VALUE"])):?>
				<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
			<?
			else:?>
				<?= $arProperty["DISPLAY_VALUE"]; ?>
			<?endif ?>
			<br/><?
		}
	}
	if( !empty($arResult["PROPERTIES"]["MAP"]["VALUE"]) ) {
		$arCoords = explode(',', $arResult["PROPERTIES"]["MAP"]["VALUE"]);
		?>
		<div class="footer__map-wrap2">
			<div id="map-<?= $arResult['ID'] ?>" class="map-popup js-map-popup" 
				data-id="<?=$arResult['ID']?>" 
				data-x="<?=reset($arCoords)?>" 
				data-y="<?=end($arCoords)?>" 
				data-address="<?=$arResult["PROPERTIES"]["ADDRESS"]["VALUE"]?>">
				<address>
					<strong><?=$arResult["PROPERTIES"]["HEADER"]["VALUE"]?></strong>
					<?if( !empty($arResult["PROPERTIES"]["ADDRESS"]["VALUE"]) )
					{
						?><br/>
						Адрес: <?=$arResult["PROPERTIES"]["ADDRESS"]["VALUE"]?><?
					}?>
					</address>
			</div>
		</div>
		<?
	}
	?>
	<?if( !empty($arResult["DETAIL_TEXT"]) )
	{
		?><p>
			<?=$arResult["DETAIL_TEXT"];?>
		</p><?
	}
?></div>
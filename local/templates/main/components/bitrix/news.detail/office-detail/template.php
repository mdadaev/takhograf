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
<div class="capabilities-windows center office">
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
		?>
		<div class="footer__map-wrap2">
			<div id="map-<?= $arResult['ID'] ?>" style="height: 100%;"></div>
		</div>
		<script>
			var myMap = new ymaps.Map("map-<?=$arResult['ID']?>", {
					center: [<?=$arResult["PROPERTIES"]["MAP"]["VALUE"]?>],
					zoom: 17,
					controls: ["fullscreenControl", "zoomControl"]
				}, {
					searchControlProvider: 'yandex#search'
				}),

				// Создаем геообъект с типом геометрии "Точка".
				myGeoObject = new ymaps.GeoObject({
					// Описание геометрии.
				}, {
					// Опции.
					// Иконка метки будет растягиваться под размер ее содержимого.
					preset: 'islands#blackStretchyIcon',
					// Метку можно перемещать.
					draggable: true
				});

			myMap.geoObjects
				.add(myGeoObject)
				.add(new ymaps.Placemark([<?=$arResult["PROPERTIES"]["MAP"]["VALUE"]?>], {
					balloonContentBody: [
						'<address>',
						'<strong><?=$arResult["PROPERTIES"]["HEADER"]["VALUE"]?></strong>',
						<?if( !empty($arResult["PROPERTIES"]["ADDRESS"]["VALUE"]) )
							{
							?>'<br/>',
						'Адрес: <?=$arResult["PROPERTIES"]["ADDRESS"]["VALUE"]?>',<?
						}?>
						'</address>'
					].join(''),
					iconCaption: '<?=$arResult["PROPERTIES"]["ADDRESS"]["VALUE"]?>'
				}, {
					preset: 'islands#blueDotIconWithCaption'
				}));
		</script><?
	}
	?>
	<?if( !empty($arResult["DETAIL_TEXT"]) )
	{
		?><p>
			<?=$arResult["DETAIL_TEXT"];?>
		</p><?
	}
?></div>
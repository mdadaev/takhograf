<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="capabilities-windows">
    <div class="row capabilities-windows__flex">
        <?if($arResult['PREVIEW_PICTURE']["RESIZE"]){?>
            <div class="col-sm-4 col-xs-12 capabilities-windows__logo-wrap <?=$arResult['PREVIEW_PICTURE']["RESIZE"]['NO_ZOOM'] == "Y" ? 'no-zoom' : ''?>">
                <img class="capabilities__img capabilities-windows__biglogo" src="<?= $arResult['PREVIEW_PICTURE']["RESIZE"]['src'] ?>" alt=""/>
            </div>
        <?}?>

        <div class="col-sm-8 col-xs-12 capabilities-windows__flexc">
            <p><?= $arResult['~DETAIL_TEXT'] ?></p>
        </div>
    </div>
    <div class="row capabilities-windows__pics-wrap">
        <?foreach($arResult['PHOTO'] as $arPhoto){?>
            <div class="col-xs-6 col-sm-3" >
                <a href="<?=$arPhoto['src']?>" class="image-popup-no-margins">
                    <img class="capabilities-windows__pic"  src="<?=$arPhoto['resize_src']?>" alt="">
                </a>
            </div>
        <?}?>
    </div>
</div>

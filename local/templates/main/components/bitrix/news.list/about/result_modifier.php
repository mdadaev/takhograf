<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as &$arItem){
    if( !empty($arItem['PREVIEW_PICTURE']["SRC"]) ){
        $arItem['PREVIEW_PICTURE']["RESIZE"] = \CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']["ID"],array("width"=>$arParams["IMAGE_WIDTH"]*2,"height"=>$arParams["IMAGE_HEIGHT"]*2),BX_RESIZE_IMAGE_EXACT);
    }
}
unset($arItem);
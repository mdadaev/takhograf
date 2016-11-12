<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as &$arItem){
    if( !empty($arItem['DISPLAY_PROPERTIES']['PHOTO']['VALUE']) ){
        foreach($arItem['DISPLAY_PROPERTIES']['PHOTO']['VALUE'] as $fileId){
            $arFile = \CFile::GetFileArray($fileId);
            $arItem['PHOTOS'][] = $arFile['SRC'];
        }
    }
}
unset($arItem);
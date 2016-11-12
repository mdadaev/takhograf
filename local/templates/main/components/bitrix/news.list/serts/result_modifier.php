<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as &$arItem){
    if( !empty($arItem['DISPLAY_PROPERTIES']['ADDITIONAL_PHOTO']['VALUE']) ){
        foreach($arItem['DISPLAY_PROPERTIES']['ADDITIONAL_PHOTO']['VALUE'] as $fileId){
            $arFile = \CFile::GetFileArray($fileId);
            $arItem['ADDITIONAL_PHOTO'][] = $arFile['SRC'];
        }
    }
}
unset($arItem);
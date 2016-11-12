<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult['PREVIEW_PICTURE'])) {
    //$arResult['PREVIEW_PICTURE']["RESIZE"] = \CFile::ResizeImageGet($arResult['PREVIEW_PICTURE']["ID"], array("width" => $arParams["IMAGE_WIDTH"] * 2, "height" => $arParams["IMAGE_HEIGHT"] * 2), BX_RESIZE_IMAGE_EXACT);
    $arResult['PREVIEW_PICTURE']["RESIZE"]["src"] = $arResult['PREVIEW_PICTURE']["SRC"];
}
else {
    $arResult['PREVIEW_PICTURE']["RESIZE"] = array(
        'src' => $arResult['DISPLAY_PROPERTIES']['ICON_PATH']['VALUE']
    );
    $arResult['PREVIEW_PICTURE']["RESIZE"]['NO_ZOOM'] = "Y";
}

if (!empty($arResult['DISPLAY_PROPERTIES']['PHOTO']['VALUE'])) {
    foreach ($arResult['DISPLAY_PROPERTIES']['PHOTO']['VALUE'] as $photo) {
        $photoResize = \CFile::ResizeImageGet($photo, array("width" => $arParams["IMAGE_WIDTH"] * 2, "height" => $arParams["IMAGE_HEIGHT"] * 2), BX_RESIZE_IMAGE_EXACT);
        $arResult["PHOTO"][] = array(
            'src' => \CFile::GetPath($photo),
            'resize_src' => $photoResize['src']
        );

    }

}


?>
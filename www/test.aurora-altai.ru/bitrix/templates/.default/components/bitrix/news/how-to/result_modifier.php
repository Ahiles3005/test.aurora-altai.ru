<?

if (is_array($arResult["ITEMS"])) {
    for ($i = 0; $i < count($arResult["ITEMS"]); $i++) {
        if (!$arResult["ITEMS"][$i]['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][0]['SRC']) {
            $tmp = $arResult["ITEMS"][$i]['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'];
            $arResult["ITEMS"][$i]['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'] = array();
            $arResult["ITEMS"][$i]['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][] = $tmp;
        }
    }

    for ($i = 0; $i < count($arResult["ITEMS"]); $i++) {
        for ($j = 0; $j < count($arResult["ITEMS"][$i]['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE']); $j++) {
            $arResult["ITEMS"][$i]['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$j] = CFile::ResizeImageGet($arResult["ITEMS"][$i]['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$j]['ID'], array('width' => 640, 'height' => 480), BX_RESIZE_IMAGE_PROPORTIONAL);
        }
    }

}


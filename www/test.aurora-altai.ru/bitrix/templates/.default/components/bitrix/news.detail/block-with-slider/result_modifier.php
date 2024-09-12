<?
for($j=0;$j<count($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE']);$j++){
	$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$j] = CFile::ResizeImageGet($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$j]['ID'], array('width'=>1080,'height'=>720), BX_RESIZE_IMAGE_EXACT/*BX_RESIZE_IMAGE_PROPORTIONAL*/);
}


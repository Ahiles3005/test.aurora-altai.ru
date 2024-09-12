<?
for($j=0;$j<count($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE']);$j++){
	$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$j]['PREVIEW'] = CFile::ResizeImageGet($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$j]['ID'], array('width'=>350,'height'=>504), BX_RESIZE_IMAGE_EXACT/*BX_RESIZE_IMAGE_PROPORTIONAL*/);
}
/*<pre><?print_r($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'])?></pre>

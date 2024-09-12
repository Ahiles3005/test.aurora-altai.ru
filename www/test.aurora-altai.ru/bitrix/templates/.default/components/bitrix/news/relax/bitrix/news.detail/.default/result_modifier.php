<?
$cp = $this->__component;
if(is_object($cp)){
	$cp->SetResultCacheKeys(array('DETAIL_PAGE_URL','IPROPERTY_VALUES','DISPLAY_PROPERTIES'));
}

if(!$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][0]['SRC'] && $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE']['SRC']){
	$tmp = $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'];
	$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'] = array();
	$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][] = $tmp;
}


for($j=0;$j<count($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE']);$j++){
	$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$j] = CFile::ResizeImageGet($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$j]['ID'], array('width'=>1080,'height'=>810), BX_RESIZE_IMAGE_EXACT);
}


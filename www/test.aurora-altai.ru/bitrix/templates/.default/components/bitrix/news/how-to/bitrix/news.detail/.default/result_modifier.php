<?
$cp = $this->__component;
if(is_object($cp)){	
	$cp->SetResultCacheKeys(array('DETAIL_PAGE_URL','IPROPERTY_VALUES','DISPLAY_PROPERTIES'));
}

if($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'] && !$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][0]['SRC']){
	$tmp = $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'];
	$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'] = array();
	$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][] = $tmp;
}

for($i=0;$i<count($arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'] ?? []);$i++){
	$FILE_ID = $arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$i]['ID'];
	$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$i] = CFile::ResizeImageGet($FILE_ID, array('width'=>1280,'height'=>900), BX_RESIZE_IMAGE_PROPORTIONAL);
	$arResult['DISPLAY_PROPERTIES']['PHOTOS']['FILE_VALUE'][$i]["PREVIEW"] = CFile::ResizeImageGet($FILE_ID, array('width'=>730,'height'=>487), BX_RESIZE_IMAGE_EXACT);
}

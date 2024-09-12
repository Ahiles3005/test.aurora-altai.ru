<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? /** @var array $arParams */ ?>
<? /** @var array $arResult */ ?>
<? /** @global CMain $APPLICATION */ ?>
<? /** @global CUser $USER */ ?>
<? /** @global CDatabase $DB */ ?>
<? /** @var CBitrixComponentTemplate $this */ ?>
<? /** @var string $templateName */ ?>
<? /** @var string $templateFile */ ?>
<? /** @var string $templateFolder */ ?>
<? /** @var string $componentPath */ ?>
<? /** @var CBitrixComponent $component */ ?>

<? $this->setFrameMode(true); ?>
<?php

$iblockId = $arParams['IBLOCK_ID'];
$elementId = $arResult['ID'];


$plainText = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'PLAIN_TEXT'))->Fetch();
$trainText = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'TRAIN_TEXT'))->Fetch();
$carText = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'CAR_TEXT'))->Fetch();
$plainText2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'PLAIN_TEXT_2'))->Fetch();
$trainText2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'TRAIN_TEXT_2'))->Fetch();
$carText2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'CAR_TEXT_2'))->Fetch();

$routeTypePlain = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'ROUTE_TYPE_PLAIN'))->Fetch();
$destinationTypePlain = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'DESTINATION_TIME_PLAIN'))->Fetch();
$pathPlain = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'PATH_PLAIN'))->Fetch();
$routeTypePlain2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'ROUTE_TYPE_PLAIN_2'))->Fetch();
$destinationTypePlain2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'DESTINATION_TIME_PLAIN_2'))->Fetch();
$pathPlain2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'PATH_PLAIN_2'))->Fetch();

$routeTypeTrain = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'ROUTE_TYPE_TRAIN'))->Fetch();
$destinationTypeTrain = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'DESTINATION_TIME_TRAIN'))->Fetch();
$pathTrain = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'PATH_TRAIN'))->Fetch();
$routeTypeTrain2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'ROUTE_TYPE_TRAIN_2'))->Fetch();
$destinationTypeTrain2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'DESTINATION_TIME_TRAIN_2'))->Fetch();
$pathTrain2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'PATH_TRAIN_2'))->Fetch();

$routeTypeCar = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'ROUTE_TYPE_CAR'))->Fetch();
$destinationTypeCar = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'DESTINATION_TIME_CAR'))->Fetch();
$pathCar = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'PATH_CAR'))->Fetch();
$routeTypeCar2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'ROUTE_TYPE_CAR_2'))->Fetch();
$destinationTypeCar2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'DESTINATION_TIME_CAR_2'))->Fetch();
$pathCar2 = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'PATH_CAR_2'))->Fetch();

$carPhoto = CIBlockElement::GetProperty($iblockId, $elementId, array(), array('CODE' => 'FILE_CAR'))->Fetch();
if ($carPhoto && $carPhoto['VALUE']) {
    $filePath = CFile::GetPath($carPhoto['VALUE']);
}
// var_dump($carText2);
// var_dump($trainText2);
// var_dump($plainText2);
// var_dump($routeTypeTrain2);
// var_dump($destinationTypeTrain2);
// var_dump($pathTrain2);
// var_dump($routeTypeCar2);
// var_dump($destinationTypeCar2);
// var_dump($pathCar2);
?>
<?php


// Получаем текущее значение H1 элемента
$h1Value = $arResult["NAME"]; // Предполагается, что NAME содержит значение H1
?>
<style>
    @media (min-width:360px) and (max-width:767.98px){
        .container .option__tab{
            flex-direction:column;
        }
        .container .way__description__item{
            flex-direction:column;
            padding:15px;
            gap:0px;
        }
        .option__tab .way__wrapper{
            width:100%;
            height:100%;
            padding:10px 0;
            flex-direction:column;
            align-items:stretch;
        }
        .way__description__item__content h3{
            text-align:center;
           
        }
        .way__description__item__content__details__text{
            width: 174px;
        }
        .container .way__description__item__route__number{
            margin:0 auto;
        }
        .menu h3{
            margin:0;
        }
        .option__tab .menu{
            display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 2;
    gap: 15px;
    padding: 25px;
        }
    }
	.detail-text{
		text-align:center;
	}
    .route__map{
        width:100%;
        height:100%;
    }
	.option__tab{
		display:flex;
		
	}
	.way__wrapper{
		width:75%;
height: 232px;
display:flex;
justify-content:center;
align-items:center;
background: #2C6570;
padding:70px 0;
box-shadow: 0px 0px 19.4px 18.6px rgba(0, 0, 0, 0.07) inset;
	}
	.way__item__image{
width: 133.08px;
height: 67px;
	}
	.way__item p{
		color:#fff;
	}
	.way__item{
		display:flex;
		flex-direction:column;
		align-items:center;
		gap:10px;
        padding: 20px;
		cursor: pointer;
	}
	.way__item.active {
        background: rgba(243, 180, 41, 0.81);
    }
    .way__menu{
        display:flex;
        flex-direction:column;
        list-style: none;
    padding: 5px;
    }
    .way__description{
        border-radius: 3px;
background: #FFF;
box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.13);
    }
    .way__description__item__route__number__icon{

    }
    .way__description__item__content__details{
        display:flex;
        gap:25px;
    }
    .way__description__item__content__details__text{
        display:flex;
        gap:10px;
    }
    .way__description__item{
        display:flex;
        gap:50px;
        margin: 50px 0;
    padding: 50px;
    position: relative;
    }
    .way__description__item__route__number{
        position: relative;
    }
    .way__description__item__route__number__text{
        color: #FFF;
font-size: 50px;
font-weight: 700;
line-height: 24px; /* 48% */
position: absolute;
    left: 14px;
    top: 21px;
    }
    .way__description__item__content{
        display: flex;
    flex-direction: column;
 gap:25px;
    }
    .detail-text p{
      text-align:left;
    }
	</style>
    <style>
    .route-cities__list {
        list-style: none;
        display:none;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        position:absolute;
        padding: 10px;
    width: 275px;
    }

    .route-cities__list.visible {
        display: block;
    }

    .route-cities__item {
        padding: 10px;
        border-bottom: 1px solid #eee;
    }

    .route-cities__link {
        text-decoration: none;
        color: #333;
    }
    .route-cities__title-link{
        color: #FFA500;
font-size: 14px;
text-decoration: underline dotted;
font-style: normal;
font-weight: 400;
line-height: 14px; /* 100% */
    }
    
.menu{
    padding: 0px 57px 0px 25px;
 
    background: #f4f4f4;
    color: #000;
}

</style>


	<div class="option__tab">
<div class="way__wrapper">
    <div class="way__item way__item__plain" data-way="PLAIN_TEXT">
        <img class="way__item__image" src="/dostavka/img/plain.png">
        <p>Самолётом</p>
    </div>
    <div class="way__item way__item__train" data-way="TRAIN_TEXT">
	<img class="way__item__image" src="/dostavka/img/train.png">
        <p>Поездом</p>
    </div>
    <div class="way__item way__item__car" data-way="CAR_TEXT">
	<img class="way__item__image" src="/dostavka/img/car.png">
        <p>Автомобилем</p>
    </div>
    <?php
$APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    array(
        "IBLOCK_TYPE" => "content", // Тип инфоблока
        "IBLOCK_ID" => "13",         // Идентификатор инфоблока
        "DEPTH_LEVEL" => "1",       // Уровень вложенности
        "CACHE_TYPE" => "A",        // Тип кеширования
        "CACHE_TIME" => "36000000", // Время кеширования (сек.)
        "CACHE_NOTES" => "",
        "MENU_CACHE_TYPE" => "A",   // Тип кеширования для меню
        "MENU_CACHE_TIME" => "36000000", // Время кеширования для меню (сек.)
        "MENU_CACHE_USE_GROUPS" => "Y",  // Учитывать права доступа
        "MENU_CACHE_GET_VARS" => "",     // Значимые переменные запроса
    )
);
?>
</div>

<div class="menu">
<h3>Другие города:</h3>
    <div class="route-cities__title">
        <span class="route-cities__title-label">Город отправления:</span>
        <div class="route-cities__title-inner">
            <a href="javascript:void(0)" class="route-cities__title-link js__route-cities-title"><?=$h1Value?></a>
            <div class="route-cities__list">
	<?
// Вывод выпадающего списка с другими элементами
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "how-to-list",
    array(
        "IBLOCK_ID" => 13,
        "NEWS_COUNT" => 99,
        "DISPLAY_BOTTOM_PAGER" => "N",
        "SEF_MODE" => "Y",
        "SEF_RULE" => "/dostavka/#ELEMENT_CODE#/",
        "SEF_FOLDER" => "/dostavka/",  // Укажите путь до страницы, на которой расположен компонент
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_NOTES" => "",
        "CACHE_GROUPS" => "Y",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "SORT_BY1" => "NAME",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
        "AJAX_OPTION_ADDITIONAL" => ""
        
    ),
    false
);?>
 </div>
 </div>
 </div>
</div>
</div>
<div class="way__description" id="way-description">
    <!-- Здесь будет отображаться текст -->
</div>
<? if ($arResult["DETAIL_TEXT"]): ?>
    <div class="detail-text">
        <?= $arResult["DETAIL_TEXT"]; ?>
    </div>
        
<? endif; ?>
<section class="sale-sec">
<div class="container">
	<div class="row">
		<div class="col-lg-12 title">
			<h2>Акции</h2>
		</div>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"action-list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "action-list",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"TITLE2",2=>"PHOTOS",3=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
 </section>
 <section class="news-sec">
<div class="container">
	<div class="row">
		<div class="col-lg-12 title">
			<h2>Новости</h2>
		</div>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news-list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"TITLE2",1=>"PHOTOS",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
 </section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Получаем все элементы с классом way__item
        const wayItems = document.querySelectorAll('.way__item');
        // Получаем блок для отображения текста
        const wayDescription = document.getElementById('way-description');

        const elementData = {
            PLAIN_TEXT: {
    ROUTE_TYPE: "<?= $routeTypePlain['VALUE_ENUM']?>",
    DESTINATION_TYPE: "<?= $destinationTypePlain['VALUE'] ?>",
    PATH: "<?= $pathPlain['VALUE'] ?>",
    TEXT: ` <?php echo html_entity_decode($plainText['VALUE']['TEXT']); ?>`,
    ROUTE_TYPE_2: "<?= $routeTypePlain2['VALUE_ENUM']?>",
    DESTINATION_TYPE_2: "<?= $destinationTypePlain2['VALUE'] ?>",
    PATH_2: "<?= $pathPlain2['VALUE'] ?>",
    TEXT_2: ` <?php echo html_entity_decode($plainText2['VALUE']['TEXT']); ?>`,
    
},
TRAIN_TEXT: {
    ROUTE_TYPE: "<?= $routeTypeTrain['VALUE_ENUM']?>",
    DESTINATION_TYPE: "<?= $destinationTypeTrain['VALUE'] ?>",
    PATH: "<?= $pathTrain['VALUE'] ?>",
    TEXT: `<?php echo html_entity_decode($trainText['VALUE']['TEXT']); ?>`,
    ROUTE_TYPE_2: "<?= $routeTypeTrain2['VALUE_ENUM']?>",
    DESTINATION_TYPE_2: "<?= $destinationTypeTrain2['VALUE'] ?>",
    PATH_2: "<?= $pathTrain2['VALUE'] ?>",
    TEXT_2: `<?php echo html_entity_decode($trainText2['VALUE']['TEXT']); ?>`,
    
},
CAR_TEXT: {
    ROUTE_TYPE: "<?= $routeTypeCar['VALUE_ENUM']?>",
    DESTINATION_TYPE: "<?= $destinationTypeCar['VALUE'] ?>",
    PATH: "<?= $pathCar['VALUE'] ?>",
    TEXT: `<?php echo html_entity_decode($carText['VALUE']['TEXT']); ?>`,
    ROUTE_TYPE_2: "<?= $routeTypeCar2['VALUE_ENUM']?>",
    DESTINATION_TYPE_2: "<?= $destinationTypeCar2['VALUE'] ?>",
    PATH_2: "<?= $pathCar2['VALUE'] ?>",
    TEXT_2: `<?php echo html_entity_decode($carText2['VALUE']['TEXT']); ?>`,
 
    FILE: "<?=$filePath?>",
},

        };


        
          // Функция для установки активного класса и отображения информации
    function setActiveWay(selectedWay) {
        wayItems.forEach(function (item) {
            item.classList.remove('active');
        });
        

        const defaultItem = document.querySelector('.way__item[data-way="PLAIN_TEXT"]');
        defaultItem.classList.add('active');
        const imageHtml = selectedWay === 'CAR_TEXT' ? `<img class="route__map" src="${elementData[selectedWay].FILE}">` : '';
        const defaultWay = defaultItem.getAttribute('data-way');
        const selectedElementData = elementData[selectedWay];
        wayDescription.innerHTML = `
        ${imageHtml}
        <div class="way__description__item">
                <div class="way__description__item__route__number">
                <p class="way__description__item__route__number__text">01</p>
                <svg class="way__description__item__route__number__icon" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <circle cx="40" cy="40" r="40" fill="#FD952C"/>
</svg>
</div>
<div class="way__description__item__content">
                    <h3>${elementData[selectedWay].ROUTE_TYPE}</h3>
                  
            ${elementData[selectedWay].DESTINATION_TYPE || elementData[selectedWay].PATH ?
                `<div class="way__description__item__content__details">`
                    : ''}
                  
  ${elementData[selectedWay].DESTINATION_TYPE ?
    `<div class="way__description__item__content__details__text">
       <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
         <path d="M15 2.8125C12.5895 2.8125 10.2332 3.52728 8.22899 4.86646C6.22477 6.20564 4.66267 8.10907 3.74022 10.336C2.81778 12.563 2.57643 15.0135 3.04668 17.3777C3.51694 19.7418 4.67769 21.9134 6.38214 23.6179C8.08659 25.3223 10.2582 26.4831 12.6223 26.9533C14.9865 27.4236 17.437 27.1822 19.664 26.2598C21.8909 25.3373 23.7944 23.7752 25.1335 21.771C26.4727 19.7668 27.1875 17.4105 27.1875 15C27.1841 11.7687 25.899 8.67076 23.6141 6.3859C21.3292 4.10104 18.2313 2.81591 15 2.8125ZM15 25.3125C12.9604 25.3125 10.9666 24.7077 9.27069 23.5745C7.57481 22.4414 6.25303 20.8308 5.4725 18.9464C4.69197 17.0621 4.48775 14.9886 4.88566 12.9881C5.28357 10.9877 6.26574 9.15019 7.70797 7.70796C9.1502 6.26573 10.9877 5.28356 12.9881 4.88565C14.9886 4.48774 17.0621 4.69196 18.9464 5.47249C20.8308 6.25302 22.4414 7.5748 23.5745 9.27068C24.7077 10.9666 25.3125 12.9604 25.3125 15C25.3094 17.7341 24.2219 20.3553 22.2886 22.2886C20.3553 24.2219 17.7341 25.3094 15 25.3125ZM22.5 15C22.5 15.2486 22.4012 15.4871 22.2254 15.6629C22.0496 15.8387 21.8111 15.9375 21.5625 15.9375H15C14.7514 15.9375 14.5129 15.8387 14.3371 15.6629C14.1613 15.4871 14.0625 15.2486 14.0625 15V8.4375C14.0625 8.18886 14.1613 7.9504 14.3371 7.77459C14.5129 7.59877 14.7514 7.5 15 7.5C15.2486 7.5 15.4871 7.59877 15.6629 7.77459C15.8387 7.9504 15.9375 8.18886 15.9375 8.4375V14.0625H21.5625C21.8111 14.0625 22.0496 14.1613 22.2254 14.3371C22.4012 14.5129 22.5 14.7514 22.5 15Z" fill="#FD952C"/>
       </svg>
       <div class="way__description__item__content__details__text__column">Общее время пути: 
         <p>${elementData[selectedWay].DESTINATION_TYPE}</p>
       </div>
     </div>` : ''}
     
  ${elementData[selectedWay].PATH ?
    `<div class="way__description__item__content__details__text">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <g clip-path="url(#clip0_11_2074)">
    <path d="M19.705 5C20.4013 5.00002 21.0839 5.19392 21.6762 5.55996C22.2685 5.926 22.7473 6.44974 23.0588 7.0725L24.7875 10.5288C25.0925 10.4038 25.3962 10.2775 25.6912 10.1312C25.988 9.98306 26.3314 9.95881 26.646 10.0638C26.9606 10.1688 27.2206 10.3945 27.3687 10.6913C27.5169 10.988 27.5412 11.3314 27.4362 11.646C27.3312 11.9606 27.1055 12.2206 26.8088 12.3688C26.1912 12.6763 25.9087 12.7712 25.9087 12.7712L27.1038 15.1625C27.365 15.6838 27.5 16.2575 27.5 16.84V20C27.5008 20.5277 27.3898 21.0496 27.1743 21.5314C26.9589 22.0131 26.6439 22.4438 26.25 22.795V24.375C26.25 24.8723 26.0525 25.3492 25.7008 25.7008C25.3492 26.0525 24.8723 26.25 24.375 26.25C23.8777 26.25 23.4008 26.0525 23.0492 25.7008C22.6975 25.3492 22.5 24.8723 22.5 24.375V23.75H7.5V24.375C7.5 24.8723 7.30246 25.3492 6.95083 25.7008C6.59919 26.0525 6.12228 26.25 5.625 26.25C5.12772 26.25 4.65081 26.0525 4.29917 25.7008C3.94754 25.3492 3.75 24.8723 3.75 24.375V22.795C2.9825 22.1075 2.5 21.11 2.5 20V16.84C2.50023 16.2581 2.63589 15.6842 2.89625 15.1637L4.09125 12.7712C3.78849 12.6457 3.48921 12.5119 3.19375 12.37C3.04641 12.2969 2.91495 12.1954 2.80689 12.0714C2.69884 11.9474 2.61632 11.8033 2.56406 11.6474C2.51181 11.4914 2.49084 11.3267 2.50237 11.1626C2.5139 10.9985 2.5577 10.8384 2.63125 10.6913C2.78271 10.3961 3.04417 10.1723 3.35919 10.0682C3.6742 9.96417 4.01751 9.98815 4.315 10.135C4.60875 10.2775 4.91 10.4063 5.2125 10.5288L6.94125 7.0725C7.25273 6.44974 7.73146 5.926 8.32379 5.55996C8.91613 5.19392 9.59869 5.00002 10.295 5H19.705ZM23.5425 13.63C21.4175 14.3013 18.3938 15 15 15C11.6063 15 8.5825 14.3 6.4575 13.63L5.1325 16.28C5.04538 16.4538 5.00001 16.6456 5 16.84V20C5 20.3315 5.1317 20.6495 5.36612 20.8839C5.60054 21.1183 5.91848 21.25 6.25 21.25H23.75C24.0815 21.25 24.3995 21.1183 24.6339 20.8839C24.8683 20.6495 25 20.3315 25 20V16.84C24.9998 16.646 24.9544 16.4547 24.8675 16.2812L23.5425 13.63ZM9.375 16.25C9.87228 16.25 10.3492 16.4475 10.7008 16.7992C11.0525 17.1508 11.25 17.6277 11.25 18.125C11.25 18.6223 11.0525 19.0992 10.7008 19.4508C10.3492 19.8025 9.87228 20 9.375 20C8.87772 20 8.4008 19.8025 8.04917 19.4508C7.69754 19.0992 7.5 18.6223 7.5 18.125C7.5 17.6277 7.69754 17.1508 8.04917 16.7992C8.4008 16.4475 8.87772 16.25 9.375 16.25ZM20.625 16.25C21.1223 16.25 21.5992 16.4475 21.9508 16.7992C22.3025 17.1508 22.5 17.6277 22.5 18.125C22.5 18.6223 22.3025 19.0992 21.9508 19.4508C21.5992 19.8025 21.1223 20 20.625 20C20.1277 20 19.6508 19.8025 19.2992 19.4508C18.9475 19.0992 18.75 18.6223 18.75 18.125C18.75 17.6277 18.9475 17.1508 19.2992 16.7992C19.6508 16.4475 20.1277 16.25 20.625 16.25ZM19.705 7.5H10.295C10.0629 7.50012 9.83546 7.56485 9.63809 7.68694C9.44072 7.80903 9.28124 7.98365 9.1775 8.19125L7.59 11.3625C9.525 11.9438 12.1325 12.5 15 12.5C17.8675 12.5 20.475 11.9438 22.4088 11.3625L20.8225 8.19125C20.7188 7.98365 20.5593 7.80903 20.3619 7.68694C20.1645 7.56485 19.9371 7.50012 19.705 7.5Z" fill="#FD952C"/>
  </g>
  <defs>
    <clipPath id="clip0_11_2074">
      <rect width="30" height="30" fill="white"/>
    </clipPath>
  </defs>
</svg>
         <div class="way__description__item__content__details__text__column">Расстояние
           <p>${elementData[selectedWay].PATH}</p>  
         </div>
       </div>` : ''}
       
                ${elementData[selectedWay].DESTINATION_TYPE || elementData[selectedWay].PATH ?
                    `</div>`
                    : ''}
  
                   
                    
                    <p>${elementData[selectedWay].TEXT}</p>
                    </div>
                    </div>
                    
        `;
         // Additional block
 if (elementData[selectedWay].ROUTE_TYPE_2) {
            const additionalBlock = document.createElement('div');
          
            additionalBlock.classList.add('way__description__item');
        


            additionalBlock.innerHTML = `
        
                <div class="way__description__item__route__number">
                <p class="way__description__item__route__number__text">02</p>
                <svg class="way__description__item__route__number__icon" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <circle cx="40" cy="40" r="40" fill="#FD952C"/>
</svg>
</div>
<div class="way__description__item__content">
                    <h3>${elementData[selectedWay].ROUTE_TYPE_2}</h3>
                   
                   
            ${elementData[selectedWay].DESTINATION_TYPE_2 || elementData[selectedWay].PATH_2 ?
                `<div class="way__description__item__content__details">`
                    : ''}
                    
  ${elementData[selectedWay].DESTINATION_TYPE_2 ?
    `<div class="way__description__item__content__details__text">
       <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
         <path d="M15 2.8125C12.5895 2.8125 10.2332 3.52728 8.22899 4.86646C6.22477 6.20564 4.66267 8.10907 3.74022 10.336C2.81778 12.563 2.57643 15.0135 3.04668 17.3777C3.51694 19.7418 4.67769 21.9134 6.38214 23.6179C8.08659 25.3223 10.2582 26.4831 12.6223 26.9533C14.9865 27.4236 17.437 27.1822 19.664 26.2598C21.8909 25.3373 23.7944 23.7752 25.1335 21.771C26.4727 19.7668 27.1875 17.4105 27.1875 15C27.1841 11.7687 25.899 8.67076 23.6141 6.3859C21.3292 4.10104 18.2313 2.81591 15 2.8125ZM15 25.3125C12.9604 25.3125 10.9666 24.7077 9.27069 23.5745C7.57481 22.4414 6.25303 20.8308 5.4725 18.9464C4.69197 17.0621 4.48775 14.9886 4.88566 12.9881C5.28357 10.9877 6.26574 9.15019 7.70797 7.70796C9.1502 6.26573 10.9877 5.28356 12.9881 4.88565C14.9886 4.48774 17.0621 4.69196 18.9464 5.47249C20.8308 6.25302 22.4414 7.5748 23.5745 9.27068C24.7077 10.9666 25.3125 12.9604 25.3125 15C25.3094 17.7341 24.2219 20.3553 22.2886 22.2886C20.3553 24.2219 17.7341 25.3094 15 25.3125ZM22.5 15C22.5 15.2486 22.4012 15.4871 22.2254 15.6629C22.0496 15.8387 21.8111 15.9375 21.5625 15.9375H15C14.7514 15.9375 14.5129 15.8387 14.3371 15.6629C14.1613 15.4871 14.0625 15.2486 14.0625 15V8.4375C14.0625 8.18886 14.1613 7.9504 14.3371 7.77459C14.5129 7.59877 14.7514 7.5 15 7.5C15.2486 7.5 15.4871 7.59877 15.6629 7.77459C15.8387 7.9504 15.9375 8.18886 15.9375 8.4375V14.0625H21.5625C21.8111 14.0625 22.0496 14.1613 22.2254 14.3371C22.4012 14.5129 22.5 14.7514 22.5 15Z" fill="#FD952C"/>
       </svg>
       <div class="way__description__item__content__details__text__column">Общее время пути: 
       ${elementData[selectedWay].DESTINATION_TYPE_2 ? `<p>${elementData[selectedWay].DESTINATION_TYPE_2}</p>` : ''}
       </div>
     </div>` : ''}
                 
  ${elementData[selectedWay].PATH_2 ?
    `<div class="way__description__item__content__details__text">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <g clip-path="url(#clip0_11_2074)">
    <path d="M19.705 5C20.4013 5.00002 21.0839 5.19392 21.6762 5.55996C22.2685 5.926 22.7473 6.44974 23.0588 7.0725L24.7875 10.5288C25.0925 10.4038 25.3962 10.2775 25.6912 10.1312C25.988 9.98306 26.3314 9.95881 26.646 10.0638C26.9606 10.1688 27.2206 10.3945 27.3687 10.6913C27.5169 10.988 27.5412 11.3314 27.4362 11.646C27.3312 11.9606 27.1055 12.2206 26.8088 12.3688C26.1912 12.6763 25.9087 12.7712 25.9087 12.7712L27.1038 15.1625C27.365 15.6838 27.5 16.2575 27.5 16.84V20C27.5008 20.5277 27.3898 21.0496 27.1743 21.5314C26.9589 22.0131 26.6439 22.4438 26.25 22.795V24.375C26.25 24.8723 26.0525 25.3492 25.7008 25.7008C25.3492 26.0525 24.8723 26.25 24.375 26.25C23.8777 26.25 23.4008 26.0525 23.0492 25.7008C22.6975 25.3492 22.5 24.8723 22.5 24.375V23.75H7.5V24.375C7.5 24.8723 7.30246 25.3492 6.95083 25.7008C6.59919 26.0525 6.12228 26.25 5.625 26.25C5.12772 26.25 4.65081 26.0525 4.29917 25.7008C3.94754 25.3492 3.75 24.8723 3.75 24.375V22.795C2.9825 22.1075 2.5 21.11 2.5 20V16.84C2.50023 16.2581 2.63589 15.6842 2.89625 15.1637L4.09125 12.7712C3.78849 12.6457 3.48921 12.5119 3.19375 12.37C3.04641 12.2969 2.91495 12.1954 2.80689 12.0714C2.69884 11.9474 2.61632 11.8033 2.56406 11.6474C2.51181 11.4914 2.49084 11.3267 2.50237 11.1626C2.5139 10.9985 2.5577 10.8384 2.63125 10.6913C2.78271 10.3961 3.04417 10.1723 3.35919 10.0682C3.6742 9.96417 4.01751 9.98815 4.315 10.135C4.60875 10.2775 4.91 10.4063 5.2125 10.5288L6.94125 7.0725C7.25273 6.44974 7.73146 5.926 8.32379 5.55996C8.91613 5.19392 9.59869 5.00002 10.295 5H19.705ZM23.5425 13.63C21.4175 14.3013 18.3938 15 15 15C11.6063 15 8.5825 14.3 6.4575 13.63L5.1325 16.28C5.04538 16.4538 5.00001 16.6456 5 16.84V20C5 20.3315 5.1317 20.6495 5.36612 20.8839C5.60054 21.1183 5.91848 21.25 6.25 21.25H23.75C24.0815 21.25 24.3995 21.1183 24.6339 20.8839C24.8683 20.6495 25 20.3315 25 20V16.84C24.9998 16.646 24.9544 16.4547 24.8675 16.2812L23.5425 13.63ZM9.375 16.25C9.87228 16.25 10.3492 16.4475 10.7008 16.7992C11.0525 17.1508 11.25 17.6277 11.25 18.125C11.25 18.6223 11.0525 19.0992 10.7008 19.4508C10.3492 19.8025 9.87228 20 9.375 20C8.87772 20 8.4008 19.8025 8.04917 19.4508C7.69754 19.0992 7.5 18.6223 7.5 18.125C7.5 17.6277 7.69754 17.1508 8.04917 16.7992C8.4008 16.4475 8.87772 16.25 9.375 16.25ZM20.625 16.25C21.1223 16.25 21.5992 16.4475 21.9508 16.7992C22.3025 17.1508 22.5 17.6277 22.5 18.125C22.5 18.6223 22.3025 19.0992 21.9508 19.4508C21.5992 19.8025 21.1223 20 20.625 20C20.1277 20 19.6508 19.8025 19.2992 19.4508C18.9475 19.0992 18.75 18.6223 18.75 18.125C18.75 17.6277 18.9475 17.1508 19.2992 16.7992C19.6508 16.4475 20.1277 16.25 20.625 16.25ZM19.705 7.5H10.295C10.0629 7.50012 9.83546 7.56485 9.63809 7.68694C9.44072 7.80903 9.28124 7.98365 9.1775 8.19125L7.59 11.3625C9.525 11.9438 12.1325 12.5 15 12.5C17.8675 12.5 20.475 11.9438 22.4088 11.3625L20.8225 8.19125C20.7188 7.98365 20.5593 7.80903 20.3619 7.68694C20.1645 7.56485 19.9371 7.50012 19.705 7.5Z" fill="#FD952C"/>
  </g>
  <defs>
    <clipPath id="clip0_11_2074">
      <rect width="30" height="30" fill="white"/>
    </clipPath>
  </defs>
</svg>
         <div class="way__description__item__content__details__text__column">Расстояние
         ${elementData[selectedWay].PATH_2 ? `<p>${elementData[selectedWay].PATH_2}</p>` : ''}
         </div>
       </div>` : ''}
      
                ${elementData[selectedWay].DESTINATION_TYPE_2 || elementData[selectedWay].PATH_2 ?
                    `</div>`
                    : ''}
  
                    
                   
                    <p>${elementData[selectedWay].TEXT_2}</p>
                    </div>
                   
            `;

            wayDescription.appendChild(additionalBlock);
    }

        }
       
    // Вызываем функцию для установки активного класса и отображения информации при загрузке страницы
    setActiveWay('PLAIN_TEXT');
        // Добавляем обработчик событий для каждого элемента
        wayItems.forEach(function (item) {
            item.addEventListener('click', function () {
                // Убираем класс активности со всех элементов
                wayItems.forEach(function (element) {
                    element.classList.remove('active');
                });

                // Добавляем класс активности к выбранному элементу
                item.classList.add('active');

                // Получаем значение атрибута data-way
                const selectedWay = item.getAttribute('data-way');
                const imageHtml = selectedWay === 'CAR_TEXT' ? `<img class="route__map" src="${elementData[selectedWay].FILE}">` : '';
                // В зависимости от выбранного пути меняем текст
                wayDescription.innerHTML = `
                ${imageHtml}
                <div class="way__description__item">
                <div class="way__description__item__route__number">
                <p class="way__description__item__route__number__text">01</p>
                <svg class="way__description__item__route__number__icon" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <circle cx="40" cy="40" r="40" fill="#FD952C"/>
</svg>
</div>
<div class="way__description__item__content">
                    <h3>${elementData[selectedWay].ROUTE_TYPE}</h3>
                   
                   
            ${elementData[selectedWay].DESTINATION_TYPE || elementData[selectedWay].PATH ?
                `<div class="way__description__item__content__details">`
                    : ''}
                    
  ${elementData[selectedWay].DESTINATION_TYPE ?
    `<div class="way__description__item__content__details__text">
       <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
         <path d="M15 2.8125C12.5895 2.8125 10.2332 3.52728 8.22899 4.86646C6.22477 6.20564 4.66267 8.10907 3.74022 10.336C2.81778 12.563 2.57643 15.0135 3.04668 17.3777C3.51694 19.7418 4.67769 21.9134 6.38214 23.6179C8.08659 25.3223 10.2582 26.4831 12.6223 26.9533C14.9865 27.4236 17.437 27.1822 19.664 26.2598C21.8909 25.3373 23.7944 23.7752 25.1335 21.771C26.4727 19.7668 27.1875 17.4105 27.1875 15C27.1841 11.7687 25.899 8.67076 23.6141 6.3859C21.3292 4.10104 18.2313 2.81591 15 2.8125ZM15 25.3125C12.9604 25.3125 10.9666 24.7077 9.27069 23.5745C7.57481 22.4414 6.25303 20.8308 5.4725 18.9464C4.69197 17.0621 4.48775 14.9886 4.88566 12.9881C5.28357 10.9877 6.26574 9.15019 7.70797 7.70796C9.1502 6.26573 10.9877 5.28356 12.9881 4.88565C14.9886 4.48774 17.0621 4.69196 18.9464 5.47249C20.8308 6.25302 22.4414 7.5748 23.5745 9.27068C24.7077 10.9666 25.3125 12.9604 25.3125 15C25.3094 17.7341 24.2219 20.3553 22.2886 22.2886C20.3553 24.2219 17.7341 25.3094 15 25.3125ZM22.5 15C22.5 15.2486 22.4012 15.4871 22.2254 15.6629C22.0496 15.8387 21.8111 15.9375 21.5625 15.9375H15C14.7514 15.9375 14.5129 15.8387 14.3371 15.6629C14.1613 15.4871 14.0625 15.2486 14.0625 15V8.4375C14.0625 8.18886 14.1613 7.9504 14.3371 7.77459C14.5129 7.59877 14.7514 7.5 15 7.5C15.2486 7.5 15.4871 7.59877 15.6629 7.77459C15.8387 7.9504 15.9375 8.18886 15.9375 8.4375V14.0625H21.5625C21.8111 14.0625 22.0496 14.1613 22.2254 14.3371C22.4012 14.5129 22.5 14.7514 22.5 15Z" fill="#FD952C"/>
       </svg>
       <div class="way__description__item__content__details__text__column">Общее время пути: 
         <p>${elementData[selectedWay].DESTINATION_TYPE}</p>
       </div>
     </div>` : ''}
   
  ${elementData[selectedWay].PATH ?
    `<div class="way__description__item__content__details__text">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <g clip-path="url(#clip0_11_2074)">
    <path d="M19.705 5C20.4013 5.00002 21.0839 5.19392 21.6762 5.55996C22.2685 5.926 22.7473 6.44974 23.0588 7.0725L24.7875 10.5288C25.0925 10.4038 25.3962 10.2775 25.6912 10.1312C25.988 9.98306 26.3314 9.95881 26.646 10.0638C26.9606 10.1688 27.2206 10.3945 27.3687 10.6913C27.5169 10.988 27.5412 11.3314 27.4362 11.646C27.3312 11.9606 27.1055 12.2206 26.8088 12.3688C26.1912 12.6763 25.9087 12.7712 25.9087 12.7712L27.1038 15.1625C27.365 15.6838 27.5 16.2575 27.5 16.84V20C27.5008 20.5277 27.3898 21.0496 27.1743 21.5314C26.9589 22.0131 26.6439 22.4438 26.25 22.795V24.375C26.25 24.8723 26.0525 25.3492 25.7008 25.7008C25.3492 26.0525 24.8723 26.25 24.375 26.25C23.8777 26.25 23.4008 26.0525 23.0492 25.7008C22.6975 25.3492 22.5 24.8723 22.5 24.375V23.75H7.5V24.375C7.5 24.8723 7.30246 25.3492 6.95083 25.7008C6.59919 26.0525 6.12228 26.25 5.625 26.25C5.12772 26.25 4.65081 26.0525 4.29917 25.7008C3.94754 25.3492 3.75 24.8723 3.75 24.375V22.795C2.9825 22.1075 2.5 21.11 2.5 20V16.84C2.50023 16.2581 2.63589 15.6842 2.89625 15.1637L4.09125 12.7712C3.78849 12.6457 3.48921 12.5119 3.19375 12.37C3.04641 12.2969 2.91495 12.1954 2.80689 12.0714C2.69884 11.9474 2.61632 11.8033 2.56406 11.6474C2.51181 11.4914 2.49084 11.3267 2.50237 11.1626C2.5139 10.9985 2.5577 10.8384 2.63125 10.6913C2.78271 10.3961 3.04417 10.1723 3.35919 10.0682C3.6742 9.96417 4.01751 9.98815 4.315 10.135C4.60875 10.2775 4.91 10.4063 5.2125 10.5288L6.94125 7.0725C7.25273 6.44974 7.73146 5.926 8.32379 5.55996C8.91613 5.19392 9.59869 5.00002 10.295 5H19.705ZM23.5425 13.63C21.4175 14.3013 18.3938 15 15 15C11.6063 15 8.5825 14.3 6.4575 13.63L5.1325 16.28C5.04538 16.4538 5.00001 16.6456 5 16.84V20C5 20.3315 5.1317 20.6495 5.36612 20.8839C5.60054 21.1183 5.91848 21.25 6.25 21.25H23.75C24.0815 21.25 24.3995 21.1183 24.6339 20.8839C24.8683 20.6495 25 20.3315 25 20V16.84C24.9998 16.646 24.9544 16.4547 24.8675 16.2812L23.5425 13.63ZM9.375 16.25C9.87228 16.25 10.3492 16.4475 10.7008 16.7992C11.0525 17.1508 11.25 17.6277 11.25 18.125C11.25 18.6223 11.0525 19.0992 10.7008 19.4508C10.3492 19.8025 9.87228 20 9.375 20C8.87772 20 8.4008 19.8025 8.04917 19.4508C7.69754 19.0992 7.5 18.6223 7.5 18.125C7.5 17.6277 7.69754 17.1508 8.04917 16.7992C8.4008 16.4475 8.87772 16.25 9.375 16.25ZM20.625 16.25C21.1223 16.25 21.5992 16.4475 21.9508 16.7992C22.3025 17.1508 22.5 17.6277 22.5 18.125C22.5 18.6223 22.3025 19.0992 21.9508 19.4508C21.5992 19.8025 21.1223 20 20.625 20C20.1277 20 19.6508 19.8025 19.2992 19.4508C18.9475 19.0992 18.75 18.6223 18.75 18.125C18.75 17.6277 18.9475 17.1508 19.2992 16.7992C19.6508 16.4475 20.1277 16.25 20.625 16.25ZM19.705 7.5H10.295C10.0629 7.50012 9.83546 7.56485 9.63809 7.68694C9.44072 7.80903 9.28124 7.98365 9.1775 8.19125L7.59 11.3625C9.525 11.9438 12.1325 12.5 15 12.5C17.8675 12.5 20.475 11.9438 22.4088 11.3625L20.8225 8.19125C20.7188 7.98365 20.5593 7.80903 20.3619 7.68694C20.1645 7.56485 19.9371 7.50012 19.705 7.5Z" fill="#FD952C"/>
  </g>
  <defs>
    <clipPath id="clip0_11_2074">
      <rect width="30" height="30" fill="white"/>
    </clipPath>
  </defs>
</svg>
         <div class="way__description__item__content__details__text__column">Расстояние
           <p>${elementData[selectedWay].PATH}</p>  
         </div>
       </div>` : ''}
  
                    
      
                ${elementData[selectedWay].DESTINATION_TYPE || elementData[selectedWay].PATH ?
                    `</div>`
                    : ''}
                    <p>${elementData[selectedWay].TEXT}</p>
                    </div>
                    </div>
                `;
         // Additional block
 if (elementData[selectedWay].ROUTE_TYPE_2) {
            const additionalBlock = document.createElement('div');
            additionalBlock.classList.add('way__description__item');
            

            additionalBlock.innerHTML = `
        
                <div class="way__description__item__route__number">
                <p class="way__description__item__route__number__text">02</p>
                <svg class="way__description__item__route__number__icon" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
  <circle cx="40" cy="40" r="40" fill="#FD952C"/>
</svg>
</div>
<div class="way__description__item__content">
                    <h3>${elementData[selectedWay].ROUTE_TYPE_2}</h3>
                   
                   
            ${elementData[selectedWay].DESTINATION_TYPE || elementData[selectedWay].PATH ?
                `<div class="way__description__item__content__details">`
                    : ''}
                    
  ${elementData[selectedWay].DESTINATION_TYPE_2 ?
    `<div class="way__description__item__content__details__text">
       <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
         <path d="M15 2.8125C12.5895 2.8125 10.2332 3.52728 8.22899 4.86646C6.22477 6.20564 4.66267 8.10907 3.74022 10.336C2.81778 12.563 2.57643 15.0135 3.04668 17.3777C3.51694 19.7418 4.67769 21.9134 6.38214 23.6179C8.08659 25.3223 10.2582 26.4831 12.6223 26.9533C14.9865 27.4236 17.437 27.1822 19.664 26.2598C21.8909 25.3373 23.7944 23.7752 25.1335 21.771C26.4727 19.7668 27.1875 17.4105 27.1875 15C27.1841 11.7687 25.899 8.67076 23.6141 6.3859C21.3292 4.10104 18.2313 2.81591 15 2.8125ZM15 25.3125C12.9604 25.3125 10.9666 24.7077 9.27069 23.5745C7.57481 22.4414 6.25303 20.8308 5.4725 18.9464C4.69197 17.0621 4.48775 14.9886 4.88566 12.9881C5.28357 10.9877 6.26574 9.15019 7.70797 7.70796C9.1502 6.26573 10.9877 5.28356 12.9881 4.88565C14.9886 4.48774 17.0621 4.69196 18.9464 5.47249C20.8308 6.25302 22.4414 7.5748 23.5745 9.27068C24.7077 10.9666 25.3125 12.9604 25.3125 15C25.3094 17.7341 24.2219 20.3553 22.2886 22.2886C20.3553 24.2219 17.7341 25.3094 15 25.3125ZM22.5 15C22.5 15.2486 22.4012 15.4871 22.2254 15.6629C22.0496 15.8387 21.8111 15.9375 21.5625 15.9375H15C14.7514 15.9375 14.5129 15.8387 14.3371 15.6629C14.1613 15.4871 14.0625 15.2486 14.0625 15V8.4375C14.0625 8.18886 14.1613 7.9504 14.3371 7.77459C14.5129 7.59877 14.7514 7.5 15 7.5C15.2486 7.5 15.4871 7.59877 15.6629 7.77459C15.8387 7.9504 15.9375 8.18886 15.9375 8.4375V14.0625H21.5625C21.8111 14.0625 22.0496 14.1613 22.2254 14.3371C22.4012 14.5129 22.5 14.7514 22.5 15Z" fill="#FD952C"/>
       </svg>
       <div class="way__description__item__content__details__text__column">Общее время пути: 
       ${elementData[selectedWay].DESTINATION_TYPE_2 ? `<p>${elementData[selectedWay].DESTINATION_TYPE_2}</p>` : ''}
       </div>
     </div>` : ''}
                    
  ${elementData[selectedWay].PATH_2 ?
    `<div class="way__description__item__content__details__text">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
  <g clip-path="url(#clip0_11_2074)">
    <path d="M19.705 5C20.4013 5.00002 21.0839 5.19392 21.6762 5.55996C22.2685 5.926 22.7473 6.44974 23.0588 7.0725L24.7875 10.5288C25.0925 10.4038 25.3962 10.2775 25.6912 10.1312C25.988 9.98306 26.3314 9.95881 26.646 10.0638C26.9606 10.1688 27.2206 10.3945 27.3687 10.6913C27.5169 10.988 27.5412 11.3314 27.4362 11.646C27.3312 11.9606 27.1055 12.2206 26.8088 12.3688C26.1912 12.6763 25.9087 12.7712 25.9087 12.7712L27.1038 15.1625C27.365 15.6838 27.5 16.2575 27.5 16.84V20C27.5008 20.5277 27.3898 21.0496 27.1743 21.5314C26.9589 22.0131 26.6439 22.4438 26.25 22.795V24.375C26.25 24.8723 26.0525 25.3492 25.7008 25.7008C25.3492 26.0525 24.8723 26.25 24.375 26.25C23.8777 26.25 23.4008 26.0525 23.0492 25.7008C22.6975 25.3492 22.5 24.8723 22.5 24.375V23.75H7.5V24.375C7.5 24.8723 7.30246 25.3492 6.95083 25.7008C6.59919 26.0525 6.12228 26.25 5.625 26.25C5.12772 26.25 4.65081 26.0525 4.29917 25.7008C3.94754 25.3492 3.75 24.8723 3.75 24.375V22.795C2.9825 22.1075 2.5 21.11 2.5 20V16.84C2.50023 16.2581 2.63589 15.6842 2.89625 15.1637L4.09125 12.7712C3.78849 12.6457 3.48921 12.5119 3.19375 12.37C3.04641 12.2969 2.91495 12.1954 2.80689 12.0714C2.69884 11.9474 2.61632 11.8033 2.56406 11.6474C2.51181 11.4914 2.49084 11.3267 2.50237 11.1626C2.5139 10.9985 2.5577 10.8384 2.63125 10.6913C2.78271 10.3961 3.04417 10.1723 3.35919 10.0682C3.6742 9.96417 4.01751 9.98815 4.315 10.135C4.60875 10.2775 4.91 10.4063 5.2125 10.5288L6.94125 7.0725C7.25273 6.44974 7.73146 5.926 8.32379 5.55996C8.91613 5.19392 9.59869 5.00002 10.295 5H19.705ZM23.5425 13.63C21.4175 14.3013 18.3938 15 15 15C11.6063 15 8.5825 14.3 6.4575 13.63L5.1325 16.28C5.04538 16.4538 5.00001 16.6456 5 16.84V20C5 20.3315 5.1317 20.6495 5.36612 20.8839C5.60054 21.1183 5.91848 21.25 6.25 21.25H23.75C24.0815 21.25 24.3995 21.1183 24.6339 20.8839C24.8683 20.6495 25 20.3315 25 20V16.84C24.9998 16.646 24.9544 16.4547 24.8675 16.2812L23.5425 13.63ZM9.375 16.25C9.87228 16.25 10.3492 16.4475 10.7008 16.7992C11.0525 17.1508 11.25 17.6277 11.25 18.125C11.25 18.6223 11.0525 19.0992 10.7008 19.4508C10.3492 19.8025 9.87228 20 9.375 20C8.87772 20 8.4008 19.8025 8.04917 19.4508C7.69754 19.0992 7.5 18.6223 7.5 18.125C7.5 17.6277 7.69754 17.1508 8.04917 16.7992C8.4008 16.4475 8.87772 16.25 9.375 16.25ZM20.625 16.25C21.1223 16.25 21.5992 16.4475 21.9508 16.7992C22.3025 17.1508 22.5 17.6277 22.5 18.125C22.5 18.6223 22.3025 19.0992 21.9508 19.4508C21.5992 19.8025 21.1223 20 20.625 20C20.1277 20 19.6508 19.8025 19.2992 19.4508C18.9475 19.0992 18.75 18.6223 18.75 18.125C18.75 17.6277 18.9475 17.1508 19.2992 16.7992C19.6508 16.4475 20.1277 16.25 20.625 16.25ZM19.705 7.5H10.295C10.0629 7.50012 9.83546 7.56485 9.63809 7.68694C9.44072 7.80903 9.28124 7.98365 9.1775 8.19125L7.59 11.3625C9.525 11.9438 12.1325 12.5 15 12.5C17.8675 12.5 20.475 11.9438 22.4088 11.3625L20.8225 8.19125C20.7188 7.98365 20.5593 7.80903 20.3619 7.68694C20.1645 7.56485 19.9371 7.50012 19.705 7.5Z" fill="#FD952C"/>
  </g>
  <defs>
    <clipPath id="clip0_11_2074">
      <rect width="30" height="30" fill="white"/>
    </clipPath>
  </defs>
</svg>
         <div class="way__description__item__content__details__text__column">Расстояние
         ${elementData[selectedWay].PATH_2 ? `<p>${elementData[selectedWay].PATH_2}</p>` : ''}
         </div>
       </div>` : ''}
  
                    
      
                ${elementData[selectedWay].DESTINATION_TYPE_2 || elementData[selectedWay].PATH_2 ?
                    `</div>`
                    : ''}
                    <p>${elementData[selectedWay].TEXT_2}</p>
                    </div>
                    
            `;

            wayDescription.appendChild(additionalBlock);
    }
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const routeCitiesTitle = document.querySelector('.js__route-cities-title');
        const routeCitiesList = document.querySelector('.route-cities__list');

        routeCitiesTitle.addEventListener('click', function () {
            routeCitiesList.classList.toggle('visible');
        });

        // Закрываем меню при клике вне области меню
        document.addEventListener('click', function (event) {
            if (!routeCitiesTitle.contains(event.target) && !routeCitiesList.contains(event.target)) {
                routeCitiesList.classList.remove('visible');
            }
        });
    });
</script>

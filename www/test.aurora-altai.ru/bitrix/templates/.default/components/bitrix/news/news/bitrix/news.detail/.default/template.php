<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="">
	<section class="gallery-sec">
		<div class="justify-content-center text-center">
			<?/*if(count($arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'])>1){?>
				<div class="gallery-block owl-carousel content-page">
					<?foreach($arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'] as $arPhoto){?>
						<div class="item gallery-item w-75">
							<img alt="gallery" src="<?=$arPhoto['src']?>">
						</div>
					<?}?>
				</div>
<?}else*/{?>
			<div class="row">
				<div class="col-12 col-md-2"></div>
				<div class="col-12 col-md-8">
					<img alt="gallery" class="img-fluid" src="<?=$arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'][0]['src']?>">
				</div>
				<div class="col-12 col-md-2"></div>
			</div>
			<?}?>
		</div>
	</section> 
	<section class="my-4">
		<?if($arResult["DISPLAY_PROPERTIES"]['TITLE2']['VALUE']){?>
			<h2 class="mb-3"><?=$arResult["DISPLAY_PROPERTIES"]['TITLE2']['VALUE'];?></h2>
		<?}?>
		<?=$arResult["DETAIL_TEXT"];?>
		<div class="mt-2"><a href="<?=$arResult['LIST_PAGE_URL']?>">Перейти в раздел "Новости"</a></div>
	</section>

	<section class="news"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-12 news-title"> 
					<p>ДРУГИЕ НОВОСТИ</p> 
				</div> 
			</div>
			<?$APPLICATION->IncludeComponent("bitrix:news.list", "news-list", Array(
			"COMPONENT_TEMPLATE" => ".default",
				"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
				"IBLOCK_ID" => "5",	// Код информационного блока
				"NEWS_COUNT" => "10",	// Количество новостей на странице
				"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
				"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
				"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
				"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
				"FILTER_NAME" => "",	// Фильтр
				"FIELD_CODE" => array(	// Поля
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(	// Свойства
					0 => "TITLE2",
					1 => "PHOTOS",
					2 => "",
				),
				"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
				"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
				"CACHE_TYPE" => "A",	// Тип кеширования
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
				"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
				"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
				"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
				"PARENT_SECTION" => "",	// ID раздела
				"PARENT_SECTION_CODE" => "",	// Код раздела
				"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
				"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
				"DISPLAY_DATE" => "N",	// Выводить дату элемента
				"DISPLAY_NAME" => "Y",	// Выводить название элемента
				"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
				"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
				"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
				"PAGER_TITLE" => "Новости",	// Название категорий
				"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
				"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
				"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
				"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
				"SET_STATUS_404" => "N",	// Устанавливать статус 404
				"SHOW_404" => "N",	// Показ специальной страницы
				"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
			),
			false
		);?>
		</div> 
	</section>
</div>

<?/**?>
<pre><?print_r($arResult)?></pre>
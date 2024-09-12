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
<div class="container">
	<?if(count($arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'])){?>
<?php
$article = CIBlockElement::GetByID($arResult["ID"])->GetNextElement();
$creationDate = $article->GetFields()["DATE_CREATE"];
?>
<div>
	<?php
        if ($creationDate) {
            $formattedCreationDate = FormatDate("d.m.Y", MakeTimeStamp($creationDate)); // Форматируем дату
            ?>
            <div class="creation-date">Дата публикации: <?= $formattedCreationDate ?></div>
            <?php
        }
        ?>
	</div>
			<div>
				<img alt="gallery" class="img-fluid" src="<?=$arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'][0]['src']?>">
			</div>

	<?}?> 

	<section class="my-4">
		<?=$arResult["DETAIL_TEXT"];?>
<?php
// Получаем ID выбранного врача из свойства статьи
$authorId = $arResult['PROPERTIES']['ARTICLE_AUTHOR']['VALUE']; 

// Проверяем, что ID врача не пустой
if (!empty($authorId)) {
    // Получаем информацию о враче по его ID
    $arDoctor = [];
    $arFilter = array(
        'IBLOCK_ID' => 15,
        'ID' => $authorId,
        'ACTIVE' => 'Y', // Проверка на активность врача
    );
    $arSelect = array(
        'ID',
        'NAME',
        'PROPERTY_POSITION',
        'PROPERTY_EDUCATION',
        'PROPERTY_SPECIALIZATION',
        'PROPERTY_QUALIFICATION',
        'PROPERTY_CERTIFICATES',
 		'PREVIEW_PICTURE',
		'DETAIL_PAGE_URL',
    );

    $rsDoctor = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
    if ($arDoctor = $rsDoctor->GetNext()) {
?>
<h3>Автор статьи</h3>
    <div class="article__author__wrapper">

<div class="article__author__img">
            <?php if (!empty($arDoctor["PREVIEW_PICTURE"]) && is_array($arDoctor["PREVIEW_PICTURE"])): ?>
    <?php if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arDoctor["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
        <a href="<?= $arDoctor["DETAIL_PAGE_URL"] ?>">
            <img class="doctors__img" border="0" src="<?= $arDoctor["PREVIEW_PICTURE"]["SRC"] ?>"
                 alt="<?= $arDoctor["PREVIEW_PICTURE"]["ALT"] ?>"
                 title="<?= $arDoctor["PREVIEW_PICTURE"]["TITLE"] ?>"/>
        </a>
    <?php else: ?>
        <img class="doctors__img" border="0" src="<?= $arDoctor["PREVIEW_PICTURE"]["SRC"] ?>"
             alt="<?= $arDoctor["PREVIEW_PICTURE"]["ALT"] ?>"
             title="<?= $arDoctor["PREVIEW_PICTURE"]["TITLE"] ?>"/>
    <?php endif; ?>
<?php else: ?>
    <a href="<?= $arDoctor["DETAIL_PAGE_URL"] ?>">
        <img class="doctors__img" border="0"
             src="https://test.aurora-altai.ru/upload/medialibrary/e90/xurz3uzg9kg0ltofgvj91lwr0m9ghbqq/Rectangle-1.png"
             alt="Изображение по умолчанию" title="Изображение по умолчанию"/>
    </a>
<?php endif; ?>
</div>
<div class="article__author__content">
	<a href="<?= $arDoctor["DETAIL_PAGE_URL"] ?>"><?= $arDoctor['NAME'] ?></a>
        <p><strong>Должность:</strong> <?= $arDoctor['PROPERTY_POSITION_VALUE'] ?></p>
        <p><strong>Образование:</strong> <?= $arDoctor['PROPERTY_EDUCATION_VALUE'] ?></p>
        <p><strong>Специализация:</strong> <?= $arDoctor['PROPERTY_SPECIALIZATION_VALUE'] ?></p>
        <p><strong>Квалификация:</strong> <?= $arDoctor['PROPERTY_QUALIFICATION_VALUE'] ?></p>
</div>
    </div>
<?php
    } // закрытие условия проверки наличия данных о враче
} // закрытие условия проверки наличия ID врача
?>
<section>
<div class="profiles__title">
	<h2>Профили лечения</h2>
	<a class="all__profiles__link" href="/therapy/">Смотреть все</a>
</div>
<?/*Профили лечения*/?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"therapy-profile", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "therapy-profile",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
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
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PHOTOS",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
		</section>
 <section class="news-sec">
<div class="container article__buttons">
	<div class="row">
		<div class="col-lg-12 title">
			<h2>Читайте также</h2>
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
		<div class="my-3 text-right">
			<?//include($_SERVER['DOCUMENT_ROOT']."/book-module/include-book-form.php");?>
			<?/*<div class="tl-search-form" id="tl-search-form-1"></div>
			<sc ript>
				(function(w){ 
					var q=[ 
					  ['setContext', 'TL-INT-test.aurora-altai.ru', 'ru'], 
					  ['embed', 'search-form', {container: 'tl-search-form-1'}] 
					]; 
					var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q; 
					if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//www.travelline.ru/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);} 
				})(window); 
</sc ript>*/?>
		</div>
		<div class="mt-2"><a href="/resort/">Перейти в раздел "О курорте"</a></div>
	</section>

	<?/*
	<div class="row">
		<div class="d-none d-md-block col-md-2"></div>
		<div class="col-md-8">
			<h2>У вас есть вопросы?</h2>
			<fo rm id="addNewFeedback"  class="needs-validation" novalidate>
				<div class="form-group">
					<label for="nameInput">ФИО <span class="required">*</span></label>
					<input type="name" name="NAME" class="form-control" id="nameInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="nameInput">Город</label>
					<input type="name" name="CITY" class="form-control" id="cityInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="emailInput">Email или телефон</label>
					<input type="email" name="CONTACTS" class="form-control" id="emailInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="textareaInput">Текст вопроса <span class="required">*</span></label>
					<textarea class="form-control" name="TEXT" id="textareaInput" rows="5"></textarea>
				</div>
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" name="AGREEMENT" type="checkbox" value="Y" id="agreementCheck" checked>
						<label class="form-check-label" for="agreementCheck">
							Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в <a target="_blank" href="/about/agreement/">Согласии на обработку персональных данных</a>
						</label>
					</div>
				</div>
				<div class="form-group text-center">
					<div class="alert alert-danger d-none" role="alert"></div>
					<div class="alert alert-success d-none" role="alert"></div>
					<a href="#" class="button add-new-feedback-button"  oncl ick="gtag('event', 'submit');">Отправить</a>
				</div>
			</form>
		</div>
		<div class="d-none d-md-block col-md-2"></div>
	</div>
<?/**/?>
</div>

<script type="application/ld+json">
{
    	"@context": "http://schema.org/",
    	"@type": "Article",
    	"headline": "<?=$arResult['NAME']?>",
    	"image":"https://test.aurora-altai.ru<?=CFile::GetPath($arResult['PROPERTIES']['PHOTOS']['VALUE'][0])?>",
    	"description": "<?=$arResult['META_TAGS']['BROWSER_TITLE']?>",
    	"author": "Санаторий Аврора",
    	"publisher": {
           	"@type": "Organization",
           	"name": "test.aurora-altai.ru",
           	"url": "https://test.aurora-altai.ru",
           	"logo": {
                   	"@type": "ImageObject",
                   	"url": "https://test.aurora-altai.ru/bitrix/templates/template2022/images/logo.png"
           	}
    	},
    	"datepublished": "<?=$arResult['TIMESTAMP_X']?>",
    	"datemodified": "<?=$arResult['TIMESTAMP_X']?>",
    	"mainEntityOfPage": {
           	"@type": "WebPage",
           	"@id": "<?=$arResult['DETAIL_PAGE_URL']?>"
    	}
}
</script>



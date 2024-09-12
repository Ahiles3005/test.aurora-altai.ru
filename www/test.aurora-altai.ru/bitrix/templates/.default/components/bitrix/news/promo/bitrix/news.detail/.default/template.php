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
<div>
	<section class="gallery-sec">
		<div class="row ">
			<div class="col-lg-4"><img alt="gallery" class="img-fluid" src="<?=$arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'][0]['src']?>"></div>
			<div class="col-lg-8"><?=$arResult["DETAIL_TEXT"];?></div>
		</div>
	</section> 
	<section class="my-4">

<?/*
<div class="alert alert-danger">Бронирование временно приостановлено</div>
*/?>
		<?if($arResult['DISPLAY_PROPERTIES']['SHOW_BOOKING']['VALUE']=="Y"){?>
			<div class="my-3">
				<?//include($_SERVER['DOCUMENT_ROOT']."/book-module/include-book-form.php");?>
				<?/*<div class="tl-search-form" id="tl-search-form-1"></div>
					<script>
						(function(w){ 
							var q=[ 
							  ['setContext', 'TL-INT-test.aurora-altai.ru', 'ru'], 
							  ['embed', 'search-form', {container: 'tl-search-form-1'}] 
							]; 
							var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q; 
							if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//www.travelline.ru/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);} 
						})(window); 
					</script>
*/?>
			</div>
		<?}/**/?>
		<div class="mt-2"><a href="<?=$arResult['LIST_PAGE_URL']?>">Перейти в раздел "Акции"</a></div>
	</section>
	<?/*
	<div class="row">
		<div class="d-none d-md-block col-md-2"></div>
		<div class="col-md-8">
			<h2>У вас есть вопросы?</h2>
			<form id="addNewFeedback"  class="needs-validation" novalidate>
				<div class="form-group">
					<label for="nameInput">ФИО <span class="required">*</span></label>
					<input type="name" name="NAME" class="form-control" id="nameInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="nameInput">Город</label>
					<input type="name" name="CITY" class="form-control" id="cityInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="emailInput">Телефон <span class="required">*</span></label>
					<input type="email" name="PHONE" class="form-control" id="phoneInput" placeholder="">
				</div>
				<div class="form-group">
					<label for="emailInput">Email</label>
					<input type="email" name="EMAIL" class="form-control" id="emailInput" placeholder="">
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
					<a href="#" class="button add-new-feedback-button"  onclick="gtag('event', 'submit');">Отправить</a>
				</div>
			</form>
		</div>
		<div class="d-none d-md-block col-md-2"></div>
	</div>
	<?/**/?>

</div>

<?/**?>
<pre><?print_r($arResult)?></pre>
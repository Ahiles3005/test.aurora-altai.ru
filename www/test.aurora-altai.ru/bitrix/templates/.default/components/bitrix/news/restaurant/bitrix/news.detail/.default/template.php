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

<div class="treatment-gallery row">
	<div class="col-lg-2"></div>
	<div class="item col-lg-8">
		<img src="<?=$arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'][0]["SRC"]?>" alt=""/>
	</div>
</div>

<div class="row justify-content-center">
	<div class="col-lg-10 treatment-col">
		<div class="treatment-slide">
			<?foreach($arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'] as $arPhoto){?>
				<div class="item">
					<img src="<?=$arPhoto['SRC']?>" alt=""/>
				</div>
			<?}?>
		</div>
	</div>
</div>

<script>
	$(function(){
		$('.treatment-slide .item img').on('click',function(){
			$('.treatment-gallery img').attr("src",$(this).attr("src"));
		});
	});
</script>

<section class="my-4">
	<?=$arResult["PREVIEW_TEXT"];?>
	<!-- div class="mt-2"><a href="<?=$arResult['LIST_PAGE_URL']?>">Перейти в раздел "Ресторан"</a></div -->
</section>


<?/**?>
<pre><?print_r($arResult)?></pre>
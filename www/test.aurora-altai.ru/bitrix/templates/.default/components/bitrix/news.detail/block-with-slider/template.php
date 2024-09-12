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
<?/*
<div class="">
	<?if($arResult['DISPLAY_PROPERTIES']['HIDE_NAME']['VALUE']!='Y'){?>
		<h1 class="mt-3 mb-5"><?=$arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']?></h1>
	<?}?>
	<?if($arResult["PREVIEW_TEXT"]){?>
		<section class="my-4">
			<?=$arResult["PREVIEW_TEXT"];?>
		</section>
	<?}?>
</div>
*/?>
<?/*
<div class="title">
	<h2 class="black">Лечение</h2>
	<p>Уникальность лечения в Белокурихе заключается в использовании полезных свойств местных природных ресурсов. Что может быть более действенным для исцеления, чем естественные факторы Алтайского края, санаторное лечение в котором считается одним из лучших в России?
	</p>
</div>*/?>
<div class="treatment-gallery">
	<div class="item">
		<img src="<?=$arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'][0]["src"]?>" alt=""/>
	</div>
</div>

<div class="row justify-content-center">
	<div class="col-lg-11 treatment-col">
		<div class="treatment-slide">
			<?foreach($arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'] as $arPhoto){?>
				<div class="item">
					<img src="<?=$arPhoto['src']?>" alt=""/>
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

<div class="my-4">
		<?=$arResult["PREVIEW_TEXT"]?>

		<?if(count($arResult['PROPERTIES']['LINKS']['VALUE'])){?>
			<div class="treatment-btn mt-3">
				<?for($i=0;$i<count($arResult['PROPERTIES']['LINKS']['VALUE']);$i++){
					if(trim($arResult['PROPERTIES']['LINKS']['DESCRIPTION'][$i])){?>
						<a href="<?=$arResult['PROPERTIES']['LINKS']['VALUE'][$i]?>" class="blue-btn"><?=$arResult['PROPERTIES']['LINKS']['DESCRIPTION'][$i]?></a>
					<?}?>
				<?}?>
			</div>
		<?}?>
</div>
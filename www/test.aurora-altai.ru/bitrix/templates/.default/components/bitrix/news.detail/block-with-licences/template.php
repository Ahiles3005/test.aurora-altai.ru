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
</main>
<section class="sertificate-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 title">
				<h3 class="black">Лицензии и сертификаты</h3>
			</div>
		</div>
		<div class="row">
			<?foreach($arResult["DISPLAY_PROPERTIES"]['PHOTOS']['FILE_VALUE'] as $arPhoto){?>
				<div class="col-lg-4">
					<div class="sertificate-img">
						<img src="<?=$arPhoto['PREVIEW']['src']?>" alt="">
					</div>
				</div>
			<?}?>
		</div>
	</div>
</section>
<main class="main container">
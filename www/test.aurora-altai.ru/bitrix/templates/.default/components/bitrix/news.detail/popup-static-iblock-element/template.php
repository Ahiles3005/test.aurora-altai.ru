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

<div id="modalRequisites" class="p-5" style="display:none;max-width:550px;">
	<h2><?=$arResult['NAME']?></h2>
	<?=$arResult['PREVIEW_TEXT']?>
	<a data-fancybox-close="" href="#" class="button mt-4">Закрыть</a>
</div>
<?/*
<script>
$(function(){
	$('#<?=$arResult["DISPLAY_PROPERTIES"]["ID"]["VALUE"]?>').click(function(e){
		e.preventDefault();
		bootbox.alert({
			title: "<?=$arResult['NAME']?>",
			message: "<?=$arResult['PREVIEW_TEXT']?>",
			centerVertical: true,
			buttons:{
				ok: {
					label: 'ОК',
					className: 'button'
				},
			}
		});
	});
});
</script>
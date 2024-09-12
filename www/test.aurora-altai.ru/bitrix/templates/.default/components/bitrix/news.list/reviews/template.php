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
<div class="reviews-list">
	<div class="row">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
		<?/**?>
			<div data-src="#modal<?=$arItem["ID"]?>" class="open-popup col-12 col-md-6 review-item mb-5" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="row">
					<div class="col-3 icon">
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z" class=""></path></svg>
					</div>
					<div class="col-9">
						<div class="name"><?=$arItem["NAME"]?></div>
						<div class="city"><?=$arItem["DISPLAY_PROPERTIES"]['CITY']['VALUE']?></div>
					</div>
					<div class="col-12 mt-2 text preview">
						&laquo;<?=substr(strip_tags($arItem["PREVIEW_TEXT"]),0,150)?>...&raquo;
					</div>
				</div>
			</div>
		<?/**/?>
		<?/**/?>
			<div data-fancybox="review" data-src="#modal<?=$arItem["ID"]?>" class="col-12 col-md-6 review-item mb-5" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="row">
					<div class="col-3 icon">
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z" class=""></path></svg>
					</div>
					<div class="col-9">
						<div class="name"><?=$arItem["NAME"]?></div>
						<div class="city"><?=$arItem["DISPLAY_PROPERTIES"]['CITY']['VALUE']?></div>
					</div>
					<div class="col-12 mt-2 text preview">
						&laquo;<?=substr(strip_tags($arItem["PREVIEW_TEXT"]),0,150)?>...&raquo;
					</div>
				</div>
			</div>
			<div id="modal<?=$arItem["ID"]?>" class="p-5 review-item" style="display:none;max-width:550px;">
				<div class="row">
					<div class="col-3 icon">
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z" class=""></path></svg>
					</div>
					<div class="col-9">
						<div class="name"><?=$arItem["NAME"]?></div>
						<div class="city"><?=$arItem["DISPLAY_PROPERTIES"]['CITY']['VALUE']?></div>
					</div>
					<div class="col-12 mt-2 text">
						&laquo;<?=$arItem["PREVIEW_TEXT"]?>&raquo;
					</div>
				</div>
			</div>
			<?/**/?>
		<?endforeach;?>
	</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>

<?/*
<script>
$(document).ready(function() {
	$('.open-popup').click(function(){
		bootbox.alert({
			message: "Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! Test large alert! ",
			size: 'large'
		});
	});

});
</script>
*/?>

<?/*
<pre><?print_r($arResult["ITEMS"])?></pre>

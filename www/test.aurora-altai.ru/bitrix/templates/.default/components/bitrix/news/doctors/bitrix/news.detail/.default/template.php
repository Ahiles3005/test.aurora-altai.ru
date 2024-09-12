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
<? /** @var CBitrixComponent $component */

$this->setFrameMode(true); ?>
<div class="single_doctor">
<div class="row">
	<div class="col-12 col-lg-8 vs_options">
		<?php if (!empty($arResult['PROPERTIES']['POSITION']['VALUE'])): ?>
			<div class="vs_option">
				<span class="vs_option_title">Должность:</span>
				<span class="vs_option_val"><?= $arResult['PROPERTIES']['POSITION']['VALUE'] ?></span>
			</div>
		<?php endif; ?>
		<?php if (!empty($arResult['PROPERTIES']['EDUCATION']['VALUE'])): ?>
			<div class="vs_option">
				<span class="vs_option_title">Уровень образования:</span>
				<span class="vs_option_val"><?= $arResult['PROPERTIES']['EDUCATION']['VALUE'] ?></span>
			</div>
		<?php endif; ?>
		<?php if (!empty($arResult['PROPERTIES']['SPECIALIZATION']['VALUE'])): ?>
			<div class="vs_option">
				<span class="vs_option_title">Специальность:</span>
				<span class="vs_option_val"><?= $arResult['PROPERTIES']['SPECIALIZATION']['VALUE'] ?></span>
			</div>
		<?php endif; ?>
		<?php if (!empty($arResult['PROPERTIES']['QUALIFICATION']['VALUE'])): ?>
			<div class="vs_option">
				<span class="vs_option_title">Квалификация:</span>
				<span class="vs_option_val"><?= $arResult['PROPERTIES']['QUALIFICATION']['VALUE'] ?></span>
			</div>
		<?php endif; ?>
	</div>
	<div class="col-12 col-lg-4 vs_doctor_image">
		<?php if (!empty($arResult["PREVIEW_PICTURE"]) && is_array($arResult["PREVIEW_PICTURE"])): ?>
			<img class="doctors__img" border="0" src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>"/>
		<?php else: ?>
			<img class="doctors__img" border="0" src="https://test.aurora-altai.ru/upload/medialibrary/e90/xurz3uzg9kg0ltofgvj91lwr0m9ghbqq/Rectangle-1.png" alt="Изображение по умолчанию" title="Изображение по умолчанию"/>
		<?php endif; ?>
	</div>
	<div class="col-12">
        <?php
        if (!empty($arResult['PROPERTIES']['CERTIFICATES']['VALUE'])):  ?>
			<span class="vs_option_title">Сертификаты:</span>
			<div class="swiper">
                <div class="vs_doctor_gallery swiper-wrapper">
                <?php foreach ($arResult['PROPERTIES']['CERTIFICATES']['VALUE'] as $item): ?>
                    <?php
                    // путь к изображению от корня сайта
                    $image = CFile::GetPath($item);
                    // создаем превьюшку изображения
                    $thumb = CFile::ResizeImageGet(
                        $item,
                        array('width' => 300, 'height' => 'auto')
                    );
                    ?>
                    <div class="swiper-slide">
                        <a data-entity='image' data-fancybox='images' href="<?= $image; ?>"><img src="<?= $thumb['src']; ?>" alt="" /></a>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
$(document).ready(function () {
    var swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,

        slidesPerView: 3,
        spaceBetween: 30,
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        }

    });
});
</script>

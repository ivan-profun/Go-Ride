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
<section class="city-bike">
	<div class="container">
		<h2>Городские велосипеды</h2>
		<div class="slider slick-city-slider">
			<? foreach($arResult["ITEMS"] as $arItem): ?>
				<div class="slider__item">
					<div class="city-bike__slide-wrp">
						<img src="<?=$arItem['FIELDS']['PREVIEW_PICTURE']['SRC'] ?>" alt="<?=$arItem['FIELDS']['PREVIEW_PICTURE']['ALT'] ?>">
						<div class="city-bike__content">
							<p><?=$arItem['FIELDS']['PREVIEW_TEXT'] ?></p>
							<a href="<?=$arItem['DISPLAY_PROPERTIES']['BTN_LINK']['VALUE'] ?>"><?=$arItem['FIELDS']['DETAIL_TEXT'] ?></a>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</section>

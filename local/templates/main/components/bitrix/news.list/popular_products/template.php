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

<section class="products">
	<div class="container">
		<h2>Популярные товары</h2>
		<div class="slider slick-good-slider">
			<? if (!empty($arResult['ITEMS'])): ?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<? if ($arItem['PROPERTIES']['POPULAR_PRODUCT']['VALUE'] == 'Y'): ?>
						<div class="slider__item">
							<div class="slider__item-wrp">
								<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT'] ?>">
								<div class="slider__item-content-wrp">
									<h3><a href="/catalog/#<?=$arItem['CODE'] ?>"><?=$arItem['NAME'] ?></a></h3>
									<p><?=$arItem['DISPLAY_PROPERTIES']['COST']['VALUE'] ?>.00 p</p>
									<p>Артикул: <?=$arItem['CODE'] ?></p>
								</div>
							</div>
						</div>
					<?endif;?>
				<?endforeach;?>
			<?endif;?>
		</div>
	</div>
</section>




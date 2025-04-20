<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);

?>

<!-- тут снова не работает слайдер, нужно пошаманить над css и js файлами, как в блоке Популярные товары на главной странице -->

<section class="products">
	<div class="container">
	<?/* Может и динамически выводить название, но мне пока лень разбираться как это делать.
	Поэтому, надо спросить как лучше, или проще это сделать, 
	потому что можно легко вызвать CIBlockSection::GetByID($section['SECTION_ID'])->GetNext();
	для получения имени родительского раздела и объеденить его с текущим для составления названия */?>
		<h2>Горные велосипеды</h2>
		<div class="slider slick-good-slider">
			<? foreach ($arResult['ITEMS'] as $arItem): ?>
				<div class="slider__item">
					<div class="slider__item-wrp">
						<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?=$arItem['NAME'] ?>">
						<div class="slider__item-content-wrp">
							<h3><a href="/product?code=<?=$arItem['CODE'] ?>"><?=$arItem['NAME'] ?></a></h3>
							<p><?=$arItem['COST'] ?> руб.</p>
							<p>Артикул: <?=$arItem['CODE'] ?></p>
						</div>
					</div>
				</div>
			<? endforeach; ?>
 		</div>
	</div>
</section>

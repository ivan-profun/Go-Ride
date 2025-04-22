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

<div class="container">
<?
if (CModule::IncludeModule("iblock")) {
    $sectionId = $arResult['IBLOCK_ID'];
    $section = CIBlockSection::GetByID($sectionId)->GetNext();
    if ($section) {
        $parentId = $section['IBLOCK_SECTION_ID'];
        if ($parentId) {
            $parentSection = CIBlockSection::GetByID($parentId)->GetNext();
            if ($parentSection) {
                $parentName = $parentSection['NAME'];
            }
        }
    }
}
$parentName = mb_strtolower($parentName);
$titleSection = $arResult['NAME'].' '.$parentName;
?>
	<h2><?=$titleSection ?></h2>
	<div class="slider slick-good-slider">
		<? foreach ($arResult['ITEMS'] as $arItem): ?>
			<div class="slider__item">
				<div class="slider__item-wrp">
					<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?=$arItem['NAME'] ?>">
					<div class="slider__item-content-wrp">
						<h3><a href="/catalog/detail.php?code=<?=$arItem['CODE'] ?>"><?=$arItem['NAME'] ?></a></h3>
						<p><?=$arItem['COST'] ?> руб.</p>
						<p>Артикул: <?=$arItem['CODE'] ?></p>
					</div>
				</div>
			</div>
		<? endforeach; ?>
	</div>
</div>

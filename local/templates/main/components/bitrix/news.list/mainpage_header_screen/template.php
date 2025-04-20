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
<? if (!empty($arResult['ITEMS'])): ?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="header__wrp-first-screen">
			<div class="header__desc">
				<h2><?=$arItem['NAME'] ?></h2>
				<p><?=$arItem['PREVIEW_TEXT'] ?></p>
				<a href="<?=$arItem['PROPERTIES']['BTN_LINK']['VALUE'] ?>"><?=$arItem['DETAIL_TEXT'] ?></a>
			</div>
		</div>
		<div class="header__second-screen">
			<picture>
				<source srcset="<?=$arItem['DISPLAY_PROPERTIES']['MOBILE_PICTURE']['FILE_VALUE']['SRC'] ?>" media="(max-width: 1400px)">
				<source srcset="<?=$arItem['DETAIL_PICTURE']['SRC'] ?>">
				<img src="<?=$arItem['DETAIL_PICTURE']['SRC'] ?>" alt="bicycle"/>
			</picture>
		</div>
	<?endforeach;?>
<?endif;?>


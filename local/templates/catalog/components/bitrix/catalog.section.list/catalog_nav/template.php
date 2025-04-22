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

<?
/* В result_modifier не отрабатывает этот код, так что наслаждаемся костылём */
$arSections = [];
$parent = "";
foreach ($arResult['SECTIONS'] as $arItem) {
	if ($arItem['DEPTH_LEVEL'] == 1) {
		$parent = $arItem['CODE'];
		$arSections += [
			$parent => [
				'CODE' => $arItem['CODE'],
				'NAME' => $arItem['NAME'],
				'CHILDREN' => []
			]
		];
	}
	else if ($arItem['DEPTH_LEVEL'] == 2) {
		$arSections[$parent]['CHILDREN'][] = [
			'CODE' => $arItem['CODE'],
			'NAME' => $arItem['NAME']
		];
	}
}
?>


<? /* Попробовать NTH childe для корректировки css (как применить это сдесь не понял), зато теперь тут костыль. */ ?>
<div class="header__catalog-nav container"> 
	<a href="#">каталог</a>
	<nav class="header__catalog-categories" style="bottom: -490px !important">
		<ul>
			<? foreach ($arSections as $arSec): ?>
				<li>
					<a href="/catalog/<?=$arSec['CODE'] ?>"><?=$arSec['NAME'] ?></a>
					<ul class="header__sub-catalog-categories" style="bottom: <?=$arSec['CODE']=='bicycles' ? 98 : -98*2 ?>px !important">
						<? foreach ($arSec['CHILDREN'] as $arElement): ?>
							<li><a href="/catalog/<?=$arSec['CODE'] ?>/<?=$arElement['CODE'] ?>"><?=$arElement['NAME'] ?></a></li>
						<? endforeach; ?> 
					</ul>
				</li>
			<? endforeach; ?> 
		</ul>
	</nav>
	<nav class="header__catalog-nav-list-wrp">
		<ul class="header__catalog-nav-list">
			<li><a href="#">доставка</a></li>
			<li><a href="#">распродажа</a></li>
			<li><a href="#">отзывы</a></li>
			<li><a href="#">контакты</a></li>
		</ul>
	</nav>
</div> 



<?/* Если вставлять отдельно html, то он отрабатывает как надо, но при автоматическом выводе css кудато едет. КАК??? */?>
<!--
<div class="header__catalog-nav container">
	<a href="#">каталог</a>
	<nav class="header__catalog-categories">
		<ul>
			<li>
				<a href="#">велосипеды</a>
				<ul class="header__sub-catalog-categories">
					<li><a href="#">горные</a></li>
					<li><a href="#">городские</a></li>
					<li><a href="#">гоночные</a></li>
					<li><a href="#">гибридные</a></li>
				</ul>
			</li>
			<li><a href="#">одежда</a>
			<ul class="header__sub-catalog-categories">
					<li><a href="#">горныеЛОЛ</a></li>
					<li><a href="#">городскиеЛОЛ</a></li>
					<li><a href="#">гоночныеЛОЛ</a></li>
					<li><a href="#">гибридныеЛОЛ</a></li>
				</ul>
			</li>
			<li><a href="#">аксессуары</a></li>
			<li><a href="#">обувь</a></li>
			<li><a href="#">снаряжение</a></li>
			<li><a href="#">распродажа</a></li>
		</ul>
	</nav>
	<nav class="header__catalog-nav-list-wrp">
		<ul class="header__catalog-nav-list">
			<li><a href="#">доставка</a></li>
			<li><a href="#">распродажа</a></li>
			<li><a href="#">отзывы</a></li>
			<li><a href="#">контакты</a></li>
		</ul>
	</nav>
</div>

-->





<?/*<!-- Отладочная информация --> <pre> <? print_r($arSections); ?> </pre> /**/?>


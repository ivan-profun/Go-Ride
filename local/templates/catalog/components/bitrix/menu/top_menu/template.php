<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="header__nav-list-wrp">
	<ul class="header__nav-list">
		<?if (!empty($arResult)):?>
			<? foreach($arResult as $arItem): ?>
				<?if($arItem["SELECTED"]):?>
					<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
				<?else:?>
					<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				<?endif?>
			<?endforeach?>
		<?endif?>
	</ul>
</nav>
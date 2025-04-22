<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

    use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html>
	<head>
        <?/*$APPLICATION->AddHeadScript('/js/jquery.js');?>
        <?$APPLICATION->AddHeadScript('/js/slick.js');?>
        <?$APPLICATION->AddHeadScript('/js/scripts.js');*/?>
		<?$APPLICATION->ShowHead()?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/local/templates/main/css/slick.css"/>

        <? CJSCore::Init(array("jquery")); ?>

	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

<header class="header header--catalog">
    <div class="container">
        <div class="header__wrp">
            <div class="header__wrp-nav header__wrp-nav--catalog">
                <a href="/">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include", 
                        "includes", 
                        [
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "worktime",
                            "COMPONENT_TEMPLATE" => "catalog",
                            "EDIT_TEMPLATE" => "standard.php",
                            "PATH" => "/includes/logo.php"
                        ],
                        false
                    );?>
                </a>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu", 
                    "top_menu", 
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "catalog_top_menu",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "top_menu"
                    ),
                    false
                );?>
                <div class="header__nav-box header__search">
                    <?$APPLICATION->IncludeComponent("bitrix:search.form", "search_form", Array(
                            "PAGE" => "#SITE_DIR#search.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                            "USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
                        ),
                        false
                    );?> 
                    <a href="#">
                    <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include", 
                                    "includes", 
                                    [
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "worktime",
                                        "COMPONENT_TEMPLATE" => "catalog",
                                        "EDIT_TEMPLATE" => "standard.php",
                                        "PATH" => "/includes/account.php"
                                    ],
                                    false
                                );?>
                    </a>
                    <a href="#">
                    <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include", 
                                    "includes", 
                                    [
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "worktime",
                                        "COMPONENT_TEMPLATE" => "catalog",
                                        "EDIT_TEMPLATE" => "standard.php",
                                        "PATH" => "/includes/cart.php"
                                    ],
                                    false
                                );?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Секция Каталог товаров -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list", 
        "catalog_nav", 
        Array(
            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",	// Дополнительный фильтр для подсчета количества элементов в разделе
            "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "N",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
            "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",	// Скрывать разделы с нулевым количеством элементов
            "IBLOCK_ID" => "2",	// Инфоблок
            "IBLOCK_TYPE" => "Catalogs",	// Тип инфоблока
            "SECTION_CODE" => "",	// Код раздела
            "SECTION_FIELDS" => array(	// Поля разделов
                0 => "CODE",
                1 => "NAME",
                2 => "",
            ),
            "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
            "SECTION_URL" => "#SITE_DIR#/#CODE#",	// URL, ведущий на страницу с содержимым раздела
            "SECTION_USER_FIELDS" => array(	// Свойства разделов
                0 => "",
                1 => "",
            ),
            "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
            "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
            "VIEW_MODE" => "LIST",	// Вид списка подразделов
        ),
        false
    );?> 
                    
    
    <!-- Блок Скидка --> 
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list", 
        "sale", 
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "N",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "N",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "NAME",
                1 => "PREVIEW_PICTURE",
                2 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "5",
            "IBLOCK_TYPE" => "Sale",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "1",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "PRODUCT_LINK",
                2 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "RAND",
            "SORT_ORDER1" => "RAND",
            "SORT_ORDER2" => "",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "sale"
        ),
        false
    );?>

</header>
            



	<main>					
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

		<header class="header">
            <div class="container">
                <div class="header__wrp">
                    <div class="header__wrp-nav">
                        <a href="#">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include", 
                            "includes", 
                            [
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "worktime",
                                "COMPONENT_TEMPLATE" => "main",
                                "EDIT_TEMPLATE" => "standard.php",
                                "PATH" => "/includes/logo.php"
                            ],
                            false
                        );?>
                        </a>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu", 
                            "main_menu", 
                            [
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => [],
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "main",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "main_menu"
                            ],
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
                                        "COMPONENT_TEMPLATE" => "main",
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
                                        "COMPONENT_TEMPLATE" => "main",
                                        "EDIT_TEMPLATE" => "standard.php",
                                        "PATH" => "/includes/cart.php"
                                    ],
                                    false
                                );?>
                            </a>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "mainpage_header_screen", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",	// Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
                        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "N",	// Учитывать права доступа
                        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "N",	// Тип кеширования
                        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                        "DISPLAY_DATE" => "N",	// Выводить дату элемента
                        "DISPLAY_NAME" => "N",	// Выводить название элемента
                        "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                        "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                        "FIELD_CODE" => array(	// Поля
                            0 => "NAME",
                            1 => "PREVIEW_TEXT",
                            2 => "DETAIL_TEXT",
                            3 => "DETAIL_PICTURE",
                            4 => "",
                        ),
                        "FILTER_NAME" => "",	// Фильтр
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                        "IBLOCK_ID" => $_REQUEST["ID"],	// Код информационного блока
                        "IBLOCK_TYPE" => "Content",	// Тип информационного блока (используется только для проверки)
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                        "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                        "NEWS_COUNT" => "10",	// Количество новостей на странице
                        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                        "PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
                        "PAGER_TITLE" => "Новости",	// Название категорий
                        "PARENT_SECTION" => "",	// ID раздела
                        "PARENT_SECTION_CODE" => "",	// Код раздела
                        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                        "PROPERTY_CODE" => array(	// Свойства
                            0 => "",
                            1 => "BTN_LINK",
                            2 => "MOBILE_PICTURE",
                            3 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                        "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                        "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                        "SET_STATUS_404" => "N",	// Устанавливать статус 404
                        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                        "SHOW_404" => "N",	// Показ специальной страницы
                        "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                        "COMPONENT_TEMPLATE" => ".default"
                        ),
                        false
                    );?>

                </div>
            </div>
        </header>
	<main>					
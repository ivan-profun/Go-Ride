</main>

<footer class="footer">
    <div class="container">
        <div class="footer__wrp">
            <nav>
                <ul class="footer__nav-list">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer",
                        [
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => [],
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "footer_main",
                            "USE_EXT" => "N"
                        ]
                    );?>
                </ul>
            </nav>
            <nav>
                <ul class="footer__nav-list">
                <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer",
                        [
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => [],
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "footer_second",
                            "USE_EXT" => "N"
                        ]
                    );?>
                </ul>
            </nav>
            <div class="footer__form">
                <h2>подписаться на новости магазина go&ride</h2>
                <form action="#">
                    <div class="footer__form-wrp">
                        <label>
                            <input type="email" placeholder="Enter your Email adress" required>
                            <span class="visually-hidden">email</span>
                        </label>
                        <button>подписаться</button>
                    </div>
                    <span>Продолжая, вы соглашаетесь с нашей политикой конфиденциальности.</span>
                </form>
            </div>
        </div>
        <div class="footer__social-wrp">
            <ul class="footer__social-list">
                <li><a href="#">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include", 
                        "includes", 
                        [
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "worktime",
                            "COMPONENT_TEMPLATE" => "catalog",
                            "EDIT_TEMPLATE" => "standard.php",
                            "PATH" => "/includes/instagram.php"
                        ],
                        false
                    );?>
                </a></li>
                <li><a href="#">
                <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include", 
                        "includes", 
                        [
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "worktime",
                            "COMPONENT_TEMPLATE" => "catalog",
                            "EDIT_TEMPLATE" => "standard.php",
                            "PATH" => "/includes/facebook.php"
                        ],
                        false
                    );?>
                </a></li>
                <li><a href="#">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include", 
                    "includes", 
                    [
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "worktime",
                        "COMPONENT_TEMPLATE" => "catalog",
                        "EDIT_TEMPLATE" => "standard.php",
                        "PATH" => "/includes/twitter.php"
                    ],
                    false
                );?>
                </a></li>
            </ul>
            <span>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include", 
                    "includes", 
                    [
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "worktime",
                        "COMPONENT_TEMPLATE" => "catalog",
                        "EDIT_TEMPLATE" => "standard.php",
                        "PATH" => "/includes/copyright.php"
                    ],
                    false
                );?>
            </span>
        </div>
    </div>
</footer>
</body>
<script src="/local/templates/main/js/slick.js"></script>
<script src="/local/templates/main/js/scripts.js"></script>

</html>

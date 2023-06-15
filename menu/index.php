<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Меню");
?>
    <main>
    <section class="menu">
        <div class="swiper-container">
            <div class="menu__paggination-icon-wrapper">
                <img alt="paggination-icon-arrow"
                     src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-paggination-icon-arrow.svg"
                     class="menu__paggination-icon">
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="menu__date-item item item--current">
                        <span class="item__title">Сегодня</span> <span class="item__value">6</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Завтра</span> <span class="item__value">7</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Среда</span> <span class="item__value">8</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Четверг</span> <span class="item__value">9</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Пятница</span> <span class="item__value">10</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Суббота</span> <span class="item__value">11</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Воскресенье</span> <span class="item__value">12</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Понедельник</span> <span class="item__value">13</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Вторник</span> <span class="item__value">14</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Среда</span> <span class="item__value">15</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Четверг</span> <span class="item__value">16</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item item--current2">
                        <span class="item__title">Пятница</span> <span class="item__value">17</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__date-item item">
                        <span class="item__title">Суббота</span> <span class="item__value">18</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu__content">
            <div class="menu__search-bar">
                <form class="search">
                    <div class="search__placeholder-wrapper">
                        <img alt="menu-search-icon" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-search-icon.svg"
                             class="search__icon"> <span class="search__placeholder">Поиск</span>
                    </div>
                    <input class="search__input" type="text">
                </form>
                <div class="menu__filter-button">
                    <img alt="menu-filter-icon" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-filter-icon.svg"
                         class="menu__filter-button-img">
                </div>
                <div class="menu__filter filter">
                    <div class="filter__head">
                        <span class="filter__head-title">ФИЛЬТРЫ</span>
                        <button class="filter__head-button"><img alt="close-icon"
                                                                 src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-close-icon.svg">
                        </button>
                    </div>
                    <div class="filter__type">
                        <div class="filter__list">
                            <p class="filter__title">
                                Тип
                            </p>
                            <div class="filter__item filter__item--checked">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Новое</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Острое</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Постное</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Фитнес</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Вегетарианское</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Популярное</span>
                            </div>
                        </div>
                        <div class="filter__list">
                            <p class="filter__title">
                                Категории
                            </p>
                            <div class="filter__item filter__item--checked">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Комплексные обеды</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Натуральные соки</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Завтраки</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Блины</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Бутерброды</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Холодные закуски</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Первые блюда</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Блюда гриль</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Вторые блюда</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Овощные блюда</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Соусы</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Выпечка</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Фрукты</span>
                            </div>
                            <div class="filter__item">
                                <div class="filter__checker">
                                    <img alt="menu-pick-icon"
                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-choose-icon.svg"
                                         class="filter__checker-icon">
                                </div>
                                <span class="filter__item-title">Напитки</span>
                            </div>
                        </div>
                    </div>
                    <div class="filter__button-bar">
                        <button class="card__cart-button filter__button-bar-close">
                            применить
                        </button>
                        <button class="card__cart-button filter__button-bar-accept"><img alt="menu-cart-icon"
                                                                                         src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-cart-icon.svg"
                                                                                         class="card__cart-button-icon">
                            <span class="card__cart-button-label">сбросить</span></button>
                    </div>
                </div>
            </div>
            <div class="menu__list-wrapper">
                <p class="menu__title">
                    КОМПЛЕКСНЫЕ ОБЕДЫ
                </p>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:catalog",
                    "",
                    array(
                        "ACTION_VARIABLE" => "action",
                        "ADD_ELEMENT_CHAIN" => "Y",
                        "ADD_PICT_PROP" => "-",
                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BASKET_URL" => "/cart",
                        "BIG_DATA_RCM_TYPE" => "personal",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COMMON_ADD_TO_BASKET_ACTION" => "ADD",
                        "COMMON_SHOW_CLOSE_POPUP" => "Y",
                        "COMPATIBLE_MODE" => "N",
                        "CONVERT_CURRENCY" => "N",
                        "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
                        "DETAIL_ADD_TO_BASKET_ACTION" => array("ADD"),
                        "DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(),
                        "DETAIL_BACKGROUND_IMAGE" => "-",
                        "DETAIL_BRAND_USE" => "N",
                        "DETAIL_BROWSER_TITLE" => "-",
                        "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
                        "DETAIL_DETAIL_PICTURE_MODE" => array("POPUP"),
                        "DETAIL_DISPLAY_NAME" => "N",
                        "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "H",
                        "DETAIL_IMAGE_RESOLUTION" => "16by9",
                        "DETAIL_META_DESCRIPTION" => "-",
                        "DETAIL_META_KEYWORDS" => "-",
                        "DETAIL_OFFERS_FIELD_CODE" => array("", ""),
                        "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
                        "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
                        "DETAIL_SET_CANONICAL_URL" => "Y",
                        "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
                        "DETAIL_SHOW_POPULAR" => "N",
                        "DETAIL_SHOW_SLIDER" => "N",
                        "DETAIL_SHOW_VIEWED" => "N",
                        "DETAIL_STRICT_SECTION_CHECK" => "Y",
                        "DETAIL_USE_COMMENTS" => "N",
                        "DETAIL_USE_VOTE_RATING" => "N",
                        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "ELEMENT_SORT_FIELD" => "sort",
                        "ELEMENT_SORT_FIELD2" => "id",
                        "ELEMENT_SORT_ORDER" => "asc",
                        "ELEMENT_SORT_ORDER2" => "asc",
                        "FILE_404" => "",
                        "FILTER_HIDE_ON_MOBILE" => "N",
                        "FILTER_NAME" => "arrFIlter",
                        "FILTER_VIEW_MODE" => "VERTICAL",
                        "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
                        "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
                        "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                        "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
                        "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
                        "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
                        "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                        "GIFTS_MESS_BTN_BUY" => "Выбрать",
                        "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
                        "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
                        "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
                        "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
                        "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                        "GIFTS_SHOW_IMAGE" => "Y",
                        "GIFTS_SHOW_NAME" => "Y",
                        "GIFTS_SHOW_OLD_PRICE" => "Y",
                        "HIDE_NOT_AVAILABLE" => "N",
                        "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "Menu",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "INSTANT_RELOAD" => "Y",
                        "LABEL_PROP" => array(),
                        "LAZY_LOAD" => "Y",
                        "LINE_ELEMENT_COUNT" => "3",
                        "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
                        "LINK_IBLOCK_ID" => "",
                        "LINK_IBLOCK_TYPE" => "",
                        "LINK_PROPERTY_SID" => "",
                        "LIST_BROWSER_TITLE" => "-",
                        "LIST_ENLARGE_PRODUCT" => "STRICT",
                        "LIST_META_DESCRIPTION" => "-",
                        "LIST_META_KEYWORDS" => "-",
                        "LIST_OFFERS_FIELD_CODE" => array("", ""),
                        "LIST_OFFERS_LIMIT" => "5",
                        "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                        "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':true},{'VARIANT':'0','BIG_DATA':true}]",
                        "LIST_SHOW_SLIDER" => "N",
                        "LIST_SLIDER_INTERVAL" => "3000",
                        "LIST_SLIDER_PROGRESS" => "N",
                        "LOAD_ON_SCROLL" => "Y",
                        "MESSAGE_404" => "",
                        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                        "MESS_BTN_BUY" => "Купить",
                        "MESS_BTN_COMPARE" => "Сравнение",
                        "MESS_BTN_DETAIL" => "Подробнее",
                        "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                        "MESS_BTN_SUBSCRIBE" => "Подписаться",
                        "MESS_COMMENTS_TAB" => "Комментарии",
                        "MESS_DESCRIPTION_TAB" => "Описание",
                        "MESS_NOT_AVAILABLE" => "Нет в наличии",
                        "MESS_PRICE_RANGES_TITLE" => "Цены",
                        "MESS_PROPERTIES_TAB" => "Характеристики",
                        "OFFERS_SORT_FIELD" => "shows",
                        "OFFERS_SORT_FIELD2" => "shows",
                        "OFFERS_SORT_ORDER" => "asc",
                        "OFFERS_SORT_ORDER2" => "asc",
                        "OFFER_ADD_PICT_PROP" => "-",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Товары",
                        "PAGE_ELEMENT_COUNT" => "2",
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                        "PRICE_CODE" => array("BASE"),
                        "PRICE_VAT_INCLUDE" => "Y",
                        "PRICE_VAT_SHOW_VALUE" => "N",
                        "PRODUCT_DISPLAY_MODE" => "N",
                        "PRODUCT_ID_VARIABLE" => "id",
                        "PRODUCT_PROPS_VARIABLE" => "prop",
                        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                        "PRODUCT_SUBSCRIPTION" => "Y",
                        "SEARCH_CHECK_DATES" => "N",
                        "SEARCH_NO_WORD_LOGIC" => "N",
                        "SEARCH_PAGE_RESULT_COUNT" => "50",
                        "SEARCH_RESTART" => "N",
                        "SEARCH_USE_LANGUAGE_GUESS" => "N",
                        "SEARCH_USE_SEARCH_RESULT_ORDER" => "N",
                        "SECTIONS_SHOW_PARENT_NAME" => "Y",
                        "SECTIONS_VIEW_MODE" => "LIST",
                        "SECTION_ADD_TO_BASKET_ACTION" => "ADD",
                        "SECTION_BACKGROUND_IMAGE" => "-",
                        "SECTION_COUNT_ELEMENTS" => "N",
                        "SECTION_ID_VARIABLE" => "SECTION_ID",
                        "SECTION_TOP_DEPTH" => "2",
                        "SEF_FOLDER" => "/menu/",
                        "SEF_MODE" => "Y",
                        "SEF_URL_TEMPLATES" => array("compare" => "", "element" => "#SECTION_CODE#/#ELEMENT_ID#/", "section" => "#SECTION_CODE#/", "sections" => "", "smart_filter" => ""),
                        "SET_LAST_MODIFIED" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "Y",
                        "SHOW_DEACTIVATED" => "N",
                        "SHOW_DISCOUNT_PERCENT" => "N",
                        "SHOW_MAX_QUANTITY" => "N",
                        "SHOW_OLD_PRICE" => "N",
                        "SHOW_PRICE_COUNT" => "1",
                        "SHOW_SKU_DESCRIPTION" => "N",
                        "SHOW_TOP_ELEMENTS" => "Y",
                        "SIDEBAR_DETAIL_SHOW" => "N",
                        "SIDEBAR_PATH" => "",
                        "SIDEBAR_SECTION_SHOW" => "N",
                        "TEMPLATE_THEME" => "site",
                        "TOP_ADD_TO_BASKET_ACTION" => "ADD",
                        "TOP_ELEMENT_COUNT" => "4",
                        "TOP_ELEMENT_SORT_FIELD" => "sort",
                        "TOP_ELEMENT_SORT_FIELD2" => "id",
                        "TOP_ELEMENT_SORT_ORDER" => "asc",
                        "TOP_ELEMENT_SORT_ORDER2" => "desc",
                        "TOP_ENLARGE_PRODUCT" => "STRICT",
                        "TOP_LINE_ELEMENT_COUNT" => "3",
                        "TOP_OFFERS_FIELD_CODE" => array("", ""),
                        "TOP_OFFERS_LIMIT" => "5",
                        "TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                        "TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false}]",
                        "TOP_SHOW_SLIDER" => "N",
                        "TOP_SLIDER_INTERVAL" => "3000",
                        "TOP_SLIDER_PROGRESS" => "N",
                        "TOP_VIEW_MODE" => "SECTION",
                        "USER_CONSENT" => "N",
                        "USER_CONSENT_ID" => "0",
                        "USER_CONSENT_IS_CHECKED" => "N",
                        "USER_CONSENT_IS_LOADED" => "N",
                        "USE_BIG_DATA" => "N",
                        "USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
                        "USE_COMPARE" => "N",
                        "USE_ELEMENT_COUNTER" => "Y",
                        "USE_ENHANCED_ECOMMERCE" => "N",
                        "USE_FILTER" => "Y",
                        "USE_GIFTS_DETAIL" => "N",
                        "USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
                        "USE_GIFTS_SECTION" => "N",
                        "USE_MAIN_ELEMENT_SECTION" => "Y",
                        "USE_PRICE_COUNT" => "N",
                        "USE_PRODUCT_QUANTITY" => "Y",
                        "USE_REVIEW" => "N",
                        "USE_SALE_BESTSELLERS" => "Y",
                        "USE_STORE" => "N"
                    )
                ); ?>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="<?= DEFAULT_TEMPLATE_PATH ?>/js/menu.js"></script>
    </main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
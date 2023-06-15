<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}
if ($USER->IsAdmin()) {
    $APPLICATION->ShowHeadStrings();
}
use Bitrix\Main\Page\Asset;
$APPLICATION->ShowPanel();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $APPLICATION->ShowHead();
    ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php
    Asset::getInstance()->addString('
        <meta charset="UTF-8">
        ');
    Asset::getInstance()->addString('
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        ');
    Asset::getInstance()->addString('
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        ');
    ?>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script
            src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=<ваш API-ключ>"
            type="text/javascript"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?= DEFAULT_TEMPLATE_PATH ?>/styles/styles.css" />
<!--    <link rel="stylesheet" href="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/styles/css/menu.css" />-->
<!--    <link rel="stylesheet" href="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/styles/css/portfolio.css"/>-->
<!--    <link rel="stylesheet" href="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/styles/css/about.css" />-->
<!--    <link rel="stylesheet" href="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/styles/css/contacts.css" />-->
<!--    <link rel="stylesheet" href="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/styles/css/services.css" />-->
<!--    <link rel="stylesheet" href="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/styles/css/cart.css"/>-->
<!--    <link rel="stylesheet" href="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/styles/css/payment.css"/>-->

    <script src="<?= DEFAULT_TEMPLATE_PATH ?>/js/main.js" defer="defer"></script>
</head>
<body>
<header class="header">
    <div class="header__container container">
        <a class="header__logo" href="/" aria-label="Логотип"
        ><img id="logo" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/logo.png" alt="Potter Family"
            /></a>
        <nav class="header__nav" id="menu">
            <button class="header__nav-close" id="menu-close">
                <svg
                    width="14"
                    height="14"
                    viewBox="0 0 14 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M7.78622 6.99681L13.5047 1.27549C13.6059 1.17066 13.6619 1.03025 13.6606 0.884511C13.6593 0.73877 13.6009 0.599358 13.4979 0.496299C13.3949 0.393241 13.2555 0.334784 13.1099 0.333517C12.9642 0.332251 12.8239 0.388277 12.7191 0.489528L7.00065 6.21084L1.28222 0.489528C1.17744 0.388277 1.0371 0.332251 0.891431 0.333517C0.745763 0.334784 0.60642 0.393241 0.503414 0.496299C0.400408 0.599358 0.341979 0.73877 0.340714 0.884511C0.339448 1.03025 0.395446 1.17066 0.496646 1.27549L6.21508 6.99681L0.496646 12.7181C0.392494 12.8224 0.333984 12.9637 0.333984 13.1111C0.333984 13.2585 0.392494 13.3998 0.496646 13.5041C0.60083 13.6083 0.742115 13.6668 0.889431 13.6668C1.03675 13.6668 1.17803 13.6083 1.28222 13.5041L7.00065 7.78277L12.7191 13.5041C12.8233 13.6083 12.9646 13.6668 13.1119 13.6668C13.2592 13.6668 13.4005 13.6083 13.5047 13.5041C13.6088 13.3998 13.6673 13.2585 13.6673 13.1111C13.6673 12.9637 13.6088 12.8224 13.5047 12.7181L7.78622 6.99681Z"
                        fill="white"
                    ></path>
                </svg>
            </button>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main_menu",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "main",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "main",
                    "USE_EXT" => "N"
                )
            );?>
            <a
                class="header__nav-tel"
                href="tel:+74991362923"
                aria-label="Номер телефона"
            >+7 (499) 136 29 23</a
            >
        </nav>
        <div class="header__box-right">
            <a
                class="header__tel"
                href="tel:+74991362923"
                aria-label="Номер телефона"
            >+7 (499) 136 29 23</a
            ><a class="header__basket" href="/cart" aria-label="Корзина"
            ><svg
                    class="header__basket-icon"
                    width="24"
                    height="25"
                    viewBox="0 0 24 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M11.1196 18.75C10.9296 18.75 10.7396 18.68 10.5896 18.53L9.08957 17.03C8.79957 16.74 8.79957 16.26 9.08957 15.97C9.37957 15.68 9.85957 15.68 10.1496 15.97L11.1396 16.96L13.8596 14.45C14.1596 14.17 14.6396 14.19 14.9196 14.49C15.1996 14.79 15.1796 15.27 14.8796 15.55L11.6296 18.55C11.4896 18.68 11.3096 18.75 11.1196 18.75Z"
                        fill="#434248"
                    />
                    <path
                        d="M5.18988 6.87994C4.99988 6.87994 4.79988 6.79994 4.65988 6.65994C4.36988 6.36994 4.36988 5.88994 4.65988 5.59994L8.28988 1.96994C8.57988 1.67994 9.05988 1.67994 9.34988 1.96994C9.63988 2.25994 9.63988 2.73994 9.34988 3.02994L5.71988 6.65994C5.56988 6.79994 5.37988 6.87994 5.18988 6.87994Z"
                        fill="#434248"
                    />
                    <path
                        d="M18.8101 6.87994C18.6201 6.87994 18.4301 6.80994 18.2801 6.65994L14.6501 3.02994C14.3601 2.73994 14.3601 2.25994 14.6501 1.96994C14.9401 1.67994 15.4201 1.67994 15.7101 1.96994L19.3401 5.59994C19.6301 5.88994 19.6301 6.36994 19.3401 6.65994C19.2001 6.79994 19.0001 6.87994 18.8101 6.87994Z"
                        fill="#434248"
                    />
                    <path
                        d="M20.21 11.1001C20.14 11.1001 20.07 11.1001 20 11.1001H19.77H4C3.3 11.1101 2.5 11.1101 1.92 10.5301C1.46 10.0801 1.25 9.3801 1.25 8.3501C1.25 5.6001 3.26 5.6001 4.22 5.6001H19.78C20.74 5.6001 22.75 5.6001 22.75 8.3501C22.75 9.3901 22.54 10.0801 22.08 10.5301C21.56 11.0501 20.86 11.1001 20.21 11.1001ZM4.22 9.6001H20.01C20.46 9.6101 20.88 9.6101 21.02 9.4701C21.09 9.4001 21.24 9.1601 21.24 8.3501C21.24 7.2201 20.96 7.1001 19.77 7.1001H4.22C3.03 7.1001 2.75 7.2201 2.75 8.3501C2.75 9.1601 2.91 9.4001 2.97 9.4701C3.11 9.6001 3.54 9.6001 3.98 9.6001H4.22Z"
                        fill="#434248"
                    />
                    <path
                        d="M14.8898 23.2502H8.85975C5.27975 23.2502 4.47975 21.1202 4.16975 19.2702L2.75975 10.6202C2.68975 10.2102 2.96975 9.83024 3.37975 9.76024C3.77975 9.69024 4.16975 9.97024 4.23975 10.3802L5.64975 19.0202C5.93975 20.7902 6.53975 21.7502 8.85975 21.7502H14.8898C17.4598 21.7502 17.7498 20.8502 18.0798 19.1102L19.7598 10.3602C19.8398 9.95024 20.2298 9.68024 20.6398 9.77024C21.0498 9.85024 21.3098 10.2402 21.2298 10.6502L19.5498 19.4002C19.1598 21.4302 18.5098 23.2502 14.8898 23.2502Z"
                        fill="#434248"
                    />
                </svg> </a>
            <button class="header__nav-open" id="menu-open">
                <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/header-buttom.svg" alt="burger-buttom" />
            </button>
        </div>
    </div>
    <script src="<?= DEFAULT_TEMPLATE_PATH ?>/js/header.js"></script>
</header>
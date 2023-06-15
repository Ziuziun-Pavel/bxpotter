<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><main> <section class="cart">
<p class="cart__title">
	 КОРЗИНА
</p>
<!--<ul class="cart__list">-->
<!--	<li class="cart__item item item--hide"> <span class="item__list-title">Блюдо</span> <span class="item__list-title">Цена</span> <span class="item__list-title">Количество</span> <span class="item__list-title">Сумма</span> </li>-->
<!--	<li class="cart__item item"> <img alt="card-item-img" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/cart/cart-item-img.png" class="item__img">-->
<!--	<p class="item__title">-->
<!--		 Комплексный обед “Сытный”-->
<!--	</p>-->
<!-- <span class="item__price">500<span class="item__price-count">шт.</span></span>-->
<!--	<div class="item__buttons">-->
<!-- <img alt="minus-one-button" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/cart/minus-button.svg" class="item__minus"> <span class="item__counter">01</span> <img alt="plus-one-button" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/cart/plus-button.svg" class="item__plus">-->
<!--	</div>-->
<!-- <span class="item__price item__price--second">500</span> <img alt="delete-button" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/cart/cross.svg" class="item__remove"> </li>-->
<!--	<li class="cart__item item"> <img alt="card-item-img" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/cart/cart-item2-img.png" class="item__img">-->
<!--	<p class="item__title">-->
<!--		 Фирменное комбо с пастой-->
<!--	</p>-->
<!-- <span class="item__price">1000<span class="item__price-count">шт.</span></span>-->
<!--	<div class="item__buttons">-->
<!-- <img alt="minus-one-button" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/cart/minus-button.svg" class="item__minus"> <span class="item__counter">10</span> <img alt="plus-one-button" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/cart/plus-button.svg" class="item__plus">-->
<!--	</div>-->
<!-- <span class="item__price item__price--second">10 000</span> <img alt="delete-button" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/cart/cross.svg" class="item__remove"> </li>-->
<!--</ul>-->
<!--<div class="cart__confirm-order">-->
<!--	<p class="cart__total-price">-->
<!--		 ИТОГО: <span class="item__price">10 500</span>-->
<!--	</p>-->
<!-- <a class="cart__confirm-button" href="/payment"> <img alt="cart-img" src="--><?//= DEFAULT_TEMPLATE_PATH ?><!--/img/cart/card-button-img.svg" class="cart__button-img"> <span class="cart__button-text">оформить заказ</span> </a><br>-->
<!--</div>-->
        <?$APPLICATION->IncludeComponent(
            "bitrix:sale.basket.basket",
            "bootstrap_v4",
            Array(
                "ACTION_VARIABLE" => "basketAction",
                "ADDITIONAL_PICT_PROP_2" => "-",
                "ADDITIONAL_PICT_PROP_3" => "-",
                "AUTO_CALCULATION" => "Y",
                "BASKET_IMAGES_SCALING" => "adaptive",
                "COLUMNS_LIST_EXT" => array("PREVIEW_PICTURE","PREVIEW_TEXT","DISCOUNT","PROPS","DELETE","SUM","PROPERTY_STOIMOST"),
                "COLUMNS_LIST_MOBILE" => array("PREVIEW_PICTURE","PREVIEW_TEXT","DISCOUNT","PROPS","DELETE","SUM","PROPERTY_STOIMOST"),
                "COMPATIBLE_MODE" => "Y",
                "CORRECT_RATIO" => "Y",
                "DEFERRED_REFRESH" => "N",
                "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                "DISPLAY_MODE" => "extended",
                "EMPTY_BASKET_HINT_PATH" => "/menu",
                "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
                "GIFTS_CONVERT_CURRENCY" => "N",
                "GIFTS_HIDE_BLOCK_TITLE" => "N",
                "GIFTS_HIDE_NOT_AVAILABLE" => "N",
                "GIFTS_MESS_BTN_BUY" => "Выбрать",
                "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
                "GIFTS_PAGE_ELEMENT_COUNT" => "4",
                "GIFTS_PLACE" => "BOTTOM",
                "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
                "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                "GIFTS_SHOW_OLD_PRICE" => "N",
                "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
                "HIDE_COUPON" => "Y",
                "LABEL_PROP" => array(),
                "PATH_TO_ORDER" => "/order_make/",
                "PRICE_DISPLAY_MODE" => "Y",
                "PRICE_VAT_SHOW_VALUE" => "N",
                "PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
                "QUANTITY_FLOAT" => "N",
                "SET_TITLE" => "Y",
                "SHOW_DISCOUNT_PERCENT" => "Y",
                "SHOW_FILTER" => "Y",
                "SHOW_RESTORE" => "Y",
                "TEMPLATE_THEME" => "site",
                "TOTAL_BLOCK_DISPLAY" => array("bottom"),
                "USE_DYNAMIC_SCROLL" => "Y",
                "USE_ENHANCED_ECOMMERCE" => "N",
                "USE_GIFTS" => "N",
                "USE_PREPAYMENT" => "N",
                "USE_PRICE_ANIMATION" => "Y"
            )
        );?><br>

    </section> </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
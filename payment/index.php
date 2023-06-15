<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оформить заказ");
?>
    <main>
        <section class="payment">
            <p class="payment__title">ОФОРМЛЕНИЕ ЗАКАЗА</p>
            <div class="payment__content">
                <form class="payment__form form">
                    <div class="form__wrapper">

                        <div class="form__item">
                            <label class="form__title" for="name">Ваше имя</label>
                            <input class="form__value" type="text" placeholder="Иван" id="name">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-error-icon.svg" class="form__error-icon" alt="error-icon">
                        </div>

                        <div class="form__item">
                            <label class="form__title" for="email">E-mail</label>
                            <input class="form__value" type="text" placeholder="example@mail.com" id="email">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-error-icon.svg" class="form__error-icon" alt="error-icon">
                        </div>

                        <div class="form__item">
                            <label class="form__title" for="phone-number">Номер телефона</label>
                            <input class="form__value" type="number" placeholder="+7 (999) 999-99-99" id="phone-number">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-error-icon.svg" class="form__error-icon" alt="error-icon">
                        </div>

                        <div class="form__item">
                            <label class="form__title" for="location">Адрес</label>
                            <input class="form__value" type="text" placeholder="г. Москва" id="location">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-error-icon.svg" class="form__error-icon" alt="error-icon">
                        </div>
                    </div>

                    <div class="form__wrapper form__wrapper--textarea">
                        <label class="form__title form__title--textarea" for="comment">Комментарий</label>
                        <textarea class="form__value form__value--textarea" id="comment"></textarea>
                    </div>

                    <button type="submit" class="form__confirm-button" id="button">
                        <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-button-icon.svg" alt="cart-img" class="form__button-img">
                        <span class="form__button-text">заказать</span>
                    </button>
                </form>

                <div class="payment__order order">
                    <p class="order__date">ВАШ ЗАКАЗ 07.02</p>
                    <div class="order__list">
                        <div class="order__item">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-item-sample1.png" alt="payment-item-img" class="order__img">
                            <div class="order__wrapper">
                                <div class="order__line">
                                    <p class="order__title">Комплексный обед “Сытный”</p>
                                    <p class="order__price">500<span class="order__price-ruble">₽</span></p>
                                </div>

                                <div class="order__line">
                                    <p class="order__count">Х1</p>
                                    <p class="order__price">500<span class="order__price-ruble">₽</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="order__item">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-item-sample2.png" alt="payment-item-img" class="order__img">
                            <div class="order__wrapper">
                                <div class="order__line">
                                    <p class="order__title">Фирменное комбо с пастой</p>
                                    <p class="order__price">1000<span class="order__price-ruble">₽</span></p>
                                </div>

                                <div class="order__line">
                                    <span class="order__count">Х10</span>
                                    <p class="order__price">10 000<span class="order__price-ruble">₽</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order__cost">
                        <div class="order__line">
                            <span class="order__price-text">Сумма</span>
                            <p class="order__price ">10 500<span class="order__price-ruble">₽</span></p>
                        </div>
                        <div class="order__line">
                            <span class="order__price-text">Доставка</span>
                            <p class="order__price">0<span class="order__price-ruble">₽</span></p>
                        </div>
                    </div>

                    <div class="order__results">
                        <span class="order__summary">ИТОГО</span>
                        <p class="order__total-price">10 500<span class="order__price-ruble order__price-ruble--results">₽</span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="<?= DEFAULT_TEMPLATE_PATH ?>/js/payment.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
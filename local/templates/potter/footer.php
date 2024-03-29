<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}
?>

<footer class="footer container">
    <div class="footer__box-top">
        <a
            class="header__logo header__logo--footer"
            href="/"
            aria-label="Логотип"
        ><img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/logo.png" alt="Potter Family"
            /></a>
        <nav class="footer__nav">
            <ul class="footer__nav-list">
                <li class="footer__nav-item">
                    <a class="footer__nav-link" href="/">Главная</a>
                </li>
                <li class="footer__nav-item">
                    <a class="footer__nav-link" href="/menu">Меню</a>
                </li>
                <li class="footer__nav-item">
                    <a class="footer__nav-link" href="/uslugi">Услуги</a>
                </li>
                <li class="footer__nav-item">
                    <a class="footer__nav-link" href="/portfolio">Портфолио</a>
                </li>
                <li class="footer__nav-item">
                    <a class="footer__nav-link" href="/o-nas">О нас</a>
                </li>
                <li class="footer__nav-item">
                    <a class="footer__nav-link" href="/kontakty">Контакты</a>
                </li>
            </ul>
        </nav>
        <ul class="footer__contact-list">
            <li class="footer__contact-item">
                <h3 class="footer__contact-title">телефон</h3>
                <a class="footer__contact-desc" href="tel:+74991362923"
                >+7 (499) 136-29-23</a
                >
            </li>
            <li class="footer__contact-item">
                <h3 class="footer__contact-title">сотрудничество</h3>
                <a class="footer__contact-desc" href="mailto:info@potterfamily.ru"
                >info@potterfamily.ru</a
                >
            </li>
            <li class="footer__contact-item">
                <h3 class="footer__contact-title">Адрес</h3>
                <address class="footer__contact-desc">
                    РФ, г. Москва, ул. Тимирязевская, 1 пн-пт: 09:00 - 19:00
                </address>
            </li>
        </ul>
    </div>
    <div class="footer__box-bottom">
        <a class="footer__link-policy" href="#">Политика конфиденциальности</a>
        <ul class="footer__socials-list">
            <li class="footer__socials-item">
                <a class="footer__socials-link" href="">Facebook</a>
            </li>
            <li class="footer__socials-item">
                <a class="footer__socials-link" href="">Instagram</a>
            </li>
            <li class="footer__socials-item">
                <a class="footer__socials-link" href="">Youtube</a>
            </li>
            <li class="footer__socials-item">
                <a class="footer__socials-link" href="">Vk</a>
            </li>
        </ul>
        <strong class="footer__copyright">© 2007 - 2023 Potterfamily</strong>
    </div>

</footer>
</body>
</html>
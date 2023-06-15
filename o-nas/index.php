<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>
    <main>
        <section class="about">
            <p class="about__title">О НАС</p>
            <p class="about__discription">
                POTTERFAMILY — ОДИН ИЗ ВЕДУЩИХ ПОСТАВЩИКОВ УСЛУГ ВЫЕЗДНОГО КЕЙТЕРИНГА
                В МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ. МЫ НЕ БОИМСЯ ВЫПОЛНЯТЬ САМЫЕ СЛОЖНЫЕ И
                НЕОРДИНАРНЫЕ ПОЖЕЛАНИЯ.
            </p>
            <div class="about__content">
                <img
                        class="about__img"
                        alt="rich-table-img"
                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/about/about-rich-table.png"
                />
                <div class="about__content-wrapper">
                    <p class="about__subtitle">
                        ОСОБЕННОСТИ СЛУЖБЫ КЕЙТЕРИНГА «POTTERFAMILY»
                    </p>
                    <img
                            class="about__img-mobile"
                            alt="rich-table-img"
                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/about/about-rich-table-mobile.png"
                    />
                    <div class="about__features" id="root">
                        <div class="swiper-wrapper">
                            <div class="about__item swiper-slide item">
                                <img
                                        class="item__icon"
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/about/clock-icon.svg"
                                        alt="clock-icon"
                                />
                                <span class="item__title">Пунктуальность</span>
                                <p class="item__discription">
                                    Мы осуществляем бесплатную доставку блюд к точно
                                    назначенному вами времени. Наша команда профессионалов
                                    старается сделать каждое мероприятие незабываемым.
                                </p>
                            </div>

                            <div class="about__item swiper-slide item">
                                <img
                                        class="item__icon"
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/about/chef's-hat.svg"
                                        alt="clock-icon"
                                />
                                <span class="item__title">Квалификация</span>
                                <p class="item__discription">
                                    Наши повара — настоящие профессионалы, готовые приготовить
                                    любое изысканное блюдо для вас.
                                </p>
                            </div>

                            <div class="about__item swiper-slide item">
                                <img
                                        class="item__icon"
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/about/bell-icon.svg"
                                        alt="clock-icon"
                                />
                                <span class="item__title">Отзывчивость</span>
                                <p class="item__discription">
                                    Мы готовы прислушаться к любому вашему желанию и реализовать
                                    его. Для настоящих ценителей мяса, истинных вегетарианцов и
                                    приверженцов здорового образа жизни.
                                </p>
                            </div>

                            <div class="about__item swiper-slide item">
                                <img
                                        class="item__icon"
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/about/care-icon.svg"
                                        alt="clock-icon"
                                />
                                <span class="item__title">Забота</span>
                                <p class="item__discription">
                                    Мы не экономим на продуктах, услугах поваров и экспедиторов
                                    для того, чтобы на ваш стол точно в срок попадала только
                                    полезная и вкусная еда.
                                </p>
                            </div>
                        </div>
                    </div>
                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/shared/pagination-icon.svg" class="about__paggination-icon" alt="paggination-icon">
                </div>
            </div>
            <div class="about__mission mission">
                <div class="mission__wrapper">
                    <p class="mission__title">
                        ОКАЗАТЬ КАЧЕСТВЕННЫЙ СЕРВИС — НАША ГЛАВНАЯ МИССИЯ
                    </p>
                    <p class="mission__discription">
                        Обладая большим опытом в реализации нестандартных решений,
                        специалисты нашей компании помогут провести любое мероприятие до
                        8000 человек.
                    </p>
                    <div class="mission__button-wrapper">
                        <button class="mission__button">скачать презентацию</button>
                        <p class="mission__button-subtitles">
                            вся информация в одном месте
                        </p>
                    </div>
                </div>
                <img
                        class="mission__img"
                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/about/about-quot-table.png"
                        alt="table-with-quots-img"
                />
                <div class="mission__img-text">
                    <img
                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/about/quots.svg"
                            class="mission__icon"
                            alt="quots-icon"
                    />
                    <p class="mission__quote">
                        Основные наши приоритеты — это качество и высокий клиентский
                        сервис. Мы ценим и дорожим каждым нашим партнёром и клиентом,
                        надеемся радовать вас каждый день.
                    </p>
                    <p class="mission__author">— Александр, основатель PotterFamily</p>
                </div>
            </div>
        </section>
    </main>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="<?= DEFAULT_TEMPLATE_PATH ?>/js/about.js"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>


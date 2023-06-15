<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>
    <main>
        <section class="services">
            <div class="services__content">
                <p class="services__title-fragment services__title-fragment--first">
                    УНИКАЛЬНОЕ
                </p>

                <p class="services__title-fragment services__title-fragment--second">
                    КАЧЕСТВО
                </p>

                <p class="services__title-fragment services__title-fragment--third">
                    СЕРВИСА
                </p>

                <div class="services__img-wrapper">
                    <div class="services__img-box"></div>
                    <img
                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-backgraund-img-1.png"
                            alt="backgraund-food-img"
                            class="services__backgraund-img services__backgraund-img--first"
                    />
                </div>

                <div class="services__img-wrapper services__img-wrapper--second">
                    <div class="services__img-box services__img-box--second"></div>
                    <img
                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-backgraund-img-2.png"
                            alt="backgraund-food-img"
                            class="services__backgraund-img services__backgraund-img--second"
                    />
                    <img
                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-backgraund-img-2-mobile.png"
                            alt="backgraund-food-img"
                            class="services__backgraund-img services__backgraund-img--second services__backgraund-img--mobile"
                    />
                </div>

                <img
                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-backgraund-icon-1.png.png"
                        alt="service-gift-icon"
                        class="services__gift-icon"
                />

                <div class="services__discription">
                    <div class="services__discription-wrapper">
                        <p class="services__subtitle">ВЫБЕРИТЕ ПОДХОДЯЩУЮ ВАМ УСЛУГУ</p>
                        <p class="services__guarantees">
                            Мы гарантируем высокое качество и удобство для наших клиентов.
                            Наша команда постарается сделать любое мероприятие незабываемым
                            и оригинальным. С нами ваши гости не останутся равнодушными к
                            вашему событию!
                        </p>
                    </div>
                    <a class="services__link-circle" href="/portfolio"
                    ><div class="services__link-text">Портфолио</div></a
                    >
                </div>
            </div>

            <div class="services__slider slider">
                <p class="slider__subtitle">
                    Подберем для вас идеальное меню, учтем все пожелания и требования
                </p>
                <p class="slider__title">УСЛУГИ ОТ ПРОФЕССИОНАЛОВ</p>
                <div class="slider__line swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider__card card">
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-slider-item-1.png"
                                        class="card__img"
                                        alt="slider-card-img"
                                />
                                <p class="card__title">КЕЙТЕРИНГ</p>
                                <p class="card__subtitle">
                                    Коктейльный кейтеринг – это услуга по организации и
                                    проведению мероприятий с подачей коктейлей и закусок
                                </p>
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-backgraund-dots.svg"
                                        class="slider__backgraund-img"
                                        alt="backgraund-img-dots"
                                />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider__card card card--second">
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-slider-item-2.png"
                                        class="card__img"
                                        alt="slider-card-img"
                                />
                                <p class="card__title">ДЕТСКИЙ ФУРШЕТ</p>
                                <p class="card__subtitle">
                                    Коктейльный кейтеринг – это услуга по организации и
                                    проведению мероприятий с подачей коктейлей и закусок
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider__card card card--third">
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-slider-item-1.png"
                                        class="card__img"
                                        alt="slider-card-img"
                                />
                                <p class="card__title">КЕЙТЕРИНГ</p>
                                <p class="card__subtitle">
                                    Коктейльный кейтеринг – это услуга по организации и
                                    проведению мероприятий с подачей коктейлей и закусок
                                </p>
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-backgraund-dots.svg"
                                        class="slider__backgraund-img slider__backgraund-img--top"
                                        alt="backgraund-img-dots"
                                />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider__card card card--fourth">
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-slider-item-2.png"
                                        class="card__img"
                                        alt="slider-card-img"
                                />
                                <p class="card__title">ДЕТСКИЙ ФУРШЕТ</p>
                                <p class="card__subtitle">
                                    Коктейльный кейтеринг – это услуга по организации и
                                    проведению мероприятий с подачей коктейлей и закусок
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider__card card card--spot">
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-slider-item-1.png"
                                        class="card__img"
                                        alt="slider-card-img"
                                />
                                <p class="card__title">КЕЙТЕРИНГ</p>
                                <p class="card__subtitle">
                                    Коктейльный кейтеринг – это услуга по организации и
                                    проведению мероприятий с подачей коктейлей и закусок
                                </p>
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/services/services-backgraund-dots.svg"
                                        class="slider__backgraund-img"
                                        alt="backgraund-img-dots"
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <img
                        class="slider__pagination-icon"
                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/shared/pagination-icon.svg"
                        alt="pagginaton-icon"
                />
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="<?= DEFAULT_TEMPLATE_PATH ?>/js/services.js"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
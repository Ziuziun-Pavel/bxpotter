<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Potter Family - Главная");
?>
    <main>
        <section class="hero">
            <div class="hero__banner" id="banner">
                <h1 class="hero__title">КЕЙТЕРИНГ</h1>
                <div class="hero__box-outer">
                    <p class="hero__desc">
              <span class="hero__desc-word-1">ОРГАНИЗУЕМ</span
              ><span class="hero__desc-word-2">ДЛЯ ВАС</span
                        ><span class="hero__desc-word-3">КОРПОРАТИВНОЕ</span
                        ><span class="hero__desc-word-4"
                        ><a href="/menu"
                            ><svg
                                        width="49"
                                        height="44"
                                        viewBox="0 0 49 44"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                >
                    <path
                            d="M49 22C36.8497 22 27 12.1503 27 0M49 22C36.8497 22 27 31.8497 27 44M49 22H0"
                            stroke="#434248"
                            stroke-width="2"
                    ></path></svg></a
                            >ПИТАНИЕ</span
                        >
                    </p>
                </div>
                <div class="hero__box-inner" id="banner-animate">
                    <video preload="auto" muted loop id="banner-video" playsinline>
                        <source src="<?= DEFAULT_TEMPLATE_PATH ?>/video/banner.mp4" type="video/mp4"/>
                    </video>
                    <p class="hero__desc">
              <span class="hero__desc-word-1">ОРГАНИЗУЕМ</span
              ><span class="hero__desc-word-2">ДЛЯ ВАС</span
                        ><span class="hero__desc-word-3">КОРПОРАТИВНОЕ</span
                        ><span class="hero__desc-word-4"
                        ><a href="#"
                            ><svg
                                        width="49"
                                        height="44"
                                        viewBox="0 0 49 44"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                >
                    <path
                            d="M49 22C36.8497 22 27 12.1503 27 0M49 22C36.8497 22 27 31.8497 27 44M49 22H0"
                            stroke="#434248"
                            stroke-width="2"
                    ></path></svg></a
                            >ПИТАНИЕ</span
                        >
                    </p>
                </div>
            </div>
            <div class="hero__content container">
                <ul class="hero__content-list swiper">
                    <div class="swiper-wrapper">
                        <li class="hero__content-item swiper-slide">
                            <strong class="hero__content-desc"
                            ><span>1000+</span><span>ДОВОЛЬНЫХ КЛИЕНТОВ</span></strong
                            >
                        </li>
                        <li class="hero__content-item swiper-slide">
                            <strong class="hero__content-desc"
                            ><span>500+</span><span>СЦЕНАРИЕВ МЕРОПРИЯТИЙ</span></strong
                            >
                        </li>
                        <li class="hero__content-item swiper-slide">
                            <strong class="hero__content-desc"
                            ><span>100+</span
                                ><span>СОТРУДНИКОВ РАБОТАЕТ У НАС</span></strong
                            >
                        </li>
                    </div>
                </ul>
            </div>
        </section>
        <section class="rates container">
            <h2 class="rates__title">ТАРИФЫ</h2>
            <ul class="rates__list">
                <li class="rates__item">
                    <button class="rates__btn" id="light">
              <span class="rates__btn-word"
              ><span class="rates__btn-letter" style="transition-delay: 0s"
                  >Т</span
                  ><span class="rates__btn-letter" style="transition-delay: 10ms"
                  >а</span
                  ><span class="rates__btn-letter" style="transition-delay: 20ms"
                  >р</span
                  ><span class="rates__btn-letter" style="transition-delay: 30ms"
                  >и</span
                  ><span class="rates__btn-letter" style="transition-delay: 40ms"
                  >ф</span
                  ><span class="rates__btn-letter" style="transition-delay: 50ms"
                  > </span
                  ><span class="rates__btn-letter" style="transition-delay: 60ms"
                  >Л</span
                  ><span class="rates__btn-letter" style="transition-delay: 70ms"
                  >а</span
                  ><span class="rates__btn-letter" style="transition-delay: 80ms"
                  >й</span
                  ><span class="rates__btn-letter" style="transition-delay: 90ms"
                  >т</span
                  ></span
              ><span class="rates__btn-word"
                        ><span class="rates__btn-letter" style="transition-delay: 0s"
                            >Т</span
                            ><span class="rates__btn-letter" style="transition-delay: 10ms"
                            >а</span
                            ><span class="rates__btn-letter" style="transition-delay: 20ms"
                            >р</span
                            ><span class="rates__btn-letter" style="transition-delay: 30ms"
                            >и</span
                            ><span class="rates__btn-letter" style="transition-delay: 40ms"
                            >ф</span
                            ><span class="rates__btn-letter" style="transition-delay: 50ms"
                            > </span
                            ><span class="rates__btn-letter" style="transition-delay: 60ms"
                            >Л</span
                            ><span class="rates__btn-letter" style="transition-delay: 70ms"
                            >а</span
                            ><span class="rates__btn-letter" style="transition-delay: 80ms"
                            >й</span
                            ><span class="rates__btn-letter" style="transition-delay: 90ms"
                            >т</span
                            ></span
                        ></button
                    >
                    <picture class="rates__img-box active" data-tab="light"
                    >
                        <source
                                class="rates__img-1 rates__img"
                                srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/light/1.webp"/>
                        <img
                                class="rates__img-1 rates__img"
                                src="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/light/1.webp"
                                alt="light-1"/>
                        <source
                                class="rates__img-2 rates__img"
                                srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/light/2.webp"/>
                        <img
                                class="rates__img-2 rates__img"
                                src="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/light/2.webp"
                                alt="light-2"/>
                        <source
                                class="rates__img-3 rates__img"
                                srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/light/3.webp"/>
                        <img
                                class="rates__img-3 rates__img"
                                src="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/light/3.webp"
                                alt="light-3"
                        /></picture>
                </li>
                <li class="rates__item">
                    <button class="rates__btn" id="classic">
              <span class="rates__btn-word"
              ><span class="rates__btn-letter" style="transition-delay: 0s"
                  >Т</span
                  ><span class="rates__btn-letter" style="transition-delay: 10ms"
                  >а</span
                  ><span class="rates__btn-letter" style="transition-delay: 20ms"
                  >р</span
                  ><span class="rates__btn-letter" style="transition-delay: 30ms"
                  >и</span
                  ><span class="rates__btn-letter" style="transition-delay: 40ms"
                  >ф</span
                  ><span class="rates__btn-letter" style="transition-delay: 50ms"
                  > </span
                  ><span class="rates__btn-letter" style="transition-delay: 60ms"
                  >К</span
                  ><span class="rates__btn-letter" style="transition-delay: 70ms"
                  >л</span
                  ><span class="rates__btn-letter" style="transition-delay: 80ms"
                  >а</span
                  ><span class="rates__btn-letter" style="transition-delay: 90ms"
                  >с</span
                  ><span class="rates__btn-letter" style="transition-delay: 0.1s"
                  >с</span
                  ><span class="rates__btn-letter" style="transition-delay: 0.11s"
                  >и</span
                  ><span class="rates__btn-letter" style="transition-delay: 0.12s"
                  >к</span
                  ></span
              ><span class="rates__btn-word"
                        ><span class="rates__btn-letter" style="transition-delay: 0s"
                            >Т</span
                            ><span class="rates__btn-letter" style="transition-delay: 10ms"
                            >а</span
                            ><span class="rates__btn-letter" style="transition-delay: 20ms"
                            >р</span
                            ><span class="rates__btn-letter" style="transition-delay: 30ms"
                            >и</span
                            ><span class="rates__btn-letter" style="transition-delay: 40ms"
                            >ф</span
                            ><span class="rates__btn-letter" style="transition-delay: 50ms"
                            > </span
                            ><span class="rates__btn-letter" style="transition-delay: 60ms"
                            >К</span
                            ><span class="rates__btn-letter" style="transition-delay: 70ms"
                            >л</span
                            ><span class="rates__btn-letter" style="transition-delay: 80ms"
                            >а</span
                            ><span class="rates__btn-letter" style="transition-delay: 90ms"
                            >с</span
                            ><span class="rates__btn-letter" style="transition-delay: 0.1s"
                            >с</span
                            ><span class="rates__btn-letter" style="transition-delay: 0.11s"
                            >и</span
                            ><span class="rates__btn-letter" style="transition-delay: 0.12s"
                            >к</span
                            ></span
                        ></button
                    >
                    <picture class="rates__img-box" data-tab="classic"
                    >
                        <source
                                class="rates__img-1 rates__img"
                                srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/classic/1.webp"/>
                        <img
                                class="rates__img-1 rates__img"
                                src="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/classic/1.webp"
                                alt="classic-1"/>
                        <source
                                class="rates__img-2 rates__img"
                                srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/classic/2.webp"/>
                        <img
                                class="rates__img-2 rates__img"
                                src="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/classic/2.webp"
                                alt="classic-2"/>
                        <source
                                class="rates__img-3 rates__img"
                                srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/classic/3.webp"/>
                        <img
                                class="rates__img-3 rates__img"
                                src="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/classic/3.webp"
                                alt="classic-3"
                        /></picture>
                </li>
                <li class="rates__item">
                    <button class="rates__btn" id="gourmet">
              <span class="rates__btn-word"
              ><span class="rates__btn-letter" style="transition-delay: 0s"
                  >Т</span
                  ><span class="rates__btn-letter" style="transition-delay: 10ms"
                  >а</span
                  ><span class="rates__btn-letter" style="transition-delay: 20ms"
                  >р</span
                  ><span class="rates__btn-letter" style="transition-delay: 30ms"
                  >и</span
                  ><span class="rates__btn-letter" style="transition-delay: 40ms"
                  >ф</span
                  ><span class="rates__btn-letter" style="transition-delay: 50ms"
                  > </span
                  ><span class="rates__btn-letter" style="transition-delay: 60ms"
                  >Г</span
                  ><span class="rates__btn-letter" style="transition-delay: 70ms"
                  >у</span
                  ><span class="rates__btn-letter" style="transition-delay: 80ms"
                  >р</span
                  ><span class="rates__btn-letter" style="transition-delay: 90ms"
                  >м</span
                  ><span class="rates__btn-letter" style="transition-delay: 0.1s"
                  >а</span
                  ><span class="rates__btn-letter" style="transition-delay: 0.11s"
                  >н</span
                  ></span
              ><span class="rates__btn-word"
                        ><span class="rates__btn-letter" style="transition-delay: 0s"
                            >Т</span
                            ><span class="rates__btn-letter" style="transition-delay: 10ms"
                            >а</span
                            ><span class="rates__btn-letter" style="transition-delay: 20ms"
                            >р</span
                            ><span class="rates__btn-letter" style="transition-delay: 30ms"
                            >и</span
                            ><span class="rates__btn-letter" style="transition-delay: 40ms"
                            >ф</span
                            ><span class="rates__btn-letter" style="transition-delay: 50ms"
                            > </span
                            ><span class="rates__btn-letter" style="transition-delay: 60ms"
                            >Г</span
                            ><span class="rates__btn-letter" style="transition-delay: 70ms"
                            >у</span
                            ><span class="rates__btn-letter" style="transition-delay: 80ms"
                            >р</span
                            ><span class="rates__btn-letter" style="transition-delay: 90ms"
                            >м</span
                            ><span class="rates__btn-letter" style="transition-delay: 0.1s"
                            >а</span
                            ><span class="rates__btn-letter" style="transition-delay: 0.11s"
                            >н</span
                            ></span
                        ></button
                    >
                    <picture class="rates__img-box" data-tab="gourmet"
                    >
                        <source
                                class="rates__img-1 rates__img"
                                srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/gourmet/1.webp"/>
                        <img
                                class="rates__img-1 rates__img"
                                src="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/gourmet/1.webp"
                                alt="gourmet-1"/>
                        <source
                                class="rates__img-2 rates__img"
                                srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/gourmet/2.webp"/>
                        <img
                                class="rates__img-2 rates__img"
                                src="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/gourmet/2.webp"
                                alt="gourmet-2"/>
                        <source
                                class="rates__img-3 rates__img"
                                srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/gourmet/3.webp"/>
                        <img
                                class="rates__img-3 rates__img"
                                src="<?= DEFAULT_TEMPLATE_PATH ?>/img/rates/gourmet/3.webp"
                                alt="gourmet-3"
                        /></picture>
                </li>
            </ul>
            <div class="mobile-block-wrapper">
                <div class="swiper mobile-block">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="mobile-block__card-center">
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/card-img.png"
                                        alt="card-food-img"
                                        class="mobile-block__img"
                                />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mobile-block__card">
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/card-img.png"
                                        alt="card-food-img"
                                        class="mobile-block__img"
                                />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mobile-block__card-center">
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/card-img.png"
                                        alt="card-food-img"
                                        class="mobile-block__img"
                                />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="mobile-block__card">
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/card-img.png"
                                        alt="card-food-img"
                                        class="mobile-block__img"
                                />
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <p class="rates__desc">МИНИМАЛЬНАЯ СУММА ЧЕКА: ОТ 300 ₽.</p>
        </section>
        <section class="popular">
            <p class="popular__title" id="title-popular">
          <span class="popular__title-word"
          ><span class="popular__title-letter"
              ><span style="transition-delay: 0s">П</span></span
              ><span class="popular__title-letter"
              ><span style="transition-delay: 50ms">о</span></span
              ><span class="popular__title-letter"
              ><span style="transition-delay: 0.1s">п</span></span
              ><span class="popular__title-letter"
              ><span style="transition-delay: 0.15s">у</span></span
              ><span class="popular__title-letter"
              ><span style="transition-delay: 0.2s">л</span></span
              ><span class="popular__title-letter"
              ><span style="transition-delay: 0.25s">я</span></span
              ><span class="popular__title-letter"
              ><span style="transition-delay: 0.3s">р</span></span
              ><span class="popular__title-letter"
              ><span style="transition-delay: 0.35s">н</span></span
              ><span class="popular__title-letter"
              ><span style="transition-delay: 0.4s">ы</span></span
              ><span class="popular__title-letter"
              ><span style="transition-delay: 0.45s">е</span></span
              ></span
          ><span class="popular__title-word"
                ><span class="popular__title-letter"
                    ><span style="transition-delay: 0s">б</span></span
                    ><span class="popular__title-letter"
                    ><span style="transition-delay: 50ms">л</span></span
                    ><span class="popular__title-letter"
                    ><span style="transition-delay: 0.1s">ю</span></span
                    ><span class="popular__title-letter"
                    ><span style="transition-delay: 0.15s">д</span></span
                    ><span class="popular__title-letter"
                    ><span style="transition-delay: 0.2s">а</span></span
                    ></span
                >
            </p>
            <div class="popular__slider-box">
                <div class="popular__slider swiper container">
                    <div class="swiper-wrapper">
                        <div class="popular__card swiper-slide">
                            <div>
                                <div class="popular__card-box-main">
                                    <div class="popular__card-box-rating">
                                        <strong class="popular__card-rating">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-bread-icon.svg"
                                                    alt="menu-bread-icon"
                                                    class="popular__card-rating-icon"
                                            /><span class="popular__card-rating-ques"
                                            >?</span
                                            ></strong
                                        ><strong class="popular__card-classification"
                                        >эконом</strong
                                        >
                                        <button class="popular__card-add">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-add-icon.svg"
                                                    alt="menu-add-icon"
                                                    class="popular__add-icon"
                                            />
                                        </button>
                                        <div class="popular__card-box-popup">постное</div>
                                    </div>
                                    <div class="popular__card-box-title">
                                        <picture class="popular__card-box-img"
                                        >
                                            <source
                                                    class="popular__card-img"
                                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"/>
                                            <img
                                                    class="popular__card-img"
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"
                                                    alt="Продукт"
                                            /></picture>
                                        <h3 class="popular__card-title">ТОРТ НАПОЛЕОН</h3>
                                        <h4 class="popular__card-subtitle">русская кухня</h4>
                                    </div>
                                    <div class="popular__card-box-weight">
                                        <strong class="popular__card-weight"
                                        ><span>150</span>грамм</strong
                                        ><strong class="popular__card-calories"
                                        ><span>500</span>калорий</strong
                                        >
                                    </div>
                                </div>
                                <div class="popular__card-box-desc">
                                    <div class="popular__card-box-compound">
                                        <strong class="popular__card-title-desc">СОСТАВ</strong>
                                        <p class="popular__card-desc">
                                            вода, сахар, яичный желток, мука пшеничная, сахар
                                            тростниковый
                                        </p>
                                    </div>
                                    <p class="popular__card-desc-2">
                                        белки 6,3 г, жиры 11,9 г, углеводы 61,6 г
                                    </p>
                                </div>
                            </div>
                            <div class="popular__card-box-more">
                                <strong class="popular__card-box-price"
                                ><span class="popular__card-price"
                                    ><span>500</span><sup>₽</sup></span
                                    >стоимость</strong
                                >
                                <a class="popular__cart-button">
                                    <img
                                            class="popular__cart-button-icon"
                                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-cart-icon.svg"
                                            alt="menu-cart-icon"
                                    />
                                    <span class="popular__cart-button-label">в корзину</span>
                                </a>
                            </div>
                            <strong
                                    class="popular__text-animate"
                                    data-content="Правильное питание"
                            >Правильное питание</strong
                            >
                        </div>

                        <div class="popular__card swiper-slide">
                            <div>
                                <div class="popular__card-box-main">
                                    <div class="popular__card-box-rating">
                                        <strong class="popular__card-rating">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-bread-icon.svg"
                                                    alt="menu-bread-icon"
                                                    class="popular__card-rating-icon"
                                            /><span class="popular__card-rating-ques"
                                            >?</span
                                            ></strong
                                        ><strong class="popular__card-classification"
                                        >эконом</strong
                                        >
                                        <button class="popular__card-add">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-add-icon.svg"
                                                    alt="menu-add-icon"
                                                    class="popular__add-icon"
                                            />
                                        </button>
                                        <div class="popular__card-box-popup">постное</div>
                                    </div>
                                    <div class="popular__card-box-title">
                                        <picture class="popular__card-box-img"
                                        >
                                            <source
                                                    class="popular__card-img"
                                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"/>
                                            <img
                                                    class="popular__card-img"
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"
                                                    alt="Продукт"
                                            /></picture>
                                        <h3 class="popular__card-title">ТОРТ НАПОЛЕОН</h3>
                                        <h4 class="popular__card-subtitle">русская кухня</h4>
                                    </div>
                                    <div class="popular__card-box-weight">
                                        <strong class="popular__card-weight"
                                        ><span>150</span>грамм</strong
                                        ><strong class="popular__card-calories"
                                        ><span>500</span>калорий</strong
                                        >
                                    </div>
                                </div>
                                <div class="popular__card-box-desc">
                                    <div class="popular__card-box-compound">
                                        <strong class="popular__card-title-desc">СОСТАВ</strong>
                                        <p class="popular__card-desc">
                                            вода, сахар, яичный желток, мука пшеничная, сахар
                                            тростниковый
                                        </p>
                                    </div>
                                    <p class="popular__card-desc-2">
                                        белки 6,3 г, жиры 11,9 г, углеводы 61,6 г
                                    </p>
                                </div>
                            </div>
                            <div class="popular__card-box-more">
                                <strong class="popular__card-box-price"
                                ><span class="popular__card-price"
                                    ><span>500</span><sup>₽</sup></span
                                    >стоимость</strong
                                >
                                <a class="popular__cart-button">
                                    <img
                                            class="popular__cart-button-icon"
                                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-cart-icon.svg"
                                            alt="menu-cart-icon"
                                    />
                                    <span class="popular__cart-button-label">в корзину</span>
                                </a>
                            </div>
                            <strong
                                    class="popular__text-animate"
                                    data-content="Правильное питание"
                            >Правильное питание</strong
                            >
                        </div>

                        <div class="popular__card swiper-slide">
                            <div>
                                <div class="popular__card-box-main">
                                    <div class="popular__card-box-rating">
                                        <strong class="popular__card-rating">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-bread-icon.svg"
                                                    alt="menu-bread-icon"
                                                    class="popular__card-rating-icon"
                                            /><span class="popular__card-rating-ques"
                                            >?</span
                                            ></strong
                                        ><strong class="popular__card-classification"
                                        >эконом</strong
                                        >
                                        <button class="popular__card-add">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-add-icon.svg"
                                                    alt="menu-add-icon"
                                                    class="popular__add-icon"
                                            />
                                        </button>
                                        <div class="popular__card-box-popup">постное</div>
                                    </div>
                                    <div class="popular__card-box-title">
                                        <picture class="popular__card-box-img"
                                        >
                                            <source
                                                    class="popular__card-img"
                                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"/>
                                            <img
                                                    class="popular__card-img"
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"
                                                    alt="Продукт"
                                            /></picture>
                                        <h3 class="popular__card-title">ТОРТ НАПОЛЕОН</h3>
                                        <h4 class="popular__card-subtitle">русская кухня</h4>
                                    </div>
                                    <div class="popular__card-box-weight">
                                        <strong class="popular__card-weight"
                                        ><span>150</span>грамм</strong
                                        ><strong class="popular__card-calories"
                                        ><span>500</span>калорий</strong
                                        >
                                    </div>
                                </div>
                                <div class="popular__card-box-desc">
                                    <div class="popular__card-box-compound">
                                        <strong class="popular__card-title-desc">СОСТАВ</strong>
                                        <p class="popular__card-desc">
                                            вода, сахар, яичный желток, мука пшеничная, сахар
                                            тростниковый
                                        </p>
                                    </div>
                                    <p class="popular__card-desc-2">
                                        белки 6,3 г, жиры 11,9 г, углеводы 61,6 г
                                    </p>
                                </div>
                            </div>
                            <div class="popular__card-box-more">
                                <strong class="popular__card-box-price"
                                ><span class="popular__card-price"
                                    ><span>500</span><sup>₽</sup></span
                                    >стоимость</strong
                                >
                                <a class="popular__cart-button">
                                    <img
                                            class="popular__cart-button-icon"
                                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-cart-icon.svg"
                                            alt="menu-cart-icon"
                                    />
                                    <span class="popular__cart-button-label">в корзину</span>
                                </a>
                            </div>
                            <strong
                                    class="popular__text-animate"
                                    data-content="Правильное питание"
                            >Правильное питание</strong
                            >
                        </div>

                        <div class="popular__card swiper-slide">
                            <div>
                                <div class="popular__card-box-main">
                                    <div class="popular__card-box-rating">
                                        <strong class="popular__card-rating">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-bread-icon.svg"
                                                    alt="menu-bread-icon"
                                                    class="popular__card-rating-icon"
                                            /><span class="popular__card-rating-ques"
                                            >?</span
                                            ></strong
                                        ><strong class="popular__card-classification"
                                        >эконом</strong
                                        >
                                        <button class="popular__card-add">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-add-icon.svg"
                                                    alt="menu-add-icon"
                                                    class="popular__add-icon"
                                            />
                                        </button>
                                        <div class="popular__card-box-popup">постное</div>
                                    </div>
                                    <div class="popular__card-box-title">
                                        <picture class="popular__card-box-img"
                                        >
                                            <source
                                                    class="popular__card-img"
                                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"/>
                                            <img
                                                    class="popular__card-img"
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"
                                                    alt="Продукт"
                                            /></picture>
                                        <h3 class="popular__card-title">ТОРТ НАПОЛЕОН</h3>
                                        <h4 class="popular__card-subtitle">русская кухня</h4>
                                    </div>
                                    <div class="popular__card-box-weight">
                                        <strong class="popular__card-weight"
                                        ><span>150</span>грамм</strong
                                        ><strong class="popular__card-calories"
                                        ><span>500</span>калорий</strong
                                        >
                                    </div>
                                </div>
                                <div class="popular__card-box-desc">
                                    <div class="popular__card-box-compound">
                                        <strong class="popular__card-title-desc">СОСТАВ</strong>
                                        <p class="popular__card-desc">
                                            вода, сахар, яичный желток, мука пшеничная, сахар
                                            тростниковый
                                        </p>
                                    </div>
                                    <p class="popular__card-desc-2">
                                        белки 6,3 г, жиры 11,9 г, углеводы 61,6 г
                                    </p>
                                </div>
                            </div>
                            <div class="popular__card-box-more">
                                <strong class="popular__card-box-price"
                                ><span class="popular__card-price"
                                    ><span>500</span><sup>₽</sup></span
                                    >стоимость</strong
                                >
                                <a class="popular__cart-button">
                                    <img
                                            class="popular__cart-button-icon"
                                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-cart-icon.svg"
                                            alt="menu-cart-icon"
                                    />
                                    <span class="popular__cart-button-label">в корзину</span>
                                </a>
                            </div>
                            <strong
                                    class="popular__text-animate"
                                    data-content="Правильное питание"
                            >Правильное питание</strong
                            >
                        </div>

                        <div class="popular__card swiper-slide">
                            <div>
                                <div class="popular__card-box-main">
                                    <div class="popular__card-box-rating">
                                        <strong class="popular__card-rating">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-bread-icon.svg"
                                                    alt="menu-bread-icon"
                                                    class="popular__card-rating-icon"
                                            /><span class="popular__card-rating-ques"
                                            >?</span
                                            ></strong
                                        ><strong class="popular__card-classification"
                                        >эконом</strong
                                        >
                                        <button class="popular__card-add">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-add-icon.svg"
                                                    alt="menu-add-icon"
                                                    class="popular__add-icon"
                                            />
                                        </button>
                                        <div class="popular__card-box-popup">постное</div>
                                    </div>
                                    <div class="popular__card-box-title">
                                        <picture class="popular__card-box-img"
                                        >
                                            <source
                                                    class="popular__card-img"
                                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"/>
                                            <img
                                                    class="popular__card-img"
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"
                                                    alt="Продукт"
                                            /></picture>
                                        <h3 class="popular__card-title">ТОРТ НАПОЛЕОН</h3>
                                        <h4 class="popular__card-subtitle">русская кухня</h4>
                                    </div>
                                    <div class="popular__card-box-weight">
                                        <strong class="popular__card-weight"
                                        ><span>150</span>грамм</strong
                                        ><strong class="popular__card-calories"
                                        ><span>500</span>калорий</strong
                                        >
                                    </div>
                                </div>
                                <div class="popular__card-box-desc">
                                    <div class="popular__card-box-compound">
                                        <strong class="popular__card-title-desc">СОСТАВ</strong>
                                        <p class="popular__card-desc">
                                            вода, сахар, яичный желток, мука пшеничная, сахар
                                            тростниковый
                                        </p>
                                    </div>
                                    <p class="popular__card-desc-2">
                                        белки 6,3 г, жиры 11,9 г, углеводы 61,6 г
                                    </p>
                                </div>
                            </div>
                            <div class="popular__card-box-more">
                                <strong class="popular__card-box-price"
                                ><span class="popular__card-price"
                                    ><span>500</span><sup>₽</sup></span
                                    >стоимость</strong
                                >
                                <a class="popular__cart-button">
                                    <img
                                            class="popular__cart-button-icon"
                                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-cart-icon.svg"
                                            alt="menu-cart-icon"
                                    />
                                    <span class="popular__cart-button-label">в корзину</span>
                                </a>
                            </div>
                            <strong
                                    class="popular__text-animate"
                                    data-content="Правильное питание"
                            >Правильное питание</strong
                            >
                        </div>

                        <div class="popular__card swiper-slide">
                            <div>
                                <div class="popular__card-box-main">
                                    <div class="popular__card-box-rating">
                                        <strong class="popular__card-rating">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-bread-icon.svg"
                                                    alt="menu-bread-icon"
                                                    class="popular__card-rating-icon"
                                            /><span class="popular__card-rating-ques"
                                            >?</span
                                            ></strong
                                        ><strong class="popular__card-classification"
                                        >эконом</strong
                                        >
                                        <button class="popular__card-add">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-add-icon.svg"
                                                    alt="menu-add-icon"
                                                    class="popular__add-icon"
                                            />
                                        </button>
                                        <div class="popular__card-box-popup">постное</div>
                                    </div>
                                    <div class="popular__card-box-title">
                                        <picture class="popular__card-box-img"
                                        >
                                            <source
                                                    class="popular__card-img"
                                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"/>
                                            <img
                                                    class="popular__card-img"
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"
                                                    alt="Продукт"
                                            /></picture>
                                        <h3 class="popular__card-title">ТОРТ НАПОЛЕОН</h3>
                                        <h4 class="popular__card-subtitle">русская кухня</h4>
                                    </div>
                                    <div class="popular__card-box-weight">
                                        <strong class="popular__card-weight"
                                        ><span>150</span>грамм</strong
                                        ><strong class="popular__card-calories"
                                        ><span>500</span>калорий</strong
                                        >
                                    </div>
                                </div>
                                <div class="popular__card-box-desc">
                                    <div class="popular__card-box-compound">
                                        <strong class="popular__card-title-desc">СОСТАВ</strong>
                                        <p class="popular__card-desc">
                                            вода, сахар, яичный желток, мука пшеничная, сахар
                                            тростниковый
                                        </p>
                                    </div>
                                    <p class="popular__card-desc-2">
                                        белки 6,3 г, жиры 11,9 г, углеводы 61,6 г
                                    </p>
                                </div>
                            </div>
                            <div class="popular__card-box-more">
                                <strong class="popular__card-box-price"
                                ><span class="popular__card-price"
                                    ><span>500</span><sup>₽</sup></span
                                    >стоимость</strong
                                >
                                <a class="popular__cart-button">
                                    <img
                                            class="popular__cart-button-icon"
                                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-cart-icon.svg"
                                            alt="menu-cart-icon"
                                    />
                                    <span class="popular__cart-button-label">в корзину</span>
                                </a>
                            </div>
                            <strong
                                    class="popular__text-animate"
                                    data-content="Правильное питание"
                            >Правильное питание</strong
                            >
                        </div>

                        <div class="popular__card swiper-slide">
                            <div>
                                <div class="popular__card-box-main">
                                    <div class="popular__card-box-rating">
                                        <strong class="popular__card-rating">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-bread-icon.svg"
                                                    alt="menu-bread-icon"
                                                    class="popular__card-rating-icon"
                                            /><span class="popular__card-rating-ques"
                                            >?</span
                                            ></strong
                                        ><strong class="popular__card-classification"
                                        >эконом</strong
                                        >
                                        <button class="popular__card-add">
                                            <img
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/menu-add-icon.svg"
                                                    alt="menu-add-icon"
                                                    class="popular__add-icon"
                                            />
                                        </button>
                                        <div class="popular__card-box-popup">постное</div>
                                    </div>
                                    <div class="popular__card-box-title">
                                        <picture class="popular__card-box-img"
                                        >
                                            <source
                                                    class="popular__card-img"
                                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"/>
                                            <img
                                                    class="popular__card-img"
                                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/popular/1.webp"
                                                    alt="Продукт"
                                            /></picture>
                                        <h3 class="popular__card-title">ТОРТ НАПОЛЕОН</h3>
                                        <h4 class="popular__card-subtitle">русская кухня</h4>
                                    </div>
                                    <div class="popular__card-box-weight">
                                        <strong class="popular__card-weight"
                                        ><span>150</span>грамм</strong
                                        ><strong class="popular__card-calories"
                                        ><span>500</span>калорий</strong
                                        >
                                    </div>
                                </div>
                                <div class="popular__card-box-desc">
                                    <div class="popular__card-box-compound">
                                        <strong class="popular__card-title-desc">СОСТАВ</strong>
                                        <p class="popular__card-desc">
                                            вода, сахар, яичный желток, мука пшеничная, сахар
                                            тростниковый
                                        </p>
                                    </div>
                                    <p class="popular__card-desc-2">
                                        белки 6,3 г, жиры 11,9 г, углеводы 61,6 г
                                    </p>
                                </div>
                            </div>
                            <div class="popular__card-box-more">
                                <strong class="popular__card-box-price"
                                ><span class="popular__card-price"
                                    ><span>500</span><sup>₽</sup></span
                                    >стоимость</strong
                                >
                                <a class="popular__cart-button">
                                    <img
                                            class="popular__cart-button-icon"
                                            src="<?= DEFAULT_TEMPLATE_PATH ?>/img/menu/menu-cart-icon.svg"
                                            alt="menu-cart-icon"
                                    />
                                    <span class="popular__cart-button-label">в корзину</span>
                                </a>
                            </div>
                            <strong
                                    class="popular__text-animate"
                                    data-content="Правильное питание"
                            >Правильное питание</strong
                            >
                        </div>
                    </div>
                </div>
            </div>
            <img
                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/pagination-icon.svg"
                    class="popular__pagination-mobile-icon"
                    alt=""
            />
        </section>

        <section class="formats">
            <h2 class="formats__title container">ФОРМАТЫ МЕРОПРИЯТИЙ</h2>
            <div class="formats__slider swiper">
                <div class="swiper-wrapper">
                    <div class="formats__card swiper-slide formats__card-1">
                        <picture class="formats__card-img-box"
                        >
                            <source
                                    class="formats__card-img"
                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/1.webp"/>
                            <img
                                    class="formats__card-img"
                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/1.webp"
                                    alt="Продукт"
                            /></picture>
                        <h3 class="formats__card-title">ДЕТСКИЙ ФУРШЕТ</h3>
                        <p class="formats__card-desc">
                            торжественные и праздничные мероприятия
                        </p>
                        <a class="formats__card-btn" href="#">подробнее</a>
                    </div>
                    <div class="formats__card swiper-slide formats__card-2">
                        <picture class="formats__card-img-box"
                        >
                            <source
                                    class="formats__card-img"
                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/2.webp"/>
                            <img
                                    class="formats__card-img"
                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/2.webp"
                                    alt="Продукт"
                            /></picture>
                        <h3 class="formats__card-title">КОРПОРАТИВНОЕ ПИТАНИЕ</h3>
                        <p class="formats__card-desc">
                            торжественные и праздничные мероприятия
                        </p>
                        <a class="formats__card-btn" href="#">подробнее</a>
                    </div>
                    <div class="formats__card swiper-slide formats__card-3">
                        <picture class="formats__card-img-box"
                        >
                            <source
                                    class="formats__card-img"
                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/3.webp"/>
                            <img
                                    class="formats__card-img"
                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/3.webp"
                                    alt="Продукт"
                            /></picture>
                        <h3 class="formats__card-title">ОБЕД В ОФИС</h3>
                        <p class="formats__card-desc">
                            торжественные и праздничные мероприятия
                        </p>
                        <a class="formats__card-btn" href="#">подробнее</a>
                    </div>
                    <div class="formats__card swiper-slide formats__card-4">
                        <picture class="formats__card-img-box"
                        >
                            <source
                                    class="formats__card-img"
                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/4.webp"/>
                            <img
                                    class="formats__card-img"
                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/4.webp"
                                    alt="Продукт"
                            /></picture>
                        <h3 class="formats__card-title">КОФЕ БРЕЙК</h3>
                        <p class="formats__card-desc">
                            торжественные и праздничные мероприятия
                        </p>
                        <a class="formats__card-btn" href="#">подробнее</a>
                    </div>
                    <div class="formats__card swiper-slide formats__card-5">
                        <picture class="formats__card-img-box"
                        >
                            <source
                                    class="formats__card-img"
                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/5.webp"/>
                            <img
                                    class="formats__card-img"
                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/5.webp"
                                    alt="Продукт"
                            /></picture>
                        <h3 class="formats__card-title">ДЕТСКИЙ ФУРШЕТ</h3>
                        <p class="formats__card-desc">
                            торжественные и праздничные мероприятия
                        </p>
                        <a class="formats__card-btn" href="#">подробнее</a>
                    </div>
                    <div class="formats__card swiper-slide formats__card-6">
                        <picture class="formats__card-img-box"
                        >
                            <source
                                    class="formats__card-img"
                                    srcset="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/6.webp"/>
                            <img
                                    class="formats__card-img"
                                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/formats/6.webp"
                                    alt="Продукт"
                            /></picture>
                        <h3 class="formats__card-title">КОРПОРАТИВНОЕ ПИТАНИЕ</h3>
                        <p class="formats__card-desc">
                            торжественные и праздничные мероприятия
                        </p>
                        <a class="formats__card-btn" href="#">подробнее</a>
                    </div>
                </div>
            </div>
            <img
                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/pagination-icon.svg"
                    class="formats__pagination-mobile-icon"
                    alt=""
            />
        </section>

        <section class="reviews">
            <p class="reviews__desc" data-content="ОТЗЫВЫ О НАС">ОТЗЫВЫ О НАС</p>
            <div class="reviews__slider swiper">
                <div class="swiper-wrapper">
                    <div class="reviews__card swiper-slide">
                        <div class="reviews__card-box-review">
                            <strong class="reviews__card-user">ВИКТОР</strong>
                            <p class="reviews__card-user-desc">БОЛЬШОЙ ВЫБОР БЛЮД</p>
                        </div>
                        <div class="reviews__card-box-desc">
                            <p class="reviews__card-desc">
                                Вы останетесь приятно удивлены, как возможно вкусно и
                                незатратно провести время
                            </p>
                            <div class="reviews__card-box-rating">
                                <p class="reviews__card-date">01.02.23</p>
                                <strong class="reviews__card-stars"
                                >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                </strong>
                            </div>
                        </div>
                    </div>

                    <div class="reviews__card swiper-slide">
                        <div class="reviews__card-box-review">
                            <strong class="reviews__card-user">ВИКТОР</strong>
                            <p class="reviews__card-user-desc">БОЛЬШОЙ ВЫБОР БЛЮД</p>
                        </div>
                        <div class="reviews__card-box-desc">
                            <p class="reviews__card-desc">
                                Вы останетесь приятно удивлены, как возможно вкусно и
                                незатратно провести время
                            </p>
                            <div class="reviews__card-box-rating">
                                <p class="reviews__card-date">01.02.23</p>
                                <strong class="reviews__card-stars"
                                >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__card swiper-slide">
                        <div class="reviews__card-box-review">
                            <strong class="reviews__card-user">ВИКТОР</strong>
                            <p class="reviews__card-user-desc">БОЛЬШОЙ ВЫБОР БЛЮД</p>
                        </div>
                        <div class="reviews__card-box-desc">
                            <p class="reviews__card-desc">
                                Вы останетесь приятно удивлены, как возможно вкусно и
                                незатратно провести время
                            </p>
                            <div class="reviews__card-box-rating">
                                <p class="reviews__card-date">01.02.23</p>
                                <strong class="reviews__card-stars"
                                >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__card swiper-slide">
                        <div class="reviews__card-box-review">
                            <strong class="reviews__card-user">ВИКТОР</strong>
                            <p class="reviews__card-user-desc">БОЛЬШОЙ ВЫБОР БЛЮД</p>
                        </div>
                        <div class="reviews__card-box-desc">
                            <p class="reviews__card-desc">
                                Вы останетесь приятно удивлены, как возможно вкусно и
                                незатратно провести время
                            </p>
                            <div class="reviews__card-box-rating">
                                <p class="reviews__card-date">01.02.23</p>
                                <strong class="reviews__card-stars"
                                >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__card swiper-slide">
                        <div class="reviews__card-box-review">
                            <strong class="reviews__card-user">ВИКТОР</strong>
                            <p class="reviews__card-user-desc">БОЛЬШОЙ ВЫБОР БЛЮД</p>
                        </div>
                        <div class="reviews__card-box-desc">
                            <p class="reviews__card-desc">
                                Вы останетесь приятно удивлены, как возможно вкусно и
                                незатратно провести время
                            </p>
                            <div class="reviews__card-box-rating">
                                <p class="reviews__card-date">01.02.23</p>
                                <strong class="reviews__card-stars"
                                >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            class="active"
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                    <svg
                                            width="32"
                                            height="29"
                                            viewBox="0 0 32 29"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M15.0489 0.927052C15.3483 0.00574148 16.6517 0.00573981 16.9511 0.92705L19.8167 9.74671C19.9506 10.1587 20.3346 10.4377 20.7678 10.4377L30.0413 10.4377C31.0101 10.4377 31.4128 11.6773 30.6291 12.2467L23.1267 17.6976C22.7762 17.9522 22.6295 18.4036 22.7634 18.8156L25.6291 27.6353C25.9284 28.5566 24.8739 29.3227 24.0902 28.7533L16.5878 23.3024C16.2373 23.0478 15.7627 23.0478 15.4122 23.3024L7.90976 28.7533C7.12605 29.3227 6.07157 28.5566 6.37092 27.6353L9.2366 18.8156C9.37048 18.4036 9.22382 17.9522 8.87333 17.6976L1.37088 12.2467C0.587169 11.6773 0.989943 10.4377 1.95867 10.4377H11.2322C11.6654 10.4377 12.0494 10.1587 12.1833 9.74671L15.0489 0.927052Z"
                                                fill="#434248"
                                                fill-opacity="0.3"
                                        ></path>
                                    </svg
                                    >
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img
                    src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main/pagination-icon.svg"
                    class="reviews__pagination-mobile-icon"
                    alt=""
            />
        </section>

        <section class="choice">
            <div class="container">
                <h2 class="choice__title">
                    <span>ПОЧЕМУ НАС</span><span>ВЫБИРАЮТ</span>
                </h2>
                <p class="choice__desc">
                    Наша главная миссия: сделать вкусную и разнообразную еду на любое
                    предпочтение, попробуй идею на вкус!
                </p>
            </div>
            <div class="choice__slider swiper-container">
                <div class="swiper-wrapper">
                    <div
                            class="choice__card choice__card-1"
                            style="background-color: #c0eed6"
                    >
                        <h3 class="choice__card-title">Качественное обслуживание</h3>
                        <p class="choice__card-desc">
                            Организация мероприятий и доставка блюд происходят точно в срок
                        </p>
                    </div>
                    <div
                            class="choice__card choice__card-2"
                            style="background-color: #fff3e6"
                    >
                        <h3 class="choice__card-title">МЕРОПРИЯТИЕ ПОД КЛЮЧ</h3>
                        <p class="choice__card-desc">
                            Организуем мероприятие под ключ — от площадки, ведущего, диджея
                            и декора до клининга.
                        </p>
                    </div>
                    <div
                            class="choice__card choice__card-3"
                            style="background-color: #ffe5e3"
                    >
                        <h3 class="choice__card-title">БОЛЬШОЙ ВЫБОР БЛЮД</h3>
                        <p class="choice__card-desc">
                            Организация мероприятий и доставка блюд происходят точно в срок
                        </p>
                    </div>
                    <div
                            class="choice__card choice__card-4"
                            style="background-color: #d3d1dc"
                    >
                        <h3 class="choice__card-title">САМЫЕ ПРИЯТНЫЕ ЦЕНЫ</h3>
                        <p class="choice__card-desc">
                            Вы останетесь приятно удивлены, как возможно вкусно и незатратно
                            провести время
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="back-call">
            <div class="back-call__container container">
                <div class="back-call__box-left">
                    <h2 class="back-call__title">ЗАКАЖИТЕ ОБРАТНЫЙ ЗВОНОК</h2>
                    <p class="back-call__desc">
                        И мы вам перезвоним в течении 15 минут!
                    </p>
                    <ul class="back-call__contacts-list">
                        <li class="back-call__contacts-item">
                <span
                ><svg
                            width="22"
                            height="22"
                            viewBox="0 0 22 22"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                            d="M18.9016 7.74608C17.9391 3.51114 14.2449 1.60449 11 1.60449C11 1.60449 11 1.60449 10.9908 1.60449C7.75496 1.60449 4.05163 3.50197 3.08913 7.73692C2.01663 12.4669 4.9133 16.4726 7.53496 18.9934C8.50662 19.9284 9.75329 20.3959 11 20.3959C12.2466 20.3959 13.4933 19.9284 14.4558 18.9934C17.0774 16.4726 19.9741 12.476 18.9016 7.74608ZM11 12.3385C9.40495 12.3385 8.11246 11.046 8.11246 9.45106C8.11246 7.85608 9.40495 6.5636 11 6.5636C12.5949 6.5636 13.8874 7.85608 13.8874 9.45106C13.8874 11.046 12.5949 12.3385 11 12.3385Z"
                            fill="#E9743F"
                    ></path></svg
                    ></span>
                            <address class="back-call__contacts-desc">
                                Москва, улица 1905 года, д, 121
                            </address>
                        </li>
                        <li class="back-call__contacts-item">
                <span
                ><svg
                            width="22"
                            height="22"
                            viewBox="0 0 22 22"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                            d="M20.1392 16.8024C20.1392 17.1324 20.0659 17.4716 19.91 17.8016C19.7542 18.1316 19.5525 18.4433 19.2867 18.7366C18.8375 19.2316 18.3425 19.5891 17.7834 19.8183C17.2334 20.0474 16.6375 20.1666 15.9959 20.1666C15.0609 20.1666 14.0617 19.9466 13.0075 19.4974C11.9534 19.0483 10.8992 18.4433 9.85421 17.6824C8.80004 16.9124 7.80087 16.0599 6.84754 15.1158C5.90337 14.1624 5.05087 13.1633 4.29004 12.1183C3.53837 11.0733 2.93337 10.0283 2.49337 8.99242C2.05337 7.94742 1.83337 6.94825 1.83337 5.99492C1.83337 5.37159 1.94337 4.77575 2.16337 4.22575C2.38337 3.66659 2.73171 3.15325 3.21754 2.69492C3.80421 2.11742 4.44587 1.83325 5.12421 1.83325C5.38087 1.83325 5.63754 1.88825 5.86671 1.99825C6.10504 2.10825 6.31587 2.27325 6.48087 2.51159L8.60754 5.50909C8.77254 5.73825 8.89171 5.94909 8.97421 6.15075C9.05671 6.34325 9.10254 6.53575 9.10254 6.70992C9.10254 6.92992 9.03837 7.14992 8.91004 7.36075C8.79087 7.57159 8.61671 7.79159 8.39671 8.01159L7.70004 8.73575C7.59921 8.83659 7.55337 8.95575 7.55337 9.10242C7.55337 9.17575 7.56254 9.23992 7.58087 9.31325C7.60837 9.38659 7.63587 9.44159 7.65421 9.49659C7.81921 9.79909 8.10337 10.1933 8.50671 10.6699C8.91921 11.1466 9.35921 11.6324 9.83587 12.1183C10.3309 12.6041 10.8075 13.0533 11.2934 13.4658C11.77 13.8691 12.1642 14.1441 12.4759 14.3091C12.5217 14.3274 12.5767 14.3549 12.6409 14.3824C12.7142 14.4099 12.7875 14.4191 12.87 14.4191C13.0259 14.4191 13.145 14.3641 13.2459 14.2633L13.9425 13.5758C14.1717 13.3466 14.3917 13.1724 14.6025 13.0624C14.8134 12.9341 15.0242 12.8699 15.2534 12.8699C15.4275 12.8699 15.6109 12.9066 15.8125 12.9891C16.0142 13.0716 16.225 13.1908 16.4542 13.3466L19.4884 15.5008C19.7267 15.6658 19.8917 15.8583 19.9925 16.0874C20.0842 16.3166 20.1392 16.5458 20.1392 16.8024Z"
                            fill="#E9743F"
                    ></path></svg></span
                ><a class="back-call__contacts-desc" href="tel:+79999999999"
                            >+7 (999) 999-99-99</a
                            >
                        </li>
                        <li class="back-call__contacts-item">
                <span
                ><svg
                            width="22"
                            height="22"
                            viewBox="0 0 22 22"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                            d="M15.5834 3.20825H6.41671C3.66671 3.20825 1.83337 4.58325 1.83337 7.79158V14.2083C1.83337 17.4166 3.66671 18.7916 6.41671 18.7916H15.5834C18.3334 18.7916 20.1667 17.4166 20.1667 14.2083V7.79158C20.1667 4.58325 18.3334 3.20825 15.5834 3.20825ZM16.0142 8.79075L13.145 11.0824C12.54 11.5683 11.77 11.8066 11 11.8066C10.23 11.8066 9.45087 11.5683 8.85504 11.0824L5.98587 8.79075C5.69254 8.55242 5.64671 8.11242 5.87587 7.81908C6.11421 7.52575 6.54504 7.47075 6.83837 7.70908L9.70754 10.0008C10.4042 10.5599 11.5867 10.5599 12.2834 10.0008L15.1525 7.70908C15.4459 7.47075 15.8859 7.51658 16.115 7.81908C16.3534 8.11242 16.3075 8.55242 16.0142 8.79075Z"
                            fill="#E9743F"
                    ></path></svg></span
                ><a
                                    class="back-call__contacts-desc"
                                    href="mailto:example@mail.com"
                            >example@mail.com</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="back-call__box-right">
                    <form id="form-feedback" class="back-call__form">
                        <h3 class="back-call__form-title">PotterFamily</h3>
                        <p class="back-call__form-desc">Запрос на обратный звонок</p>
                        <svg
                                class="back-call__form-ellipsis"
                                width="422"
                                height="8"
                                viewBox="0 0 422 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <circle
                                    cx="4"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="22"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="40"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="58"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="76"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="94"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="112"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="130"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="148"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="166"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="184"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="202"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="220"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="238"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="256"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="274"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="292"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="310"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="328"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="346"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="364"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="382"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="400"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="418"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                        </svg>
                        <ul class="back-call__form-list">
                            <li class="back-call__form-item">
                                <label class="back-call__form-label" for="name"
                                >Ваше имя</label
                                >
                                <input
                                        class="back-call__form-input"
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Иван"
                                />
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-error-icon.svg"
                                        class="form__error-icon"
                                        alt="error-icon"
                                />
                            </li>
                            <li class="back-call__form-item">
                                <label class="back-call__form-label" for="email"
                                >E-mail</label
                                >
                                <input
                                        class="back-call__form-input"
                                        type="text"
                                        id="email"
                                        name="email"
                                        placeholder="example@mail.com"
                                />
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-error-icon.svg"
                                        class="form__error-icon"
                                        alt="error-icon"
                                />
                            </li>
                            <li class="back-call__form-item">
                                <label class="back-call__form-label" for="tel"
                                >Номер телефона</label
                                >
                                <input
                                        class="back-call__form-input"
                                        type="tel"
                                        id="tel"
                                        name="tel"
                                        placeholder="+7 (999)-99-99"
                                />
                                <img
                                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/payment/payment-error-icon.svg"
                                        class="form__error-icon"
                                        alt="error-icon"
                                />
                            </li>
                        </ul>
                        <svg
                                class="back-call__form-ellipsis"
                                width="422"
                                height="8"
                                viewBox="0 0 422 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <circle
                                    cx="4"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="22"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="40"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="58"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="76"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="94"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="112"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="130"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="148"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="166"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="184"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="202"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="220"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="238"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="256"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="274"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="292"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="310"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="328"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="346"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="364"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="382"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="400"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="418"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                        </svg>
                        <div class="back-call__form-box">
                            <button class="back-call__form-btn" type="submit">отправить</button>
                            <p class="back-call__form-btn-desc">
                                Нажимая на кнопку “отправить”, Вы даете согласие на обработку
                                персональных данных
                            </p>
                        </div>
                        <svg
                                class="back-call__form-ellipsis"
                                width="422"
                                height="8"
                                viewBox="0 0 422 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <circle
                                    cx="4"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="22"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="40"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="58"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="76"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="94"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="112"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="130"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="148"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="166"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="184"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="202"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="220"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="238"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="256"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="274"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="292"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="310"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="328"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="346"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="364"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="382"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="400"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                            <circle
                                    cx="418"
                                    cy="4"
                                    r="4"
                                    fill="#434248"
                                    fill-opacity="0.5"
                            ></circle>
                        </svg
                        >
                        <svg
                                class="back-call__form-barcode"
                                width="377"
                                height="67"
                                viewBox="0 0 377 67"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#clip0_364_1841)">
                                <path
                                        d="M5.48716 3.90845H3.87329V67.0001H5.48716V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M13.5565 3.90845H11.9426V67.0001H13.5565V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M18.3981 3.90845H15.1704V67.0001H18.3981V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M26.4678 3.90845H21.6262V67.0001H26.4678V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M32.923 3.90845H31.3091V67.0001H32.923V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M47.4473 3.90845H34.5364V67.0001H47.4473V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M55.5174 3.90845H53.9036V67.0001H55.5174V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M58.745 3.90845H57.1311V67.0001H58.745V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M63.5864 3.90845H60.3586V67.0001H63.5864V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M73.2694 3.90845H71.6555V67.0001H73.2694V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M79.7254 3.90845H78.1116V67.0001H79.7254V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M87.7946 3.90845H84.5669V67.0001H87.7946V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M97.4778 3.90845H89.4084V67.0001H97.4778V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M102.32 3.90845H99.092V67.0001H102.32V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M105.547 3.90845H103.933V67.0001H105.547V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M113.616 3.90845H112.002V67.0001H113.616V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M123.3 3.90845H115.231V67.0001H123.3V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M136.211 3.90845H132.983V67.0001H136.211V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M144.28 3.90845H141.052V67.0001H144.28V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M149.122 3.90845H147.508V67.0001H149.122V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M153.963 3.90845H150.735V67.0001H153.963V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M163.646 3.90845H158.805V67.0001H163.646V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M168.488 3.90845H166.874V67.0001H168.488V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M176.557 3.90845H170.102V67.0001H176.557V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M183.013 3.90845H178.171V67.0001H183.013V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M191.082 3.90845H186.24V67.0001H191.082V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M205.607 3.90845H195.924V67.0001H205.607V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M213.677 3.90845H212.063V67.0001H213.677V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M223.36 3.90845H215.29V67.0001H223.36V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M233.042 3.90845H229.815V67.0001H233.042V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M237.884 3.90845H236.271V67.0001H237.884V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M241.112 3.90845H239.498V67.0001H241.112V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M244.34 3.90845H242.726V67.0001H244.34V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M249.181 3.90845H247.568V67.0001H249.181V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M258.864 3.90845H254.023V67.0001H258.864V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M265.32 3.90845H260.479V67.0001H265.32V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M271.775 3.90845H270.161V67.0001H271.775V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M286.301 3.90845H273.39V67.0001H286.301V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M294.37 3.90845H289.529V67.0001H294.37V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M297.598 3.90845H295.984V67.0001H297.598V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M307.281 3.90845H305.667V67.0001H307.281V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M313.736 3.90845H308.895V67.0001H313.736V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M321.806 3.90845H316.964V67.0001H321.806V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M331.489 3.90845H328.261V67.0001H331.489V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M334.717 3.90845H333.103V67.0001H334.717V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M342.786 3.90845H337.945V67.0001H342.786V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M349.242 3.90845H344.4V67.0001H349.242V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M360.538 3.90845H354.083V67.0001H360.538V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M371.836 3.90845H370.222V67.0001H371.836V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                                <path
                                        d="M375.063 3.90845H373.449V67.0001H375.063V3.90845Z"
                                        fill="#434248"
                                        fill-opacity="0.5"
                                ></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_364_1841">
                                    <rect width="377" height="67" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </form>
                </div>
            </div>
        </section>

    </main>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="contacts__info">
                <div class="contacts__list">
                    <p class="contacts__item item">
                        <span class="item__title item__title--phone">Телефон</span>
                        <span class="item__line item__line--phone"></span>
                        <a class="item__info item__info--phone" href="tel:+74991362923"
                        ><?= $arItem["PROPERTIES"]["TELEPHONE"]["VALUE"] ?></a
                        >
                    </p>

                    <p class="contacts__item item">
                        <span class="item__title">Адрес</span>
                        <span class="item__line"></span>
                        <a class="item__info item__info--adress"
                        >МОСКВА<br> УЛ. ТИМИРЯЗЕВСКАЯ, ДОМ 1<br>
                            ПН-ПТ 09:00 - 19:00</a
                        >
                    </p>

                    <p class="contacts__item item">
                        <span class="item__title">Почта</span>
                        <span class="item__line"></span>
                        <a class="item__info" href="mailto:<?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?>"
                        ><?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?></a
                        >
                    </p>
                </div>
                <img
                        class="contacts__img"
                        alt="main-entry-button"
                        src="<?= DEFAULT_TEMPLATE_PATH ?>/img/contacts/contacts-circle.png"
                />
            </div>

<?endforeach;?>

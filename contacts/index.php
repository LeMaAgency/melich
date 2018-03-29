<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="flex-container flex-direction-tablet">
    <div class="contacts-content contacts__column">
        <!--Start hamburger-btn-->
        <div class="hamburger-btn hamburger-btn--darken">
            <button class="hamburger hamburger--collapse" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
        </div>
        <!--End hamburger-btn-->
        <div class="contacts-content__wrap">
            <div class="heading">
                <h1 class="heading__title"><?=$APPLICATION->ShowTitle(false)?></h1>
            </div>
            <div class="contacts-content__top">
                <div class="contacts-content__phone"><span> <? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/contact_block/phone.php'); ?></span>
                </div>
                <div class="contacts-content__email"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/contact_block/email.php'); ?>
                </div>
                <div class="contacts-content__socials socials socials--row">
                    <ul class="socials__list">
                        <li class="socials__item">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/social_links/vk.php'); ?>
                        </li>
                        <li class="socials__item">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/social_links/insagram.php'); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contacts-content__section">
                <h2 class="contacts-content__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/address/title.php'); ?></h2>
                <div class="contacts-content__text">
                    <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/address/text.php'); ?></p>
                </div>
            </div>
            <div class="contacts-content__section">
                <h2 class="contacts-content__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/work_time/title.php'); ?></h2>
                <div class="contacts-content__text">
                    <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/work_time/text_1.php'); ?></p>
                    <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/work_time/text_2.php'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts-map contacts__column" id="map"></div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
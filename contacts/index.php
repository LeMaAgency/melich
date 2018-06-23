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
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:44.05557621171608;s:10:\"yandex_lon\";d:42.92265358399193;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:42.9230371398811;s:3:\"LAT\";d:44.05532571657118;s:4:\"TEXT\";s:63:\"г. Ессентуки, ул. Пятигорская дом 169\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "auto",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
			<br/>
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
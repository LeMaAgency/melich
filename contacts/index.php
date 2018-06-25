<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="flex-container flex-direction-tablet flex-full">
    <div class="contacts-content contacts__column">
        <!--Start hamburger-btn-->
        <div class="hamburger-btn hamburger-btn--darken">
            <button class="hamburger hamburger--collapse" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
        </div>
        <!--End hamburger-btn-->
        <div class="">
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

        </div>
    </div>
    <div class="contacts-map contacts__column" id="map"></div>
    </div>
    <div class="row row-table">
        <div class="col-12">
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
        <div class="col-12">
            <section class="page__index__feedback">
                <!--        <div class="page__index__feedback__title">-->
                <!--            <span>специальное предложение для вас</span>-->
                <!--        </div>-->
                <div class="page__index__feedback__text">
                    <span>Оставьте ваши контактные данные и мы свяжемся с Вами в бижайшее время</span>

                </div>
                <form class="page__index__feedback__form form" action="" method="post" data-js-form-mail="">
                    <div class="form-wrap">
                        <div class="form-input">
                            <input type="text" name="name" class="form-input-control" placeholder="ваше имя*">
                        </div>
                        <div class="form-input">
                            <input type="text" name="phone" class="form-input-control" placeholder="Введите ваш телефон*" data-js-mask-phone="">
                        </div>
                        <label class="form-checkbox">
                            <input class="form-checkbox-control" type="checkbox" name="personal">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 25" class="form-checkbox-svg">
                                <use xlink:href="#form-checkbox-svg-line" class="form-checkbox-svg-line"></use>
                                <use xlink:href="#form-checkbox-svg-box" class="form-checkbox-svg-box"></use>
                                <use xlink:href="#form-checkbox-svg-check" class="form-checkbox-svg-check"></use>
                                <use xlink:href="#form-checkbox-svg-circle" class="form-checkbox-svg-circle"></use>
                            </svg>
                            <span class="form-checkbox-text">Я согласен на обработку <a href="#popup-personal" data-fancybox="">персональных данных</a></span>
                        </label>
                        <div class="popup" id="popup-personal">
                            <div class="popup-wrap">
                                <div class="popup-personal">
                                    <b>1.Сбор информации</b><br><br>
                                    Мы собираем информацию, когда вы регистрируетесь на сайте, заходите на свой аккаунт, совершаете покупку, участвуете в акции и/или выходите из аккаунта. Информация включает ваше имя, адрес электронной почты, номер телефона и данные по кредитной карте.<br>
                                    Кроме того, мы автоматически регистрируем ваш компьютер и браузер, включая IP, ПО и аппаратные данные, а также адрес запрашиваемой страницы.<br>
                                    <br>
                                    <b>2. Использование информации</b><br><br>
                                    Информация, которую мы получаем от вас, может быть использована, чтобы:<br>
                                    * Сделать услуги соответствующими вашим индивидуальным запросам<br>
                                    * Предложить персонализированную рекламу<br>
                                    * Улучшить наш сайт<br>
                                    * Улучшить систему поддержки пользователей<br>
                                    * Связаться с вами по электронной почте<br>
                                    * Устроить акцию, конкурс или организовать исследование<br>
                                    <br>
                                    <b>3. Защита личных данных при онлайн-продажах</b><br><br>
                                    Мы являемся единственным владельцем информации, собранной на данном сайте. Ваши личные данные не будут проданы или каким-либо образом переданы третьим лицам по каким-либо причинам, за исключением необходимых данных для выполнения запроса или транзакции, например, при отправке заказа.<br>
                                    <br>
                                    <b>4. Раскрытие информации третьим лицам</b><br><br>
                                    Мы не продаем, не обмениваем и не передаем личные данные сторонним компаниям. Это не относится к надежным компаниям, которые помогают нам в работе сайта и ведении бизнеса при условии, что они соглашаются сохранять конфиденциальность информации.<br>
                                    Мы готовы делиться информацией, чтобы предотвратить преступления или помочь в их расследовании, если речь идет о подозрении на мошенничество, действиях, физически угрожающих безопасности людей, нарушениях правил использования или в случаях, когда это предусмотрено законом.<br>
                                    Неконфиденциальная информация может быть предоставлена другим компаниям в целях маркетинга, рекламы и т.д.<br>
                                    <br>
                                    <b>5. Защита информации</b><br><br>
                                    Мы используем различные средства безопасности, чтобы гарантировать сохранность ваших личных данных. К вашим услугам самое современное шифрование. VpnMentor также защищает ваши данные в режиме оффлайн. Только те сотрудники, которые работают с конкретным заданием (например, техническая поддержка или проведение оплаты) получают доступ к личным данным. Сервера и компьютеры, на которых записана конфиденциальная информация, находятся в безопасном окружении.<br>
                                    Использование файлов «cookie»<br>
                                    Наши файлы «cookie» используются для улучшения доступа к сайту и определения повторных посещений. Кроме того, они позволяют отследить наиболее интересующие запросы. Файлы «cookie» не передают никакую конфиденциальную информацию.<br>
                                    <br>
                                    <b>6. Отказ от подписки</b><br><br>
                                    Мы используем электронную почту, чтобы предоставить вам информацию по вашему заказу, новостям компании, информации по продуктам и т.д. Если вы желаете отказаться от подписки, в каждом письме даны подробные инструкции, как вы можете это сделать.<br>
                                    <br>
                                    <b>7. Согласие</b><br><br>
                                    Пользуясь услугами нашего сайта, вы автоматически соглашаетесь с нашей политикой конфиденциальности.
                                </div>
                            </div>
                        </div>
                        <button class="btn">
                            <span class="btn-control">Связаться с нами</span>
                        </button>
                    </div>
                    <div class="form-success">
                        <span>Ваше сообщение успешно отправлено</span>
                    </div>
                </form>
            </section>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
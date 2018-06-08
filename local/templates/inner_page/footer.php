<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<footer class="page-footer">
    <p class="page-footer__company">
        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/footer/copyright.php'); ?>
    </p>
    <? $APPLICATION->IncludeFile(SITE_DIR . 'include/inner_page/footer/developer.php'); ?>
</footer>
<div id="feedback-form">
    <h2>Заказать звонок</h2>
    <?$APPLICATION->IncludeComponent(
        "lema:form.ajax",
        "call",
        Array(
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "EVENT_TYPE" => "57",
            "FORM_152_FZ" => "Согласен(-на) на обработку персональных данных",
            "FORM_ACTION" => "",
            "FORM_BTN_TITLE" => "Отправить",
            "FORM_CLASS" => "ajax-form find_price_form call",
            "FORM_FIELDS" => "[{\"name\":\"name\",\"type\":\"text\",\"title\":\"Имя\",\"placeholder\":\"Имя\",\"default\":\"\",\"required\":\"Y\"},{\"name\":\"phone\",\"type\":\"tel\",\"title\":\"Телефон\",\"placeholder\":\"Телефон\",\"default\":\"\",\"required\":\"Y\"}]",
            "FORM_SUCCESS_FUNCTION" => "\\$.fancybox.open(\"Ваше сообщение успешно отправлено\")",
            "FORM_SUCCESS_FUNCTION_CORRECT_JSON" => "Y",
            "IBLOCK_ID" => "11",
            "IBLOCK_TYPE" => "feedback",
            "NEED_SAVE_TO_IBLOCK" => "Y",
            "NEED_SEND_EMAIL" => "Y"
        )
    );?>
</div>
</main>
</div>
</body>

</html>
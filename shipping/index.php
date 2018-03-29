<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка и оплата");
?>

    <section class="shipping">
        <div class="flex-container flex-reverse-mobile">
            <div class="shipping__img">
                <img src="<?=SITE_DIR."assets/inner_page/img/shipping-photo.jpg"?>" data-object-fit="cover" alt="">
            </div>
            <div class="shipping__description">
                <div class="shipping__note">
                    <p> <? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/notfication/title.php'); ?></p>
                </div>
                <div class="shipping__info">
                    <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/notfication/text.php'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!--End shipping-->
    <!--Start shipping-->
    <section class="shipping">
        <div class="flex-container flex-direction-tablet">
            <div class="shipping__left">
                <div class="shipping__left-wrap">
                    <div class="heading">
                        <h2 class="heading__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/shipping_terms/title.php'); ?></h2>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "blocks_shipping_terms",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "8",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "shipping_terms",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "blocks_shipping_terms"
                        ),
                        false
                    );?>
                    <div class="shipping__note">
                        <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/shipping_terms/text.php'); ?></p>
                    </div>
                    <div class="shipping__question"><em><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/shipping_terms/notification.php'); ?></em>
                    </div>
                </div>
            </div>
            <div class="shipping__right">
                <div class="shipping__right-wrap" style="background-image: url('<?=SITE_DIR."assets/inner_page/img/shipping-phone-bg.jpg"?>');">
                    <div class="shipping__card">
                        <div class="shipping__card-inner">
                            <div class="shipping__card-header">
                                <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/contact_block/title.php'); ?></p>
                            </div>
                            <div class="shipping__card-body"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/contact_block/phone.php'); ?>
                            </div>
                            <div class="shipping__card-footer">
                                <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/contact_block/work_time.php'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End shipping-->
    <!--Start shipping-->
    <section class="shipping">
        <div class="flex-container flex-reverse flex-direction-tablet">
            <div class="shipping__left">
                <div class="shipping__delivery">
                    <div class="shipping__delivery-wrap">
                        <div class="heading">
                            <h2 class="heading__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/shipping_terms_2/title.php'); ?></h2>
                        </div>
                        <div class="shipping__info">
                            <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/shipping_terms_2/text.php'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="shipping__return">
                    <div class="shipping__return-wrap">
                        <div class="heading">
                            <h2 class="heading__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/return/title.php'); ?></h2>
                        </div>
                        <div class="shipping__info">
                            <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/return/text_1.php'); ?></p>
                        </div>
                        <div class="shipping__info">
                            <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/return/text_2.php'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shipping__right">
                <div class="shipping__right-wrap" style="background-image: url('<?=SITE_DIR."assets/inner_page/img/shipping-book-bg.jpg"?>');">
                    <div class="shipping__card shipping__card--button" role="button">
                        <div class="shipping__card-inner shipping__card-inner-brown">
                            <div class="shipping__card-center">
                                <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/terms_of_sale/button_caption.php'); ?></p>
                            </div>
                            <div class="shipping__card-icon">
                                <img src="<?=SITE_DIR."assets/inner_page/img/icon/list.png"?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shipping-overlay">
                <div class="shipping-modal" tabindex="-1">
                    <button class="shipping-modal__close close-js" type="button"></button>
                    <div class="shipping-modal__wrap">
                        <div class="shipping-modal__header">
                            <h3 class="shipping-modal__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/terms_of_sale/title.php'); ?></h3>
                        </div>
                        <div class="shipping-modal__content">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/shipping/terms_of_sale/text.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Для Вас");
?>
    <section class="about">
        <div class="flex-container flex-reverse-tablet">
            <div class="column-large about-content">
                <div class="content-container about-content__container">
                    <div class="about-content__section">
                        <div class="heading">
                            <h2 class="heading__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/history/title.php'); ?></h2>
                        </div>
                        <div class="about-content__info">
                            <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/history/text_1.php'); ?></p>
                            <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/history/text_2.php'); ?></p>
                        </div>
                    </div>
                    <div class="about-content__section">
                        <div class="heading">
                            <h2 class="heading__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/our_value/title.php'); ?></h2>
                        </div>
                        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"blocks_our_value", 
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
		"PARENT_SECTION_CODE" => "our_value",
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
		"COMPONENT_TEMPLATE" => "blocks_our_value"
	),
	false
);?>
                    </div>
                </div>
            </div>
            <div class="column-min about-photo">
                <div class="about-photo__img">
                    <img src="<?=SITE_DIR."assets/inner_page/img/about-director-photo-2.jpg"?>" data-object-fit="cover" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--End about-->
    <!--Start awards-->
    <section class="awards">
        <div class="awards__wrap">
            <div class="heading">
                <h2 class="heading__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/guarantees/title.php'); ?></h2>
            </div>
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"our_awards", 
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
		"IBLOCK_ID" => "7",
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
		"PARENT_SECTION_CODE" => "",
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
		"COMPONENT_TEMPLATE" => "our_awards"
	),
	false
);?>
        </div>
    </section>
    <!--End awards-->
    <!--Start moving-forward-->
    <div class="moving-forward">
        <div class="flex-container flex-direction-tablet">
            <div class="column-min">
                <div class="moving-forward__photo">
                    <img src="<?=SITE_DIR."assets/inner_page/img/moving-forward-photo.jpg"?>" data-object-fit="cover" alt="">
                </div>
            </div>
            <div class="column-large">
                <div class="content-container moving-forward__container">
                    <div class="heading">
                        <h2 class="heading__title"><? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/progress/title.php'); ?></h2>
                    </div>
                    <div class="moving-forward__content">
                        <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/progress/text.php'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End moving-forward-->
    <!--Start block-photo-->
    <section class="block-photo">
        <div class="block-photo__img">
            <img src="<?=SITE_DIR."assets/inner_page/img/block-photo-1.jpg"?>" data-object-fit="cover" alt="">
        </div>
        <div class="block-photo__img">
            <img src="<?=SITE_DIR."assets/inner_page/img/block-photo-2.jpg"?>" data-object-fit="cover" alt="">
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
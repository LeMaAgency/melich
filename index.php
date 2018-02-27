<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("MELICH");
?>
<?$APPLICATION->IncludeComponent('bitrix:news.list', 'slider_main', array(
    'DISPLAY_DATE' => 'Y',
    'DISPLAY_NAME' => 'Y',
    'DISPLAY_PICTURE' => 'Y',
    'DISPLAY_PREVIEW_TEXT' => 'Y',
    'AJAX_MODE' => 'N',
    'IBLOCK_TYPE' => 'content',
    'IBLOCK_ID' => '1',
    'NEWS_COUNT' => '20',
    'SORT_BY1' => 'ACTIVE_FROM',
    'SORT_ORDER1' => 'DESC',
    'SORT_BY2' => 'SORT',
    'SORT_ORDER2' => 'ASC',
    'FILTER_NAME' => '',
    'FIELD_CODE' => array(),
    'PROPERTY_CODE' => array('LINK'),
    'CHECK_DATES' => 'Y',
    'DETAIL_URL' => '',
    'PREVIEW_TRUNCATE_LEN' => '',
    'ACTIVE_DATE_FORMAT' => 'd.m.Y',
    'SET_TITLE' => 'N',
    'SET_BROWSER_TITLE' => 'N',
    'SET_META_KEYWORDS' => 'N',
    'SET_META_DESCRIPTION' => 'N',
    'SET_LAST_MODIFIED' => 'N',
    'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    'ADD_SECTIONS_CHAIN' => 'N',
    'HIDE_LINK_WHEN_NO_DETAIL' => 'Y',
    'PARENT_SECTION' => '',
    'PARENT_SECTION_CODE' => '',
    'INCLUDE_SUBSECTIONS' => 'Y',
    'CACHE_TYPE' => 'A',
    'CACHE_TIME' => '36000000',
    'CACHE_FILTER' => 'Y',
    'CACHE_GROUPS' => 'N',
    'DISPLAY_TOP_PAGER' => 'Y',
    'DISPLAY_BOTTOM_PAGER' => 'Y',
    'PAGER_TITLE' => 'Новости',
    'PAGER_SHOW_ALWAYS' => 'N',
    'PAGER_TEMPLATE' => '',
    'PAGER_DESC_NUMBERING' => 'N',
    'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
    'PAGER_SHOW_ALL' => 'N',
    'PAGER_BASE_LINK_ENABLE' => 'N',
    'SET_STATUS_404' => 'N',
    'SHOW_404' => 'N',
    'MESSAGE_404' => '',
    'PAGER_BASE_LINK' => '',
    'PAGER_PARAMS_NAME' => 'arrPager',
    'AJAX_OPTION_JUMP' => 'N',
    'AJAX_OPTION_STYLE' => 'Y',
    'AJAX_OPTION_HISTORY' => 'N',
    'AJAX_OPTION_ADDITIONAL' => '',
));?>
    <div class="page__index__inf">
        <div class="page__index__inf__wrap">
            <div class="page__index__inf__logo">
                <span class="page__index__inf__logo__control page__index__inf__logo__control_big">
                    <? $APPLICATION->ShowTitle(false); ?>
                </span>
                <span class="page__index__inf__logo__control">
                    <? $APPLICATION->IncludeFile(SITE_DIR . 'include/index/title.php'); ?>
                </span>
            </div>
            <div class="page__index__inf__text">
                <span class="page__index__inf__text__control">
                    <? $APPLICATION->IncludeFile(SITE_DIR . 'include/index/sub_title.php'); ?>
                </span>
            </div>
            <div class="page__index__inf__tabs">
                <div class="page__index__inf__tabs__btn" data-js-core-tabs-nav="index">
                    <a href="#" data-js-core-tabs-nav-id="1"
                       class="page__index__inf__tabs__btn__control active">
                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/index/advantages_title.php'); ?>
                    </a>
                    <a href="#" data-js-core-tabs-nav-id="2"
                       class="page__index__inf__tabs__btn__control">
                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/index/reviews_title.php'); ?>
                    </a>
                </div>
                <div class="page__index__inf__tabs__block" data-js-core-tabs="index">
                    <div data-js-core-tabs-id='1' class="page__index__inf__tabs__block__advantages active">
                        <?$APPLICATION->IncludeComponent('bitrix:news.list', 'advantages_main', array(
                            'DISPLAY_DATE' => 'Y',
                            'DISPLAY_NAME' => 'Y',
                            'DISPLAY_PICTURE' => 'Y',
                            'DISPLAY_PREVIEW_TEXT' => 'Y',
                            'AJAX_MODE' => 'N',
                            'IBLOCK_TYPE' => 'content',
                            'IBLOCK_ID' => '2',
                            'NEWS_COUNT' => '20',
                            'SORT_BY1' => 'ACTIVE_FROM',
                            'SORT_ORDER1' => 'DESC',
                            'SORT_BY2' => 'SORT',
                            'SORT_ORDER2' => 'ASC',
                            'FILTER_NAME' => '',
                            'FIELD_CODE' => array(),
                            'PROPERTY_CODE' => array(),
                            'CHECK_DATES' => 'Y',
                            'DETAIL_URL' => '',
                            'PREVIEW_TRUNCATE_LEN' => '',
                            'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                            'SET_TITLE' => 'N',
                            'SET_BROWSER_TITLE' => 'N',
                            'SET_META_KEYWORDS' => 'N',
                            'SET_META_DESCRIPTION' => 'N',
                            'SET_LAST_MODIFIED' => 'N',
                            'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                            'ADD_SECTIONS_CHAIN' => 'N',
                            'HIDE_LINK_WHEN_NO_DETAIL' => 'Y',
                            'PARENT_SECTION' => '',
                            'PARENT_SECTION_CODE' => '',
                            'INCLUDE_SUBSECTIONS' => 'Y',
                            'CACHE_TYPE' => 'A',
                            'CACHE_TIME' => '36000000',
                            'CACHE_FILTER' => 'Y',
                            'CACHE_GROUPS' => 'N',
                            'DISPLAY_TOP_PAGER' => 'Y',
                            'DISPLAY_BOTTOM_PAGER' => 'Y',
                            'PAGER_TITLE' => 'Преимущества',
                            'PAGER_SHOW_ALWAYS' => 'N',
                            'PAGER_TEMPLATE' => '',
                            'PAGER_DESC_NUMBERING' => 'N',
                            'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                            'PAGER_SHOW_ALL' => 'N',
                            'PAGER_BASE_LINK_ENABLE' => 'N',
                            'SET_STATUS_404' => 'N',
                            'SHOW_404' => 'N',
                            'MESSAGE_404' => '',
                            'PAGER_BASE_LINK' => '',
                            'PAGER_PARAMS_NAME' => 'arrPager',
                            'AJAX_OPTION_JUMP' => 'N',
                            'AJAX_OPTION_STYLE' => 'Y',
                            'AJAX_OPTION_HISTORY' => 'N',
                            'AJAX_OPTION_ADDITIONAL' => '',
                        ));?>
                    </div>
                    <div data-js-core-tabs-id="2" class="page__index__inf__tabs__block__comment ">
                        <?$APPLICATION->IncludeComponent('bitrix:news.list', 'reviews_list_main', array(
                            'DISPLAY_DATE' => 'Y',
                            'DISPLAY_NAME' => 'Y',
                            'DISPLAY_PICTURE' => 'Y',
                            'DISPLAY_PREVIEW_TEXT' => 'Y',
                            'AJAX_MODE' => 'N',
                            'IBLOCK_TYPE' => 'content',
                            'IBLOCK_ID' => '3',
                            'NEWS_COUNT' => '20',
                            'SORT_BY1' => 'ACTIVE_FROM',
                            'SORT_ORDER1' => 'DESC',
                            'SORT_BY2' => 'SORT',
                            'SORT_ORDER2' => 'ASC',
                            'FILTER_NAME' => '',
                            'FIELD_CODE' => array(),
                            'PROPERTY_CODE' => array('CITY'),
                            'CHECK_DATES' => 'Y',
                            'DETAIL_URL' => '',
                            'PREVIEW_TRUNCATE_LEN' => '',
                            'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                            'SET_TITLE' => 'N',
                            'SET_BROWSER_TITLE' => 'N',
                            'SET_META_KEYWORDS' => 'N',
                            'SET_META_DESCRIPTION' => 'N',
                            'SET_LAST_MODIFIED' => 'N',
                            'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                            'ADD_SECTIONS_CHAIN' => 'N',
                            'HIDE_LINK_WHEN_NO_DETAIL' => 'Y',
                            'PARENT_SECTION' => '',
                            'PARENT_SECTION_CODE' => '',
                            'INCLUDE_SUBSECTIONS' => 'Y',
                            'CACHE_TYPE' => 'A',
                            'CACHE_TIME' => '36000000',
                            'CACHE_FILTER' => 'Y',
                            'CACHE_GROUPS' => 'N',
                            'DISPLAY_TOP_PAGER' => 'Y',
                            'DISPLAY_BOTTOM_PAGER' => 'Y',
                            'PAGER_TITLE' => 'Отзывы',
                            'PAGER_SHOW_ALWAYS' => 'N',
                            'PAGER_TEMPLATE' => '',
                            'PAGER_DESC_NUMBERING' => 'N',
                            'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                            'PAGER_SHOW_ALL' => 'N',
                            'PAGER_BASE_LINK_ENABLE' => 'N',
                            'SET_STATUS_404' => 'N',
                            'SHOW_404' => 'N',
                            'MESSAGE_404' => '',
                            'PAGER_BASE_LINK' => '',
                            'PAGER_PARAMS_NAME' => 'arrPager',
                            'AJAX_OPTION_JUMP' => 'N',
                            'AJAX_OPTION_STYLE' => 'Y',
                            'AJAX_OPTION_HISTORY' => 'N',
                            'AJAX_OPTION_ADDITIONAL' => '',
                        ));?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
    <div class="flex-container flex-direction-tablet">
        <!--Start catalog-->
        <div class="catalog">
            <ul class="catalog__list">
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-1.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="catalog__action">
                <button class="catalog__btn" type="button">ещё модели</button>
            </div>
            <!--Start pagination-->
            <div class="pagination">
                <ul class="pagination__list">
                    <li class="pagination__item"><span class="pagination__link is-active">1</span>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">2</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">3</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">4</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">5</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">6</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">7</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">8</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">9</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">10</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">11</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">12</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">13</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">14</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">15</a>
                    </li>
                </ul>
            </div>
            <!--End pagination-->
        </div>
        <!--End catalog-->
        <div class="catalog-filter">
            <form class="filter-form" action="/" method="GET">
                <div class="filter-form__left">
                    <div class="filter-form__action">
                        <button class="filter-form__btn filter-form__apply" type="submit">Применить</button>
                        <button class="filter-form__btn filter-form__reset" type="reset">Сбросить</button>
                    </div>
                </div>
                <div class="filter-form__right">
                    <h2 class="filter-form__title">Вид меха</h2>
                    <div class="filter-form__wrap">
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox checked-all-js" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">Все</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">астраган</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">бобр</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">енот</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">каракуль</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">кролик</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">куница</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">лиса</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">норка</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">куница</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">лиса</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">норка</div>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
            <form class="filter-form" action="/" method="GET">
                <div class="filter-form__left">
                    <div class="filter-form__action">
                        <button class="filter-form__btn filter-form__apply" type="submit">Применить</button>
                        <button class="filter-form__btn filter-form__reset" type="reset">Сбросить</button>
                    </div>
                </div>
                <div class="filter-form__right">
                    <h2 class="filter-form__title">Цвет</h2>
                    <div class="filter-form__color">
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #f4f4e1, #dadac5);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(#fff, #fff);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #bddde8, #9dc2ce);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #fbfb37, #e4e40a);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #7b524c, #512e25);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #e36d5c, #d82208);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #fdb93b, #e39608);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #fbcbd3, #e2acb5);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #9a9a9a, #767676);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #3939fb, #0a0a91);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #383838, #000000);"></div>
                            </div>
                        </label>
                    </div>
                </div>
            </form>
        </div>

    </div><?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"catalog", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "ARTICUL",
			1 => "TYPE_FUR_AND_CARE",
			2 => "RETURN",
			3 => "DELIVERY",
			4 => "AVAILABILITY_IN_SHOPS",
			5 => "PAYMENT",
			6 => "POPULAR",
			7 => "SIZE",
			8 => "COLOR",
			9 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"FILTER_PROPERTY_CODE" => array(
			0 => "TYPE_FUR",
			1 => "COLOR",
			2 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "ARTICUL",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "9",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/catalog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "catalog",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
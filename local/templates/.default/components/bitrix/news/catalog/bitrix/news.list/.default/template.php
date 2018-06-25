<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$data = new \Lema\Template\TemplateHelper($this);

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$bxAjaxId = CAjax::GetComponentID($component->__name, $component->__template->__name, $component->randString());

?>

<? if ($_REQUEST['showMore'] == '1')
    $GLOBALS['APPLICATION']->RestartBuffer(); ?>
<ul class="catalog__list">
    <? foreach ($data->items() as $item): ?>
        <li class="catalog__item" <?= $item->editId(); ?> data-id="<?= $item->getId(); ?>">
            <a class="catalog__link" href="<?= $item->detailUrl(); ?>">
                <img src="<?= $item->get('PREVIEW_PICTURE_SRC'); ?>" alt="<?= $item->getName(); ?>">
                <div class="catalog__descr">
                    <p class="catalog__text">
                        <?= $item->getName(); ?>
                    </p>
                    <p class="catalog__article">
                        <? echo $item->propName("ARTICUL"), ' ', $item->propVal("ARTICUL"); ?>
                    </p>
                </div>
                <div class="quick_prev_btn" data-id="<?= $item->getId(); ?>" onclick="event.preventDefault()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                        <path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z" font-weight="400" font-family="sans-serif" white-space="normal" overflow="visible"></path>
                    </svg>
<!--                    Быстрый просмотр-->
                </div>
            </a>

        </li>
    <? endforeach; ?>
</ul>


<div id="quick_view" style="display: none">
    <div id="next_qick_view"></div>
    <div class="popup">
        <div class="card-slider">
            <div class="hamburger-btn hamburger-btn--darken">
                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
            <div class="card-slider__for slider-for">

            </div>
            <div class="card-slider__nav">
                <card-slider__nav-list class="slider-nav">

                </card-slider__nav-list>
            </div>
        </div>

        <div class="card-description">
            <div class="heading">
                <h2 class="heading__title">
                </h2>
            </div>
            <div class="card-description__info">
                <h3 class="card-description__article">
                </h3>
                <div class="type_fur_block">
                        <span class="card-description__proprties_title">
                            <?= Loc::getMessage('LEMA_CATALOG_LIST_TYPE_FUR'); ?>
                        </span>
                    <span class="type_fur"></span>
                </div>
                <div class="otdelka_block">
                        <span class="card-description__proprties_title">
                            <?= Loc::getMessage('LEMA_CATALOG_LIST_OTDELKA'); ?>
                        </span>
                    <span class="otdelka"></span>
                </div>
                <div class="vorot_block">
                        <span class="card-description__proprties_title">
                            <?= Loc::getMessage('LEMA_CATALOG_LIST_VOROT'); ?>
                        </span>
                    <span class="vorot"></span>
                </div>
                <div class="size_block">
                        <span class="card-description__proprties_title">
                            <?= Loc::getMessage('LEMA_CATALOG_LIST_SIZE'); ?>
                        </span>
                    <div class="size">

                    </div>
                </div>
                <div class="color_block">
                        <span class="card-description__proprties_title">
                            <?= Loc::getMessage('LEMA_CATALOG_LIST_COLOR'); ?>
                        </span>
                    <div class="card-description__color block-color color"></div>
                </div>
                <div class="find_price">
                    <div class="find_price_right">
                        Чтобы узнать цену позвоните по тел +79282656333 или оставьте свои данные для связи<br>
                        <? $APPLICATION->IncludeComponent(
                            "lema:form.ajax",
                            "",
                            Array(
                                "CACHE_TIME" => "3600",
                                "CACHE_TYPE" => "A",
                                "EVENT_TYPE" => "7",
                                "FORM_152_FZ" => "Согласен(-на) на обработку персональных данных",
                                "FORM_ACTION" => "",
                                "FORM_BTN_TITLE" => "Узнать цену",
                                "FORM_CLASS" => "ajax-form find_price_form",
                                "FORM_FIELDS" => "[{\"name\":\"name\",\"type\":\"text\",\"title\":\"Имя\",\"placeholder\":\"Имя\",\"default\":\"\",\"required\":\"Y\"},{\"name\":\"phone\",\"type\":\"tel\",\"title\":\"Телефон\",\"placeholder\":\"Телефон\",\"default\":\"\",\"required\":\"Y\"}]",
                                "FORM_SUCCESS_FUNCTION" => "\$.fancybox.open(\"Ваше сообщение успешно отправлено\")",
                                "FORM_SUCCESS_FUNCTION_CORRECT_JSON" => "Y",
                                "IBLOCK_ID" => "10",
                                "IBLOCK_TYPE" => "feedback",
                                "NEED_SAVE_TO_IBLOCK" => "Y",
                                "NEED_SEND_EMAIL" => "Y"
                            )
                        ); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="prev_qick_view"></div>
</div>


<? if ($arResult["NAV_RESULT"]->NavPageNomer != $arResult["NAV_RESULT"]->nEndPage): ?>
    <div class="catalog__action">
        <button class="catalog__btn ajax_load_btn_new"
                type="button"
                data-ajax-id="<?= $bxAjaxId ?>"
                data-show-more="<?= $arResult["NAV_RESULT"]->NavNum ?>"
                data-next-page="<?= ($arResult["NAV_RESULT"]->NavPageNomer + 1) ?>"
                data-max-page="<?= $arResult["NAV_RESULT"]->nEndPage ?>">
            <?= Loc::getMessage("LEMA_CATALOG_LIST_MORE_MODELS"); ?>
        </button>
    </div>
<? endif; ?>

<div class="js-pagination">
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"] == "Y") ?>
    <?= $arResult["NAV_STRING"]; ?>
</div>
<script>

    $(document).ready(function () {
        $(document).off('click').on('click', '[data-show-more]', function (e) {

            e.preventDefault();

            var btn = $(this),
                waitElement = btn.parent().get(0),
                page = btn.attr('data-next-page') * 1,
                id = btn.attr('data-show-more'),
                max = btn.attr('data-max-page') * 1;

            var data = {};

            console.log(page, max);
            data['showMore'] = 1;
            data['PAGEN_' + id] = page;

            BX.showWait(waitElement);
            btn.find('[data-show-more]').off('click');

            $.ajax({
                type: "GET",
                url: window.location.href,
                data: data,
                success: function (data) {
                    BX.closeWait(waitElement);
                    btn.attr('data-next-page', page * 1 + 1);
                    var tmp = $($(data));
                    var els = tmp.find('.catalog__item');
                    $('.catalog__list').append(els);
                    $('.js-pagination').html(tmp.find('.pagination'));
                    if (page == max) {
                        $('.catalog__action').hide();
                    }
                }
            });
        });
    });

</script>

<? if ($_REQUEST['showMore'] == '1')
    die(); ?>




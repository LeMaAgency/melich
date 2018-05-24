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

$bxAjaxId = CAjax::GetComponentID($component->__name, $component->__template->__name);
?>

<? if ($_REQUEST['showMore'] == '1')
    $GLOBALS['APPLICATION']->RestartBuffer(); ?>
    <ul class="catalog__list">
        <? foreach ($data->items() as $item): ?>
            <li class="catalog__item" <?= $item->editId(); ?>>
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
                </a>
            </li>
        <? endforeach; ?>
    </ul>
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
                        $('.js-pagination').html(tmp.find('.js-pagination'));
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




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

if (empty($arResult['ITEMS']))
    return;

$data = new \Lema\Template\TemplateHelper($this);

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$bxAjaxId = CAjax::GetComponentID($component->__name, $component->__template->__name, $component->randString());
?>

    <? if ($_REQUEST['showMore'] == '1')
        $GLOBALS['APPLICATION']->RestartBuffer(); ?>
    <div class="articles__container">

        <? foreach ($data->items() as $item): ?>
            <article class="articles-item" <?=$item->editId();?>>
                <a class="articles-item__link" href="<?= $item->detailUrl(); ?>">
                    <div class="articles-item__img">
                        <img src="<?= $item->previewPicture(); ?>"
                             data-object-fit="cover"
                             alt="<?= $item->getName(); ?>">
                    </div>
                    <div class="articles-item__content">
                        <div class="articles-item__pub-date">
                            <time>
                                <?= $item->get("ACTIVE_FROM"); ?>
                            </time>
                        </div>
                        <div class="articles-item__text">
                            <p>
                                <?= $item->previewText(); ?>
                            </p>
                        </div>
                        <div class="articles-item__icon"></div>
                    </div>
                </a>
            </article>
        <? endforeach; ?>

    </div>
    <? if ($arResult["NAV_RESULT"]->NavPageNomer != $arResult["NAV_RESULT"]->nEndPage): ?>
        <div class="articles-bottom">
            <a class="articles-bottom__btn ajax_load_btn_new"
               href="#"
               data-ajax-id="<?= $bxAjaxId ?>"
               data-show-more="<?= $arResult["NAV_RESULT"]->NavNum ?>"
               data-next-page="<?= ($arResult["NAV_RESULT"]->NavPageNomer + 1) ?>"
               data-max-page="<?= $arResult["NAV_RESULT"]->nEndPage ?>">
                <?= Loc::getMessage("LEMA_BTN_MORE_ARTICLES"); ?>
            </a>
        </div>
    <? endif; ?>
    </div>
    <div style="display: none;">
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"] == "Y") { ?>
            <?= $arResult["NAV_STRING"]; ?>
        <? } ?>
    </div>
    <? if ($_REQUEST['showMore'] == '1')
        die(); ?>



<script>

    $(document).ready(function () {
        $(document).off('click').on('click', '[data-show-more]', function (e) {

            e.preventDefault();

            var btn = $(this),
                waitElement = btn.parent().get(0),
                page = btn.attr('data-next-page'),
                id = btn.attr('data-show-more'),
                max = btn.attr('data-max-page');

            var data = {};

            data['showMore'] = 1;
            data['PAGEN_' + id] = page;

            BX.showWait(waitElement);
            btn.find('[data-show-more]').off('click');

            $.ajax({
                type: "GET",
                url: window.location.href,
                data: data,
                //timeout: 3000,
                success: function (data) {
                    BX.closeWait(waitElement);
                    btn.attr('data-next-page', page * 1 + 1);
                    //btn.remove();
                    $.when($('section.articles').first().append(data)).then(function () {
                        $('.ajax_load_btn_new').html($('.ajax_load_btn_new').eq(-2).html());
                        $('.ajax_load_btn_new').first().remove();
                        if (max == (page * 1))
                            $('.articles-bottom').hide();
                    });
                }
            });
        });

    });

</script>
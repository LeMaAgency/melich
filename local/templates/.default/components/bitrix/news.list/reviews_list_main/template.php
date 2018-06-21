<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$data = new \Lema\Template\TemplateHelper($this);

?>
<? /* if($data->itemCount()): */ ?><!--
    <div class="page__index__inf__tabs__block__comment__list">
        <? /* foreach($data->items() as $item): */ ?>

            <div class="page__index__inf__tabs__block__advantages__list__item" <? /*=$item->editId();*/ ?>>
                <div class="page__index__inf__tabs__block__advantages__list__item__img">
                    <img src="<? /*=$item->previewPicture();*/ ?>" alt="<? /*=$item->getName();*/ ?>">
                </div>
                <div class="page__index__inf__tabs__block__advantages__list__item__text">
                        <span class="page__index__inf__tabs__block__advantages__list__item__text__control">
                            <? /*=$item->getName();*/ ?>
                        </span>
                </div>
            </div>

        <? /* endforeach; */ ?>
    </div>

    <div class="page__index__inf__tabs__block__comment__btn">
        <a href="/" title="Читать все отзывы"
           class="page__index__inf__tabs__block__comment__btn__control">Читать все отзывы</a>
    </div>
--><? /* endif; */ ?>
<? if ($data->itemCount()): ?>
    <div class="page__index__inf__tabs__block__comment__list">
        <? foreach ($data->items() as $key => $item): ?>
            <? if ($key % 2 == 0) { ?>
                <div class="page__index__inf__tabs__block__comment__list__group">
            <? } ?>
            <div class="page__index__inf__tabs__block__comment__list__item" <?= $item->editId(); ?>>
                <div class="page__index__inf__tabs__block__comment__list__item__name">
                        <span>
                            <?= $item->getName(); ?>
                        </span>
                </div>
                <div class="page__index__inf__tabs__block__comment__list__item__city">
                        <span>
                            <?= $item->propVal("CITY"); ?>
                        </span>
                </div>
                <div class="page__index__inf__tabs__block__comment__list__item__text">
                        <span>
                            <?= $item->previewText(); ?>
                        </span>
                </div>
                <div class="page__index__inf__tabs__block__comment__list__item__btn">
                    <a href=""
                       title="<?= Loc::getMessage("LEMA_REVIEWS_LIST_MAIN_MORE_INFO"); ?>"
                       class="page__index__inf__tabs__block__comment__list__item__btn__control">
                        <?= Loc::getMessage("LEMA_REVIEWS_LIST_MAIN_MORE_INFO"); ?>
                    </a>
                </div>
            </div>
            <? if (($key + 1) % 2 == 0 || ($key+1) == count($data->items())) { ?>
                </div>
            <? } ?>
        <? endforeach; ?>
    </div>

    <!--<div class="page__index__inf__tabs__block__comment__btn">
        <a href="/"
           title="<?/*= Loc::getMessage("LEMA_REVIEWS_LIST_MAIN_ALL"); */?>"
           class="page__index__inf__tabs__block__comment__btn__control">
            <?/*= Loc::getMessage("LEMA_REVIEWS_LIST_MAIN_ALL"); */?>
        </a>
    </div>-->
<? endif; ?>

<!-- list -->
<!--<div class="page__index__inf__tabs__block__comment__list">
    <div class="page__index__inf__tabs__block__comment__list__group">
        <div class="page__index__inf__tabs__block__comment__list__item">
            <div class="page__index__inf__tabs__block__comment__list__item__name">
                <span>Имя Фамилия</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__city">
                <span>Москва</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__text">
                <span>Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения.</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__btn">
                <a href="" title="Читать далее"
                   class="page__index__inf__tabs__block__comment__list__item__btn__control">Читать
                    далее</a>
            </div>
        </div>
        <div class="page__index__inf__tabs__block__comment__list__item">
            <div class="page__index__inf__tabs__block__comment__list__item__name">
                <span>Имя Фамилия</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__city">
                <span>Москва</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__text">
                <span>Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения.</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__btn">
                <a href="" title="Читать далее"
                   class="page__index__inf__tabs__block__comment__list__item__btn__control">Читать
                    далее</a>
            </div>
        </div>
    </div>
    <div class="page__index__inf__tabs__block__comment__list__group">
        <div class="page__index__inf__tabs__block__comment__list__item">
            <div class="page__index__inf__tabs__block__comment__list__item__name">
                <span>Имя Фамилия</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__city">
                <span>Москва</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__text">
                <span>Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения.</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__btn">
                <a href="" title="Читать далее"
                   class="page__index__inf__tabs__block__comment__list__item__btn__control">Читать
                    далее</a>
            </div>
        </div>
        <div class="page__index__inf__tabs__block__comment__list__item">
            <div class="page__index__inf__tabs__block__comment__list__item__name">
                <span>Имя Фамилия</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__city">
                <span>Москва</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__text">
                <span>Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения.</span>
            </div>
            <div class="page__index__inf__tabs__block__comment__list__item__btn">
                <a href="" title="Читать далее"
                   class="page__index__inf__tabs__block__comment__list__item__btn__control">Читать
                    далее</a>
            </div>
        </div>
    </div>
</div>-->
<!-- list end -->


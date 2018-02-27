<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
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

<? if($data->itemCount()): ?>
    <div class="page__index__inf__tabs__block__comment__list">
        <? foreach($data->items() as $item): ?>

            <?if($i % 2 === 0):
                $opened = true;?>
                <div class="page__index__inf__tabs__block__comment__list__group">
            <?endif;?>

                <div class="page__index__inf__tabs__block__comment__list__item" <?=$item->editId();?>>
                    <div class="page__index__inf__tabs__block__comment__list__item__name">
                        <span><?=$item->getName();?></span>
                    </div>
                    <div class="page__index__inf__tabs__block__comment__list__item__city">
                        <span><?=$item->propVal('CITY');?></span>
                    </div>
                    <div class="page__index__inf__tabs__block__comment__list__item__text">
                        <span><?=$item->previewText();?></span>
                    </div>
                    <div class="page__index__inf__tabs__block__comment__list__item__btn">
                        <a href="<?=$item->detailUrl();?>" title="<?=Loc::getMessage('LEMA_REVIEWS_MORE_LINK');?>"
                           class="page__index__inf__tabs__block__comment__list__item__btn__control">
                            <?=Loc::getMessage('LEMA_REVIEWS_MORE_LINK');?>
                        </a>
                    </div>
                </div>

            <?if($i++ % 2 === 1):
                $opened = false;?>
                </div>
            <?endif;?>

        <? endforeach; ?>

        <?if($opened):?></div><?endif;?>
    </div>
    <div class="page__index__inf__tabs__block__comment__btn">
        <a href="<?=strtr($arResult['LIST_PAGE_URL'], array('#SITE_DIR#/' => SITE_DIR));?>" title="<?=Loc::getMessage('LEMA_ALL_REVIEWS_LINK');?>"
           class="page__index__inf__tabs__block__comment__btn__control">
            <?=Loc::getMessage('LEMA_ALL_REVIEWS_LINK');?>
        </a>
    </div>
<? endif; ?>
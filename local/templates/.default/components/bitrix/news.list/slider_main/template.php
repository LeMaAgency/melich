<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
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

$data = new \Lema\Template\TemplateHelper($this);

?>
<? if($data->itemCount()): ?>
    <div class="page__index__slider">
        <div class="page__index__slider__list">
            <? foreach($data->items() as $item): ?>
                <div class="page__index__slider__list__item" <?=$item->editId();?>>
                    <div class="page__index__slider__list__item__bg"
                         style="background-image: url('<?=$item->previewPicture();?>')"></div>
                    <div class="page__index__slider__list__item__content">
                        <div class="page__index__slider__list__item__content__title">
                            <span class="page__index__slider__list__item__content__title__control">
                                <?=$item->getName();?>
                            </span>
                        </div>
                        <div class="page__index__slider__list__item__content__btn">
                            <a href="<?=$item->propVal('LINK');?>"
                               title="<?=$item->prop('LINK', 'DESCRIPTION');?>"
                               class="page__index__slider__list__item__content__btn__control">
                                <?=$item->prop('LINK', 'DESCRIPTION');?>
                            </a>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
<? endif; ?>
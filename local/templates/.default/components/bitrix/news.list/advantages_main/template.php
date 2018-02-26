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
    <div class="page__index__inf__tabs__block__advantages__list">
        <? foreach($data->items() as $item): ?>

            <div class="page__index__inf__tabs__block__advantages__list__item" <?=$item->editId();?>>
                <div class="page__index__inf__tabs__block__advantages__list__item__img">
                    <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                </div>
                <div class="page__index__inf__tabs__block__advantages__list__item__text">
                        <span class="page__index__inf__tabs__block__advantages__list__item__text__control">
                            <?=$item->getName();?>
                        </span>
                </div>
            </div>

        <? endforeach; ?>
    </div>
<? endif; ?>
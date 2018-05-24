<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
if(empty($arResult['ITEMS']))
    return;
$data = new \Lema\Template\TemplateHelper($this);
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>

<div class="popular-model catalog">
    <div class="heading heading--center">
        <div class="heading__title">
            <?=Loc::getMessage("LEMA_POPULAR_TITLE");?>
        </div>
    </div>
    <ul class="catalog__list">
        <?foreach ($data->items() as $item):?>
            <li class="catalog__item" <?=$item->editId();?>>
                <a class="catalog__link" href="<?=$item->detailUrl();?>">
                    <img src="<?=$item->get('PREVIEW_PICTURE_SRC');?>" alt="<?=$item->getName();?>">
                    <div class="catalog__descr">
                        <p class="catalog__text"><?=$item->getName();?></p>
                        <p class="catalog__article">
                            <?echo $item->propName("ARTICUL"),' ',$item->propVal("ARTICUL");?>
                        </p>
                    </div>
                </a>
            </li>
        <?endforeach;?>

    </ul>
</div>
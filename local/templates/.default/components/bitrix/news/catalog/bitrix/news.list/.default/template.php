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
?>
<div class="catalog">
    <ul class="catalog__list">
        <?var_dump($data);?>
        <? foreach ($data->items() as $item): ?>
            <li class="catalog__item" <?=$item->editId();?>>
                <a class="catalog__link" href="<?=$item->detailUrl();?>">
                    <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                    <div class="catalog__descr">
                        <p class="catalog__text">
                            <?=$item->getName();?>
                        </p>
                        <p class="catalog__article">
                            <?=$item->prop("ARTICUL")+' '+$item->propVal("ARTICUL");?>
                        </p>
                    </div>
                </a>
            </li>
        <? endforeach; ?>
    </ul>
    <div class="catalog__action">
        <button class="catalog__btn" type="button">
            <?= Loc::getMessage("LEMA_CATALOG_LIST_MORE_MODELS"); ?>
        </button>
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


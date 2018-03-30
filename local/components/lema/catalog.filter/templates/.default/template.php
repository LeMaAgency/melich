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
?>

<div class="catalog-filter float-r">
    <form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>"
          action="<? echo $arResult["FORM_ACTION"] ?>"
          method="get">
        <? foreach ($arResult["ITEMS"] as $arItem):
            if (array_key_exists("HIDDEN", $arItem)):
                echo $arItem["INPUT"];
            endif;
        endforeach; ?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <? if (!array_key_exists("HIDDEN", $arItem)): ?>

                <div class="filter-form">
                    <div class="filter-form__left">
                        <div class="filter-form__action">
                            <input class="filter-form__btn filter-form__apply" type="submit" name="set_filter"
                                   value="Применить">
                            <button class="filter-form__btn filter-form__reset" type="reset">Сбросить</button>
                        </div>
                    </div>
                    <div class="filter-form__right">
                        <h2 class="filter-form__title">
                            <?= $arItem["NAME"] ?>
                        </h2>
                            <?= $arItem["INPUT"] ?>
                    </div>
                </div>
            <? endif ?>
        <? endforeach; ?>
    </form>
</div>

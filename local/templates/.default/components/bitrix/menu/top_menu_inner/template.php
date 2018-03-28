<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

?>

<? if (!empty($arResult)): ?>
    <div class="main-nav__text">
        <?= Loc::getMessage('LEMA_MENU_INNER_TITLE'); ?>
    </div>
    <ul class="main-nav__list">
        <?
        foreach ($arResult as $arItem):
            if ($arParams['MAX_LEVEL'] == 1 && $arItem['DEPTH_LEVEL'] > 1) {
                continue;
            }
            ?>
            <? if ($arItem['SELECTED']): ?>
                <li class="main-nav__item  is-active">
                    <a href="<?= $arItem['LINK']; ?>"
                       title="<?= $arItem['TEXT']; ?>"
                       class="main-nav__link">
                        <?= $arItem['TEXT']; ?>
                    </a>
                </li>
            <? else: ?>
                <li class="main-nav__item">
                    <a href="<?= $arItem['LINK']; ?>"
                       title="<?= $arItem['TEXT']; ?>"
                       class="main-nav__link">
                        <?= $arItem['TEXT']; ?>
                    </a>
                </li>
            <? endif ?>

        <? endforeach ?>

    </ul>
<? endif ?>
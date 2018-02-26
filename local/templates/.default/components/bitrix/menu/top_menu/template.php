<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

?>

<? if(!empty($arResult)): ?>
    <div class="header__main__menu__title"><span><?=Loc::getMessage('LEMA_MENU_TITLE');?></span></div>
    <ul class="header__main__menu__list">

        <?
        foreach($arResult as $arItem):
            if($arParams['MAX_LEVEL'] == 1 && $arItem['DEPTH_LEVEL'] > 1)
            {
                continue;
            }
            ?>
            <? if($arItem['SELECTED']): ?>
            <li><a href="<?=$arItem['LINK']?>" title="<?=$arItem['TEXT'];?>" class="selected"><?=$arItem['TEXT']?></a>
            </li>
        <? else: ?>
            <li><a href="<?=$arItem['LINK']?>" title="<?=$arItem['TEXT'];?>"><?=$arItem['TEXT']?></a></li>
        <? endif ?>

        <? endforeach ?>

    </ul>
<? endif ?>

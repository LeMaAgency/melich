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
use Lema\Common\Helper as H,
    Lema\Template\TemplateHelper as TH,
    Bitrix\Main\Localization\Loc;
if(empty($arResult['ITEMS']))
    return ;
Loc::loadMessages(__FILE__);
$this->setFrameMode(true);
$data = new TH($this);

$list1 = array();
$list2 = array();

foreach ($data->items() as $key=>$item)
{
    if ($key % 2 != 0)
    {
        $list1[] = $item;
    }
    else
    {
        $list2[] = $item;
    }
}
?>
<div class="about-content__wrap">
    <ul class="about-list">
        <?foreach ($list2 as $listItem):?>
            <li class="about-list__item" <?=$listItem->editId()?>>
                <p><?=$listItem->previewText()?></p>
            </li>
        <?endforeach;?>
    </ul>
    <ul class="about-list">
        <?foreach ($list1 as $listItem):?>
            <li class="about-list__item" <?=$listItem->editId()?>>
                <p><?=$listItem->previewText()?></p>
            </li>
        <?endforeach;?>
    </ul>
</div>

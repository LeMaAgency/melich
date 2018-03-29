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
?>

<ul class="shipping__list">
    <?foreach ($data->items() as $item):?>
        <li class="about-list__item" <?=$item->editId()?>>
            <p><?=$item->previewText()?></p>
        </li>
    <?endforeach;?>
</ul>
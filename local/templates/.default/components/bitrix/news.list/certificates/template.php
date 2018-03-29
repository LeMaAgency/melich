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

<? foreach ($data->items() as $item):?>
    <li class="certificates__item" <?=$item->editId()?>>
        <a class="certificates__link" href="<?=$item->previewPicture()?>" data-fancybox="group">
            <img src="<?=$item->previewPicture()?>" alt="">
        </a>
    </li>
<?endforeach;?>

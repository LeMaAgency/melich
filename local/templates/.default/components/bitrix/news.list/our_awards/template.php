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

<ul class="awards__list">
    <?foreach ($data->items() as $key=>$award):?>
        <? var_dump($key)?>
        <li class="awards__item" style="background-image: url('<?=$award->previewPicture()?>');">
            <div class="awards__item-img">
                <img src="<?=SITE_DIR."assets/inner_page/img/logo-M.png"?>" alt="">
            </div>
            <div class="awards__item-content">
                <div class="awards__item-visible">
                    <p><?=$award->previewText()?></p>
                </div>
                <div class="awards__item-hidden">
                    <p><?=$award->detailText()?></p>
                </div>
            </div>
        </li>
    <?endforeach;?>
</ul>

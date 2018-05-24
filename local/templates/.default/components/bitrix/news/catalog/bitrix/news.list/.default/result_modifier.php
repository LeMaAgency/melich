<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Lema\Common\Helper;

if(!empty($arResult['ITEMS']))
{
    $watermarkParams = array(
        'file' => $_SERVER['DOCUMENT_ROOT'] . '/assets/img/watermark.png',
        'position' => 'center',
    );

    foreach($arResult['ITEMS'] as $k => $arItem)
    {
        if(empty($arItem['PREVIEW_PICTURE']) || $arItem['PREVIEW_PICTURE'] == null)
                continue;
        $arResult['ITEMS'][$k]['PREVIEW_PICTURE_SRC'] = Helper::getImageWatermarkSrc($arItem['PREVIEW_PICTURE'], $watermarkParams);
    }
}
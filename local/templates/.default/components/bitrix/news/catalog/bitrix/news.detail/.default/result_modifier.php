<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Lema\Common\Helper;


$arResult['MORE_IMAGE'] = array();
$arResult['ARRAY_CHECK'] = false;

$watermarkParams = array(
    'file' => $_SERVER['DOCUMENT_ROOT'] . '/assets/img/watermark.png',
    'position' => 'center',
);

if (!empty($arResult['PROPERTIES']['MORE_PHOTOS']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['MORE_PHOTOS']['VALUE'] as $imgId) {
        $arResult['MORE_IMAGE'][] = \CFile::getPath($imgId);
        //$arResult['MORE_IMAGE'][] = Helper::getImageWatermarkSrc(array('ID' => $imgId, 'WIDTH' => 1600, 'HEIGHT' => 1600), $watermarkParams);
    }
    $arResult['ARRAY_CHECK'] = true;
} elseif (!empty($arResult['DETAIL_PICTURE'])) {
    $arResult['MORE_IMAGE'] = $arResult['DETAIL_PICTURE']['SRC'];
    //$arResult['MORE_IMAGE'] = Helper::getImageWatermarkSrc($arResult['DETAIL_PICTURE'], $watermarkParams);
} else {
    $arResult['MORE_IMAGE'] = $arResult['PREVIEW_PICTURE']['SRC'];
    //$arResult['MORE_IMAGE'] = Helper::getImageWatermarkSrc($arResult['PREVIEW_PICTURE'], $watermarkParams);
}


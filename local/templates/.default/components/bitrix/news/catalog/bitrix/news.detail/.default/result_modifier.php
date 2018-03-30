<?
$arResult['MORE_IMAGE'] = array();
$arResult['ARRAY_CHECK'] = false;
if (!empty($arResult['PROPERTIES']['MORE_PHOTOS']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['MORE_PHOTOS']['VALUE'] as $arImage) {
        $arResult['MORE_IMAGE'][] = \CFile::getPath($arImage);
    }
    $arResult['ARRAY_CHECK'] = true;
} elseif (!empty($arResult['DETAIL_PICTURE'])) {
    $arResult['MORE_IMAGE'] = $arResult['DETAIL_PICTURE']['SRC'];
} else {
    $arResult['MORE_IMAGE'] = $arResult['PREVIEW_PICTURE']['SRC'];
}
<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
    return "";

$strReturn = '';

$strReturn .= '<div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item">
                            <a class="breadcrumbs__link" href="/">
                            Главная
                            </a>
                        </li>';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    $nextRef = ($index < $itemSize - 2 && $arResult[$index + 1]["LINK"] <> "" ? ' itemref="bx_breadcrumb_' . ($index + 1) . '"' : '');
    $child = ($index > 0 ? ' itemprop="child"' : '');
    $arrow = ($index > 0 ? '<i class="fa fa-angle-right"></i>' : '');

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '
        <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="'.arResult[$index]["LINK"].'" title="' . $title . '" itemprop="url">
                '.$title.'
            </a>
        </li>';
    } else {
        $strReturn .= '
        <li class="breadcrumbs__item">
            <span class="breadcrumbs__link">
                '.$title.'
            </span>
        </li>';
    }
}

$strReturn .= '</ul></div>';

return $strReturn;

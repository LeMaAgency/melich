<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="76x76" href="/">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png"/>

    <?php
    $APPLICATION->ShowHead();

    \Lema\Common\AssetManager::get()
        ->init(array('fx'))
        ->addCssArray(array(
            '/assets/inner_page/css/style.css?v=6',
            '/assets/inner_page/css/custom.css',
            '/assets/custom_all//style.css',
        ))
        ->addJsArray(array(
            '/assets/inner_page/js/jquery.min.js',
            '/assets/custom_all//script.js',
            '/assets/inner_page/js/object-fit-polyfill.js',
            '/assets/inner_page/js/jquery.fancybox.min.js',
            '/assets/inner_page/js/slick.min.js',
            '/assets/inner_page/js/jquery.mCustomScrollbar.concat.min.js',
            '/assets/inner_page/js/main.js?v=4',

        ));
    ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnVwscjfcA78bKndhDTdwKs6c4k9awWXE&amp;callback=initMap" type="text/javascript" async defer></script>
    <title><? $APPLICATION->ShowTitle(); ?></title>
</head>

<body>

<? $APPLICATION->ShowPanel(); ?>
<div class="icon-data-include">
    <svg viewBox="0 0 0 0" style="position: absolute; z-index: -1; opacity: 0;">
        <defs>
            <linearGradient id="svg-boxGradient" gradientUnits="userSpaceOnUse" x1="0" y1="0" x2="25" y2="25">
                <stop offset="0%" stop-color="#DBA742"></stop>
                <stop offset="100%" stop-color="#DBA742"></stop>
            </linearGradient>
            <linearGradient id="svg-lineGradient">
                <stop offset="0%" stop-color="#DBA742"></stop>
                <stop offset="100%" stop-color="#DBA742"></stop>
            </linearGradient>
            <path id="form-checkbox-svg-box" d="M21 12.7v5c0 1.3-1 2.3-2.3 2.3H8.3C7 20 6 19 6 17.7V7.3C6 6 7 5 8.3 5h10.4C20 5 21 6 21 7.3v5.4"></path>
            <path id="form-checkbox-svg-check" stroke="url(#svg-boxGradient)" d="M10 13l2 2 5-5"></path>
            <circle id="form-checkbox-svg-circle" cx="13.5" cy="12.5" r="10"></circle>
        </defs>
    </svg>
</div>
<div class="flex-container">
    <aside class="nav-bar">
        <div class="nav-bar__logo logo">
            <a href="<?= SITE_DIR; ?>" class="logo__link" title="Melich - Фабрика меха и кожи">
                <img src="/assets/inner_page/img/logo.png" class="logo__img" alt="Melich - Фабрика меха и кожи">
            </a>
        </div>
        <!--TOP MENU inner_page-->
        <nav class="main-nav">
            <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu_inner", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"ROOT_MENU_TYPE" => "top",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_menu_inner"
	),
	false
); ?>
        </nav>
        <!--/TOP MENU inner_page-->
        <div class="action-phone">
            <div class="action-phone__wrap">
                <div class="action-phone__icon">
                    <img src="/assets/inner_page/img/icon-phone.png" alt="phone">
                </div>
                <? $APPLICATION->IncludeFile(SITE_DIR . 'include/inner_page/header/phone_link.php'); ?>
                <div class="action-phone__btn js-feedback-form">
                    <? $APPLICATION->IncludeFile(SITE_DIR . 'include/inner_page/header/phone_button_title.php'); ?>
                </div>
            </div>
        </div>
        <div class="socials socials-row">
            <ul class="socials__list">
                <li class="socials__item">
                    <? $APPLICATION->IncludeFile(SITE_DIR . 'include/inner_page/header/social_link_vk.php'); ?>
                </li>
                <li class="socials__item">
                    <? $APPLICATION->IncludeFile(SITE_DIR . 'include/inner_page/header/social_link_instagram.php'); ?>
                </li>
            </ul>
        </div>
        <div class="hamburger-btn hamburger-btn--darken">
            <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </button>
        </div>
    </aside>
    <main class="main-content">
        <? if (!preg_match('~^/(?:contacts|catalog/([A-Za-z0-9-]+)/[^/]+)/$~iu', $APPLICATION->GetCurDir())): ?>
            <header class="page-header" <?=$APPLICATION->ShowViewContent('banner-image');?>>
                <div class="hamburger-btn">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner_page">
                            </span>
                        </span>
                    </button>
                </div>
                <div class="page-header__wrap">
                    <div class="page-header__logo">
                        <img src="/assets/inner_page/img/header-logo.png" alt="banner">
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "breadcrumb_inner",
                        Array(
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0",
                        ),
                        false
                    ); ?>
                    <div class="page-header__headline">
                        <h1 class="page-header__title">
                            <?= $APPLICATION->ShowTitle(); ?>
                        </h1>
                        <h2 class="page-header__subtitle">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/inner_page/header/subtitle.php'); ?>
                        </h2>
                    </div>
                </div>
            </header>
        <? endif; ?>

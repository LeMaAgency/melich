<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

?><!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="76x76" href="/">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png"/>

    <?php
    $APPLICATION->ShowHead();

    \Lema\Common\AssetManager::get()
        ->init(array('fx'))
        ->addCssArray(array(
            '//fonts.googleapis.com/css?family=Noto+Sans:400,700',
            '//fonts.googleapis.com/css?family=PT+Sans:400,700',
            '/assets/js/lib/fancybox/fancybox.min.css',
            '/assets/css/style.min.css',
            '/assets/custom_all//style.css',
        ))
        ->addJsArray(array(
            '/assets/js/lib/jquery.min.js',
            '/assets/js/lib/slick.js',
            '/assets/js/lib/anime.js',
            '/assets/js/lib/fancybox/fancybox.min.js',
            '/assets/js/scripts.js',
            '/assets/js/main.min.js',
            '/assets/custom_all//script.js',
        ));
    ?>

    <title><?$APPLICATION->ShowTitle();?></title>

</head>
<body class="body-content app">
<?$APPLICATION->ShowPanel();?>
    <header>
        <!-- MOBILE MENU -->
        <div class="core__menu-nav__mobile__alert">
            <!-- После адоптации - это меню откроется  -->
            <div class="core__menu-nav__mobile__alert__user">

            </div>
            <div class="core__menu-nav__mobile__alert__menu" data-core-name="<?=Loc::getMessage('LEMA_HEADER_MENU_TITLE');?>" data-js-core-resize-after="menu">
            </div>
        </div>
        <div class="core__menu-nav__mobile__button">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- END MOBILE MENU -->



        <!-- MOBILE MENU -->
        <div class="mob">
            <div class="mob-menu">
                <ul class="mob-menu-nav">
                    <? $APPLICATION->IncludeComponent('bitrix:menu', 'top_menu', array(
                        'ALLOW_MULTI_SELECT' => 'N',
                        'ROOT_MENU_TYPE' => 'top',
                        'CHILD_MENU_TYPE' => 'left',
                        'DELAY' => 'N',
                        'MAX_LEVEL' => '1',
                        'MENU_CACHE_GET_VARS' => array(
                        ),
                        'MENU_CACHE_TIME' => '3600',
                        'MENU_CACHE_TYPE' => 'A',
                        'MENU_CACHE_USE_GROUPS' => 'N',
                        'USE_EXT' => 'Y',
                        'COMPONENT_TEMPLATE' => 'top_menu'
                    )); ?>
                </ul>
                <div class="mob-menu-footer">
                    <div class="header__main__phone__btn">
                        <a href="tel:89282656333" title="Позвонить" class="header__main__phone__btn__control">Позвонить нам</a>
                    </div>
                </div>
                <div class="mob-menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" version="1.1">
                        <g id="surface1">
                            <path style=" " d="M 32 8 C 30.347656 8 29 9.347656 29 11 C 29 11.953125 29.457031 12.796875 30.15625 13.347656 L 21.589844 29.527344 L 7.542969 19.578125 C 7.828125 19.117188 8 18.578125 8 18 C 8 16.347656 6.652344 15 5 15 C 3.347656 15 2 16.347656 2 18 C 2 19.425781 3 20.613281 4.332031 20.921875 L 8 41.089844 L 8 50 L 7 50 C 5.347656 50 4 51.347656 4 53 C 4 54.652344 5.347656 56 7 56 L 57 56 C 58.652344 56 60 54.652344 60 53 C 60 51.347656 58.652344 50 57 50 L 56 50 L 56 41.089844 L 59.667969 20.921875 C 61 20.613281 62 19.425781 62 18 C 62 16.347656 60.652344 15 59 15 C 57.347656 15 56 16.347656 56 18 C 56 18.578125 56.171875 19.113281 56.453125 19.570313 L 42.355469 29.527344 L 33.84375 13.351563 C 34.542969 12.800781 35 11.957031 35 11 C 35 9.347656 33.652344 8 32 8 Z M 32 9.792969 C 32.664063 9.792969 33.207031 10.335938 33.207031 11 C 33.207031 11.667969 32.664063 12.207031 32 12.207031 C 31.335938 12.207031 30.792969 11.667969 30.792969 11 C 30.792969 10.332031 31.335938 9.792969 32 9.792969 Z M 31.996094 14.140625 L 41.113281 31.464844 C 41.25 31.71875 41.484375 31.90625 41.765625 31.972656 C 42.046875 32.039063 42.339844 31.980469 42.578125 31.816406 L 57.578125 21.226563 L 54.015625 40.820313 C 54.007813 40.851563 54.019531 40.878906 54.015625 40.910156 C 54.015625 40.941406 54 40.96875 54 41 L 54 50 L 10 50 L 10 42 L 43 42 C 43.550781 42 44 41.554688 44 41 C 44 40.445313 43.550781 40 43 40 L 9.835938 40 L 6.421875 21.234375 L 21.359375 31.816406 C 21.59375 31.980469 21.886719 32.039063 22.171875 31.972656 C 22.449219 31.90625 22.6875 31.722656 22.824219 31.46875 Z M 5 16.792969 C 5.664063 16.792969 6.207031 17.332031 6.207031 18 C 6.207031 18.667969 5.664063 19.207031 5 19.207031 C 4.335938 19.207031 3.792969 18.664063 3.792969 18 C 3.792969 17.332031 4.335938 16.792969 5 16.792969 Z M 59 16.792969 C 59.664063 16.792969 60.207031 17.335938 60.207031 18 C 60.207031 18.667969 59.664063 19.207031 59 19.207031 C 58.335938 19.207031 57.792969 18.667969 57.792969 18 C 57.792969 17.332031 58.335938 16.792969 59 16.792969 Z M 32 24.035156 C 31.65625 24.035156 31.308594 24.191406 31.132813 24.503906 L 27.132813 31.503906 C 26.910156 31.894531 26.972656 32.390625 27.292969 32.707031 L 31.292969 36.707031 C 31.488281 36.902344 31.742188 37 32 37 C 32.257813 37 32.511719 36.902344 32.707031 36.707031 L 36.707031 32.707031 C 37.027344 32.390625 37.089844 31.894531 36.867188 31.503906 L 32.867188 24.503906 C 32.691406 24.191406 32.34375 24.035156 32 24.035156 Z M 32 27.015625 L 34.753906 31.832031 L 32 34.585938 L 29.246094 31.832031 Z M 47 40 C 46.449219 40 46 40.445313 46 41 C 46 41.554688 46.449219 42 47 42 L 51 42 C 51.550781 42 52 41.554688 52 41 C 52 40.445313 51.550781 40 51 40 Z M 12 44 C 11.449219 44 11 44.445313 11 45 L 11 47 C 11 47.554688 11.449219 48 12 48 C 12.550781 48 13 47.554688 13 47 L 13 45 C 13 44.445313 12.550781 44 12 44 Z M 17 44 C 16.449219 44 16 44.445313 16 45 L 16 47 C 16 47.554688 16.449219 48 17 48 C 17.550781 48 18 47.554688 18 47 L 18 45 C 18 44.445313 17.550781 44 17 44 Z M 22 44 C 21.449219 44 21 44.445313 21 45 L 21 47 C 21 47.554688 21.449219 48 22 48 C 22.550781 48 23 47.554688 23 47 L 23 45 C 23 44.445313 22.550781 44 22 44 Z M 27 44 C 26.449219 44 26 44.445313 26 45 L 26 47 C 26 47.554688 26.449219 48 27 48 C 27.550781 48 28 47.554688 28 47 L 28 45 C 28 44.445313 27.550781 44 27 44 Z M 32 44 C 31.449219 44 31 44.445313 31 45 L 31 47 C 31 47.554688 31.449219 48 32 48 C 32.550781 48 33 47.554688 33 47 L 33 45 C 33 44.445313 32.550781 44 32 44 Z M 37 44 C 36.449219 44 36 44.445313 36 45 L 36 47 C 36 47.554688 36.449219 48 37 48 C 37.550781 48 38 47.554688 38 47 L 38 45 C 38 44.445313 37.550781 44 37 44 Z M 42 44 C 41.449219 44 41 44.445313 41 45 L 41 47 C 41 47.554688 41.449219 48 42 48 C 42.550781 48 43 47.554688 43 47 L 43 45 C 43 44.445313 42.550781 44 42 44 Z M 47 44 C 46.449219 44 46 44.445313 46 45 L 46 47 C 46 47.554688 46.449219 48 47 48 C 47.550781 48 48 47.554688 48 47 L 48 45 C 48 44.445313 47.550781 44 47 44 Z M 52 44 C 51.449219 44 51 44.445313 51 45 L 51 47 C 51 47.554688 51.449219 48 52 48 C 52.550781 48 53 47.554688 53 47 L 53 45 C 53 44.445313 52.550781 44 52 44 Z M 7 52 L 57 52 C 57.550781 52 58 52.449219 58 53 C 58 53.550781 57.550781 54 57 54 L 7 54 C 6.449219 54 6 53.550781 6 53 C 6 52.449219 6.449219 52 7 52 Z "></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <!-- END MOBILE MENU -->
        <div class="mob-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu-top">
            <? $APPLICATION->IncludeComponent('bitrix:menu', 'top_menu', array(
                'ALLOW_MULTI_SELECT' => 'N',
                'ROOT_MENU_TYPE' => 'top',
                'CHILD_MENU_TYPE' => 'left',
                'DELAY' => 'N',
                'MAX_LEVEL' => '1',
                'MENU_CACHE_GET_VARS' => array(
                ),
                'MENU_CACHE_TIME' => '3600',
                'MENU_CACHE_TYPE' => 'A',
                'MENU_CACHE_USE_GROUPS' => 'N',
                'USE_EXT' => 'Y',
                'COMPONENT_TEMPLATE' => 'top_menu'
            )); ?>
        </div>
        <div class="header container-fluid">
            <div class="header__main">
                    <div class="header__main__logo">
                        <?if($APPLICATION->GetCurDir() == '/'):?>
                            <img src="/assets/img/logo.png" alt="logo">
                        <?else:?>
                            <a href="<?=SITE_DIR;?>" title="logo">
                                <img src="/assets/img/logo.png" alt="logo">
                            </a>
                        <?endif;?>
                    </div>
                    <div class="header__main__menu">
                        <? $APPLICATION->IncludeComponent('bitrix:menu', 'top_menu', array(
                            'ALLOW_MULTI_SELECT' => 'N',
                            'ROOT_MENU_TYPE' => 'top',
                            'CHILD_MENU_TYPE' => 'left',
                            'DELAY' => 'N',
                            'MAX_LEVEL' => '1',
                            'MENU_CACHE_GET_VARS' => array(
                            ),
                            'MENU_CACHE_TIME' => '3600',
                            'MENU_CACHE_TYPE' => 'A',
                            'MENU_CACHE_USE_GROUPS' => 'N',
                            'USE_EXT' => 'Y',
                            'COMPONENT_TEMPLATE' => 'top_menu'
                        )); ?>
                    </div>
                    <div class="header__main__block-mobile" data-js-core-resize="top" data-js-core-resize-width="lg">
                        <div class="header__main__phone">
                            <div class="header__main__phone__icon">
                                <img src="/assets/img/icon/phone.png" alt=""/>
                            </div>
                            <div class="header__main__phone__number">
                                <? $APPLICATION->IncludeFile(SITE_DIR . 'include/header/phone_link.php'); ?>
                            </div>
                            <div class="header__main__phone__btn">
                                <? $APPLICATION->IncludeFile(SITE_DIR . 'include/header/order_link.php'); ?>
                            </div>
                        </div>
                        <div class="header__main__social">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/header/social_links.php'); ?>
                        </div>
                    </div>
                </div>
        </div>
    </header>
    <div class="body-main" role="main">


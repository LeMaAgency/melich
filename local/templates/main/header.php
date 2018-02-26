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
        ))
        ->addJsArray(array(
            '/assets/js/lib/jquery.min.js',
            '/assets/js/lib/slick.js',
            '/assets/js/lib/anime.js',
            '/assets/js/lib/fancybox/fancybox.min.js',
            '/assets/js/scripts.js',
            '/assets/js/main.min.js',
        ));
    ?>

    <title><?$APPLICATION->ShowTitle();?></title>

</head>
<body class="body-content">
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
    </header>
    <div class="body-main" role="main">


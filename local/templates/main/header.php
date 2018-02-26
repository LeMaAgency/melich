<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
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
            '/assets/js/lib/fancybox/fancybox.min.js',
            '/assets/js/scripts.min.js',
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
            <div class="core__menu-nav__mobile__alert__menu" data-core-name="Меню" data-js-core-resize-after="menu">
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
                        <a href="/" title="logo">
                            <img src="/assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="header__main__menu">
                        <div class="header__main__menu__title"><span>Меню</span></div>
                        <ul class="header__main__menu__list">
                            <li><a href="" title="Для Вас">Для Вас</a></li>
                            <li><a href="" title="Каталог">Каталог</a></li>
                            <li><a href="" title="Статьи">Статьи</a></li>
                            <li><a href="" title="Сертификаты">Сертификаты</a></li>
                            <li><a href="" title="Доставка оплата">Доставка оплата</a></li>
                            <li><a href="" title="Контакты">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="header__main__phone">
                        <div class="header__main__phone__icon">
                            <img src="/assets/img/icon/phone.png" alt=""/>
                        </div>
                        <div class="header__main__phone__number">
                            <a href="tell://81234567890" title="Позвонить" class="header__main__phone__number__control">8 (123) 456-78-90</a>
                        </div>
                        <div class="header__main__phone__btn">
                            <a href="/" title="Заказать звонок" class="header__main__phone__btn__control">Заказать звонок</a>
                        </div>
                    </div>
                    <div class="header__main__social">
                        <a href="" title="vkontakte" class="header__main__social__item header__main__social__item_vk"></a>
                        <a href="" title="instagram" class="header__main__social__item header__main__social__item_inst"></a>
                    </div>
                </div>
        </div>
    </header>
    <div class="body-main" role="main">


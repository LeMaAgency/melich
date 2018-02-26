<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="76x76" href="/">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png"/>

    <!-- SEO -->
    <title></title>
    <meta name="description" content="<?=$arParam['description']?>"/>
    <meta name="robots" content="noodp"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$arParam['title']?>" />
    <meta property="og:description" content="<?=$arParam['description']?>" />
    <meta property="og:url" content="http://sitename.com/" />
    <meta property="og:site_name" content="Название сайта" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="/assets/js/lib/fancybox/fancybox.min.css" type='text/css'/>
    <link rel="stylesheet" href="/assets/css/style.min.css" type='text/css' media='all' />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
</head>
<body class="body-content">
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


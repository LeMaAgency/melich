<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    $APPLICATION->ShowHead();

    \Lema\Common\AssetManager::get()
        ->init(array('fx'))
        ->addCssArray(array(
            '/assets/inner/css/style.css?v=6',
        ))
        ->addJsArray(array(
            '/assets/inner/js/jquery.min.js',
            '/assets/inner/js/object-fit-polyfill.js',
            '/assets/inner/js/jquery.fancybox.min.js',
            '/assets/inner/js/slick.min.js',
            '/assets/inner/js/jquery.mCustomScrollbar.concat.min.js',
            '/assets/inner/js/main.js?v=4',
        ));
    ?>

    <title><?$APPLICATION->ShowTitle();?></title>
</head>

<body>

<?$APPLICATION->ShowPanel();?>
<!--Start svg-sprite-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">
    <symbol viewBox="0 0 169.063 169.063" id="instagram-logo" xmlns="http://www.w3.org/2000/svg">
        <path d="M122.406 0H46.654C20.929 0 0 20.93 0 46.655v75.752c0 25.726 20.929 46.655 46.654 46.655h75.752c25.727 0 46.656-20.93 46.656-46.655V46.655C169.063 20.93 148.133 0 122.406 0zm31.657 122.407c0 17.455-14.201 31.655-31.656 31.655H46.654C29.2 154.063 15 139.862 15 122.407V46.655C15 29.201 29.2 15 46.654 15h75.752c17.455 0 31.656 14.201 31.656 31.655v75.752z"></path>
        <path d="M84.531 40.97c-24.021 0-43.563 19.542-43.563 43.563 0 24.02 19.542 43.561 43.563 43.561s43.563-19.541 43.563-43.561c0-24.021-19.542-43.563-43.563-43.563zm0 72.123c-15.749 0-28.563-12.812-28.563-28.561 0-15.75 12.813-28.563 28.563-28.563s28.563 12.813 28.563 28.563c0 15.749-12.814 28.561-28.563 28.561zm45.39-84.842c-2.89 0-5.729 1.17-7.77 3.22a11.053 11.053 0 0 0-3.23 7.78c0 2.891 1.18 5.73 3.23 7.78 2.04 2.04 4.88 3.22 7.77 3.22 2.9 0 5.73-1.18 7.78-3.22 2.05-2.05 3.22-4.89 3.22-7.78 0-2.9-1.17-5.74-3.22-7.78-2.04-2.05-4.88-3.22-7.78-3.22z"></path>
    </symbol>
    <symbol viewBox="0 0 548.358 548.358" id="vk-logo" xmlns="http://www.w3.org/2000/svg">
        <path d="M545.451 400.298c-.664-1.431-1.283-2.618-1.858-3.569-9.514-17.135-27.695-38.167-54.532-63.102l-.567-.571-.284-.28-.287-.287h-.288c-12.18-11.611-19.893-19.418-23.123-23.415-5.91-7.614-7.234-15.321-4.004-23.13 2.282-5.9 10.854-18.36 25.696-37.397 7.807-10.089 13.99-18.175 18.556-24.267 32.931-43.78 47.208-71.756 42.828-83.939l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712-4.764-1.427-10.853-1.663-18.278-.712l-82.224.568c-1.332-.472-3.234-.428-5.712.144l-3.713.859-1.431.715-1.136.859c-.952.568-1.999 1.567-3.142 2.995-1.137 1.423-2.088 3.093-2.848 4.996-8.952 23.031-19.13 44.444-30.553 64.238-7.043 11.803-13.511 22.032-19.418 30.693-5.899 8.658-10.848 15.037-14.842 19.126-4 4.093-7.61 7.372-10.852 9.849-3.237 2.478-5.708 3.525-7.419 3.142-1.715-.383-3.33-.763-4.859-1.143-2.663-1.714-4.805-4.045-6.42-6.995-1.622-2.95-2.714-6.663-3.285-11.136-.568-4.476-.904-8.326-1-11.563-.089-3.233-.048-7.806.145-13.706.198-5.903.287-9.897.287-11.991 0-7.234.141-15.085.424-23.555.288-8.47.521-15.181.716-20.125.194-4.949.284-10.185.284-15.705s-.336-9.849-1-12.991a44.442 44.442 0 0 0-2.99-9.137c-1.335-2.95-3.289-5.232-5.853-6.852-2.569-1.618-5.763-2.902-9.564-3.856-10.089-2.283-22.936-3.518-38.547-3.71-35.401-.38-58.148 1.906-68.236 6.855-3.997 2.091-7.614 4.948-10.848 8.562-3.427 4.189-3.905 6.475-1.431 6.851 11.422 1.711 19.508 5.804 24.267 12.275l1.715 3.429c1.334 2.474 2.666 6.854 3.999 13.134 1.331 6.28 2.19 13.227 2.568 20.837.95 13.897.95 25.793 0 35.689-.953 9.9-1.853 17.607-2.712 23.127-.859 5.52-2.143 9.993-3.855 13.418-1.715 3.426-2.856 5.52-3.428 6.28-.571.76-1.047 1.239-1.425 1.427a21.387 21.387 0 0 1-7.71 1.431c-2.667 0-5.901-1.334-9.707-4-3.805-2.666-7.754-6.328-11.847-10.992-4.093-4.665-8.709-11.184-13.85-19.558-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267-4.952-10.185-9.329-20.037-13.134-29.554-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-.859c-.95-.76-2.475-1.567-4.567-2.427a30.301 30.301 0 0 0-6.567-1.854l-78.229.568c-7.994 0-13.418 1.811-16.274 5.428l-1.143 1.711c-.571.953-.859 2.475-.859 4.57 0 2.094.571 4.664 1.714 7.707 11.42 26.84 23.839 52.725 37.257 77.659 13.418 24.934 25.078 45.019 34.973 60.237 9.897 15.229 19.985 29.602 30.264 43.112 10.279 13.515 17.083 22.176 20.412 25.981 3.333 3.812 5.951 6.662 7.854 8.565l7.139 6.851c4.568 4.569 11.276 10.041 20.127 16.416 8.853 6.379 18.654 12.659 29.408 18.85 10.756 6.181 23.269 11.225 37.546 15.126 14.275 3.905 28.169 5.472 41.684 4.716h32.834c6.659-.575 11.704-2.669 15.133-6.283l1.136-1.431c.764-1.136 1.479-2.901 2.139-5.276.668-2.379 1-5 1-7.851-.195-8.183.428-15.558 1.852-22.124 1.423-6.564 3.045-11.513 4.859-14.846 1.813-3.33 3.859-6.14 6.136-8.418 2.282-2.283 3.908-3.666 4.862-4.142.948-.479 1.705-.804 2.276-.999 4.568-1.522 9.944-.048 16.136 4.429 6.187 4.473 11.99 9.996 17.418 16.56 5.425 6.57 11.943 13.941 19.555 22.124 7.617 8.186 14.277 14.271 19.985 18.274l5.708 3.426c3.812 2.286 8.761 4.38 14.853 6.283 6.081 1.902 11.409 2.378 15.984 1.427l73.087-1.14c7.229 0 12.854-1.197 16.844-3.572 3.998-2.379 6.373-5 7.139-7.851.764-2.854.805-6.092.145-9.712-.677-3.611-1.344-6.136-2.008-7.563z"></path>
    </symbol>
</svg>
<!--End svg-sprite-->
<div class="flex-container">
    <!--Start nav-bar-->
    <aside class="nav-bar">
        <div class="nav-bar__logo logo">
            <?if($APPLICATION->GetCurDir() == '/'):?>
                <img src="/assets/img/logo.png" alt="logo">
            <?else:?>
                <a href="<?=SITE_DIR;?>" class="logo__link" title="Melich - Фабрика меха и кожи">
                    <img src="/assets/inner/img/logo.png" class="logo__img" alt="Melich - Фабрика меха и кожи">
                </a>
            <?endif;?>
        </div>
        <!--Start main-nav-->
        <nav class="main-nav">
            <div class="main-nav__text">Меню</div>
            <ul class="main-nav__list">
                <li class="main-nav__item"><a class="main-nav__link" href="about.html">Для вас</a>
                </li>
                <li class="main-nav__item is-active"><a class="main-nav__link" href="index.html">Каталог</a>
                </li>
                <li class="main-nav__item"><a class="main-nav__link" href="articles.html">Статьи</a>
                </li>
                <li class="main-nav__item"><a class="main-nav__link" href="certificates.html">Сертификаты</a>
                </li>
                <li class="main-nav__item"><a class="main-nav__link" href="shipping.html">Доставка Оплата</a>
                </li>
                <li class="main-nav__item"><a class="main-nav__link" href="contacts.html">Контакты</a>
                </li>
            </ul>
        </nav>
        <!--End main-nav-->
        <!--Start action-phone-->
        <div class="action-phone">
            <div class="action-phone__wrap">
                <div class="action-phone__icon">
                    <img src="img/icon-phone.png" alt="">
                </div><a class="action-phone__link" href="tel:81234567890">8 (123) 456-78-90</a>
                <div class="action-phone__btn">Заказать звонок</div>
            </div>
        </div>
        <!--End action-phone-->
        <!--Start socials-->
        <div class="socials socials-row">
            <ul class="socials__list">
                <li class="socials__item">
                    <a class="socials__link" href="#">
                        <svg class="socials__icon icon-vk">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vk-logo"></use>
                        </svg>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="socials__link" href="#">
                        <svg class="socials__icon icon-inst">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram-logo"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <!--End socials-->
    </aside>
    <!--End nav-bar-->
    <!--Start main-content-->
    <main class="main-content">
        <!--Start page-header-->
        <header class="page-header">
            <!--Start hamburger-btn-->
            <div class="hamburger-btn">
                <button class="hamburger hamburger--collapse" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span>
                </button>
            </div>
            <!--End hamburger-btn-->
            <div class="page-header__wrap">
                <div class="page-header__logo">
                    <img src="img/header-logo.png" alt="">
                </div>
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">главная</a>
                        </li>
                        <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#">каталог</a>
                        </li>
                    </ul>
                </div>
                <div class="page-header__headline">
                    <h1 class="page-header__title">Каталог</h1>
                    <h2 class="page-header__subtitle">Историю Компании «MELICH» можно рассказывать как историю создания искусства</h2>
                </div>
            </div>
        </header>
        <!--End page-header-->
        <!--Start flex-container-->
        <div class="flex-container flex-direction-tablet">
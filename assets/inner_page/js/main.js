"use strict";

$(document).ready(function () {

    //===========================
    // Scroll bar
    //===========================

    $(".filter-form__wrap").mCustomScrollbar();

    $(".shipping-modal__wrap").mCustomScrollbar();
    //===========================

    //===========================
    // Mobile menu
    //===========================
    $(".hamburger").click(function () {

        $(this).toggleClass("is-active");

        $(".nav-bar").toggleClass("nav-bar--active");

    });
    //===========================

    //===========================
    // Fancy box
    //===========================
    $(".certificates__link").fancybox();

    $(".card-slider__img-link").fancybox();
    //===========================

    //===========================
    // Filter
    //===========================
    
    $(".checked-all-js").click(function () {

        var allCheckbox = $(".filter-form__checkbox");

        allCheckbox.prop("checked", allCheckbox.prop("checked"));

    });


    $(".filter-form__checkbox").not($(".checked-all-js")).click(function () {

       $(".checked-all-js").prop("checked", false);

    });
    //===========================

    //===========================
    // Slick slider
    //===========================

    $(".slider-for").slick({
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: ".slider-nav"
    });

    $(".slider-nav").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        dots: false,
        centerMode: false,
        focusOnSelect: true
    });


    //===========================
    // Модальное окно
    //===========================
    $(".shipping__card--button").click(function () {

        $(".shipping-overlay").fadeIn(150);

    });

    $(".close-js").click(function () {
        $(".shipping-overlay").fadeOut(150);
    });

    $(document).keydown(closeModal);

    //Close modal
    function closeModal(e) {

        if (e.keyCode === 27) {
            $(".shipping-overlay").fadeOut(150);
        }

    }
    //===========================

    $(".card-accordion__btn").click(function () {

        var $this = $(this);

        $this.toggleClass("is-active");

        $this.next(".card-accordion__content").slideToggle(300);
    });


});


function initMap() {
    var center = {lat: 44.038390, lng: 42.852842};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: center
    });

    var marker = new google.maps.Marker({
        position: center,
        map: map
    });
}

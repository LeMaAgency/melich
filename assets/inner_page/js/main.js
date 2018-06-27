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


    //===============================================================
    //БЫСТРЫЙ ПРОСМОТР ЭЛЕМЕНТОВ КАТАЛОГА (Нужен подключенный fancybox)

    /** @description Функция для быстрого просмотра шуб
     * @param {bool} isNavigationButton Элемента для которого вызывается функция является кнопкой для перемещения влево или вправо.
     * @param {number} elemId ID элемента который нужно показать
     */
    function quickPreview(isNavigationButton,elemId){
        var parent = $('.catalog__item[data-id="'+elemId+'"]'),
            prev_elem_id = parent.prev().attr('data-id'),
            next_elem_id = parent.next().attr('data-id');

        $('#prev_qick_view').attr('data-id',prev_elem_id);
        $('#next_qick_view').attr('data-id',next_elem_id);
        $('#prev_qick_view').show();
        $('#next_qick_view').show();
        if(typeof prev_elem_id == "undefined"){
            $('#prev_qick_view').hide();
        }
        if(typeof next_elem_id == "undefined"){
            $('#next_qick_view').hide();
        }
        console.log(prev_elem_id,next_elem_id,elemId);
        $.post('/ajax/catalog_quick_view.php',{'COAT_ID': elemId},function(data) {
                $("#quick_view").find(".heading__title").text(data["NAME"]);
                $("#quick_view").find(".card-description__article").text("Модель "+data["PROPERTY_ARTICUL_VALUE"]);
                if(data["PROPERTY_TYPE_FUR_VALUE"] !== null){
                    $("#quick_view").find(".type_fur").text(data["PROPERTY_TYPE_FUR_VALUE"]);
                    $("#quick_view").find(".type_fur_block").show();
                }else{
                    $("#quick_view").find(".type_fur_block").hide();
                }

                if(data["PROPERTY_OTDELKA_VALUE"] !== null){
                    $("#quick_view").find(".otdelka").text(data["PROPERTY_OTDELKA_VALUE"]);
                    $("#quick_view").find(".otdelka_block").show();
                }else{
                    $("#quick_view").find(".otdelka_block").hide();
                }

                if(data["PROPERTY_VOROT_VALUE"] !== null){
                    $("#quick_view").find(".vorot").text(data["PROPERTY_VOROT_VALUE"]);
                    $("#quick_view").find(".vorot_block").show();
                }else{
                    $("#quick_view").find(".vorot_block").hide();
                }

                if(data["PROPERTY_SIZE_VALUE"] !== null && data["PROPERTY_SIZE_VALUE"].length !== 0){
                    $("#quick_view").find(".size").empty();
                    $("#quick_view").find(".size_block").show();
                   for(var key in data["PROPERTY_SIZE_VALUE"]){
                       $("#quick_view").find(".size").append(
                           "<div class='size__item'><span>"+data["PROPERTY_SIZE_VALUE"][key]+"</span></div>"
                       );
                   }

                }else{
                    $("#quick_view").find(".size_block").hide();
                }

                if(typeof data["PROPERTY_COLOR_VALUE_XML_ID"] !=="undefined"){
                    $("#quick_view").find(".color").empty();
                    $("#quick_view").find(".color_block").show();
                    for(var key in data["PROPERTY_COLOR_VALUE_XML_ID"]){
                        $("#quick_view").find(".color").append(
                            "<div class='block-color__item'><span class='color-"+data["PROPERTY_COLOR_VALUE_XML_ID"][key]+"'></span></div>"
                        );
                    }
                }else{
                    $("#quick_view").find(".color_block").hide();
                }
                //Перезапуск slick слайдера
                $("#quick_view").find(".slider-for").slick('unslick');
                $("#quick_view").find(".slider-nav").slick('unslick');
                $("#quick_view").find(".slider-for").empty();
                $("#quick_view").find(".slider-nav").empty();
                //Наполениене картинками сладеров
                for (var ArrVal in data["IMAGES"]) {
                    //Добавление элемента в слайдер
                    $("#quick_view").find(".slider-for").append(`\
                            <div class="card-slider__for-item">\
                                <img src="${data["IMAGES"][ArrVal]}" alt="test">\
                            </div>`
                    )
                    //Добавление элемента в мини-слайдер
                    $("#quick_view").find(".slider-nav").append(`\
                            <div class="card-slider__nav-item">\
                                <img src="${data["IMAGES"][ArrVal]}" alt="test">\
                            </div>`
                    )
                }
                //конец картинками сладеров

                //открытие подготовленного блока в fancybox
                if(isNavigationButton !=true){
                    $.fancybox.open($('#quick_view'),{scrolling: 'no',touch: false});
                }
                //Инициализация слайдеров
                $("#quick_view").find(".slider-for").slick({
                    speed: 300,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: false,
                    asNavFor: ".slider-nav",
                });
                $("#quick_view").find(".slider-nav").slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    asNavFor: ".slider-for",
                    dots: false,
                    centerMode: false,
                    focusOnSelect: true,
                    arrows: false,
                });

            },
            'json'
        )

    }


    //Нажате кнопки "Быстрый просмотр на элемента"
    $('body').on("click",".quick_prev_btn",function(){
        var coatId = $(this).attr("data-id");
        quickPreview(false,coatId);
    })

    //Предыдущий элемент
    $('body').on("click","#prev_qick_view",function(){
        var coatId = $(this).attr("data-id");
        quickPreview(true,coatId);
    });

    //Следующий элемент
    $('body').on("click","#next_qick_view",function(){
        var coatId = $(this).attr("data-id");
        quickPreview(true,coatId);
    });

    //===============================================================


    $(".js-feedback-form").on("click",function(){
        $.fancybox.open($('#feedback-form'));
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



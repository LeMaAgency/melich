var jsMobMenu = {
    // Переменные
    // ...
    $body :    $('.app'),
    $menu :    $('.mob-menu'),
    $buttonX : $('.mob-btn'),

    init: function () {
        this.load();
    },
    load: function () {
        $(this.$buttonX).on('click', this.ButtonX_click);
    },

    ButtonX_click: function (e){
        e.preventDefault();
        jsMobMenu.$body.toggleClass('js-mob-menu-open');
        jsMobMenu.$buttonX.toggleClass('active');
    },
    exit: function () {
        jsMobMenu.$body.removeClass('js-mob-menu-open');
        jsMobMenu.$buttonX.removeClass('active');
    },
    open: function () {
        jsMobMenu.$body.addClass('js-mob-menu-open');
        jsMobMenu.$buttonX.addClass('active');
    }
};

$(function () {
    jsMobMenu.init();
});
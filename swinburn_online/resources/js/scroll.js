import $ from 'jquery';

$(document).ready(function () {
    $(".tocs").click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $($(this).attr('scrollTarget')).offset().top - 172
        }, 250);
    });

    $(window).scroll(function () {
        $(".tocs").removeClass('active');
        $(".tocs").each(function (i, obj) {
            if ($(window).scrollTop() > ($($(obj).attr('scrollTarget')).offset().top - 200)
                && $(window).scrollTop() < ($($(obj).attr('scrollTarget')).offset().top + $($(obj).attr('scrollTarget')).height() - 200)) {
                $(obj).addClass('active');
            }
        })
    });

    $(".journey-navigation").each(function (i, obj) {
        if ($($(obj).attr('scrollTarget')).length) {
            if ($(window).scrollTop() > ($($(obj).attr('scrollTarget')).offset().top - 200)
                && $(window).scrollTop() < ($($(obj).attr('scrollTarget')).offset().top + $($(obj).attr('scrollTarget')).height() - 200)) {
                $(obj).addClass('active');
            }
        }
    });

    $(".journey-navigation").click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $($(this).attr('scrollTarget')).offset().top - 120
        }, 250);
    });

    $(window).scroll(function () {
        $(".journey-navigation").removeClass('active');
        $(".journey-navigation").each(function (i, obj) {
            if ($($(obj).attr('scrollTarget')).length) {
                if ($(window).scrollTop() > ($($(obj).attr('scrollTarget')).offset().top - 200)
                    && $(window).scrollTop() < ($($(obj).attr('scrollTarget')).offset().top + $($(obj).attr('scrollTarget')).height() - 200)) {
                    $(obj).addClass('active');
                }
            }
        })
    });
});

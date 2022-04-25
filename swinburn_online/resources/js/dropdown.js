import $ from 'jquery';

$(document).ready(function () {
    $('.drop-down').click(function () {
        $($(this).attr('toggleTarget')).slideToggle();
    });

    var slide_content_default_height = {}; 
    $('.slide-content').each(function (i, obj) {
        slide_content_default_height["#" + $(obj).attr('id')] = $(obj).outerHeight() + 'px';
    });

    $('#unit-list').addClass('hidden').css({'height': '270px'});

    $('.extend-content').click(function () {
        if($(this).hasClass('hidden')) {
            $(this).removeClass('hidden');
            $(this).addClass('show');
            $(this).children('.zoom_in').css('display', 'none');
            $(this).children('.zoom_out').css('display', 'block');
            $($(this).attr('slideTarget')).animate({'height': slide_content_default_height[$(this).attr('slideTarget')]}, { queue:false, duration:250 }).removeClass('hidden');
        } else {
            $(this).removeClass('show');
            $(this).addClass('hidden');
            $(this).children('.zoom_in').css('display', 'block');
            $(this).children('.zoom_out').css('display', 'none');
            $($(this).attr('slideTarget')).animate({'height': '270px'}, { queue:false, duration:250 }).addClass('hidden');   
            window.scrollTo(0, $($(this).attr('slideTarget')).offset().top - 120);
        }
    });

    $('.extend-content').click(function(){
        $('.zoom_in_1').toggle();
        $('.zoom_out_1').toggle();
    });

    $('.extend-content').click(function(){
        $('.zoom_in_2').toggle();
        $('.zoom_out_2').toggle();
    });
    
    var $boxes = $('.boxlink'),
        $sub_menu = $('.li-hover').mouseover(function() {
            $boxes.hide().filter('#box' + this.id).show();
        });

    $(function() {
        $('.li-hover').mouseenter(function() {
            $('.li-hover').removeClass("active");
            $(this).addClass("active");
        });
    });
});

$(document).ready(function() {
    $('#drop-menu').click(function() {
        $('#item-drop').slideToggle();
    });
});

$(document).ready(function() {
    $(".question").click(function() {
        $(this).next(".answer").slideToggle(); 
    });
}); 

$(document).ready(function() {
    $('#toggle').click(function() {
        $('#nav').slideToggle();
    });
});

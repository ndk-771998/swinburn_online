import $ from 'jquery';

$(document).ready(function () {
    $('.tabs').eq(0).addClass('active');
    $('.tab-content').eq(0).css('display', 'block');
    $('.tabs').click( function () {
        $('.tab-content').css('display', 'none');
        $('.tabs').removeClass('active');
        $(this).addClass('active');
        $($(this).attr('navTarget')).fadeIn();
    });
});
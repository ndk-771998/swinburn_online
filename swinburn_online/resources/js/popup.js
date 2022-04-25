import $ from 'jquery';

$(document).ready(function () {
    $('.course-popup-close').click( function () {
        $($(this).attr('closePopupTarget')).fadeOut();
    });

    $('.course-popup-open').click( function () {
        $($(this).attr('openPopupTarget')).fadeIn();
        console.log($(this).attr('closePopupTarget'));
    })
});
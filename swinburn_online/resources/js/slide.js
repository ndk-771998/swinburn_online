import $ from 'jquery';

$('document').ready(function() {
    $('.journey-slide').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        autoplay: false,
        prevArrow:"<img width='30' height='30' class='a-left control-c prev slick-prev' src='/assets/logos/red_arrow.svg' alt='prev'>",
        nextArrow:"<img width='30' height='30' class='a-right control-c next slick-next' src='/assets/logos/red_arrow.svg' alt='next'>",
        arrows: true,
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    variableWidth: true
                }
            },
        ]
    });
});
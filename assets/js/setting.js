$(document).ready(function () {
    $(".single-item").slick({
        autoplay: false,
        autoplaySpeed: 3000,
        speed: 500,
        infinite: true,
        cssEase: 'linear',
        fade: true,
        arrows: false,
        // revArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',
        // nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',
        dots: true,
    });
});

$('.multiple-rooms').slick({
    autoplay: false,
    autoplaySpeed: 3000,
    speed: 500,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: true,
    dots: true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false
            }
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false
            }
        },
        {
            breakpoint: 400,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});





$('.slick-services').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    vertical: true,
    verticalSwiping: true,
    dots: true,
    arrows: false,
    // autoplay: true,
    // autoplaySpeed: 1000
    responsive: [
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 1,
                vertical: false,
                verticalSwiping: false,
                slidesToScroll: 1,
            }
        },


    ]
});


$('.slick-room').slick({
    // prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
    // nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
    dots: true,
    arrows: false,
});


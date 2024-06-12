$(".modulo-HU02-1").slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$(".modulo-HU02-3").slick({
    dots: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$(document).ready(function () {
    var $slider = $(".modulo-HU02-3");

    $slider.on('init', function (event, slick) {
        // Actualizar el número total de slides
        $('#total-slides').text(slick.slideCount);
        // Actualizar el número del slide actual
        $('#current-slide').text(slick.currentSlide + 1);
    });

    $slider.slick({
        dots: true,
        appendDots: $('.slider-dots'), // Mueve los dots al contenedor deseado
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    $slider.on('afterChange', function (event, slick, currentSlide) {
        // Actualizar el número del slide actual
        $('#current-slide').text(currentSlide + 1);
    });
});

$(".modulo-HU02-6").slick({
    dots: true,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
    ],
});

$(".modulo-HU02-5").slick({
    dots: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

document.addEventListener('DOMContentLoaded', function () {
   
    var carousels = document.querySelectorAll('.carousel');

    carousels.forEach(function(carousel) {
        var totalSlides = carousel.querySelectorAll('.carousel-item').length;
        initializeIndicators(carousel, totalSlides);
        updateIndicatorsOnSlide(carousel, totalSlides);
    });
});

function initializeIndicators(carousel, totalSlides) {
    var indicators = carousel.querySelectorAll('.carousel-indicator');
    indicators.forEach(function(indicator) {
        indicator.textContent = '1/' + totalSlides;
    });
}

function updateIndicatorsOnSlide(carousel, totalSlides) {
    carousel.addEventListener('slid.bs.carousel', function (event) {
        var currentIndex = Array.from(carousel.querySelectorAll('.carousel-item')).indexOf(event.relatedTarget) + 1;
        var indicators = carousel.querySelectorAll('.carousel-indicator');
        indicators.forEach(function(indicator) {
            indicator.textContent = currentIndex + '/' + totalSlides;
        });
    });
}

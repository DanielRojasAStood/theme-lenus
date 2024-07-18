/************************ JS *************************/
/************************ JS *************************/
/************************ JS *************************/
/************************ JS *************************/
/************************ JS *************************/

jQuery(document).ready(function ($) {
  // slickSliderNews
  const $sliderNews = $(".slickSliderNews");
  const $paginationContainerNews = $sliderNews.next(".slider-pagination");
  const $dotsContainerNews = $paginationContainerNews.find(".slick-dots");
  const $counterNews = $paginationContainerNews.find(
    ".seccionSliderClass__counter"
  );

  $sliderNews.slick({
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 3,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: false,
    arrows: true,
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    appendDots: $dotsContainerNews,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });

  function updateCounter($counter, currentSlide, totalSlides) {
    $counter.text(`${currentSlide}/${totalSlides}`);
  }

  const totalSlidesNews = $sliderNews.slick("getSlick").slideCount;
  updateCounter($counterNews, 1, totalSlidesNews);

  $sliderNews.on("afterChange", function (event, slick, currentSlide) {
    updateCounter($counterNews, currentSlide + 1, totalSlidesNews);
  });

  // slickSliderSedes
  const $sliderSedes = $(".slickSliderSedes");
  const $paginationContainerSedes = $sliderSedes.next(".slider-pagination");
  const $dotsContainerSedes = $paginationContainerSedes.find(".slick-dots");
  const $counterSedes = $paginationContainerSedes.find(
    ".seccionSliderClass__counter"
  );

  $sliderSedes.slick({
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 3,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: false,
    arrows: true,
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    appendDots: $dotsContainerSedes,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });

  const totalSlidesSedes = $sliderSedes.slick("getSlick").slideCount;
  updateCounter($counterSedes, 1, totalSlidesSedes);

  $sliderSedes.on("afterChange", function (event, slick, currentSlide) {
    updateCounter($counterSedes, currentSlide + 1, totalSlidesSedes);
  });

  const $sliderBannerFor = $(".slickSliderBannerFor");
  const $paginationContainerBannerFor =
    $sliderBannerFor.next(".slider-pagination");
  const $dotsContainerBannerFor =
    $paginationContainerBannerFor.find(".slick-dots");
  const $counterBannerFor = $paginationContainerBannerFor.find(
    ".seccionSliderClass__counter"
  );

  $sliderBannerFor.slick({
    slidesToShow: 1,
    arrows: false,
    fade: true,
    centerMode: true,
    asNavFor: ".slickSliderBannerNav",
    dots: true,
    appendDots: $dotsContainerBannerFor,
    infinite: true,
    speed: 600,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
        },
      },
    ],
  });

  const totalSlidesBannerFor = $sliderBannerFor.slick("getSlick").slideCount;
  updateCounter($counterBannerFor, 1, totalSlidesBannerFor);

  $sliderBannerFor.on("afterChange", function (event, slick, currentSlide) {
    updateCounter($counterBannerFor, currentSlide + 1, totalSlidesBannerFor);
  });

  function updateCounter($counter, current, total) {
    $counter.text(current + " / " + total);
  }

  $(".slickSliderBannerNav").slick({
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    asNavFor: ".slickSliderBannerFor",
    dots: true,
  });

  const $sliderTeams = $(".slickSliderTeams");
  const $paginationContainerTeams = $sliderTeams.next(".slider-pagination");
  const $dotsContainerTeams = $paginationContainerTeams.find(".slick-dots");
  const $counterTeams = $paginationContainerTeams.find(
    ".seccionSliderClass__counter"
  );

  $sliderTeams.slick({
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 4,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: false,
    arrows: true,
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    appendDots: $dotsContainerTeams,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          centerMode: true,
          centerPadding: "20px",
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          centerMode: true,
          centerPadding: "50px",
        },
      },
    ],
  });

  function updateCounter($counter, currentSlide, totalSlides) {
    $counter.text(`${currentSlide}/${totalSlides}`);
  }

  const totalSlidesTeams = $sliderTeams.slick("getSlick").slideCount;
  updateCounter($counterTeams, 1, totalSlidesTeams);

  $sliderTeams.on("afterChange", function (event, slick, currentSlide) {
    updateCounter($counterTeams, currentSlide + 1, totalSlidesTeams);
  });

  /* slickSliderHistory */
  const $sliderHistory = $(".slickSliderHistory");
  const $paginationContainerHistory = $sliderHistory.next(".slider-pagination");
  const $dotsContainerHistory = $paginationContainerHistory.find(".slick-dots");
  const $counterHistory = $paginationContainerHistory.find(
    ".seccionSliderClass__counter"
  );

  $sliderHistory.slick({
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 3,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: false,
    arrows: true,
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    appendDots: $dotsContainerHistory,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          centerMode: false,
        },
      },
    ],
  });

  function updateCounter($counter, currentSlide, totalSlides) {
    $counter.text(`${currentSlide}/${totalSlides}`);
  }

  const totalSlidesHistory = $sliderHistory.slick("getSlick").slideCount;
  updateCounter($counterHistory, 1, totalSlidesHistory);

  $sliderHistory.on("afterChange", function (event, slick, currentSlide) {
    updateCounter($counterHistory, currentSlide + 1, totalSlidesHistory);
  });

  $(".slickSliderHistory__card")
    .closest("div")
    .addClass("seccionNoticias__height");

  function setEqualHeightNoticias() {
    var maxHeight = 0;
    $(".slickSliderHistory .slick-slide").each(function () {
      var itemHeight = $(this).outerHeight();
      if (itemHeight > maxHeight) {
        maxHeight = itemHeight;
      }
    });
    $(".slickSliderHistory .slick-slide").css("height", maxHeight);
  }

  setEqualHeightNoticias();

  /* Future */
  const $sliderFuture = $(".slickSliderFuture");
  const $paginationContainerFuture = $sliderFuture.next(".slider-pagination");
  const $dotsContainerFuture = $paginationContainerFuture.find(".slick-dots");
  const $counterFuture = $paginationContainerFuture.find(
    ".seccionSliderClass__counter"
  );

  $sliderFuture.slick({
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 4,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: false,
    arrows: false,
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    appendDots: $dotsContainerFuture,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: "10px",
        },
      },
    ],
  });

  function updateCounter($counter, currentSlide, totalSlides) {
    $counter.text(`${currentSlide}/${totalSlides}`);
  }

  const totalSlidesFuture = $sliderFuture.slick("getSlick").slideCount;
  updateCounter($counterFuture, 1, totalSlidesFuture);

  $sliderFuture.on("afterChange", function (event, slick, currentSlide) {
    updateCounter($counterFuture, currentSlide + 1, totalSlidesFuture);
  });

  /* slickSliderStrategy */
  const $sliderStrategy = $(".slickSliderStrategy");
  const $paginationContainerStrategy =
    $sliderStrategy.next(".slider-pagination");
  const $dotsContainerStrategy =
    $paginationContainerStrategy.find(".slick-dots");
  const $counterStrategy = $paginationContainerStrategy.find(
    ".seccionSliderClass__counter"
  );

  $sliderStrategy.slick({
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 4,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: false,
    arrows: false,
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    appendDots: $dotsContainerStrategy,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: "30px",
        },
      },
    ],
  });

  function updateCounter($counter, currentSlide, totalSlides) {
    $counter.text(`${currentSlide}/${totalSlides}`);
  }

  const totalSlidesStrategy = $sliderStrategy.slick("getSlick").slideCount;
  updateCounter($counterStrategy, 1, totalSlidesStrategy);

  $sliderStrategy.on("afterChange", function (event, slick, currentSlide) {
    updateCounter($counterStrategy, currentSlide + 1, totalSlidesStrategy);
  });

  $(".tab-button").click(function () {
    var tabId = $(this).data("tab");

    $(".tab-button").removeClass("active");
    $(this).addClass("active");

    $(".tab-content").removeClass("active");
    $("#" + tabId).addClass("active");

    $('.slickSliderSedes').slick('setPosition');
  });

  $("#open-menu-mobile").on("click", function() {
    $(".sectionHeaderMobile, body").toggleClass("active");
  })

});

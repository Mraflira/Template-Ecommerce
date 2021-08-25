var swiperCategori = new Swiper(".swiperCategori", {
    slidesPerView: 4,
    spaceBetween: 5,
    pagination: {
        el: ".swiper-pagination2",
        clickable: true,
    },
    breakpoints: {
        "@0.00": {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        "@0.75": {
          slidesPerView: 2,
          spaceBetween: 5,
        },
        "@1.00": {
          slidesPerView: 3,
          spaceBetween: 5,
        },
        "@1.50": {
          slidesPerView: 4,
          spaceBetween: 5,
        },
      },
});
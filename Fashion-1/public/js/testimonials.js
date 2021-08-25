var swiper = new Swiper(".testimonialsSwiper", {
slidesPerView: 2,
spaceBetween: 30,
slidesPerGroup: 1,
loop: true,
loopFillGroupWithBlank: true,
pagination: {
    el: ".swiperTestimonials",
    clickable: true,
        },
    navigation: {
    nextEl: ".swiper-button-nextA",
    prevEl: ".swiper-button-prevB",
    },
breakpoints: {
    576: {
        slidesPerView: 1,
        spaceBetween: 20,
    },       
},
});
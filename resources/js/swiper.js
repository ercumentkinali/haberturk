var swiper = new Swiper(".index-swiper", {
    slidesPerView: 5,
    direction: "vertical",
    centeredSlides: true,
    loop: true,
    freeMode: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },
    mousewheel: true,
});

var swiper = new Swiper(".news-swiper", {
    slidesPerView: 3,
});

var swiper = new Swiper(".show-swiper", {
    slidesPerView: 2,
    spaceBetween: 10,
    direction: "horizontal",
    freeMode: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },
    mousewheel: true,
    breakpoints: {
        640: {
            slidesPerView: "auto",
            direction: "vertical",
        },
    },
});

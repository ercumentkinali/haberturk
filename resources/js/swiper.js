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
    freeMode: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
            direction: "horizontal",
        },
        1025: {
            // 1025 vermemin sebebi iPad Pro 1024px bir ekrana sahip o yüzden 1025 den büyük dedim
            slidesPerView: 3,
            direction: "horizontal",
        },
    },
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

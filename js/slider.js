const swiper = new Swiper('.tale-slider', {
    loop: true,                         //loop
    autoplay: {                         //autoplay
        delay: 2000,  
    },       
    navigation: {                       //navigation(arrow)
        nextEl: ".tale-swiper-button-next",
        prevEl: ".tale-swiper-button-prev",
    },
    pagination: {                       //pagination(dots)
        el: '.tale-swiper-pagination',
    },
})
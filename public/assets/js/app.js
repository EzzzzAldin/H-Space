document.addEventListener('DOMContentLoaded', function () {
    const swiper2 = new Swiper('.team-slider', {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        // },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 5,
                spaceBetween: 30,
            }
        }
    });
});

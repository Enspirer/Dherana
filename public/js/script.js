'use strict'

/* Hover Menu */
$(document).ready(function () {
    $(".hover-menu-dropdown").click(function () {
        $(".hover-menu").slideToggle();
    });
});


/* Slider */

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

/* Clients Slider */

var splide = new Splide('.splide', {
    type: 'loop',
    drag: 'free',
    perPage: 5,
    breakpoints: {
        1200: {
            perPage: 4,

        },
        991: {
            perPage: 3,

        },
        767: {
            perPage: 2,

        },
        480: {
            perPage: 1,

        },
    },

});

splide.mount();
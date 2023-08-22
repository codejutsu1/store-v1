import './bootstrap';
import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';

import.meta.glob([
    '../images/**',
    '../fonts/**',
  ]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var $typed_strings = document.getElementById('typed-strings');
var $typed_strings2 = document.getElementById('typed-strings2');

if($typed_strings || $typed_strings2)
{
    var typed = new Typed('#typed-strings', {
        strings: ['My Gee!!!'],
        typeSpeed: 150,
        showCursor: false,
        loop: true,
        backDelay: 14000,
    });

    var typed = new Typed('#typed-strings2', {
        strings: [
            'You dey find the best shopping plug' + String.fromCodePoint(0x1F601) + '?',
            'Na here we dey' + String.fromCodePoint(0x1F60E) + '.'
            ],
        typeSpeed: 80,
        startDelay: 3000,
        loop: true,
        backDelay: 3000,
        backspeed: 5000,
        showCursor: false,
    });
}

const swiper = new Swiper('.mySwiper', {
    direction: 'horizontal',
    loop: true, 
    slidesPerView: 2,
    spaceBetween: 50, 
    centeredSlides: true,

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    breakpoints: {
        400: {
            slidesPerView: 1,
            spaceBetween: 20,
        },

        640: {
            slidesPerView: 2,
            spaceBetween: 50,
        }
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
});

const swiper2 = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    coverflowEffect: {
        rotate: 0,
        stetch: 0,
        depth: 0,
        modifier: 1,
        slideshadows: true,
    },

    loop: true,

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    breakpoints: {
        400: {
            slidesPerView: 2,
        },

        640: {
            slidesPerView: 3,
        }
    },
});

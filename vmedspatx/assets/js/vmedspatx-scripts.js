'use strict'
var vmedspatx = {};
(function($) {
    vmedspatx.init = function() {
        vmedspatx.vmedspatxHeaderScript()
        vmedspatx.contentScripts()
    }

    vmedspatx.vmedspatxHeaderScript = function() {

        let timeout = 0
        let previousScrollY = 0

        function scan() {
            const sticky = document.querySelector('.site-header')
            let scrollY = window.scrollY
            let scrollingDirection = scrollY - previousScrollY
            if (scrollY > sticky.offsetHeight) {
                if (scrollingDirection < 0) {
                    sticky.setAttribute('data-visible', 'sticky')
                } else if (scrollingDirection > 0) {
                    sticky.setAttribute('data-visible', 'false')
                }
            } else {
                sticky.setAttribute('data-visible', 'true')
            }
            previousScrollY = scrollY
        }
        window.onscroll = function() {
            clearTimeout();
            timeout = setTimeout(scan, 10)
        }

        // Menu Toggle click event
        $(document).ready(function() {

            $('.header-menu-toggle').on('click', function() {
                $('.menu-hide').toggleClass('show');
                $(this).toggleClass('open');
            });

            $(window).bind('scroll', function() {
                var navHeight = $(window).height() - 70;
                if ($(window).scrollTop() > navHeight) {
                    $('.site-header').addClass('fixed');
                } else {
                    $('.site-header').removeClass('fixed');
                }
            });
        });

    }


    vmedspatx.contentScripts = function() {
        // HOME BANNER SLIDER
        let homeBannerSwiper = new Swiper(".home-banner-slider", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            freeMode: true,
            grabCursor: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });

        // TREATMENTS FEATURED IN
        let treamentsFeaturedSwiper = new Swiper(".treaments_featured_slider", {
            loop: true,

            slidesPerView: 6,
            paginationClickable: true,
            spaceBetween: 20,
            breakpoints: {
                1920: {
                    slidesPerView: 6,
                    spaceBetween: 30
                },
                1400: {
                    slidesPerView: 5,
                    spaceBetween: 30
                },
                990: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 10
                }
            }
        });



    }

    //$(function() {
    vmedspatx.init();
    //})
})(jQuery) // eslint-disable-line
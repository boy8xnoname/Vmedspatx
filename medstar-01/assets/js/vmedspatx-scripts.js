'use strict'
var vmedspatx = {};
(function($) {
    vmedspatx.init = function() {
        vmedspatx.vmedspatxHeaderScript()
        vmedspatx.contentScripts()
        vmedspatx.addAnimationToPageLoad()
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
                $('#mobile-site-navigation').toggleClass('show');
                $(this).toggleClass('open');
            });


            $('.menu-collapsed').on('click', function() {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
                // $(this).toggleClass('open');
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



        $('.header-jarallax').jarallax({
            speed: 0.2,
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
                delay: 9000,
                disableOnInteraction: false
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev"
            // }
        });

        // TREATMENTS FEATURED IN
        let treamentsFeaturedSwiper = new Swiper(".treaments_featured_slider", {
            loop: true,

            slidesPerView: 6,
            paginationClickable: true,
            spaceBetween: 20,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
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


        // TREATMENTS FEATURED IN
        let inThePressSwiper = new Swiper(".in_the_press_slider", {
            loop: true,
            slidesPerView: 5,
            paginationClickable: true,
            spaceBetween: 20,
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true
            // },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev"
            // },
            breakpoints: {
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

        // 
        $('.section-jarallax').jarallax({
            speed: 0.2,
        });

        // 
        $('.popup-youtube').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade youtube-popup',
        });

        $('.blog-post-item-wrap').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });


        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 20) {
                    $('#toTopBtn').fadeIn();
                } else {
                    $('#toTopBtn').fadeOut();
                }
            });

            $('#toTopBtn').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        });
    }

    // Add animation to content when load 
    vmedspatx.addAnimationToPageLoad = function() {
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("animated");
                } else {
                    reveals[i].classList.remove("animated");
                }
            }
        }

        window.addEventListener("scroll", reveal);
    }


    //$(function() {
    vmedspatx.init();
    //})
})(jQuery) // eslint-disable-line
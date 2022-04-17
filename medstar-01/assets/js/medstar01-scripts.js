'use strict'
var medstar01 = {};
(function($) {
    medstar01.init = function() {
        medstar01.medstar01HeaderScript()
        medstar01.contentScripts()
        medstar01.addAnimationToPageLoad()
    }

    medstar01.medstar01HeaderScript = function() {
        let timeout = 0
        let previousScrollY = 0

        function scan() {
            if ($('.site-header').hasClass('sticky')) {
                const sticky = document.querySelector('.site-header.sticky')
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
                $(this).parent().parent().toggleClass('active');
                $(this).parent().parent().siblings().removeClass('active');
                // $(this).toggleClass('open');
            });

            $(window).bind('scroll', function() {
                var navHeight = $(window).height() - 70;
                if ($(window).scrollTop() > navHeight) {
                    $('.site-header.sticky').addClass('fixed');
                } else {
                    $('.site-header.sticky').removeClass('fixed');
                }
            });
        });



        $('.header-jarallax').jarallax({
            speed: 0.2,
        });

    }


    medstar01.contentScripts = function() {
        // HOME BANNER SLIDER
        if ($(".home-banner-slider").length > 0) {
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
                    delay: 6000,
                    disableOnInteraction: false
                },
                // navigation: {
                //     nextEl: ".swiper-button-next",
                //     prevEl: ".swiper-button-prev"
                // }
            });
        }

        // TREATMENTS FEATURED IN
        if ($(".treaments_featured_slider").length > 0) {
            let treamentsFeaturedSwiper = new Swiper(".treaments_featured_slider", {
                loop: true,

                slidesPerView: 6,
                paginationClickable: true,
                spaceBetween: 20,
                autoplay: {
                    delay: 3000,
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
        }


        // TREATMENTS FEATURED IN
        if ($(".in_the_press_slider").length > 0) {
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
                    delay: 3000,
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
        }

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
    medstar01.addAnimationToPageLoad = function() {

        AOS.init();

    }


    //$(function() {
    medstar01.init();
    //})
})(jQuery) // eslint-disable-line
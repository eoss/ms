$(document).ready(function() {

	animationHover('#logo-container h1', 'pulse');

	animationClick('.button', 'rotateOut');

    accordionClick ('.deactivated');

    function animationHover(element, animation) {
        element = $(element);
        element.hover(
            function() {
                element.addClass('animated ' + animation);
                // element.addClass('animated ' + 'infinite ' + animation);
            },
            function() {
                //wait for animation to finish before removing classes
                window.setTimeout(function() {
                    element.removeClass('animated ' + animation);
                }, 2000);
            }
        );
    }

    function animationClick(element, animation) {
        element = $(element);
        element.click(
            function() {
                element.addClass('animated ' + animation);
                //wait for animation to finish before removing classes
                window.setTimeout(function() {
                    element.removeClass('animated ' + animation);
                }, 2000);
            }
        );
    }

    function accordionClick(element) {
        element = $(element);
        element.click(
            function() {
                element.toggleClass('activated', {
                    animate: true
                });
                //wait for animation to finish before removing classes
                //window.setTimeout(function() {
                //    element.removeClass('activated');
                //}, 20000);
            }
        );
    }

    $(window).scroll(function(event) {

        var y = $(this).scrollTop();

        if (y >= 300) {
            $('#title-articles').addClass('active');
            $('#title-articles h1').addClass('fadeInDown');
            $('#bd').addClass('fadeIn');
            $('#title-articles p').addClass('fadeInUp');
        }

        if (y >= 500) {
            $('.tri').addClass('active');
            $('#article1').addClass('bounceInLeft');
            $('#article2').addClass('bounceInUp');
            $('#article3').addClass('bounceInRight');
        }

        if (y >= 1000) {
            $('#video').addClass('active');
            $('#video h1').addClass('fadeInDown');
            $('#bd2').addClass('bounceInUp');
        }
        if (y >= 1200) {
            $('#video video').addClass('zoomInUp');
        }

        if (y >= 1900) {
            $('#title-menu').addClass('active');
            $('#menu h1').addClass('zoomInDown');
            $('#bd3').addClass('fadeIn');
            $('#bd3 img').addClass('bounceIn');
        }

        if (y >= 2100) {
            $('#accordion').addClass('active');
            $('#wineList h3').addClass('slideInLeft');

        }
        if (y >= 2250) {
            $('#salads h3').addClass('slideInRight');
        }
        if (y >= 2400) {
            $('#classics h3').addClass('slideInLeft');
        }
        if (y >= 2550) {
            $('#fish h3').addClass('slideInRight');
        }
        if (y >= 2700) {
            $('#sideDishes h3').addClass('slideInLeft');
        }
        if (y >= 2850) {
            $('#desserts h3').addClass('slideInRight');
        }

        if (y >= 3150) {
            $('#title-contact').addClass('active');
            $('#title-contact h1').addClass('zoomInLeft');
        }
        if (y >= 3350) {
            $('#bd4').addClass('fadeIn');
            $('#bd4 img').addClass('bounceIn');
            $('#title-contact p').addClass('zoomInRight');
        }

        if (y >= 3900) {
            $('#contactform').addClass('active');
            $('#googleMap').addClass('rotateIn');
        }
        if (y >= 4150) {
            $('#bd5').addClass('fadeIn');
            $('#bd5 img').addClass('bounceIn');
            $('#title-message h1').addClass('rotateInDownRight');
            $('#title-message p').addClass('rotateInUpLeft');
        }

        if (y >= 4300) {
            $('#cont label').addClass('fadeInRightBig');
            $('#cont input').addClass('fadeInLeftBig');
        }
        if (y >= 4350) {
            $('#cont textarea').addClass('fadeInRightBig');
            $('#cont p').addClass('fadeInLeftBig');
        }

        if (y >= 4480) {
            $('#footer').addClass('active');
            $('#footer h1').addClass('rotateIn');
            $('#footer p').addClass('rotateIn');
            $('#footer img').addClass('rotateIn');
        }


    });











    //$(window).scroll(function () {
    //
    //    /* Check the location of each desired element */
    //    $('#articles').each(function (i) {
    //
    //        var bottom_of_object = $(this).position().top + $(this).outerHeight();
    //        var bottom_of_window = $(window).scrollTop() + $(window).height();
    //
    //        /* If the object is completely visible in the window, fade it it */
    //        if (bottom_of_window > bottom_of_object) {
    //
    //            $(this).animate({
    //                'opacity': '1'
    //            }, 100);
    //
    //        }
    //
    //    });
    //
    //});

});

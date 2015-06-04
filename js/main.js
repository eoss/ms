$(document).ready(function() {

	animationHover('#logo-container h1', 'pulse');

	animationClick('.buton', 'rotateOut');

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
    		//$('#title-articles').addClass('animate')
    		//$('.tri').addClass('animate')
    	}
    });

});

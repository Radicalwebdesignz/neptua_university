$(document).ready(function() {

	$("#courses_hover1").mouseover(function(){
		$(".animate1").fadeOut("1000", function() {
			$(".animate1").fadeIn("slow");
		});
	})

	$("#courses_hover2").mouseover(function(){
		$(".animate2").fadeOut("1000", function() {
			$(".animate2").fadeIn("slow");
		});
	})

	$("#courses_hover3").mouseover(function(){
		$(".animate3").fadeOut("1000", function() {
			$(".animate3").fadeIn("slow");
		});
	})

	$("#courses_hover4").mouseover(function(){
		$(".animate4").fadeOut("1000", function() {
			$(".animate4").fadeIn("slow");
		});
	})

	// initialize paroller.js 
	$('window').paroller();
	// initialize paroller.js and set attributes 
	$("#details").paroller({ factor: '-0.68', type: 'background', direction: 'horizontal'});
	$("#activities").paroller({ factor: '0.1', type: 'background', direction: 'horizontal'});

	// Navbar Show on Hover
	jQuery(function($) {
        $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

        }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

        });

        $('.navbar .dropdown > a').click(function(){
        location.href = this.href;
        });

    });

	// Increment Counter
	var stop = $("#about-courses").offset().top
  	$(window).scroll(startCounter);
	function startCounter() {
	    if ($(window).scrollTop() > stop) {
	        $(window).off("scroll", startCounter);
	        $('.count').each(function () {
			    $(this).prop('Counter',0).animate({
			        Counter: $(this).text()
			    }, {
			        duration: 2000,
			        easing: 'swing',
			        step: function (now) {
			            $(this).text(Math.ceil(now));
			        }
			    });
			});
	    }
	}


});

// Sroll to top
$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});

$(function(){
    $(".scroll").click(function(){
        $("html,body").animate({scrollTop:$("body").offset().top},"1000");
        return false
    })
})

// Slick Slider
$(document).ready(function(){
      $(".slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
});

// Slick Slider
$(document).ready(function(){
      $(".facilities_slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
});
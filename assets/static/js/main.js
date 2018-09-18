$(window).on("load", function (e) {
	$('.preloader').fadeOut('slow');
});
$('.carousel').carousel({
	pause: false,
	keyboard : true,
});
		/* Demo Scripts for Bootstrap Carousel and Animate.css article
* on SitePoint by Maria Antonietta Perna
*/
(function($) {
  //Function to animate slider captions
  function doAnimations(elems) {
    //Cache the animationend event in a variable
    var animEndEv = "webkitAnimationEnd animationend";

    elems.each(function() {
      var $this = $(this),
        $animationType = $this.data("animation");
      $this.addClass($animationType).one(animEndEv, function() {
        $this.removeClass($animationType);
      });
    });
  }

  //Variables on page load
  var $myCarousel = $("#carouselExampleIndicators"),
    $firstAnimatingElems = $myCarousel
      .find(".carousel-item:first")
      .find("[data-animation ^= 'animated']");

  //Initialize carousel
  $myCarousel.carousel();

  //Animate captions in first slide on page load
  doAnimations($firstAnimatingElems);

  //Other slides to be animated on carousel slide event
  $myCarousel.on("slide.bs.carousel", function(e) {
    var $animatingElems = $(e.relatedTarget).find(
      "[data-animation ^= 'animated']"
    );
    doAnimations($animatingElems);
  });
})(jQuery);
function initializeSite() {

	"use strict";

	//OUTLINE DIMENSION AND CENTER
	(function() {
	    function centerInit(){

			var sphereContent = $('.sphere'),
				sphereHeight = sphereContent.height(),
				parentHeight = $(window).height(),
				topMargin = (parentHeight - sphereHeight) / 2;

			sphereContent.css({
				"margin-top" : topMargin+"px"
			});

			var heroContent = $('.hero'),
				heroHeight = heroContent.height(),
				heroTopMargin = (parentHeight - heroHeight) / 2;

			heroContent.css({
				"margin-top" : heroTopMargin+"px"
			});

	    }

	    $(document).ready(centerInit);
		$(window).resize(centerInit);
	})();

	// Init effect 
	$('#scene').parallax();

};
/* END ------------------------------------------------------- */

/* =Document Ready Trigger
-------------------------------------------------------------- */
$(window).load(function(){

	initializeSite();
	(function() {
		setTimeout(function(){window.scrollTo(0,0);},0);
	})();

});
/* END ------------------------------------------------------- */


$('#countdown').countdown({
	date: "September 30, 2018 00:00:00",
	render: function(data) {
	  var el = $(this.el);
	  el.empty()
	    //.append("<div>" + this.leadingZeros(data.years, 4) + "<span>years</span></div>")
	    .append("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div>")
	    .append("<div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div>")
	    .append("<div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div>")
	    .append("<div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
	}
});
$(document).ready(function() {

	var toggleAffix = function(affixElement, scrollElement, wrapper) {

		var height = affixElement.outerHeight(),
		top = wrapper.offset().top;

		if (scrollElement.scrollTop() >= 50){
			wrapper.height(height);
			affixElement.addClass("affix");
			affixElement.addClass("navbar-bg-default");
			$('.header-logo').prop('src','assets/static/icons/busyra_color.png');
		} else {
			affixElement.removeClass("affix navbar-bg-default");
			$('.header-logo').prop('src','assets/static/icons/busyra_white.png');
			wrapper.height('auto');
		}

	};

	var toggleAffixBtm = function(affixElement, scrollElement, wrapper){
		console.log('It Works!');
		var height = affixElement.outerHeight(),
		top = wrapper.offset().top;

		if (scrollElement.scrollTop() >= 50){
			wrapper.height(height);
			affixElement.removeClass("Footer---fixed---1Ph4u");
			affixElement.addClass("small-footer");
		} else {
			affixElement.removeClass("small-footer");
			affixElement.addClass("Footer---fixed---1Ph4u");
			wrapper.height('auto');
		}
	};


	$('[data-toggle="affix"]').each(function() {
		var ele = $(this),
		wrapper = $('<div></div>');

		ele.before(wrapper);
		$(window).on('scroll resize', function() {
			toggleAffix(ele, $(this), wrapper);
		});

		toggleAffix(ele, $(window), wrapper);
	});

	$('#footer-items').each(function() {
		var ele = $(this),
		wrapper = $('<div></div>');

		ele.before(wrapper);
		$(window).on('scroll resize', function() {
			toggleAffixBtm(ele, $(this), wrapper);
		});

		toggleAffixBtm(ele, $(window), wrapper);
	});

});
$(window).on('load',function(){
	$('.preloader').fadeOut('slow');
});
$('.carousel').carousel({
    pause: false,
    keyboard : true,

})
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
jQuery(document).ready(function($) {
	// Slideshow 4
	$("#slider4").responsiveSlides({
		auto: true,
		pager: true,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
			$('.events').append("<li>before event fired.</li>");
		},
		after: function () {
			$('.events').append("<li>after event fired.</li>");
		}
	});
	$("#flexiselDemo3").flexisel({
		visibleItems: 4,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: {
			portrait: {
				changePoint: 480,
				visibleItems: 1
			},
			landscape: {
				changePoint: 640,
				visibleItems: 2
			},
			tablet: {
				changePoint: 768,
				visibleItems: 3
			}
		}
	});


	let closeMenu = function () {
		$('#js-sandwitch-wrap').on('click', function () {
			$('#js-main-menu').toggleClass('active');

			$(this).toggleClass('sandwitch--active');
			$(this).closest('.sandwitch-wrapper').toggleClass('sandwitch--active');
		});
	};
	closeMenu();

});

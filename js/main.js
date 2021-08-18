jQuery(document).ready(function ($) {
	$('.accordion-heading').on('click', function () {
		let getImg = $(this).attr('data-img');
		$('.accordion-img').attr('src', getImg);
	});

	// var $nav = $('#welk-nav-fixed'),
	// 	$win = $(window),
	// 	winH = $win.height(); // Get the window height.

	// $win
	// 	.on('scroll', function () {
	// 		if ($(this).scrollTop() > winH) {
	// 			$nav.removeClass('main-nav').addClass('header-fixed');
	// 		} else {
	// 			$nav.addClass('main-nav');
	// 		}
	// 	})
	// 	.on('resize', function () {
	// 		// If the user resizes the window
	// 		winH = $(this).height(); // you'll need the new height value
	// 	});

	$('.email-form .elementor-field-type-submit').removeClass(
		'elementor-col-100'
	);

	$('.solutions .owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 3,
			},
		},
	});

	$('.equipo .owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		navText: [
			'<i class="fal fa-arrow-left"></i>',
			'<i class="fal fa-arrow-right"></i>',
		],
		dots: false,
		autoplay: true,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 1,
			},
			1000: {
				items: 1,
			},
		},
	});
});

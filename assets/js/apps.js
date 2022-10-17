
$(function(){
	setTimeout(function(){

		/*SECTION 2*/
		$('.imb-section2-slider').slick({
			dots: false,
			infinite: true,
			speed: 300,
			fade: true,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 2000,
			adaptiveHeight: true,
		});
		$('.imb-section2-slider-mobile').slick({
			dots: false,
			infinite: true,
			speed: 300,
			fade: true,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 2000,
			adaptiveHeight: true,
		});
		/* END SECTION 2*/

		/*SECTION 3*/
		$('.imb-section3-slider-mobile').slick({
			dots: false,
			infinite: true,
			speed: 300,
			fade: true,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 2000,
			adaptiveHeight: true,
		});
		/* END SECTION 3*/

		/*SECTION 4*/
		$('.imb-section4-slider').slick({
			dots: false,
			infinite: true,
			speed: 300,
			fade: true,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 2000,
			adaptiveHeight: true,
			asNavFor: '.imb-section4-slider-nav'
		});
		$('.imb-section4-slider-nav').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.imb-section4-slider',
			dots: false,
			centerMode: true,
			focusOnSelect: true

		});
		// $('.imb-section4-slider-mobile').slick({
		// 	dots: false,
		// 	infinite: true,
		// 	speed: 300,
		// 	fade: true,
		// 	arrows: true,
		// 	autoplay: true,
		// 	autoplaySpeed: 2000,
		// 	adaptiveHeight: true,
		// });

		  $('.imb-section4-slider-mobile-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.imb-section4-slider-mobile'
		  });
		  $('.imb-section4-slider-mobile').slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			asNavFor: '.imb-section4-slider-mobile-for',
			dots: false,
			autoplay: true,
			centerMode: true,
			centerPadding: '50px',
			focusOnSelect: true,
			arrows: false
		  });
		/* END SECTION 4*/


	}, 100);

});
setTimeout(function(){
	AOS.init({
		duration: 600
	});	
}, 500);
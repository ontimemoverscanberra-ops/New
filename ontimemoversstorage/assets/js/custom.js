jQuery(document).ready(function(jQuery) {

	'use strict';

	// Mean Menu

	jQuery('.mean-menu').meanmenu({ 

		meanScreenWidth: "991"

	});



	// Preloader

	jQuery(window).on('load', function() {

		jQuery('.preloader').fadeOut();

	});



	// Nice Select JS

	// jQuery('select').niceSelect();

	

	// Header Sticky

	jQuery(window).on('scroll', function() {

		if (jQuery(this).scrollTop() >150){  

			jQuery('.navbar-area').addClass("is-sticky");

		}

		else{

			jQuery('.navbar-area').removeClass("is-sticky");

		}

	});



	// Prevoz Slider

	jQuery('.prevoz-slider').owlCarousel({

		loop:true,

		margin:0,

		nav:true,

		mouseDrag: false,

		items:1,

		dots: false,

		autoHeight: true,

		autoplay: true,

		smartSpeed:1500,

		autoplayHoverPause: true,

		animateOut: "animate__animated animate__slideOutDown",

		animateIn: "animate__animated animate__slideInDown",

		navText: [

			"<i class='bx bx-chevron-left bx-fade-left'></i>",

			"<i class='bx bx-chevron-right bx-fade-right'></i>",

		],

	});



	// Prevoz Slider

	jQuery('.prevoz-slider-style').owlCarousel({

		loop:true,

		margin:0,

		nav:true,

		mouseDrag: false,

		items:1,

		dots: false,

		autoHeight: true,

		autoplay: true,

		smartSpeed:1500,

		autoplayHoverPause: true,

		animateOut: "animate__animated animate__fadeOut",

		navText: [

			"<i class='bx bx-chevron-left'></i>",

			"<i class='bx bx-chevron-right'></i>",

		],

	});



	// Testimonials Top Wrap

	jQuery('.testimonials-top-wrap').owlCarousel({

		items:2,

		loop:true,

		nav:true,

		autoplay:true,

		autoplayHoverPause: true,

		mouseDrag: true,

		margin: 25,

		center: false,

		dots: true,

		smartSpeed:1500,

		animateOut: "animate__animated animate__fadeOut",

		navText: [

			"<i class='bx bx-left-arrow-alt'></i>",

			"<i class='bx bx-right-arrow-alt'></i>",

		],

		responsive:{

			0:{

				items:1

			},

			576:{

				items:1

			},

			768:{

				items:2,

				

			},

			992:{

				items:2

			},

			1200:{

				items:2

			}

		}

	});



	



	// Go to Top

	// Scroll Event

	jQuery(window).on('scroll', function(){

		var scrolled = jQuery(window).scrollTop();

		if (scrolled > 300) jQuery('.go-top').addClass('active');

		if (scrolled < 300) jQuery('.go-top').removeClass('active');

	});  



	// Click Event

	jQuery('.go-top').on('click', function() {

		jQuery("html, body").animate({ scrollTop: "0" },  50);

	});



	// FAQ Accordion

	jQuery('.accordion').find('.accordion-title').on('click', function(){

		// Adds Active Class

		jQuery(this).toggleClass('active');

		// Expand or Collapse This Panel

		jQuery(this).next().slideToggle('fast');

		// Hide The Other Panels

		jQuery('.accordion-content').not(jQuery(this).next()).slideUp('fast');

		// Removes Active Class From Other Titles

		jQuery('.accordion-title').not(jQuery(this)).removeClass('active');		

	});

	

	// Count Time 

	function makeTimer() {

		var endTime = new Date("november  30, 2021 17:00:00 PDT");			

		var endTime = (Date.parse(endTime)) / 1000;

		var now = new Date();

		var now = (Date.parse(now) / 1000);

		var timeLeft = endTime - now;

		var days = Math.floor(timeLeft / 86400); 

		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);

		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);

		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

		if (hours < "10") { hours = "0" + hours; }

		if (minutes < "10") { minutes = "0" + minutes; }

		if (seconds < "10") { seconds = "0" + seconds; }

		jQuery("#days").html(days + "<span>Days</span>");

		jQuery("#hours").html(hours + "<span>Hours</span>");

		jQuery("#minutes").html(minutes + "<span>Minutes</span>");

		jQuery("#seconds").html(seconds + "<span>Seconds</span>");

	}

	setInterval(function() { makeTimer(); }, 300);



	//animation

	new WOW().init();



	// Tabs

	jQuery('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');

	jQuery('.tab ul.tabs li a').on('click', function (g) {

		var tab = jQuery(this).closest('.tab'), 

		index = jQuery(this).closest('li').index();

		tab.find('ul.tabs > li').removeClass('current');

		jQuery(this).closest('li').addClass('current');

		tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();

		tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();

		g.preventDefault();

	});



	// Odometer 

	jQuery('.odometer').appear(function(e) {

		var odo = jQuery(".odometer");

		odo.each(function() {
			//console.log("cccccc");
			var countNumber = jQuery(this).attr("data-count");

			jQuery(this).html(countNumber);

		});

	});



	// Popup Video JS 

	jQuery('.popup-youtube, .popup-vimeo').magnificPopup({

		disableOn: 300,

		type: 'iframe',

		mainClass: 'mfp-fade',

		removalDelay: 160,

		preloader: false,

		fixedContentPos: false,

	});



	//skill

	jQuery('.skill-bar').each(function() {

		jQuery(this).find('.progress-content').animate({

		width:jQuery(this).attr('data-percentage')

		},2000);

		

		jQuery(this).find('.progress-number-mark').animate(

		{left:jQuery(this).attr('data-percentage')},

		{

			duration: 2000,

			step: function(now, fx) {

			var data = Math.round(now);

			jQuery(this).find('.percent').html(data + '%');

			}

		});  

	});

	

	

	

	//Search Box 

	jQuery('a[href=".search"]').on("click", function(event) {

		event.preventDefault();

		jQuery(".search").addClass("open");

		jQuery('.search > form > input[type="search"]').focus();

	});

	jQuery(".search, .search button.close").on("click keyup", function(event) {

		if (

			event.target == this ||

			event.target.className == "close" ||

			event.keyCode == 27

		) {

			jQuery(this).removeClass("open");

		}

	});

	jQuery("form").on('submit',function(event) {

		event.preventDefault();

		return false;

	});



	//load more news

	/* let currentpage=1;



	jQuery(".load-more").on('click',function(){

		currentpage++;

		jQuery.ajax({

			type:'POST',

			url:'/wp-admin/admin-ajax.php',

			dataType:'JSON',

			data:{

				action:'news_load_more',

				paged:currentpage,

			},

			success:function(res){

				jQuery('.news-section').append(res.html);

				if(currentpage >= res.max){

					jQuery(".load-more").hide();

				}

			}

		})

	}); */

	

	

});

//load news category post

/* function new_category_load_more(term_id,section_class){

	let currentcatpage=jQuery("#"+section_class+"-paged").val();

	currentcatpage++;

	jQuery.ajax({

		type:'POST',

		url:'/wp-admin/admin-ajax.php',

		dataType:'JSON',

		data:{

			action:'news_cat_load_more',

			paged:currentcatpage,

			term_id:term_id,

		},

		success:function(res){

        	jQuery('.'+section_class).append(res.html);



			if(currentcatpage >= res.max){

				jQuery("."+term_id+"load-more").hide();

			}

			jQuery("#"+section_class+"-paged").val(currentcatpage);

		}

	})

} */
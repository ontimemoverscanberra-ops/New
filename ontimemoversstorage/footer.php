<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			
		</div><!-- #primary -->
	</div><!-- #content -->
</div><!-- #page -->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6">
					<div class="fleft">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-6">
					<div class="fright">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="fbottom">
			<div class="container">
				<ul class="copyr">
					<li>Copyright © 2024 Ontime Movers - Professional Local Movers Canberra </li>
					<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
					<?php endif; ?>
					<li><?php
				printf(
					esc_html__( 'Website Designed/Developed by %s.', 'twentytwentyone' ),
					'<a href="' . esc_url( __( 'https://synapseindia.com/', 'twentytwentyone' ) ) . '" target="_blank">SynapseIndia</a>'
				);
				?></li>
				</ul>
				<ul class="social">
					<?php if ( has_nav_menu( 'social' ) ) : ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'fallback_cb'    => false,
						)
					);
					?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</footer>
<style>


</style>
<nav class="on-side-menu">
    <ul>
		<li><a href="https://ontimemovers.com.au/#cst_form">Online Quote<span><i class="on-icon quote"></i></span></a></li>
		<li><a href="#">Please call me<span><i class="on-icon phone"></i></span></a></li>
		<li><a href="https://ontimemovers.com.au">Visit My Home<span><i class="on-icon home"></i></span></a></li>
		<li><a href="#">Live Chat<span><i class="on-icon chat"></i></span></a></li>
		<li><a href="https://ontimemovers.com.au/box-shop">Shop Now<span><i class="on-icon shopnow"></i></span></a></li>
    </ul>
</nav>

<!-- Start Go Top Area -->
	<div class="go-top">
		<i class='bx bx-chevrons-up bx-fade-up'></i>
		<i class='bx bx-chevrons-up bx-fade-up'></i>
	</div>
	<!-- End Go Top Area -->
     <?php wp_footer(); ?>      
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script>
/*	Contact form 7 image redio button -------------------------------*/
/* jQuery(document).ready(function($) {
	
	$( ".pf4_form_image_field" ).each(function( index ) {
		var get_bg_img_url = $(this).attr('data-bg');
		//$( this ).children().children().children().children().children().css( "background-image", "url("+get_bg_img_url+")" );
		$( this ).children().children().children().children().css( "background-image", "url("+get_bg_img_url+")" );
	});
	
	$( "body" ).on( "click", ".pf4_form_image_fields label", function() {
		alert("ccx");
		var parent_div = $( this ).parent().parent().parent().parent().parent();
		var items_div = parent_div.parent().attr('data-uid') + " .pf4_form_image_field";
		
		$(items_div).removeClass('checked');
  		parent_div.addClass('checked');
	});
}); */
	</script>
	
	 <script>
		

		jQuery(document).ready(function($) {
		    //$('p:empty').remove();
			$(".slick-list").slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				infinite: false,
				autoplay: false,
				adaptiveHeight: true,
				touchMove:false,
				draggable:false,
			});
			$('.overlay_remove ').click(function(){
				$('.full_form_sec').removeClass('full_form_overlay')

			})
			$('.overlay_active  ').click(function(){
				$('.full_form_sec').addClass('full_form_overlay')

			})
			$(".prev-btn").click(function () {
				$(".slick-list").slick("slickPrev");
			});

			

			/*$(".next-btn").click(function () {
				$(".slick-list").slick("slickNext");
			});*/
			$(".prev-btn").addClass("slick-disabled");
			$(".slick-list").on("afterChange", function () {
				if ($(".slick-prev").hasClass("slick-disabled")) {
					$(".prev-btn").addClass("slick-disabled");
				} else {
					$(".prev-btn").removeClass("slick-disabled");
				}
				if ($(".slick-next").hasClass("slick-disabled")) {
					$(".next-btn").addClass("slick-disabled");
				} else {
					$(".next-btn").removeClass("slick-disabled");
				}
			});

			// select location
			$('.locationslt label').click(function(){
				$('.locationslt label').removeClass('active')
				$(this).addClass('active')
				$(this).find('input.location').attr("checked", true)
			})
			$('.inprow label').click(function(){
				$('.inprow label').removeClass('active')
				$(this).addClass('active')
				$(this).find('input.bedroom').attr("checked", true)
			})
	 $( "#datepicker" ).datepicker({minDate: 0});
		}); 

	</script> 
	<!--- Validation and form submit -->
	 <script src="<?php site_url() ?>/wp-content/themes/ontimemoversstorage/jquery.geocomplete.js"></script>
	<script>
		function initMap(){
			var options = {
				country: "AU"
			};
			jQuery("#moving_from").geocomplete(options);
			jQuery("#moving_to").geocomplete(options);
		}
     
    </script>
		
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2SMtaVBlqC5v72gqS716BX8R5oXklaFc&v=3.exp&libraries=places&callback=initMap"/>
<!--			
	<script>
	jQuery( "#moving_from" ).keyup(function() {
		  //alert( "Handler for .keyup() called." );
		  var moving_from = document.forms["cst_form"]["moving_from"].value;
			jQuery.ajax({
				method: 'GET',
				url: "<?php echo bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php",
					type: "GET",
					data: {
						'action':'curldata',
						'data': moving_from,
					},
				success: function(response) {
					// Data
					var data = response;
					console.log(data);
				},
			})
			return false;
		});
		
		
		
		
		
	</script>	
		-->
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
 	<script>
		jQuery(document).ready(function($) {
		    $('section.maylike.ptb-80 section.mainHeading.related.products h2').text('Related Products');
		    $('ul.category.navbar-nav.mr-auto li.nav-item').hover(function(){ 
		        $(this).find('ul.dropdown-menu').css('display','block');
		        
		    },function(){
		        $(this).find('ul.dropdown-menu').css('display','none');
		    });
			$("#get_started").click(function () {
				var location = document.forms["cst_form"]["location"].value;
				if (location == "" || location == null) {
					//alert("location field must be filled!");
					$('.errormessage_location').css('display','block');
					$('#location_err').html('Please select a destination');
					return false;
				}
				$('.errormessage_location').css('display','none');
				$(".slick-list").slick("slickNext");
				 
			});
			
			$("#next1").click(function () {
				var moving_from = document.forms["cst_form"]["moving_from"].value;
				var moving_to = document.forms["cst_form"]["moving_to"].value;
				
				if ((moving_from == "" || moving_from == null) && (moving_to == "" || moving_to == null)) {
					$('.errormessage_moving_from').css('display','block');
					$('#moving_from_err').html('Please enter in your current location');
					$('.errormessage_moving_to').css('display','block');
					$('#moving_to_err').html('Please enter in your new location');
					return false;
				} else if ((moving_from == "" || moving_from == null) && (moving_to != "" || moving_to != null) ) {
					$('.errormessage_moving_from').css('display','block');
					$('#moving_from_err').html('Please enter in your current location');
					$('.errormessage_moving_to').css('display','none');
					return false;
				} else if ((moving_from != "" || moving_from != null) && (moving_to == "" || moving_to == null)) {
					$('.errormessage_moving_to').css('display','block');
					$('#moving_to_err').html('Please enter in your new location');
					$('.errormessage_moving_from').css('display','none');
					return false;
				}
				$('.errormessage_moving_from,.errormessage_moving_to').css('display','none');
				$(".slick-list").slick("slickNext");
			});	
			
			$("#next2").click(function () {
				var bedroom = document.forms["cst_form"]["bedroom"].value;
				if (bedroom == "" || bedroom == null) {
					$('.errormessage_bedroom').css('display','block');
					$('#bedroom_err').html('Please select a size');
					return false;
				}
				$('.errormessage_bedroom').css('display','none');
				$(".slick-list").slick("slickNext");
			});
			$("#next3").click(function () {
				var movingdate = $('#datepicker').datepicker("getDate");
			    var moving_date =	$.datepicker.formatDate("yy-mm-dd", movingdate)
				$('#hiddendate').val(moving_date);
				var hiddendate = document.forms["cst_form"]["hiddendate"].value;
				$(".slick-list").slick("slickNext");
			});
			
			$('.finalbtn').click(function(){
				var name = document.forms["cst_form"]["full_name"].value;
				if (name == "" || name == null) {
					$('.errormessage_name').css('display','block');
					$('#name_err').html('Please enter your first name');
					return false;
				}
				if (name.length > 20) {
					$('.errormessage_name').css('display','block');
					$('#name_err').html('Please enter valid first name');
					return false;
				}
				
				var lastname = document.forms["cst_form"]["last_name"].value;
				if (lastname == "" || lastname == null) {
					$('.errormessage_lastname').css('display','block');
					$('#lastname_err').html('Please enter your last name');
					return false;
				}
					var lastname = document.forms["cst_form"]["last_name"].value;
				if (lastname.length >20 ) {
					$('.errormessage_lastname').css('display','block');
					$('#lastname_err').html('Please enter valid  last name');
					return false;
				}
				
				var phone = document.forms["cst_form"]["home_phone"].value;
				var phoneno = /^\d{10}$/;
				if (phone == "" || phone == null) {
					if (!isNaN(phone)) {
						$('.errormessage_phone').css('display','block');
						$('.errormessage_phone2').css('display','none');
						$('#phone_err').html('Please enter phone number.');
					}
					$('.errormessage_name').css('display','none');
					return false;
				}
				
				if (phone != "" || phone != null) {
					if (!(phone.match(phoneno))){
						$('.errormessage_phone').css('display','none');
						$('.errormessage_phone2').css('display','block');
						$('#phone_err2').html('Please enter correct phone number.');
						return false;
					}
				}
					if (phone != "" || phone != null) {
					if (!(phone.match(/^0+/))){
						$('.errormessage_phone').css('display','none');
						$('.errormessage_phone2').css('display','block');
						$('#phone_err2').html('The first digit should be 0.');
						return false;
					}
				}
				
				var email = document.forms["cst_form"]["email_address"].value;
				var at_position = email.indexOf("@");
				var dot_position = email.lastIndexOf(".");
				if (email == "" || email == null) {
					$('.errormessage_email').css('display','block');
					$('#email_err').html('Please enter email');
					$('#errormessage_phone,.errormessage_phone2').css('display','none');
					return false;
				}
				if (at_position < 1 || dot_position < at_position + 2 || dot_position + 2 >= email.length) {
					$('.errormessage_email').css('display','block');
					$('#email_err').html('Given email address is not valid.');
					return false;
				}
				
				//alert('Thank you for Submiting!');
				
				var data = $('#cst_form').serialize();
				 var url = window.location.href;
					data += "&url=" + url;
					//alert(data);
				$.ajax({
					url: "<?php echo bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php",
					type: "POST",
					data: {
						'action':'formdata',
						'data': data,
					},
					beforeSend: function() {
                    // setting a timeout
                    $('button#cst-jsbtn').hide('slow');
                },
					success:function(result) {
						window.location='http://ontimemovers.com.au/thank-you/';
						//jQuery('#selectarea').html(result);
					},
					error: function(errorThrown){
						console.log(errorThrown);
					}
				});	
				
			})
			
		});
	</script>

</body>
</html>

<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) : the_post();
?>
	  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); /*?>

	<section class="main_banner" style="background: url(<?php echo $image[0]; ?>) no-repeat;background-size: cover;background-position: center;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="mainbrntxt">
						<h1 class="undeline"><?php the_content(); ?>
						</h1>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-8">
					<div class="multiform">
						<?php echo do_shortcode('[contact-form-7 id="526" title="HomePageForm"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php  endwhile; */ // End of the loop. ?>
	
	
	<section class="main_banner full_form_sec " style="background: url(<?php echo $image[0]; ?>) no-repeat;background-size: cover;background-position: center;">		
		<div class="full_form">
				<form action="#" method="POST" name="cst_form" id="cst_form" >
					<div class="slick-list">
						<div class="full_form_stps stps1_base ">
							<div class="container">
							<div class="row">
								<div class="stps1  col-sm-7 col-md-6 col-lg-4 ">
									<h2 class="form-section-title">Get a free quote</h2>
									<p class="form-subtitle"><span class="step-label">Step 1</span> - <span class="step-label-title">Select move type</span></p>
									<div class="locationslt">
										<div class="form-row">
											<label for="Local" class="">
												<input type="radio" name="location" class="location" id="local" value="Local" >
												<img src="<?php echo get_bloginfo('template_directory');?>/img/local.png" alt="">
											</label>
											<p>Local</p>
										</div>
										<div class="form-row">
											<label for="Interstate">
												<input type="radio" name="location" class="location" id="interstate" value="Interstate" >
												<img src="<?php echo get_bloginfo('template_directory');?>/img/austr.png" alt="">
												
											</label>
											<p>Interstate</p>
										</div>
										<div class="form-row">
											<label for="office">
												<input type="radio" name="location" class="location" id="office" value="office" >
												<img src="https://cdn-icons-png.flaticon.com/512/5874/5874405.png" alt="office-image">
												
											</label>
											<p>Office</p>
										</div>
									</div>
									<div class="form-row errormessage errormessage_location" style="display:none;"><span class="error" id="location_err"> </span> </div>
									<div class="overlay_active btns text-center">
										<button class=" btn next-btn" id="get_started" type="button" value="GetStarted">Get Started</button>
									</div>
									<div class="telnumber text-center">
										<a href="tel:1300 466 837"><i class='bx bx-phone-call'></i> 1300 466 837</a>
									</div>
								</div>
								 <div class="announcement col-sm-5 col-md-6 col-lg-8">
                                    <div class="dv">
                                        <div class="t1">Free Delivery</div>
                                        <div class="t2">For Box shop orders over $100</div>
                                        <a href="<?php site_url() ?>/box-shop/" class="lk">Get Started</a>
                                    </div>
                                </div>
							</div>	
							</div>
						</div> 
						<div class="full_form_stps">
							<div class="container">
								<div class="form_section_head">
									<button class="back1 overlay_remove btnPrev prev-btn"><i class="bx bx-arrow-back"></i> Back</button>
									<h2 class="form-section-title">Where are you moving to?</h2>
								</div>
								<div class="form-section">
									<p class="form-subtitle"><span class="step-label">Step 2</span> - <span class="step-label-title">Select move type</span></p>

									<div class="row">
										<div class="col-12 col-md-4  moving-from">
											<div class="form-group">
												<label for="MovingFrom">Moving From</label>
												<input type="text" placeholder="Current address" class="form-control" name="moving_from" id="moving_from">
											</div>
											<div class="form-row errormessage errormessage_moving_from" style="display:none;"><span class="error" id="moving_from_err"> </span> </div>
										</div>
										<div class="arrow col-1">
											<i class='bx bxs-right-arrow-alt'></i>
										</div>
										<div class="col-12 col-md-4  moving-to">
											<div class="form-group">
												<label for="MovingTo">Moving To</label>
												<input type="text" placeholder="New address" class="form-control" name="moving_to" id="moving_to">
											</div>
											<div class="form-row errormessage errormessage_moving_to" style="display:none;"><span class="error" id="moving_to_err"> </span> </div>
										</div>
										<div class="col-12 col-md-2 col-lg-1  moving-to">
											<div class=" btns form-group">
												<label for=""> </label>
												<button class="back1 overlay_remove btnPrev prev-btn"><i class="bx bx-arrow-back"></i> Back</button>

												<button class="next3 btnNext btn next-btn mt-0" id="next1" type="button" value="Next1">Next</button>
											</div>
										</div>
									</div>
									<div class="telnumber text-center">
										<a href="tel:1300 466 837"><i class='bx bx-phone-call'></i> 1300 466 837</a>
									</div>
								</div>
								
							</div>
						</div>
						<div class="full_form_stps">
							<div class="container">
								<div class="form_section_head">
									<button class="back1  btnPrev prev-btn"><i class="bx bx-arrow-back"></i> Back</button>
									<h2 class="form-section-title">Just a few more questions</h2>
								</div>
								<div class="form-section">
									<p class="form-subtitle"><span class="step-label">Step 3</span> - <span class="step-label-title">What size is your current location?</span></p>
									<div class="row">
										<div class="col-12 col-md-10 col-lg-10">
											<div class="form-group">
												<div class="inprow fromrow">
													<label for="fh" class="">
														<input type="radio" name="bedroom" class="bedroom" id="fh" value="1-2 Bedroom" >
														<img src="<?php echo get_bloginfo('template_directory');?>/img/fh.png" alt="">
														<span>1-2 Bedroom</span>
													</label>
													<label for="ff">
														<input type="radio" name="bedroom" class="bedroom" id="ff" value="3 Bedroom">
														<img src="<?php echo get_bloginfo('template_directory');?>/img/ff.png" alt="">
														<span>3 Bedroom</span>
													</label>
													<label for="fs">
														<input type="radio" name="bedroom" class="bedroom" id="fs" value="4+ Bedroom">
														<img src="<?php echo get_bloginfo('template_directory');?>/img/fs.png" alt="">
														<span>4+ Bedroom</span>
													</label>
													<label for="fs2">
														<input type="radio" name="bedroom" class="bedroom" id="fs2" value="Just a few items">
														<img src="<?php echo get_bloginfo('template_directory');?>/img/few.png" alt="">
														<span>Just a few items</span>
													</label>
												</div>
											</div>
											<div class="form-row errormessage errormessage_bedroom" style="display:none;"><span class="error" id="bedroom_err"> </span> </div>
										</div>
										<div class="col-sm-12 col-md-2 col-lg-1  moving-to">
											<div class=" btns form-group">
												<label for=""> </label>
												<button class="back1  btnPrev prev-btn"><i class="bx bx-arrow-back"></i> Back</button>

												<button class="next3 btnNext btn next-btn mt-0" id="next2" type="button" value="next2">Next</button>
											</div>
										</div>
									</div>
									<div class="telnumber text-center">
										<a href="tel:1300 466 837"><i class='bx bx-phone-call'></i> 1300 466 837</a>
									</div>
								</div>
								
							</div>
						</div>
						<div class="full_form_stps">
							<div class="container">
								<div class="form_section_head">
									<button class="back1  btnPrev prev-btn"><i class="bx bx-arrow-back"></i> Back</button>
									<h2 class="form-section-title">When would you like to move?</h2>
								</div>
								<div class="form-section">
									<p class="form-subtitle"><span class="step-label">Step 4</span> - <span class="step-label-title">Approximate move date</span></p>
									<div class="row">
										<div class="col-12 col-md-6 col-lg-4">
											<div id="datepicker" name="moving_date"></div>
											<input type="hidden" id="hiddendate" name="hiddendate" value="" />
										</div>
										<div class="col-sm-12 col-md-2  moving-to">
											<div class=" btns form-group">
												<label for=""> </label>
												<button class="back1  btnPrev prev-btn"><i class="bx bx-arrow-back"></i> Back</button>

												<button class="next3 btnNext btn next-btn mt-0" id="next3" type="button" value="next3">Next</button>
											</div>
										</div>
									</div>
									<div class="telnumber text-center">
										<a href="tel:1300 466 837"><i class='bx bx-phone-call'></i> 1300 466 837</a>
									</div>
								</div>
								
							</div>
						</div>
						<div class="full_form_stps">
							<div class="container">
								<div class="form_section_head">
									<button class="back1  btnPrev prev-btn"><i class="bx bx-arrow-back"></i> Back</button>
									<h2 class="form-section-title">Final step</h2>
								</div>
								<div class="form-section">
									<p class="form-subtitle"><span class="step-label">Step 5</span> - <span class="step-label-title">Tell us about yourself</span></p>
									<div class="row">
										<div class="col-sm-6 col-md-6 col-lg-3  moving-from">
											<div class="form-group">
												<label >First Name</label>
												<input type="text" placeholder="First name" class="form-control" name="full_name" id="full_name" />
											</div>
											<div class="form-row errormessage errormessage_name" style="display:none;"><span class="error" id="name_err"> </span> </div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3  moving-from">
											<div class="form-group">
												<label >Last Name</label>
												<input type="text" placeholder="Last name" class="form-control" name="last_name" id="last_name" />
											</div>
											<div class="form-row errormessage errormessage_lastname" style="display:none;"><span class="error" id="lastname_err"> </span> </div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3  ">
											<div class="form-group">
												<label >Phone</label>
												<input type="tel" min="1" max="10" placeholder="Home Phone Or Mobile" class="form-control" name="home_phone" id="home_phone" /> 
											</div>
											<div class="form-row errormessage errormessage_phone" style="display:none;"><span class="error" id="phone_err"> </span> </div>
											<div class="form-row errormessage errormessage_phone2" style="display:none;"><span class="error" id="phone_err2"> </span> </div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-3  ">
											<div class="form-group">
												<label >Email</label>
												<input type="email" placeholder="Email address" class="form-control" name="email_address" id="email_address" />
											</div>
											<div class="form-row errormessage errormessage_email" style="display:none;"><span class="error" id="email_err"> </span> </div>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-1  moving-to">
											<div class=" btns form-group">
												<label for=""> </label>
												<button class="back1  btnPrev prev-btn"><i class="bx bx-arrow-back"></i> Back</button>

												<button class="next3 btnNext finalbtn btn  mt-0" type="button" value="Submit" id="cst-jsbtn">Submit</button>
											</div>
										</div>
									</div>
									<div class="telnumber text-center">
										<a href="tel:1300 466 837"><i class='bx bx-phone-call'></i> 1300 466 837</a>
									</div>
								</div>
								
							</div>
						</div>

					</div>
				</form>
		</div>		
	</section>
	<?php  endwhile; // End of the loop. ?>
	
	
	
	
	<section class="makemove ptb-80">
		<div class="container">
			<div class="col-12 col-lg-10 m-auto">
				<div class="mainHeading">
				<?php if(have_rows('main_heading')):
					while( have_rows('main_heading') ) : the_row(); 
				?>
					<h1><?php the_sub_field('main_title'); ?></h1>
					<?php the_sub_field('content'); ?>
					<a href="<?php the_sub_field('button_link'); ?>" class="btn-orange"><?php the_sub_field('button_text'); ?></a>
				<?php endwhile; endif; ?>	
				</div>
			</div>
		</div>
	</section>
	<?php if(have_rows('card_section')):
		while( have_rows('card_section') ) : the_row(); 
	?>
	<section class="cardsec bg-light" style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat;background-position: right;background-size: contain;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12 col-xl-6">
					<div class="cardleft">
						<div class="row">
						<?php if(have_rows('info_box')):
							while( have_rows('info_box') ) : the_row(); 
						?>
							<div class="col-6 col-md-6 col-lg-4">
								<div class="cards">
								<a href="<?php the_sub_field('link'); ?>">
									<div class="cardImg">
										<img src="<?php the_sub_field('image'); ?>" class="imgblack" alt="">
										<img src="<?php the_sub_field('image_hover'); ?>" class="imgHover" alt="">
									</div>
									<h5><?php the_sub_field('tiitle'); ?></h5>
								</a>	
								<p style="font-size:12px;"><?php the_sub_field('text'); ?> </p>
								</div>
							</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-12 col-xl-6">
					<div class="cardimg">
						<h4><?php the_sub_field('heading'); ?></h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('serve_section')):
		while( have_rows('serve_section') ) : the_row(); 
	?>
	<section class="serveto ptb-80">
		<div class="container">
			<div class="col-12 col-md-10 m-auto">
				<div class="mainHeading">
					<h2><?php the_sub_field('title'); ?></h2> <br />
					<p><?php the_sub_field('content'); ?></p>
				</div>
			</div>
			<div class="row">
				<?php if(have_rows('serve_box')):
					while( have_rows('serve_box') ) : the_row(); 
				?>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="servecard">
						<a href="<?php the_sub_field('link'); ?>" style="opacity: 1;visibility: visible;background: none;">
						<div class="cardImg">
							<img src="<?php the_sub_field('image'); ?>" alt="">
						</div>
						<div class="servbody">
							<h4><?php the_sub_field('title'); ?></h4>
							<p style="color: #000;"><?php the_sub_field('content'); ?></p>

						</div>
						</a>
						<a href="<?php the_sub_field('link'); ?>">Read more</a>
					</div>
				</div>
				<?php
					endwhile;
					endif;
				?>
			</div>
		</div>
	</section>
	<?php
		endwhile;
		endif;
	?>
	
	<?php if(have_rows('counter_area')):
		while( have_rows('counter_area') ) : the_row(); 
	?>
	<section class="counter-area fun-blue-bg pt-100 pb-70" style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat;background-size: cover;background-position: center;">
		<div class="container">
			<div class="row">
				<?php if(have_rows('counter_area_sec')):
					while( have_rows('counter_area_sec') ) : the_row(); 
				?>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="countc">
						<div class="cimg">
							<img src="<?php the_sub_field('icon'); ?>" alt="">
						</div>
						<h2>
							<span class="odometer" data-count="<?php the_sub_field('data_count'); ?>">00</span> <span class="traget"><?php the_sub_field('data_text'); ?></span>
						</h2>
						<p><?php the_sub_field('data_content'); ?></p>
					</div>
				</div>
				<?php
					endwhile;
					endif;
				?>
			</div>
		</div>
	</section>
	<?php
		endwhile;
		endif;
	?>
	
	<section class="serveto ptb-80">
		<div class="container">
			<div class="col-12 col-md-10 m-auto">
			<?php if(get_field('contentarea')): ?>
				<div class="mainHeading">
					<p><?php echo the_field('contentarea'); ?></p>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
			
	<section class="quoteimg mtb-80">
		<div class="container">
			<?php if(have_rows('quote_section')):
				while( have_rows('quote_section') ) : the_row(); 
			?>
			<div class="qutxt" style="background: url(<?php the_sub_field('quote_background_image'); ?>) no-repeat;background-size: cover;background-position: center;">
				<?php the_sub_field('quote_content'); ?>
				<a href="<?php the_sub_field('quote_button_link'); ?>" class="btn-orange"><?php the_sub_field('quote_button'); ?></a>
			</div>
			<?php
				endwhile;
				endif;
			?>
		</div>
	</section>
	
	<?php if(have_rows('bottom_content')):
		while( have_rows('bottom_content') ) : the_row(); 
	?>
	<section class="serveto">
		<div class="container">
			<div class="col-12 col-md-10 m-auto">
				<div class="mainHeading">
					<h2><?php the_sub_field('heading'); ?></h2> <br />
					<p><?php the_sub_field('contentpart'); ?></p>
				</div>
			</div>
		</div>
	</section>	
	<?php
		endwhile;
		endif;
	?>
	
	<?php if(have_rows('why_choose')):
		while( have_rows('why_choose') ) : the_row(); 
    ?>
        
	<section class="whychoose" style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat;background-size: cover;background-position: center;">
		<div class="container">
			<div class="chotxt">
				<h3><?php the_sub_field('title'); ?></h3>
				<h5><?php the_sub_field('tagline'); ?></h5>
				<?php the_sub_field('content'); ?>
			</div>
		</div>
	</section>
	
	<?php
		endwhile;
		endif;
	?>
	
	<section class="testimonials-area bg-light ptb-80">
		<div class="container">
			<div class="mainHeading">
				<h2>Client Testimonials!</h2>
			</div>
			<div class="row">
				<div style="margin-top:30px;">  
					<?php do_action( 'wprev_pro_plugin_action', 1 ); ?>
				</div>	
				<?php /*?><div class="testimonials-top-wrap owl-carousel owl-theme">
					<?php query_posts(array('post_type' => 'testimonial')); 
						while (have_posts()) : the_post(); 
					?>
					<div class="testm-wrap">
						<div class="testim-card">
							<div class="testim-img">
								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
							</div>
							<p><?php the_content(); ?></p>
							<h6><span class="orange-text"><?php the_title(); ?></span> ~ <?php echo get_the_date('F j, Y'); ?>.</h6>
						</div>
					</div>
					<?php endwhile; ?>	
				</div> <?php */?>
			</div>
		</div>
	</section>


<?php
get_footer();
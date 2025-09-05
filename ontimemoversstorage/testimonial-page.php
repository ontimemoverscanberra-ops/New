<?php
/**
 * Template Name: Testimonial
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */ ?>
<section class="testimonials-area bg-light ptb-80">
	<div class="container">
		<div class="mainHeading">
			<h2>What Our Clients Say About Ontime Movers</h2>
		</div>
		<div class="row">
			<div class="testimonials-top-wrap owl-carousel owl-theme">
				<?php query_posts(array('post_type' => 'testimonial',
									   'posts_per_page' => 50
									   )); 
					while (have_posts()) : the_post(); 
				?>
				<div class="testm-wrap">
					<div class="testim-card">
						<div class="testim-img">
							<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
						</div>
						<p><?php the_content(); ?></p>
						<h6><span class="orange-text"><?php the_title(); ?></span></h6>
					</div>
				</div>
				<?php endwhile; ?>	
			</div>
		</div>
	</div>
</section>
<?php
get_footer();

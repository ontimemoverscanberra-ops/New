<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	
	if ($post->post_type == 'product') {
		get_template_part( 'woocommerce/content-single-product' );
		
	} else {
 
	//get_template_part( 'template-parts/content/content-single' );
?>

<section id="post-<?php the_ID(); ?>" <?php post_class('detl ptb-50 entry-content container'); ?> >
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-9">
				<div class="ndleft">
					<div class="mainHeading ">
						<?php the_title( '<h2>', '</h2>' ); ?>
						<p class="posdt">Posted on <?php echo get_the_date(); ?></p>
					</div>
					<div class="ndetimg">
						<?php 
							$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
						?>
						<img src="<?php echo $featured_img_url; ?>" alt="">
					</div>
					<?php the_content(); ?>
				</div>
			</div>
				
				
				<div class="col-12 col-md-12 col-lg-3">
                    <div class="ndright">
                        <div class="ncat">
                            <?php dynamic_sidebar( 'sidebar-5' ); ?>
                        </div>
                        <div class="ncatimg">
                           <?php dynamic_sidebar( 'sidebar-6' ); ?>
                        </div>
                    </div>
                </div>

		</div>
	</div>	
		

</section><!-- #post-<?php the_ID(); ?> -->

<?php
	/*if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

	// Previous/next post navigation.
	$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' );
	$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' );

	$twentytwentyone_next_label     = esc_html__( 'Next post', 'twentytwentyone' );
	$twentytwentyone_previous_label = esc_html__( 'Previous post', 'twentytwentyone' );

	the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p><p class="post-title">%title</p>',
		)
	); */
	
	} endwhile; // End of the loop.

get_footer();

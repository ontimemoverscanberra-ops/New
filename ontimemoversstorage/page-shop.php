<?php
/**
 * Template Name: ShopList
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
	//get_template_part( 'template-parts/content/content-page' );
?>	
	
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
	if (!$image) {
		$background = '#919191';
	} else {
		$background = 'url('.$image[0].') no-repeat';
	}

?>
<?php if ( ! is_front_page() ) : ?>
	<section class="innerbanner boxbnr" style="background: <?php echo $background; ?>;background-position: center;    background-size: cover;">
		<div class="container">
			<div class="bannerHead">
				<?php //the_title( '<h1>', '</h1>' ); ?>
				<h2>Boxes and Packing Items</h2>
				<h1>Free Delivery</h1>
				<h3>For Box shop orders over $100</h3>
				<p>Delivery is available 10km from your nearest storage
					Ontime Movers and storage.
				</p>
			</div>
		</div>
	</section>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-content container'); ?>>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
</article><!-- #post-<?php the_ID(); ?> -->

	
<?php
	// If comments are open or there is at least one comment, load up the comment template.
	/* if ( comments_open() || get_comments_number() ) {
		comments_template();
	} */
endwhile; // End of the loop.

get_footer();

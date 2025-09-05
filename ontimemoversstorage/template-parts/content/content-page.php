<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
	if (!$image) {
		$background = '#919191';
	} else {
		$background = 'url('.$image[0].') no-repeat';
	}
	
	if (is_product_category() || is_cart() || is_checkout()) {
		$background = 'url(http://ontimemovers.com.au/wp-content/uploads/2023/04/box-banner.jpg) no-repeat';
	}		

?>
<?php if ( ! is_front_page() ) : ?>
	<section class="innerbanner" style="background: <?php echo $background; ?>;background-size: cover;">
		<div class="container">
			<div class="bannerHead wow animate__fadeInUp" data-wow-duration="1s">
				<?php the_title( '<h1>', '</h1>' ); ?>
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

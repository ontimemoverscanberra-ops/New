<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>
<!-- Start Top Header Area -->
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="header-left-content">
							<?php if ( has_custom_logo() && $show_title ) : ?>
							<a href="<?php site_url() ?>">
								<?php the_custom_logo(); ?>
							</a>	
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-4 col-md-7">
						<div class="tophtxt text-center">
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="header-right-content">
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Top Header Area -->
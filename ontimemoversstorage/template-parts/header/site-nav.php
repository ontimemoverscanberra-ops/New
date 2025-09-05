<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<!-- Start Prevoz Navbar Area -->
		<div class="prevoz-nav-style">
			<div class="navbar-area">
				<!-- Menu For Mobile Device -->
				<div class="mobile-nav">
					<a href="<?php echo site_url(); ?>" class="logo">
						<?php //the_custom_logo(); ?>
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/12/logo-one.png" alt="Logo">
					</a>	
				</div>
				<!-- Menu For Desktop Device -->
				<div class="main-nav">
					<nav class="navbar navbar-expand-md bg-orange p-0">
						<div class="container">
							<a class="navbar-brand" href="<?php echo site_url(); ?>">
								<?php the_custom_logo(); ?>
							</a>
							
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							
							<?php /*
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'items_wrap'      => '<ul class="navbar-nav mr-auto">%3$s</ul>',
				'fallback_cb'     => false,
				'add_li_class'  => 'nav-item'
			)
		);
		*/
		
		$menu_items = wp_get_menu_array('HeaderMenu');
		?>  
		
	<ul class="navbar-nav mr-auto">
        <?php foreach ($menu_items as $item) : ?>
          <li class="nav-item">
            <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" class="nav-link dropdown-toggle "><?= $item['title'] ?>
				<?php if( !empty($item['children']) ):?>
				<i class='bx bx-chevron-down'></i>
				<?php endif; ?>
			</a>
            <?php if( !empty($item['children']) ):?>
            <ul class="dropdown-menu">
              <?php foreach($item['children'] as $child): ?>
                <li class="nav-item">
                  <a href="<?= $child['url'] ?>" title="<?= $child['title'] ?>" class="nav-link"><?= $child['title'] ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
		<?php if ( is_user_logged_in() ) { ?>
		 <li class="nav-item">
            <a href="<?php echo site_url() ?>/my-account/" title="my-account" class="nav-link dropdown-toggle ">My Account</a>
          </li>
		<?php } ?>
     </ul>
	 <?php 
	 ob_start();
		$cart_count = WC()->cart->cart_contents_count;
		$cart_url = wc_get_cart_url();
	 ?>
				<div class="cartct">
                        <a href="<?php echo $cart_url; ?>"><span><?php echo $cart_count; ?></span></a>
                </div>
								<!-- Start Other Option -->
								<div class="others-option">
									<a href="<?php echo site_url(); ?>/#cst_form">Get a Free Quote</a>
								</div>
								<!-- End Other Option -->
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Prevoz Navbar Area -->
	<?php
endif;

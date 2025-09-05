<?php
/**
 * Template Name: BoxShopList
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
				<p>Delivery is available 50km from your nearest 					Ontime Movers and storage.
				</p>
			</div>
		</div>
	</section>
<?php endif; ?>

<section id="post-<?php the_ID(); ?>" class="movbox ">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-3 leftfltbx">
					<div class="ndright mvbxleft">
                        <div class="ncat">
                            <h2> Categories </h2>
							
							<ul class=" category navbar-nav mr-auto">
							    <?php
								 /* category lists */
                              $taxonomy     = 'product_cat';
                              $orderby      = 'name';  
                              $show_count   = 0;      // 1 for yes, 0 for no
                              $pad_counts   = 0;      // 1 for yes, 0 for no
                              $hierarchical = 1;      // 1 for yes, 0 for no  
                              $title        = '';  
                              $empty        = 0;
                            
                              $args = array(
                                     'taxonomy'     => $taxonomy,
                                     'orderby'      => $orderby,
                                     'show_count'   => $show_count,
                                     'pad_counts'   => $pad_counts,
                                     'hierarchical' => $hierarchical,
                                     'title_li'     => $title,
                                     'hide_empty'   => $empty
                              );
                             $all_categories = get_categories( $args );
                             foreach ($all_categories as $cat) {
                                if($cat->category_parent == 0) {
                                    $category_id = $cat->term_id;       
                                    echo '<li class="nav-item" ><a class="nav-link" href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';
                            
                                    $args2 = array(
                                            'taxonomy'     => $taxonomy,
                                            'child_of'     => 0,
                                            'parent'       => $category_id,
                                            'orderby'      => $orderby,
                                            'show_count'   => $show_count,
                                            'pad_counts'   => $pad_counts,
                                            'hierarchical' => $hierarchical,
                                            'title_li'     => $title,
                                            'hide_empty'   => $empty
                                    );
                                    $sub_cats = get_categories( $args2 );
                                    
                                    if($sub_cats) {
                                        echo '<ul class="dropdown-menu">';
                                        foreach($sub_cats as $sub_category) {
                                            echo '<li class="nav-item"><a class="nav-link" href="'.$sub_category->slug.'">'.$sub_category->name.'</li>';
                                        }  
                                         echo "</ul>";
                                        
                                    }
                                    echo "</li>";
                                }       
                            }
                            ?>
                            							</ul>                        
                                                    </div>
                                                    
                        <?php 
                                               
                        dynamic_sidebar('sidebar-7'); ?>
                    </div>
				</div>
				<div class="col-12 col-md-12 col-lg-9  rightbx" style="padding-top:0;">
					
					<?php global $post, $product; 
						$taxonomy     = 'product_cat';
					  $orderby      = 'name';  
					  $show_count   = 0;      // 1 for yes, 0 for no
					  $pad_counts   = 0;      // 1 for yes, 0 for no
					  $hierarchical = 0;      // 1 for yes, 0 for no  
					  $title        = '';  
					  $empty        = 1;

					  $args = array(
							 'taxonomy'     => $taxonomy,
							 'orderby'      => $orderby,
							 'show_count'   => $show_count,
							 'pad_counts'   => $pad_counts,
							 'hierarchical' => $hierarchical,
							 'title_li'     => $title,
							 'hide_empty'   => $empty
					  );
					 $all_categories = get_categories( $args );
						foreach ($all_categories as $cat) {
							if($cat->category_parent == 0) {
								$category_id = $cat->term_id;       
								//echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';
					?>
					<div class="mvbxright cartItms">
						<div class="mvbxhed">
							<h3 id="<?php echo $cat->term_id; ?>" ><?php echo $cat->name; ?></h3>
							<a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>">View All</a>
						</div>
						<div class="row">
							<?php
							$args = array( 'post_type' => 'product', 'posts_per_page' => 3,'product_cat' => $cat->slug, 'orderby' =>'date','order' => 'ASC' );
								$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
								global $product;
							?>
						
							<div class="col-12 col-md-4 col-lg-4">
								<div class="mvcard">
									<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
										<div class="mvcimg">
											<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
										</div>
									</a>
									
									<div class="mvcbody">
										<h5><?php the_title(); ?></h5>
										<p><?php the_excerpt(); ?></p>
										<div class="bcprz">
											<h6><?php echo $product->get_price_html(); ?></h6>
										</div>
									</div>
									
								</div>
							</div>
							<?php endwhile; wp_reset_query(); ?>						
						</div>
						</div>

						<?php  }       
} ?>
					
				</div>
			</div>
		</div>
	</section>

<article id="post-<?php the_ID(); ?>" >
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
endwhile; // End of the loop.*/


get_footer();

<?php return false;
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>


<section class="ncatg ptb-50">
        <div class="container">
			<div class="ntab_body">
                <div class="mainHeading">
                    <?php the_archive_title( '<h2>', '</h2>' ); ?>
						<?php if ( $description ) : ?>
							<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
						<?php endif; ?>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="all" >
                        <div class="row">
							<?php while ( have_posts() ) : ?>
							<?php the_post(); 
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							?>
                            <div class="col-12 col-md-6 col-lg-4" id="post-<?php the_ID(); ?>" >
                                <div class="ncard">
                                    <div class="nimg">
                                        <img src="<?php echo $image[0]?>" alt="">
                                    </div>
                                    <div class="ncard_body">
                                        <?php the_title( '<h4>', '</h4>' ); ?>

                                        <div class="ncard_foot">
                                            <span class="ndt"><?php echo get_the_date() ?></span>
                                            <a href="<?php echo get_permalink(); ?>" class="nlink">CONTINUE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php endwhile; ?>
                        </div>
                    </div>
                
                </div>
            </div>

		</div>
</section>		


<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php
get_footer();

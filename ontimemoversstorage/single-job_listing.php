<?php


get_header();

/* Start the Loop */
 while ( have_posts() ) :
	the_post();

/*	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
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
	);
 */ // End of the loop.
?>
<style>
    
/* ==========
    career details page
============*/

.jobtitle {
  font-size: 30px;
}
.jobloct {
  font-size: 16px;
  color: #999;
}
.bdtl{
  margin: 25px 0;
}
.bdtl li {
  font-size: 18px;
  padding: 5px 0;display: flex;
}
.bdtl li span:first-child{width: 200px;display: inline-block;}
.subjobheading {
  font-size: 20px;margin-top: 30px;
}
.jobdetails p{margin-top: 10px;}
.jbenft li{display: flex;align-items: center;padding: 5px 0;padding-left: 20px;;font-size: 18px;list-style-type: disc;position: relative;
margin-left: 15px;
}


.jbenft li::before{
  content: '';
  color: var(--orange);
  width: 10px;height: 10px;border-radius: 50%;background: var(--orange);
  position: absolute;left: 0;
}
.jobform h3{font-size: 30px;margin: 30px 0;}
.jobform label{font-weight: bold;font-size: 18px;}
.jobform textarea{height: 150px;resize: none;}


@media(max-width:767px){
  .bdtl li{flex-wrap: wrap;}
  .bdtl li span:first-child{width: 100%;}
  .bdtl li span:last-child{padding-left: 0;font-weight: bold;font-size: 16px;}
  .jbenft li::before{
    content: '';top: 13px;
  }
}

@media(min-width:768px){
  .bdtl li span:last-child::before{
    content: ':';padding-right: 30px;
  }
}
.footc_row {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
    justify-content: space-between;
    padding: 50px 0;
}
@media (max-width: 767px){
.footc_row {
    flex-wrap: wrap;
    justify-content: center;
    text-align: center;
}
}
.footc_row h3 {
    margin-bottom: 0;
    color: #fff;
    font-size: 30px;
}

@media (max-width: 767px){
.footc_row h3 {
    font-size: 22px;
    width: 100%;
}
}
.footc_row a {
    font-size: 40px;
    color: #fff;
    font-weight: bold;
}
@media (max-width: 767px){
.footc_row a {
    font-size: 30px;
    margin-top: 20px;
}
}
/* ==========
    career details page
============*/
</style>
<section class="innerbanner" style="background-image: url('<?php echo "http://ontimemovers.com.au/wp-content/uploads/2023/03/career-banner.jpg" ?>'); ">
        <div class="container">
            <div class="bannerHead">
                <h1>Join Our Team</h1>
            </div>
        </div>
    </section>
    <section class="jobdetails ptb-80">
		<div class="container">
			<h2 class="jobtitle"><?php the_title();?></h2>
			<p class="jobloct"><?php the_field('location'); ?></p>
			<hr>
			<ul class="bdtl">
                <?php if(get_field('location')){ ?>
				<li><span>Location	</span>			<span><?php the_field('location'); ?></span></li>
                <?php }  if(get_field('experience')){ ?>
				<li><span>Experience</span>			<span><?php the_field('experience'); ?> </span></li>
                <?php }  if(get_field('shift_time')){ ?>
				<li><span>Shift Time	</span>		<span><?php the_field('shift_time'); ?></span></li>
                <?php }  if(get_field('no_of_positions')){ ?>
				<li><span>No of Positions</span><span>	<?php the_field('no_of_positions'); ?></span></li>
                <?php }  ?>
			</ul>
            <?php  if(get_field('short_description')){ ?>
			<p><?php the_field('short_description'); ?></p>
            <?php } ?>
            <?php if(have_rows('duties')):?>
                    <h4 class="subjobheading"><?php the_field('duty_title'); ?>:</h4>
                    <ul class="jbenft">
                    <?php   
                while( have_rows('duties') ) : the_row(); 
            ?>
                        <li><?php the_sub_field('duty'); ?></li>
                        <?php
                endwhile;
                
            ?>		
				
                </ul>
            <?php endif; ?>
			<ul class="bdtl">
            <?php if(get_field('qualification')){ ?>
				<li><span>Qualification</span>	<span>	<?php the_field('qualification'); ?></span></li>
                <?php }  if(get_field('required')){ ?>
				<li><span>Required</span>		<span>	<?php the_field('required'); ?></span></li>
                <?php }  if(get_field('salary')){ ?>
				<li><span>Salary</span>				<span><?php the_field('salary'); ?></span></li>
                <?php }   ?>
				
			</ul>
       

        <?php 

        echo do_shortcode('[contact-form-7 id="1287" title="Job Application"]');?> 
         </div>
    </section>
    <section class="footcall">
        <div class="container">
            <div class="footc_row">
                <h3>OnTimeMovers&Storage</h3>
                <div class="fcall">
                    <a href="tel:1300-4"><i class='bx bxs-phone-call' ></i> 1300-4</a>
                </div>
            </div>
        </div>
    </section>
            <?php
            endwhile;
get_footer();
?>
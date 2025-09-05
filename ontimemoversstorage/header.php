<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="<?php //echo get_bloginfo('template_directory');?>/assets/css/style.css"> -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
	
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<!--<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/assets/css/full-form.css">-->
	
	<!-- Responsive CSS -->
	<!--<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/assets/css/responsive.css">-->
	
	<meta name="google-site-verification" content="3IhMV4et7UfD5z4dhKGFtHH_uE484CskhHtOvjm4gxc" />
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- End Preloader Area -->
	
	<!-- Start Header Area -->
	<?php get_template_part( 'template-parts/header/site-header' ); ?>
	<!-- End Header Area -->
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MBM9H5VQ23">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MBM9H5VQ23');
</script>			

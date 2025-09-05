<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

add_action( 'wp_enqueue_scripts', 'ar_child_enqueue_styles',9 );
function ar_child_enqueue_styles() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css?t='.time(), null);
    wp_enqueue_style( 'owl-css',get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css?t='.time(), null);
     wp_enqueue_style( 'owl-theme-css',get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css?t='.time(), null);
      wp_enqueue_style( 'magnific-css',get_stylesheet_directory_uri() . '/assets/css/magnific-popup.min.css?t='.time(), null);
       wp_enqueue_style( 'animate-css',get_stylesheet_directory_uri() . '/assets/css/animate.min.css?t='.time(), null);
        wp_enqueue_style( 'boxicons-css',get_stylesheet_directory_uri() . '/assets/css/boxicons.min.css?t='.time(), null);
         wp_enqueue_style( 'meanmenu-css',get_stylesheet_directory_uri() . '/assets/css/meanmenu.min.css?t='.time(), null);
		 //wp_enqueue_style('woocommerce_css', plugins_url() .'/woocommerce/assets/css/woocommerce.css');
    //wp_enqueue_style('woocommerce_layout', plugins_url() .'/woocommerce/assets/css/woocommerce-layout.css');
          wp_enqueue_style( 'nice-select-css',get_stylesheet_directory_uri() . '/assets/css/nice-select.min.css?t='.time(), null);
          wp_enqueue_style( 'odometer-css',get_stylesheet_directory_uri() . '/assets/css/odometer.min.css?t='.time(), null);
           wp_enqueue_style( 'full-form-css',get_stylesheet_directory_uri() . '/assets/css/full-form.css?t='.time(), null);
		   wp_enqueue_style( 'responsive-css',get_stylesheet_directory_uri() . '/assets/css/responsive.css?t='.time(), null);
         
   
    //wp_enqueue_script( 'jquery-js', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js?t='.time(), array('jquery'), null, true);
   
     wp_enqueue_script( 'jquery-ui-2',  'https://code.jquery.com/ui/1.13.2/jquery-ui.js?t='.time(), array('jquery'));
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js?t='.time(), null, true);
     wp_enqueue_script( 'magnific-js', get_stylesheet_directory_uri() . '/assets/js/magnific-popup.min.js?t='.time(), null, true);
     wp_enqueue_script( 'owl.carousel-js', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js?t='.time(), null, true);
    wp_enqueue_script( 'meanmenu-js', get_stylesheet_directory_uri() . '/assets/js/meanmenu.min.js?t='.time(), null, true);
    wp_enqueue_script( 'wow-js', get_stylesheet_directory_uri() . '/assets/js/wow.min.js?t='.time(), null, true);
    wp_enqueue_script( 'appear-js', get_stylesheet_directory_uri() . '/assets/js/appear.min.js?t='.time(), null, true);
    wp_enqueue_script( 'odometer-js', get_stylesheet_directory_uri() . '/assets/js/odometer.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js?t='.time(),array('jquery'), null, true);

}
add_action( 'wp_enqueue_scripts', 'onshop_child_enqueue_styles');
function onshop_child_enqueue_styles() {
	wp_enqueue_style( 'onshop-custom',get_stylesheet_directory_uri() . '/assets/css/onshop-custom.css?t='.time(), null);

}
function remove_css_js_version( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );
if ( ! function_exists( 'twenty_twenty_one_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentytwentyone', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'woocommerce' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		if ( 127 > Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
			add_theme_support( 'dark-editor-style' );
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'twentytwentyone' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'twentytwentyone' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'twentytwentyone' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'twentytwentyone' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'twentytwentyone' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'twentytwentyone' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'twentytwentyone' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'twentytwentyone' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'twentytwentyone' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'twentytwentyone' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'twentytwentyone' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'twentytwentyone' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'twentytwentyone' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'twentytwentyone' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'twentytwentyone' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'twentytwentyone' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'twentytwentyone' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', twenty_twenty_one_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_false' );
	}
}
add_action( 'after_setup_theme', 'twenty_twenty_one_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function twenty_twenty_one_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'twentytwentyone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Wdiget Menu', 'twentytwentyone' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Top Middle Wdiget', 'twentytwentyone' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here to appear in your top middle area.', 'twentytwentyone' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Top Middle Right Wdiget', 'twentytwentyone' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here to appear in your top right area.', 'twentytwentyone' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'News Wdiget', 'twentytwentyone' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Add widgets here to appear in your news sidebar area.', 'twentytwentyone' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'News ad Wdiget', 'twentytwentyone' ),
			'id'            => 'sidebar-6',
			'description'   => esc_html__( 'Add widgets here to appear in your news sidebar area.', 'twentytwentyone' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Product Wdiget', 'twentytwentyone' ),
			'id'            => 'sidebar-7',
			'description'   => esc_html__( 'Add widgets here to appear in your product sidebar area.', 'twentytwentyone' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(array(
		'name' => 'Shop',
		'id'            => 'shop',
		'before_widget' => '<div class = "on-shop-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
}
add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function twenty_twenty_one_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twenty_twenty_one_content_width', 750 );
}
add_action( 'after_setup_theme', 'twenty_twenty_one_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		//wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css?TM='.time() );
	}

	// RTL styles.
	wp_style_add_data( 'twenty-twenty-one-style', 'rtl', 'replace' );

	// Print styles.
	wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if ( has_nav_menu( 'primary' ) ) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'twenty-twenty-one-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'twenty-twenty-one-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
	// Add footer JS and CSS  file in function 

}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_scripts' );


/**
 * Enqueue block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_block_editor_script() {

	wp_enqueue_script( 'twentytwentyone-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'twentytwentyone_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
		?>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
		</script>
		<?php
	}
}
add_action( 'wp_print_footer_scripts', 'twenty_twenty_one_skip_link_focus_fix' );

/**
 * Enqueue non-latin language styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_non_latin_languages() {
	$custom_css = twenty_twenty_one_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'twenty-twenty-one-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init() {
	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'twentytwentyone-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'twentytwentyone_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'twentytwentyone_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'twentytwentyone_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator() {
		/* translators: Used between list items, there is a space after the comma. */
		return __( ', ', 'twentytwentyone' );
	}
endif;


/***************Custom Menu Social*************************/
function social() {
    register_nav_menus(
        array(
            'social' => _( 'Social Menu' ),
            'MainLinks' =>_('Main Links')
        )
    );
}
add_action( 'init', 'social' );

/******Custom Menu Creation*****************/
function wp_get_menu_array($current_menu) {
    $array_menu = wp_get_nav_menu_items($current_menu); 
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']          =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']      =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
}


/****Add class in logo********/

add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'main-logo', $html );
    $html = str_replace( 'main-logo-link', 'navbar-brand', $html );

    return $html;
}

/**Testimonial Custom Post Type**/

add_action('init', "testimonial_custom_post_type");

function testimonial_custom_post_type(){

   $labels = array(
              'name' => _x('Testimonials', 'post type general name'),
              'singular_name' => _x('Testimonial', 'post type singular name'),
              'menu_name' => _x('Testimonials', 'admin menu'),
              'name_admin_bar' => _x('Testimonial', 'add new on admin bar'),
              'add_new' => _x('Add New', ''),
              'add_new_item' => __('Add New Testimonial'),
              'edit_item' => __('Edit Testimonial'),
              'new_item' => __('New Testimonial'),
              'all_items' => __('All Testimonial'),
              'view_item' => __('View Testimonial'),
              'search_items' => __('Search Testimonials'),
              'not_found' => __('No Testimonials found'),
              'not_found_in_trash' => __('No Testimonials found in Trash'),
              'parent_item_colon' => __('Parent Testimonials:'),

         );

$args = array(
               'hierarchical' => true,
               'labels' => $labels,
               'public' => true,
               'publicly_queryable' => true,
               'description' => __('Description.'),
               'show_ui' => true,
               'show_in_menu' => true,
               'show_in_nav_menus' => true,
               'query_var' => true,
               'rewrite' => true,
               'query_var' => true,
               'rewrite' => array('slug' => 'testimonial'),
               'capability_type' => 'page',
               'has_archive' => true,
               'menu_position' => 22,
               "show_in_rest" => true,
               'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields' )
      );

               register_post_type('testimonial', $args);
}

/********Remove Elementor Css**************************/
function dequeue_elementor_global__css() {
  wp_dequeue_style('elementor-global');
  wp_deregister_style('elementor-global');
}
add_action('wp_print_styles', 'dequeue_elementor_global__css', 9999);

/**********Remove P tag from Contct from 7 *****************************/
add_filter('wpcf7_autop_or_not', '__return_false');

/**********Remove Span tag from Contct from 7 *****************************/
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

/***************Create Custom Job Post Type**********************************************/


// Job Listing Custom Post Type
function job_init() {
    // set up Job Listing labels
    $labels = array(
        'name' => 'Job Listings',
        'singular_name' => 'Job Listing',
        'add_new' => 'Add New Job Listing',
        'add_new_item' => 'Add New Job Listing',
        'edit_item' => 'Edit Job Listing',
        'new_item' => 'New Job Listing',
        'all_items' => 'All Job Listing',
        'view_item' => 'View Job Listing',
        'search_items' => 'Search Job Listings',
        'not_found' =>  'No Job Listings Found',
        'not_found_in_trash' => 'No Job Listings found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Job Listings',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'job_listing'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'job_listing', $args );
    
    // register taxonomy
    register_taxonomy('job_category', 'job_listing', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'job-category' )));
}
add_action( 'init', 'job_init' );



function job_post($attr, $content = null) {
	
	global $post;
	
	$shortcode_args = shortcode_atts(
		array(
				'cat'     => '',
				'order'  => 'desc'
		), $attr); 

	// array with query arguments
	$args=array(
		'post_type' => 'job_listing',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => $shortcode_args['order'],
		'tax_query' => array(
			array(
				'taxonomy' => 'job_category', 
				'field'    => 'id',
				'terms'    => $shortcode_args['cat'],
			),
		),
	);
	
	$query = new WP_Query($args);
	
	if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
		?>
		<div class="posname_row">
			<div class="posname">
				<h4><?php the_title(); ?></h4>
				<p><?php the_content(); ?></p>
			</div>
			<div class="posname">
				<a href="<?php the_permalink();?>" class="btn btn-orange">Apply Now</a>
			</div>
		</div>
		
		<?php endwhile;
   endif;
}

add_shortcode('job-post', 'job_post');

/**Review Custom Post Type**/

add_action('init', "review_post_type");

function review_post_type(){

   $labels = array(
              'name' => _x('Reviews', 'post type general name'),
              'singular_name' => _x('Review', 'post type singular name'),
              'menu_name' => _x('Reviews', 'admin menu'),
              'name_admin_bar' => _x('Review', 'add new on admin bar'),
              'add_new' => _x('Add New', ''),
              'add_new_item' => __('Add New Review'),
              'edit_item' => __('Edit Review'),
              'new_item' => __('New Review'),
              'all_items' => __('All Review'),
              'view_item' => __('View Review'),
              'search_items' => __('Search Reviews'),
              'not_found' => __('No Reviews found'),
              'not_found_in_trash' => __('No Reviews found in Trash'),
              'parent_item_colon' => __('Parent Reviews:'),

         );

$args = array(
               'hierarchical' => true,
               'labels' => $labels,
               'public' => true,
               'publicly_queryable' => true,
               'description' => __('Description.'),
               'show_ui' => true,
               'show_in_menu' => true,
               'show_in_nav_menus' => true,
               'query_var' => true,
               'rewrite' => true,
               'query_var' => true,
               'rewrite' => array('slug' => 'reviews'),
               'capability_type' => 'page',
               'has_archive' => true,
               'menu_position' => 22,
               "show_in_rest" => true,
               'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields' )
      );          
               register_post_type('reviews', $args);
}



function review_post() {
	
	global $post;
	
	// array with query arguments
	$args=array(
		'post_type' => 'reviews',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'ASC',
	);
	
	$query = new WP_Query($args);
	
	if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
		?>
		<div class="rev_card">
			<div class="revimg_row">
				<div class="media">
					<div class="media-img">
						<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
					</div>
					<div class="media-body">
						<h4><?php the_title(); ?></h4>
						<p><?php echo get_the_date('F j, Y'); ?></p>
					</div>
				</div>
				<div class="star">
					<ul>
						<?php 
						$star = get_the_excerpt();
						for($i = 0; $i <= 4; $i++){ 
							if($star <= $i){
								$color = 'blank';
							} else {
								$color = 'fill';
							}	
						?>
						<li><i class='bx bxs-star <?php echo $color; ?>'></i></li>
						<?php  
							
						} ?>	
						<li><i class='bx bxs-smile' ></i></li>
					</ul>
				</div>
			</div>
			<p><?php the_content(); ?></p>
		</div>
		
		<?php endwhile;
   endif;
}

add_shortcode('reviewpost', 'review_post');

/**********Disable plugin update***********************************************/
function my_filter_plugin_updates( $value ) {
   if( isset( $value->response['autocomplete-location-field-contact-form-7/gm-cf7-auto-address.php'] ) ) {        
      unset( $value->response['autocomplete-location-field-contact-form-7/gm-cf7-auto-address.php'] );
    }
    return $value;
 }
 add_filter( 'site_transient_update_plugins', 'my_filter_plugin_updates' );
 
 
 
 
/*************************/
add_action( 'wp_ajax_formdata', 'formdata' );
add_action( 'wp_ajax_nopriv_formdata', 'formdata' );

function formdata() {

	// Get data
	$output = array();
	parse_str($_POST['data'], $output);
	
/*******************************/	

$_ZAP_ARRAY = array(
	"zap_location" => $output['location'],
	"zap_moving_from" => $output['moving_from'],
	"zap_moving_to" => $output['moving_to'],
	"zap_size" => $output['bedroom'],
	"job_date" => $output['hiddendate'],
	"zap_name" => $output['full_name'], 
	"zap_lastname" => $output['last_name'],
	"zap_phone" => $output['home_phone'],
	"zap_email" => $output['email_address']
);

// stuff it into a query
$_ZAP_ARRAY = http_build_query($_ZAP_ARRAY );

// get my zap URL
$ZAPIER_HOOK_URL = "https://hooks.zapier.com/hooks/catch/10820294/3yeiez7/";

// curl my data into the zap
$ch = curl_init( $ZAPIER_HOOK_URL);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $_ZAP_ARRAY);
//curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
/****************************************************/	
	
	
	$body ='';
    $body.=userInformation($output);
	
    $emailto = 'sales@ontimemovers.com.au';
    $emailfrom = 'noreply@OntimeMoversandStorage.com';
    $toname = 'OntimeMoversandStorage';
	$fromname = 'Ontime Movers and Storage';
    $subject = 'New Quote';
    $messagebody = $body;
    $headers = 
	'Return-Path: ' . $emailfrom . "\r\n" . 
	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	'X-Priority: 3' . "\r\n" . 
	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" . 
	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	'Content-Type: text/html; charset=UTF-8' . "\r\n";
    
    $params = '-f ' . $emailfrom;
    
    $return = mail($emailto, $subject, $messagebody, $headers, $params);
    $sentstatus = array("status"=>'mailsent');
	wp_send_json($sentstatus);
	
	// Always die in functions echoing ajax content
   die();
} 


function userInformation($output) {
	$html=<<<EOT
	<table width="100%" border="1" cellspacing="0" style="border:1px solid #ddd; font-family:Arial,Helvetica,sans-serif,Calibri;font-size:12px" cellpadding="3">
    <thead>
    <tbody>
        <tr style="background-color:#ff7c24">
            <td class=""  colspan="2">
                <h2><strong>Form Details</strong></h2>
            </td>
        </tr>
        <tr>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">Location</span></td>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">{$output['location']}</span></td>
        </tr>
		<tr>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">Moving From</span></td>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">{$output['moving_from']}</span></td>
        </tr>
		<tr>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">Moving To</span></td>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">{$output['moving_to']}</span></td>
        </tr>
        <tr>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">Size</span></td>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">{$output['bedroom']}</span></td>
        </tr>
		<tr>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">Date</span></td>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">{$output['hiddendate']}</span></td>
        </tr>
		<tr>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">Name</span></td>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">{$output['full_name']}</span></td>
        </tr>
        <tr>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">Phone</span></td>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">{$output['home_phone']}</span></td>
        </tr>
		<tr>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">Email</span></td>
            <td class="" ><span
                    class="ck-table-bogus-paragraph">{$output['email_address']}</span></td>
        </tr>
    </tbody>
</table>
EOT;

return $html;
}	

add_action('init','remove_job_post_editor');
function remove_job_post_editor(){
	remove_post_type_support( 'job_listing', 'editor' );
}

// News Custom Post Type
/*function news_custom_post_type() {
    // set up Job Listing labels
    $labels = array(
        'name' => 'News',
        'singular_name' => 'News',
        'add_new' => 'Add News',
        'add_new_item' => 'Add News',
        'edit_item' => 'Edit News',
        'new_item' => 'New News',
        'all_items' => 'All News',
        'view_item' => 'View News',
        'search_items' => 'Search News',
        'not_found' =>  'No News Found',
        'not_found_in_trash' => 'No News found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'News',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'news'),
        'query_var' => true,
		//'taxonomies'=>array('post_tag'),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'news', $args );
    
    // register taxonomy
    register_taxonomy('news_category', 'news', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'news-category' )));
}
add_action( 'init', 'news_custom_post_type' );
*/
function news_categories($attr, $content = null) {
	$count_posts = wp_count_posts( 'post' )->publish;
?>
	<div class="ntab_head">
		<ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
			<li class="nav-item">
				<button class="btn-orange active"  data-bs-toggle="pill" data-bs-target="#all">All Topics ( <?php echo $count_posts;?>)</button>
			</li>
			<?php
				$tax_terms = get_terms('category', array('hide_empty' => false));
				foreach ($tax_terms as $term){
			?>
				<li class="nav-item">
					<button class="btn-orange" data-bs-toggle="pill" data-bs-target="#<?php echo $term->slug; ?>"><?php echo $term->name." ( ".$term->count." )"; ?></button>
				</li>
			<?php  } ?>
		</ul>
	</div>  
	<div class="ntab_body">
		<div class="mainHeading">
			<h2>Latest From Our News</h2>
		</div>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="all" >
				<div class="row news-section">
					<?php
						global $post;

					   // array with query arguments
						$args=array(
						   'post_type' => 'post',
						   'post_status' => 'publish',
						   'orderby' => 'post_date',
						   'posts_per_page'=>-1,
							'paged'=>1,
						);
				   
						$query = new WP_Query($args);
				   
						if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post();
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
						?>
							<div class="col-12 col-md-6 col-lg-4">
								<div class="ncard">
									<div class="nimg">
										<img src="<?php echo $image[0]?>" alt="">
									</div>
									<div class="ncard_body">
										<h4><?php the_title(); ?> </h4>

										<div class="ncard_foot">
											<span class="ndt"><?php echo get_the_date() ?></span>
											<a href="<?php echo get_permalink(); ?>" class="nlink">CONTINUE</a>
										</div>
									</div>
								</div>
							</div>
				   
						<?php endwhile;
							wp_reset_postdata();
							endif;
						?>
				</div>
				<?php /*?>
				<div class="loadbtn">
					<a href="#!" class="btn btnOutline load-more" id="news_load_more">Load More</a>
				</div>
				<?php */?>
			</div>
						
			<?php 
				foreach ($tax_terms as $term){
			?>
				<div class="tab-pane fade <?php echo $term->slug; ?>" id="<?php echo $term->slug; ?>" >
					<div class="row <?php echo $term->term_id;?>news-section">
						<input type="hidden" id="<?php echo $term->slug; ?>-paged" value="1"/>
						<?php
						// array with query arguments
						$newargs=array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'orderby' => 'post_date',
							'posts_per_page'=>-1,
							'paged'=>1,
							'tax_query' => array(
								array(
									'taxonomy' => 'category', 
									'field'    => 'id',
									'terms'    => $term->term_id,
								),
							),
						);

						$query_new = new WP_Query($newargs);

							if ($query_new->have_posts()) :
								while ($query_new->have_posts()) : $query_new->the_post();
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						?>
									
							<div class="col-12 col-md-6 col-lg-4 ">
								<div class="ncard">
									<div class="nimg">
										<img src="<?php echo $image[0]?>" alt="">
									</div>
									<div class="ncard_body">
										<h4><?php the_title(); ?> </h4>

										<div class="ncard_foot">
											<span class="ndt"><?php echo get_the_date() ?></span>
											<a href="<?php echo get_permalink(); ?>" class="nlink">CONTINUE</a>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile;
							wp_reset_postdata(); 
						  endif;
						?>
					</div>
					<?php /*?>
					<div class="loadbtn">
						<a href="#!" onclick="new_category_load_more(<?php echo $term->term_id ?>,'<?php echo $term->slug ?>')" class="btn btnOutline <?php echo $term->term_id;?>load-more" >Load More</a>
					</div> <?php */?>
				</div> 
			<?php } ?>
		</div>
	</div>
<?php
}

add_shortcode('news-categories', 'news_categories');
/*
function news_load_more(){
	global $post;
	$args=array(
	   'post_type' => 'post',
	   'post_status' => 'publish',
	   'orderby' => 'post_date',
	   'posts_per_page'=>6,
		'paged'=>$_POST['paged'],
		
   );
   
   $query = new WP_Query($args);
   $max_pages=$query->max_num_pages;
   $response='';
   if ($query->have_posts()) :
	   while ($query->have_posts()) : $query->the_post();
	    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
	   $response.='<div class="col-12 col-md-6 col-lg-4">
			<div class="ncard">
				<div class="nimg">
					<img src="'.$image[0].'" alt="">
				</div>
				<div class="ncard_body">
					<h4>'.get_the_title().' </h4>

					<div class="ncard_foot">
						<span class="ndt">'.get_the_date().'</span>
						<a href="" class="nlink">CONTINUE</a>
					</div>
				</div>
			</div>
		</div>';
	   
	    endwhile;;
  endif;
  echo json_encode(array("max"=>$max_pages,"html"=>$response));
  exit;
}
add_action('wp_ajax_news_load_more','news_load_more');
add_action('wp_ajax_nopriv_news_load_more','news_load_more'); 

function news_cat_load_more(){
	global $post;
	$args=array(
	   'post_type' => 'post',
	   'post_status' => 'publish',
	   'orderby' => 'post_date',
	   'posts_per_page'=>6,
		'paged'=>$_POST['paged'],
		'tax_query' => array(
			array(
				'taxonomy' => 'category', 
				'field'    => 'id',
				'terms'    => $_POST['term_id'],
			),
		),
   );
   
   $query = new WP_Query($args);
   $max_pages=$query->max_num_pages;
   $response='';
   if ($query->have_posts()) :
	   while ($query->have_posts()) : $query->the_post();
	    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
	   $response.='<div class="col-12 col-md-6 col-lg-4">
			<div class="ncard">
				<div class="nimg">
					<img src="'.$image[0].'" alt="">
				</div>
				<div class="ncard_body">
					<h4>'.get_the_title().' </h4>

					<div class="ncard_foot">
						<span class="ndt">'.get_the_date().'</span>
						<a href="" class="nlink">CONTINUE</a>
					</div>
				</div>
			</div>
		</div>';
	   
	    endwhile;;
  endif;
  echo json_encode(array("max"=>$max_pages,"html"=>$response));
  exit;
}
add_action('wp_ajax_news_cat_load_more','news_cat_load_more');
add_action('wp_ajax_nopriv_news_cat_load_more','news_cat_load_more');
*/

 // End Custom news post

/*add_action( 'wp_ajax_curldata', 'curldata' );
add_action( 'wp_ajax_nopriv_curldata', 'curldata' );

function curldata() {

	// Get data
	$output = $_GET['data'];


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://digitalapi.auspost.com.au/locations/v2/points/postcode/".$output,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => '',
  CURLOPT_HTTPHEADER => array(
    "auth-key: qjUGkSZgvy5v95MDK2OwLPBz9lttRXHy",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

   //die();
} */


if ( ! function_exists( 'woocommerce_template_loop_product_title' ) ) {

	/**
	 * Show the product title in the product loop. By default this is an H2.
	 */
	function woocommerce_template_loop_product_title() {
		echo '<h5 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h5>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}


add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $html, $post, $product ) {

  if( $product->is_type('variable')){
      $percentages = array();

      // Get all variation prices
      $prices = $product->get_variation_prices();

      // Loop through variation prices
      foreach( $prices['price'] as $key => $price ){
          // Only on sale variations
          if( $prices['regular_price'][$key] !== $price ){
              // Calculate and set in the array the percentage for each variation on sale
              $percentages[] = round( 100 - ( floatval($prices['sale_price'][$key]) / floatval($prices['regular_price'][$key]) * 100 ) );
          }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';

  } elseif( $product->is_type('grouped') ){
      $percentages = array();

      // Get all variation prices
      $children_ids = $product->get_children();

      // Loop through variation prices
      foreach( $children_ids as $child_id ){
          $child_product = wc_get_product($child_id);

          $regular_price = (float) $child_product->get_regular_price();
          $sale_price    = (float) $child_product->get_sale_price();

          if ( $sale_price != 0 || ! empty($sale_price) ) {
              // Calculate and set in the array the percentage for each child on sale
              $percentages[] = round(100 - ($sale_price / $regular_price * 100));
          }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';

  } else {
      $regular_price = (float) $product->get_regular_price();
      $sale_price    = (float) $product->get_sale_price();

      if ( $sale_price != 0 || ! empty($sale_price) ) {
          $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
      } else {
          return $html;
      }
  }
  return '<span class="ofr">' . $percentage . ' OFF</span>';
}


include_once "inc/onshop-extends.php";


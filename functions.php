<?php
/**
 * Drubo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Drubo
 */

if ( ! function_exists( 'drubo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function drubo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Drubo, use a find and replace
	 * to change 'drubo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'drubo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'drubo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'drubo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'drubo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function drubo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'drubo_content_width', 640 );
}
add_action( 'after_setup_theme', 'drubo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function drubo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'drubo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'drubo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'drubo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function drubo_scripts() {
	// Bootstrap fremwork main css
	wp_enqueue_style( 'drubo-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.1', 'all' );

	// This core.css file contents all plugings css file
	wp_enqueue_style( 'drubo-core', get_template_directory_uri() . '/css/core.css', array(), '1.0.2', 'all' );
	
	// Theme shortcodes/elements style
	wp_enqueue_style( 'drubo-shortcodes', get_template_directory_uri() . '/css/shortcode/shortcodes.css', array(), '1.0.3', 'all' );

	// Nivo Slider
	wp_enqueue_style( 'drubo-nivo-slider', get_template_directory_uri() . '/css/nivo-slider.css', array(), '1.0.4', 'all' );

	// Magnific Popup Css
	wp_enqueue_style( 'drubo-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '1.0.5', 'all' );

	// Material design iconic font Css
	wp_enqueue_style( 'drubo-material-design-iconic-font', get_template_directory_uri() . '/css/material-design-iconic-font.min.css', array(), '1.0.6', 'all' );

	// Venubox Css
	wp_enqueue_style( 'drubo-venobox', get_template_directory_uri() . '/css/venobox.css', array(), '1.0.7', 'all' );

	// Owl carsoul Css
	wp_enqueue_style( 'drubo-owl-carousel', get_template_directory_uri() . '/css/plugins/owl.carousel.css', array(), '1.0.8', 'all' );


	// Mean Menu Css
	wp_enqueue_style( 'drubo-meanmenu', get_template_directory_uri() . '/css/plugins/meanmenu.min.css', array(), '1.0.9', 'all' );

	// Theme main style
	wp_enqueue_style( 'drubo-style', get_stylesheet_uri() );


	// Mean Menu Css
	wp_enqueue_style( 'drubo-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '2.0.1', 'all' );

	// Mean Menu Css
	wp_enqueue_style( 'drubo-custom', get_template_directory_uri() . '/css/custom.css', array(), '2.0.2', 'all' );







	/**
	*
	* header js files
	*
	*/

	wp_enqueue_script( 'drubo-modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array('jquery'), '5.0.0', false );



	/**
	*
	* footer js files
	*
	*/

	// Bootstrap framework js
	wp_enqueue_script( 'drubo-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.0.0', true );

	// All js plugins included in this file
	wp_enqueue_script( 'drubo-plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '3.0.1', true );

	// Nivo Slider js
	wp_enqueue_script( 'drubo-skip-link-focus-fix', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array(), '3.0.2', true );


	// Magnific Popup js 
	wp_enqueue_script( 'drubo-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '3.0.3', true );

	// Isotope js
	wp_enqueue_script( 'drubo-isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '3.0.4', true );

	// venobox js
	wp_enqueue_script( 'drubo-isotope', get_template_directory_uri() . '/js/venobox.min.js', array(), '3.0.5', true );

	// ajax mail js
	wp_enqueue_script( 'drubo-ajax-mail', get_template_directory_uri() . '/js/ajax-mail.js', array(), '3.0.6', true );



	// Owl Carosel Js 
	wp_enqueue_script( 'drubo-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '3.0.8', true );

	// meanmenu Js 
	wp_enqueue_script( 'drubo-meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.js', array(), '3.0.9', true );

	// imagesloaded Js 
	wp_enqueue_script( 'drubo-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '4.0.0', true );

	// Counter Js 
	wp_enqueue_script( 'drubo-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '4.0.1', true );

	// Waypoints Js 
	wp_enqueue_script( 'drubo-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '4.0.1', true );

	// Main js file that contents all jQuery plugins activation Js 
	wp_enqueue_script( 'drubo-main', get_template_directory_uri() . '/js/main.js', array(), '4.0.1', true );


	// map js
	wp_enqueue_script( 'drubo-map-api', 'https://maps.googleapis.com/maps/api/js', array(), '3.0.7', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'drubo_scripts' );

/**
*
*
*  footer js
*
*/
function drubo_footer_js(){ ?>


	<script>
		function initialize() {
		  var mapOptions = {
			zoom: 16,
			scrollwheel: false,
			center: new google.maps.LatLng(34.073781, -84.302295)
		  };

		  var map = new google.maps.Map(document.getElementById('googleMap'),
			  mapOptions);


		  var marker = new google.maps.Marker({
			position: map.getCenter(),
			animation:google.maps.Animation.BOUNCE,
			icon: '<?php echo get_template_directory_uri(); ?>/assets/images/icon/map-icon.png',
			map: map
		  });

		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

<?php 
}
add_action('wp_footer', 'drubo_footer_js', 500);



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

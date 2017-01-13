<?php
/**
 * Corlate functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Corlate
 */

if ( ! function_exists( 'corlate_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function corlate_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Corlate, use a find and replace
	 * to change 'corlate' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'corlate', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );



	add_theme_support('post-formats', array(
		'gallery',
		'video',
		'quote',
		'image',
		'audio'
	));

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main-menu' => esc_html__( 'Main Menu', 'corlate' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'corlate' ),
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
	add_theme_support( 'custom-background', apply_filters( 'corlate_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'corlate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function corlate_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'corlate_content_width', 640 );
}
add_action( 'after_setup_theme', 'corlate_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function corlate_widgets_init() {

	// left sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'corlate' ),
		'id'            => 'left-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'corlate' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="upper">',
		'after_title'   => '</h6>',
	) );

	// footer top sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top', 'corlate' ),
		'id'            => 'footer-top',
		'description'   => esc_html__( 'Add Footer Top Widget', 'corlate' ),
		'before_widget' => '<div class="col-sm-4"><div class="widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h6 class="upper">',
		'after_title'   => '</h6>',
	) );



}
add_action( 'widgets_init', 'corlate_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function corlate_scripts() {

	wp_enqueue_style('corlate-bundle', get_template_directory_uri().'/css/bundle.css', array(), '1.0.1', 'all');

	wp_enqueue_style('corlate-stylesheet', get_template_directory_uri().'/css/style.css', array(), '1.0.2', 'all');

	wp_enqueue_style('corlate-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', array(), '1.0.3', 'all');

	wp_enqueue_style('corlate-raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500', array(), '1.0.4', 'all');

	wp_enqueue_style('corlate-halant', 'https://fonts.googleapis.com/css?family=Halant:300,400', array(), '1.0.5', 'all');

	wp_enqueue_style('corlate-Tangerine', 'https://fonts.googleapis.com/css?family=Tangerine', array(), '1.0.6', 'all');

	wp_enqueue_style( 'corlate-style', get_stylesheet_uri() );



	wp_enqueue_script( 'corlate-bundle', get_template_directory_uri() . '/js/bundle.js', array('jquery'), '3.0.1', true );

	wp_enqueue_script( 'corlate-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '3.0.3', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'corlate_scripts' );

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

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/libs/cmb2/init.php';
require get_template_directory() . '/libs/cmb2/custom-metabox.php';


/**
 * post-formats
 */
require get_template_directory() . '/libs/post-format-dynamic.php';


/**
 * Custom Widget
 */
require get_template_directory() . '/inc/commet-custom-widgets.php';


/**
*
* Comments wrapper
*
*/
function comet_comments_fn($comment, $args, $depth){
	$Globals['comment'] = $comment;

?>

<li>
	<div class="comment">
	  <div class="comment-pic">
	  <?php echo get_avatar($comment, 80, '', '', array(
	  	'class'	=> 'img-circle'
	  )); ?>
	  </div>
	  <div class="comment-text">
	    <h5 class="upper"><?php comment_author_link(); ?></h5><span class="comment-date">Posted on <?php comment_date('d F'); ?> at <?php comment_time('g:i a'); ?></span>
	    <p><?php comment_text(); ?></p>
	    
	    <?php 
	    	comment_reply_link(
	    		array_merge($args, array(
	    			'depth'	=> $depth,
	    			'max_depth'	=> $args['max_depth']
	    		))
	    	); 
	    ?>
	  </div>
	</div>
</li>
<?php 
}


add_filter('comment_form_default_fields', 'comment_form_fn');

function comment_form_fn( $default ){
	$default['author'] = '<div class="form-double"><div class="form-group"><input name="author" type="text" placeholder="Name" class="form-control"></div>'; 

	$default['email'] = '                  <div class="form-group last">
                    <input name="email" type="text" placeholder="Email" class="form-control">
                  </div>
                </div>';

    $default['tajul']  = '<div class="form-group">
                  <textarea placeholder="Comment" class="form-control" name="comment" ></textarea>
                </div>';   

    $default['address']  = '<div class="form-group">
                  <textarea placeholder="Your Address..." class="form-control" name="address" ></textarea>
                </div>';     


    $default['url']  = '';           


	return $default;
}



add_filter('comment_form_defaults', 'form_defaults_fn');

function form_defaults_fn( $default_info ){

	if( !is_user_logged_in() ){
		$default_info['comment_field'] = '';
	}else{
		$default_info['comment_field'] = '<div class="form-group">
                  <textarea placeholder="Comment" class="form-control" name="comment" ></textarea>
                </div>'; 
	}
	

	$default_info['submit_button'] = '<button type="submit" class="btn btn-color-out">Post Comment</button>';

	$default_info['submit_field'] = '<div class="form-submit text-right">%1$s %2$s</div>';

	$default_info['comment_notes_before'] = ' ';

	$default_info['title_reply'] = 'Leave a comment';

	$default_info['title_reply_before'] = '<h5 class="upper">';

	$default_info['title_reply_after'] = '<h5/>';



return $default_info;	
}


/**
*
* New field add
*
*/
// update_comment_meta(get_the_ID(), '', );
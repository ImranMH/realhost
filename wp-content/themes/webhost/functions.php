<?php


require get_template_directory() . '/inc/walker.php';


if ( ! function_exists( 'webhost_setup' ) ) :
  function webhost_setup() {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'webhost' to the name of your theme in all the template files.
		 */
    load_theme_textdomain( 'webhost', get_template_directory() . '/languages' );
    	// Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1568, 9999 );
    		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'webhost' ),
				'footer' => __( 'Footer Menu', 'webhost' ),
				'social' => __( 'Social Links Menu', 'webhost' ),
			)
    );
    
  }
endif;
add_action( 'after_setup_theme', 'webhost_setup' );
 

function webhost_style(){
   wp_enqueue_style('stylesheet-bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '0.0', false ) ;
   wp_enqueue_style('stylesheet-animate', get_template_directory_uri() .'/css/animate.css', array(),false , false ) ;
   wp_enqueue_style('iconic-bootstrap', get_template_directory_uri() .'/css/open-iconic-bootstrap.min.css', array(), '0.0', false ) ;
   wp_enqueue_style('stylesheet-owl', get_template_directory_uri() .'/css/owl.carousel.min.css', array(), '0.0', false ) ;
   wp_enqueue_style('owl.theme.default', get_template_directory_uri() .'/css/owl.theme.default.min.css', array(), '0.0', false ) ;
   wp_enqueue_style('magnific-popup', get_template_directory_uri() .'/css/magnific-popup.css', array(), '0.0', false ) ;
   wp_enqueue_style('ionicons', get_template_directory_uri() .'/css/ionicons.min.css', array(),false , false ) ;
   wp_enqueue_style('bootstrap-datepicker', get_template_directory_uri() .'/css/css/bootstrap-datepicker.css', array(),false , false ) ;
   wp_enqueue_style('jquery.timepicker', get_template_directory_uri() .'/css/css/jquery.timepicker.css', array(),false , false ) ;
   wp_enqueue_style('flaticon', get_template_directory_uri() .'/css/flaticon.css', array(),false , false ) ;
   wp_enqueue_style('icomoon', get_template_directory_uri() .'/css/icomoon.css', array(),false , false ) ;
   wp_enqueue_style('aos.css"', get_template_directory_uri() .'/css/aos.css', array(), '0.0', false ) ;
   wp_enqueue_style('stylesheet-main', get_template_directory_uri() .'/css/style.css', array(), '1.1' ) ;
}
add_action('wp_enqueue_scripts', 'webhost_style');

function webhost_scripts(){
  wp_enqueue_script('jquery', get_theme_file_uri( '/js/jquery.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('jquery-migrate', get_theme_file_uri( '/js/jquery-migrate-3.0.1.min' ), array(), wp_get_theme()->get( 'Version' ), false ) ;
  wp_enqueue_script('popper', get_theme_file_uri( '/js/popper.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('bootstrap', get_theme_file_uri( '/js/bootstrap.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('jquery.easing', get_theme_file_uri( '/js/jquery.easing.1.3.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('jquery.waypoints', get_theme_file_uri( '/js/jquery.waypoints.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('jquery.stellar', get_theme_file_uri( '/js/jquery.stellar.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('owl.carousel', get_theme_file_uri( '/js/owl.carousel.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('jquery.magnific-popup', get_theme_file_uri( '/js/jquery.magnific-popup.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('aos', get_theme_file_uri( '/js/aos.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('jquery.animateNumber', get_theme_file_uri( '/js/jquery.animateNumber.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('bootstrap-datepicker', get_theme_file_uri( '/js/bootstrap-datepicker.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('jquery.timepicker', get_theme_file_uri( '/js/jquery.timepicker.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('scrollax', get_theme_file_uri( '/js/scrollax.min.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('maps.googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('google-map', get_theme_file_uri( '/js/google-map.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
  wp_enqueue_script('main-script', get_theme_file_uri( '/js/main.js' ), array(), wp_get_theme()->get( 'Version' ), true ) ;
}
add_action('wp_enqueue_scripts', 'webhost_scripts');

function webhost_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
    'id'            => 'home_right_1',
    'description'   => __( 'Add widgets here to appear in your Home right sidebar.', 'webhost' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'webhost_init' );
?>


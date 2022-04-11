<?php
/**
 * medstar01 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medstar01
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function medstar01_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on medstar01, use a find and replace
		* to change 'medstar01' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'medstar01', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary Menu', 'medstar01' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'medstar01' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'medstar01_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'medstar01_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medstar01_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medstar01_content_width', 640 );
}
add_action( 'after_setup_theme', 'medstar01_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function medstar01_scripts() {
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/54ed714a8b.js', array(), 'latest', false );

	// wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/all.fontawesome.css', array(), _S_VERSION);
	wp_enqueue_style( 'elementor-icons', get_template_directory_uri() . '/assets/css/elementor-icons.css', array(), _S_VERSION);
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'style-jarallax', get_template_directory_uri() . '/assets/css/jarallax.css', array(), _S_VERSION);
	wp_enqueue_style( 'style-swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'style-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION);
	wp_enqueue_style( 'medstar01-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'medstar01-style', 'rtl', 'replace' );


	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/js/jarallax.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jarallax-video', get_template_directory_uri() . '/assets/js/jarallax-video.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/assets/js/jquery.matchHeight-min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'medstar01-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'medstar01-scripts', get_template_directory_uri() . '/assets/js/medstar01-scripts.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medstar01_scripts' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medstar01_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'medstar01' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'medstar01' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'medstar01_widgets_init' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Customizer additions.
 */
if ( class_exists( 'Kirki' ) ) {
	require get_theme_file_path( '/inc/customizer/customizer.php' );
}


/**
 * Plugin activation.
 */
require_once get_theme_file_path( '/inc/tgm-plugin-activation.php' );
require_once get_theme_file_path( '/inc/plugins.php' );



/**
 * Advanced Custom Fields Local JSON
 */
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/acf';

    // return
    return $path;

}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {

    // remove original path (optional)
    unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/acf';

    // return
    return $paths;
}



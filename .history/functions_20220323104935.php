<?php
/**
 * thisSite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thisSite
 */

 require_once(get_template_directory() . '/inc/autoloader.php');

if ( ! defined( 'THISSITE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THISSITE_VERSION', '1.1.0' );
}

if ( ! function_exists( 'thissite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thissite_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thisSite, use a find and replace
		 * to change 'thissite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'thissite', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'thissite' ),
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
				'thissite_custom_background_args',
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

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );
	}
endif;
add_action( 'after_setup_theme', 'thissite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thissite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thissite_content_width', 640 );
}
add_action( 'after_setup_theme', 'thissite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thissite_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'thissite' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'thissite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Post??w', 'thissite' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'thissite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Produkt??w', 'thissite' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'thissite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget content', 'thissite' ),
			'id'            => 'footer-main',
			'description'   => esc_html__( 'Add widgets here.', 'thissite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_widget('ThisSite\Theme\widgets\openingHours');
	register_widget('ThisSite\Theme\widgets\contact');
}
add_action( 'widgets_init', 'thissite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thissite_scripts() {
	wp_enqueue_style( 'thissite-style', get_stylesheet_uri(), array(), THISSITE_VERSION );
	wp_style_add_data( 'thissite-style', 'rtl', 'replace' );

	wp_enqueue_style( 'thissite-styleMain', get_template_directory_uri() . '/css/thissite-style.css', array(), THISSITE_VERSION );

	wp_enqueue_style( 'thissite-page', get_template_directory_uri() . '/css/Vesuvio-page.css', array(), THISSITE_VERSION );

	wp_enqueue_style( 'thissite-blog', get_template_directory_uri() . '/css/thissite-blog.css', array(), THISSITE_VERSION );

	wp_enqueue_style( 'thissite-search', get_template_directory_uri() . '/css/thissite-search.css', array(), THISSITE_VERSION );

	wp_enqueue_style( 'thissite-main-catalog', get_template_directory_uri() . '/css/thissite-main-catalog.css', array(), THISSITE_VERSION );

	wp_enqueue_style( 'thissite-product-catalog', get_template_directory_uri() . '/css/thissite-product-catalog.css', array(), THISSITE_VERSION );

	wp_enqueue_style( 'thissite-product-category', get_template_directory_uri() . '/css/thissite-product-category.css', array(), THISSITE_VERSION );

	wp_enqueue_style( 'thissite-cart', get_template_directory_uri() . '/css/thissite-cart.css', array(), THISSITE_VERSION );

	wp_enqueue_style( 'thissite-rwd', get_template_directory_uri() . '/css/thissite-rwd.css', array(), THISSITE_VERSION );

	wp_enqueue_script( 'thissite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), THISSITE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thissite_scripts' );

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
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

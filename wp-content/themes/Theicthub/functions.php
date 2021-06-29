<?php
/*  theicthub functions and definitions  */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'theicthub_team_setup' ) ) :
	function theicthub_team_setup() {
		/* to change 'theicthub_team' to the name of your theme in all the template files. */
		load_theme_textdomain( 'theicthub_team', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*  Enable support for Post Thumbnails on posts and pages. */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'theicthub_team' ),
				'menu-2' => esc_html__( 'Footer', 'theicthub_team' ),
			)
		);

		/* Switch default core markup for search form, comment form, and comments to output valid HTML5. */
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
				'theicthub_team_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/* Add support for core custom logo. */
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
endif;
add_action( 'after_setup_theme', 'theicthub_team_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function theicthub_team_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'theicthub_team_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'theicthub_team_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theicthub_team_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theicthub_team' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theicthub_team' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'theicthub_team_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theicthub_team_scripts() {
	// Bootstrap
	wp_enqueue_style( 'Bootstrap',  get_theme_file_uri().'/vendor/css/bootstrap.min.css', NULL,'4.0','all');
	// Magnific.popup
	wp_enqueue_style( 'Popup',  get_theme_file_uri().'/vendor/css/magnific.popup.min.css', NULL,'3.0','all');
	// Fancybox.min
	wp_enqueue_style( 'Fancybox',  get_theme_file_uri().'/vendor/css/fancybox.min.css', NULL,'3.0','all');
	// Animate.min
	wp_enqueue_style( 'Animate',  get_theme_file_uri().'/vendor/css/animate.min.css', NULL,'3.0','all');
	// Owl.carousel
	wp_enqueue_style( 'Owl.carousel',  get_theme_file_uri().'/vendor/css/owl.carousel.min.css', NULL,'3.0','all');
	// Owl.carousel.default
	wp_enqueue_style( 'Owl.carousel.default',  get_theme_file_uri().'/vendor/css/owl.carousel.default.min.css', NULL,'3.0','all');
	// Font_awesome
	wp_enqueue_style( 'Font_awesome',  get_theme_file_uri().'/fonts/font_awesome/css/all.css', NULL,'5.0','all');
	// Flat_icons
	wp_enqueue_style( 'Flat_icons',  get_theme_file_uri().'/fonts/flat_icons/flaticon.css', NULL,'2.0','all');
	// style.css
	wp_enqueue_style( 'style',  get_theme_file_uri().'/css/style.css', NULL,'1.0','all');
	// Theme Main Style.css
	wp_enqueue_style( 'main',  get_stylesheet_uri() );
	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap', false );
	//wp_style_add_data( 'theicthub_team-style', 'rtl', 'replace' );

	// Images loaded
	wp_enqueue_script( 'images loaded', get_theme_file_uri().'/vendor/js/images.loaded.min.js', array('jquery'), true, true );
	// Magnific Popup
	wp_enqueue_script( 'Magnific', get_theme_file_uri().'/vendor/js/magnific.popup.min.js', array('jquery'), true, true );
	// Popper Js
	wp_enqueue_script( 'Popper', get_theme_file_uri().'/vendor/js/popper.min.js', array('jquery'), true, true );
	// Bootstrap
	wp_enqueue_script( 'Bootstrap', get_theme_file_uri().'/vendor/js/bootstrap.min.js', array('jquery'), true, true );
	// Wow Js
	wp_enqueue_script( 'Wow Js', get_theme_file_uri().'/vendor/js/wow.min.js', array('jquery'), true, true );
	// waypoint Js
	wp_enqueue_script( 'waypoint Js', get_theme_file_uri().'/vendor/js/waypoint.min.js', array('jquery'), true, true );
	// counter
	wp_enqueue_script( 'counter', get_theme_file_uri().'/vendor/js/counter.up.min.js', array('jquery'), true, true );
	// Easing min
	wp_enqueue_script( 'Easing min', get_theme_file_uri().'/vendor/js/jquery.easing.min.js', array('jquery'), true, true );
	// Scrollit
	wp_enqueue_script( 'Scrollit', get_theme_file_uri().'/vendor/js/scrollit.min.js', array('jquery'), true, true );
	// Owl carousel
	wp_enqueue_script( 'Owl carousel', get_theme_file_uri().'/vendor/js/owl.carousel.min.js', array('jquery'), true, true );
	// Isotope
	wp_enqueue_script( 'Isotope', get_theme_file_uri().'/vendor/js/isotope.min.js', array('jquery'), true, true );
	// fancybox
	wp_enqueue_script( 'fancybox', get_theme_file_uri().'/vendor/js/fancybox.min.js', array('jquery'), true, true );
	// Jarallax
	wp_enqueue_script( 'Jarallax', get_theme_file_uri().'/vendor/js/jarallax.min.js', array('jquery'), true, true );
	// Main Js
	wp_enqueue_script( 'Main', get_theme_file_uri().'/js/main.js', array('jquery'), true, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theicthub_team_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}


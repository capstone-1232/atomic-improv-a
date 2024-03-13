<?php
/**
 * Atomic Improv functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Atomic_Improv
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// queries for actual posts



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function atomic_improv_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Atomic Improv, use a find and replace
		* to change 'atomic-improv' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'atomic-improv', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

  // hide admin bar so it doesn't break layout
  add_filter( 'show_admin_bar', '__return_false');

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
			'menu-1' => esc_html__( 'Primary', 'atomic-improv' ),
      'menu-2' => esc_html__( 'Secondary', 'footer-menu'),
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
			'atomic_improv_custom_background_args',
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
add_action( 'after_setup_theme', 'atomic_improv_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function atomic_improv_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'atomic_improv_content_width', 640 );
}
add_action( 'after_setup_theme', 'atomic_improv_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function atomic_improv_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'atomic-improv' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'atomic-improv' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'atomic_improv_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function atomic_improv_scripts() {
	wp_enqueue_style( 'atomic-improv-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'atomic-improv-style', 'rtl', 'replace' );

	wp_enqueue_script( 'atomic-improv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'atomic_improv_scripts' );

// add google fonts
function add_google_fonts() {
  wp_enqueue_style( "add_google_fonts", "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap", false);
}
add_action( "wp_enqueue_scripts", "add_google_fonts");

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

// https://codeastrology.com/how-to-add-meta-descriptions-in-wordpress-without-plugin/#How_to_Add_Meta_Descriptions_in_WordPress_Without_Plugin
// This code, copied from above, should give meta descriptions to all pages and posts.
// function codeastrology_meta_description() {
//     global $post;
//     if ( is_singular() ) {
//         $des_post = strip_tags( $post->post_content );
//         $des_post = strip_shortcodes( $post->post_content );
//         $des_post = str_replace( array("\n", "\r", "\t"), ' ', $des_post );
//         $des_post = mb_substr( $des_post, 0, 300, 'utf8' );
//         echo '<meta name="description" content="' . $des_post . '" />' . "\n";
//     }
//     if ( is_home() ) {
//         echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
//     }
//     if ( is_category() ) {
//         $des_cat = strip_tags(category_description());
//         echo '<meta name="description" content="' . $des_cat . '" />' . "\n";
//     }
// }
// add_action( 'wp_head', 'codeastrology_meta_description');
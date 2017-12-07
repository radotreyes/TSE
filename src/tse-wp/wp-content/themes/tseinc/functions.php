<?php
/**
 * TSE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TSE
 */

if ( ! function_exists( 'tseinc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tseinc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TSE, use a find and replace
		 * to change 'tseinc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tseinc', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'tseinc' ),
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
		add_theme_support( 'custom-background', apply_filters( 'tseinc_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'tseinc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tseinc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tseinc_content_width', 640 );
}
add_action( 'after_setup_theme', 'tseinc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tseinc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tseinc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tseinc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tseinc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tseinc_scripts() {
	/* ASSETS FOLDER LOCATION */
	$assets_dir = get_stylesheet_directory_uri() . '/assets';

	/* CSS */
	// default stylesheet
	wp_enqueue_style( 'tseinc-style', get_stylesheet_uri() );

	// master.css
	wp_enqueue_style(
		'master',
		$assets_dir . '/css/master.css',
		false,
		'1.0',
		'all'
	);

	// FontAwesome
	wp_enqueue_style( 'font-awesome.min', $assets_dir . '/css/font-awesome.min.css' );

	// Bootstrap 4
	wp_enqueue_style( 'bootstrap.min', $assets_dir . '/css/bootstrap.min.css');

	/* SCRIPTS */
	// default navigation template
	wp_enqueue_script( 'tseinc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// default skip-link focus fix
	wp_enqueue_script( 'tseinc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// jQuery 3.2.1
	wp_enqueue_script(
		'jquery-3.2.1.min',
		 get_template_directory_uri() . '/js/jquery-3.2.1.min.js',
		 false,
		 '3.2.1',
		 true
	);

	// Popper
	wp_enqueue_script(
		'popper.min',
		get_template_directory_uri() . '/js/popper.min.js',
		false,
		false,
		true
	);

	// Bootstrap 4 JS
	wp_enqueue_script(
		'bootstrap.min',
		 get_template_directory_uri() . '/js/bootstrap.min.js',
		 false,
		 false,
		 true
	);

	// custom page navigation
	wp_enqueue_script(
		'stickyNav',
		 get_template_directory_uri() . '/js/stickyNav.js',
		 false,
		 '1.0',
		 true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tseinc_scripts' );

/* fix navbar links */
add_filter( 'nav_menu_link_attributes', function( $atts ) {
	$atts['class'] = "nav-link";
	return $atts;
}, 100, 1 );

/* DEBUG: Remove admin toolbar */
// add_filter( 'show_admin_bar', '__return_false' );

/* DEBUG: Remove ob_end_flush notice */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

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
 * Custom functions
 */

function get_dynamic_template_part( $args = null, $slug, $name = null ) {
	include( locate_template(
	 '/template-parts/'. $slug . '-'. $name . '.php',
	 false,
	 false
	) );
}


/* hide editor on specific pages */
// function hide_editor() {
//   // Get the Post ID.
// 	global $pagenow;
// 	if( !( 'post.php' == $pagenow ) ) return;
// 
// 	global $post;
// 	// Get the Post ID.
// 	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
// 	if( !isset( $post_id ) ) return;
//   // Hide the editor on the page titled 'Homepage'
//   $homepgname = get_the_title( $post_id );
//   if( $homepgname == 'Home Page' ) {
//     remove_post_type_support( 'page', 'editor' );
//   }
//   // // Hide the editor on a page with a specific page template
//   // // Get the name of the Page Template file.
//   // $template_file = get_post_meta( $post_id, '_wp_page_template', true );
//   // if($template_file == 'my-page-template.php'){ // the filename of the page template
//   //   remove_post_type_support( 'page', 'editor' );
//   // }
// }
// add_action( 'admin_init', 'hide_editor' );
/**
 * Custom post/tax/etc. types (models)
 */

/* Model initialization hooks */
include( 'classes/taxonomies.php' );
include( 'classes/postTypes.php' );
$clients = new Clients();
$projects = new Projects();
$key_people = new KeyPeople();

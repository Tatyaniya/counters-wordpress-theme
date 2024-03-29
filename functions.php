<?php
/**
 * counters functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package counters
 */

if ( ! function_exists( 'counters_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function counters_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on counters, use a find and replace
		 * to change 'counters' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'counters', get_template_directory() . '/languages' );

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
            'menu-header' => 'Меню в шапке',
            'menu-footer' => 'Меню в футере'
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
		add_theme_support( 'custom-background', apply_filters( 'counters_custom_background_args', array(
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
add_action( 'after_setup_theme', 'counters_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function counters_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'counters_content_width', 640 );
}
add_action( 'after_setup_theme', 'counters_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function counters_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'counters' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'counters' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'counters_widgets_init' );



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
 * Redux additions.
 */
require get_template_directory() . '/inc/options-panel-redux.php';




/**
 * Enqueue scripts and styles.
 */
function counters_scripts() {
    wp_enqueue_style( 'counters-style', get_stylesheet_uri() );
    wp_enqueue_style( 'counters-norm', get_template_directory_uri().'/assets/css/normalize.css', array(), '1.0' );
    wp_enqueue_style( 'counters-main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0' );

    // Deregister core jQuery
    wp_deregister_script('jquery');
    // Register
    wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);
	wp_enqueue_script( 'jquery');
	
    wp_enqueue_script( 'wayup-arcticmodal', get_template_directory_uri().'/assets/js/jquery.arcticmodal-0.3.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'wayup-mainjs', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true );
    

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'counters_scripts' );

/**
 * Регистрация post type
 *
 * @see get_post_type_labels() for label keys.
 */
function counters_post_type() {
 
    register_post_type( 'counter', array(
        'labels'             => array(
            'name'                  => 'Товары',
            'singular_name'         => 'Товар',
            'add_new'               => 'Добавить новый',
            'add_new_item'          => 'Добавить новый товар',
            'new_item'              => 'Новый товар',
            'edit_item'             => 'Редактировать товар',
            'all_items'             => 'Все товары',
            'not_found'             => 'Товаров не найдено',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'counters' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-tickets-alt',
        'supports'           => array( 'title', 'editor', 'thumbnail', //'excerpt'
        )
    ) );
}
 
add_action( 'init', 'counters_post_type' );

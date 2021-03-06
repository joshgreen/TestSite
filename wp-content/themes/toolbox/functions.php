<?php
/**
 * toolbox functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package toolbox
 */

if ( ! function_exists( 'toolbox_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function toolbox_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on toolbox, use a find and replace
     * to change 'toolbox' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'toolbox', get_template_directory() . '/languages' );

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
      'menu-1' => esc_html__( 'Primary', 'toolbox' ),
      'secondary-menu' => __( 'Secondary Menu', 'toolbox' )
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
    add_theme_support( 'custom-background', apply_filters( 'toolbox_custom_background_args', array(
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
add_action( 'after_setup_theme', 'toolbox_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function toolbox_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'toolbox_content_width', 640 );
}
add_action( 'after_setup_theme', 'toolbox_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function toolbox_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'toolbox' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'toolbox' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
        'name'          => __( 'Footer1', 'toolbox' ),
        'id'            => 'footer-text-1',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer2', 'toolbox' ),
        'id'            => 'footer-text-2',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer3', 'toolbox' ),
        'id'            => 'footer-text-3',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'toolbox_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function toolbox_scripts() {
  wp_enqueue_style( 'toolbox-style', get_stylesheet_uri() );

  wp_enqueue_script( 'toolbox-menu', get_template_directory_uri() . '/js/my-menu.js', array(jquery), '20151215', true );

  // wp_enqueue_script( 'toolbox-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'toolbox-flexslidermin', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(jquery), '20160229', true );

  wp_enqueue_script( 'toolbox-slider', get_template_directory_uri() . '/js/slider.js', array(jquery), '20160229', true );

  wp_enqueue_script( 'toolbox-navigation', get_template_directory_uri() . '/js/my.js', array(jquery), '20151215', true );

  wp_enqueue_script( 'toolbox-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'toolbox_scripts' );

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

////// My Function additions bellow



// Remove login errors
add_filter('login_errors', create_function('$a', "return null;"));

// hide Admin bar
show_admin_bar( false );

// Remove the wordpress update notification for all users except sysadmin
   global $user_login;
   get_currentuserinfo();
   if ($user_login !== "admin") { // change admin to the username that gets the updates
    add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
    add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
   }

// Enable GZIP output compression
 if(extension_loaded("zlib") && (ini_get("output_handler") != "ob_gzhandler"))
   add_action('wp', create_function('', '@ob_end_clean();@ini_set("zlib.output_compression", 1);'));

// Change the login logo with yours
 function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/forageorporridge-login.svg) !important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');



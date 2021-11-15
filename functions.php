<?php
/**
 * mkad functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mkad
 */

add_action( 'carbon_fields_register_fields', 'boots_register_custom_fields' );
function boots_register_custom_fields() {
// путь к пользовательскому файлу определения поля (полей), измените под себя
require_once __DIR__ . '/inc/custom-field-options/metabox.php';
require_once __DIR__ . '/inc/custom-field-options/theme-options.php';
}
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
require_once( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
\Carbon_Fields\Carbon_Fields::boot();
}

if ( ! function_exists( 'mkad_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mkad_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mkad, use a find and replace
		 * to change 'mkad' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mkad', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'mkad' ),
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
		add_theme_support( 'custom-background', apply_filters( 'mkad_custom_background_args', array(
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
add_action( 'after_setup_theme', 'mkad_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mkad_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mkad_content_width', 640 );
}
add_action( 'after_setup_theme', 'mkad_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mkad_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mkad' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mkad' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mkad_widgets_init' );

$title = true;
/**
 * Enqueue scripts and styles.
 */
function mkad_scripts() {

	wp_enqueue_style( 'arctic', get_template_directory_uri() . '/css/jquery.arcticmodal-0.3.css', array(), null, 'all');

	wp_enqueue_style( 'mkad-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'mkad-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mkad-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'libs', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true);

	wp_enqueue_script( 'arctic-js', get_template_directory_uri() . '/js/jquery.arcticmodal-0.3.min.js', array(), null, true);

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/common.js', array(), null, true);

	wp_localize_script( 'main', 'allAjax', array(
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
    ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mkad_scripts' );

add_action( 'wp_ajax_universal_send', 'universal_send' );
add_action( 'wp_ajax_nopriv_universal_send', 'universal_send' );

function universal_send() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт Пропуск МКАД <noreply@propuska-mkad-official.ru>',
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
      if (wp_mail(carbon_get_theme_option( 'mkad_email_send' ), 'Заказ с сайта', '<strong>С какой формы:</strong> '.$_REQUEST["formid"].'<br/> <strong>Имя / Гос.номер:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"]. '<br/> <strong>Email:</strong> '.$_REQUEST["ml"], $headers))
        wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
}

if( ! is_admin() ){
	add_action( 'pre_handle_404', 'remove_author_pages_page' );
	add_filter( 'author_link', 'remove_author_pages_link' );

	// Ставим 404 статус
	function remove_author_pages_page( $false ) {
		if ( is_author() ) {
			global $wp_query;
			$wp_query->set_404();
			status_header( 404 );
			nocache_headers();

			return true; // для обрыва хука
		}

		return $false;
	}

	// удаляем ссылку
	function remove_author_pages_link( $content ) {
		return home_url();
	}
}

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

include_once('aus.php');
add_action( 'wp_ajax_check_aus', 'check_aus' );
add_action( 'wp_ajax_nopriv_check_aus', 'check_aus' );

function check_aus() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			if(!empty($_REQUEST['ausnum'])){
				
				wp_die(json_encode(getNewData($_REQUEST['ausnum'])));
			}
			else{
				wp_die("Нужен номер авто!");
			}

			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	}


function main_menu() {
	wp_nav_menu(array(
		'theme_location' => 'menu-1',
		'container' => false,
		'menu_class' => 'menu ul-clean',

	));
}

add_filter('excerpt_more', function($more) {
	return '...';
});
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


add_action('template_redirect', 'test_redirect');
function test_redirect() {
  global $page, $wp_query;
  
    if(is_singular()) {
      if($page > 0) {
        $wp_query->set_404();
        wp_redirect( '/', 404 );

      }
    }
}

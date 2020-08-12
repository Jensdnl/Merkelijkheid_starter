<?php
/**
 * Merkelijkheid_basis functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Merkelijkheid_basis
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'merkelijkheid_setup' ) ) :
	function merkelijkheid_setup() {
		load_theme_textdomain( 'merkelijkheid', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'merkelijkheid' ),
			)
		);
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
	}
endif;
add_action( 'after_setup_theme', 'merkelijkheid_setup' );

/**
 * Enqueue scripts and styles.
 */
function merkelijkheid_scripts() {
	wp_enqueue_style( 'merkelijkheid-bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');
	wp_enqueue_style( 'merkelijkheid-style', get_stylesheet_uri(), array(), _S_VERSION );
    // wp_enqueue_script( 'merkelijkheid-popper', get_template_directory_uri() . '/js/popper/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'merkelijkheid-bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array('jquery'), null, true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'merkelijkheid_scripts' );
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
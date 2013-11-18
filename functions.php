<?php

/**
 * Includes
 */
require_once get_template_directory() . '/includes/widgets.php';

/**
 * Setup
 */
function pwe_setup() {
	/* Make theme available for translation */
	load_theme_textdomain( 'wpe', get_template_directory() . '/languages' );

	/* Editor style */
	add_editor_style();

	/* Add theme support */
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	/* Register navigation menu's */
	register_nav_menus( array(
		'header-navbar'       => __( 'Header Navigation Bar', 'wpe' ),
		'header-navbar-right' => __( 'Header Navigation Bar Right', 'wpe' ),
	) );
}

add_action( 'after_setup_theme', 'pwe_setup' );

/**
 * Enqueue scripts & styles
 */
function pwe_enqueue_scripts() {
	$uri = get_template_directory_uri();

	wp_enqueue_script( 'bootstrap', $uri . '/bootstrap/js/bootstrap.js', array( 'jquery' ), '3.0.2', true );

	wp_enqueue_style( 'bootstrap', $uri . '/bootstrap/css/bootstrap.min.css', array(), '3.0.2' );

	wp_enqueue_style( 'pwe', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'pwe_enqueue_scripts' );

/**
 * Title
 */
function pwe_title() {
	if( is_post_type_archive() ) {
		post_type_archive_title();
	} elseif ( is_singular() ) {
		$post_type_obj = get_post_type_object( get_post_type() );
		
		echo $post_type_obj->labels->name;
	} else {
		bloginfo( 'name' );
	}
}

/**
 * Posts per page
 * 
 * @param WP_Query $query
 * @return WP_Query
 */
function pwe_query_posts_per_page( $query ) {
	if ( $query->is_main_query() && $query->is_post_type_archive( array( 'pronamic_plugin', 'pronamic_theme' ) ) ) {
		$query->set( 'posts_per_page', 100 );
	}

	return $query;
}

add_filter( 'pre_get_posts', 'pwe_query_posts_per_page' );

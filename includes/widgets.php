<?php

/**
 * Widgets
 */
function pwe_widgets() {

	/* Unregister default WordPress Widgets */

	unregister_widget( 'WP_Widget_Pages' );
	unregister_widget( 'WP_Widget_Calendar' );
	unregister_widget( 'WP_Widget_Archives' );
	unregister_widget( 'WP_Widget_Links' );
	unregister_widget( 'WP_Widget_Meta' );
	unregister_widget( 'WP_Widget_Search' );
	unregister_widget( 'WP_Widget_Categories' );
	unregister_widget( 'WP_Widget_Recent_Posts' );
	unregister_widget( 'WP_Widget_Recent_Comments' );
	// unregister_widget( 'WP_Widget_RSS' );
	unregister_widget( 'WP_Widget_Tag_Cloud' );
	unregister_widget( 'WP_Nav_Menu_Widget' );

	/* Register Widget Areas */

	register_sidebar( array(  
		'name'          => __( 'Left Sidebar', 'pwe' ),
		'id'            => 'left-sidebar',
		'description'   => __( 'The left sidebar.', 'pwe' ),
		'before_widget' => '<div id="%1$s" class="widget panel %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );

}

add_action( 'widgets_init', 'pwe_widgets' );

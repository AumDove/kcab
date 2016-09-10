<?php
function mastermarketing_setup() {

	// Post thumbnails support
	add_theme_support('post-thumbnails');

	// Register Menus 
	register_nav_menus ( array (
		'primary-menu' => __( 'Primary Menu', 'mastermarketing' ),
		'secondary' => __( 'Secondary Menu', 'mastermarketing' ),  
	) );
}

add_action( 'after_setup_theme', 'mastermarketing_setup' );


// Register widget area 
function mastermarketing_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar 1', 'mastermarketing' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'mastermarketing' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mastermarketing_widgets_init' );


// changes excerpt symbol
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

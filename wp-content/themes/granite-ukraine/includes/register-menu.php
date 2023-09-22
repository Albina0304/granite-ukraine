<?php
add_theme_support( 'menus' );
if ( ! function_exists( 'granite_ukraine_register_nav_menu' ) ) {

	function granite_ukraine_register_nav_menu(){
		register_nav_menus( array(
	    	'main' => __( 'Main'),
	    	'languages'  => __( 'Languages'),
		) );
	}
	add_action( 'after_setup_theme', 'granite_ukraine_register_nav_menu' );
}

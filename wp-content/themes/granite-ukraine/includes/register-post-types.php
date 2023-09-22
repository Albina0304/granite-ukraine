<?php
function granite_ukraine() {
	$labels = array(
		'name'                  => _x( 'Products', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Product', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Products', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Product', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Product', 'textdomain' ),
		'new_item'              => __( 'New Product', 'textdomain' ),
		'edit_item'             => __( 'Edit Product', 'textdomain' ),
		'view_item'             => __( 'View Product', 'textdomain' ),
		'all_items'             => __( 'All Products', 'textdomain' ),
		'search_items'          => __( 'Search Products', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Products:', 'textdomain' ),
		'not_found'             => __( 'No products found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No products found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Product Cover Image', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'textdomain' ), 
		'remove_featured_image' => _x( 'Remove cover image', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'textdomain' ),

	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
	);

	register_post_type( 'product', $args );
}
add_action( 'init', 'granite_ukraine' );
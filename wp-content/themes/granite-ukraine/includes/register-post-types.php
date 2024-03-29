<?php
function granite_ukraine() {
	$labels = array(
		'name'                  => _x( 'Products', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Product', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Products', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Product', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add new', 'textdomain' ),
        'add_new_item'          => __( 'Add new product', 'textdomain' ),
        'new_item'              => __( 'New product', 'textdomain' ),
        'edit_item'             => __( 'Edit product', 'textdomain' ),
        'view_item'             => __( 'View product', 'textdomain' ),
        'all_items'             => __( 'All Products', 'textdomain' ),
        'search_items'          => __( 'Search products', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent products:', 'textdomain' ),
        'not_found'             => __( 'Products not found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in trash products.', 'textdomain' ),
        'featured_image'        => _x( 'Featured product', 'textdomain' ),
        'set_featured_image'    => _x( 'Set featured image', 'textdomain' ), 
        'remove_featured_image' => _x( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => _x( 'Use featured image', 'textdomain' ),
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

	$labels = array(
		'name'              => _x( 'Product Tag', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Product Tag', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Product Tags', 'textdomain' ),
		'all_items'         => __( 'All Product Tags', 'textdomain' ),
		'parent_item'       => __( 'Parent Product Tag', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Product Tag:', 'textdomain' ),
		'edit_item'         => __( 'Edit Product Tag', 'textdomain' ),
		'update_item'       => __( 'Update Product Tag', 'textdomain' ),
		'add_new_item'      => __( 'Add New Product Tag', 'textdomain' ),
		'new_item_name'     => __( 'New Product Tag', 'textdomain' ),
		'menu_name'         => __( 'Product Tag', 'textdomain' ),
	);

	$args = array(

		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);

	register_taxonomy( 'product_tag', 'product' , $args );

	$labels_production = array(
		'name'                  => _x( 'Productions', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Production', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Productions', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Production', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add new production', 'textdomain' ),
        'new_item'              => __( 'New production', 'textdomain' ),
        'edit_item'             => __( 'Edit production', 'textdomain' ),
        'view_item'             => __( 'View production', 'textdomain' ),
        'all_items'             => __( 'All productions', 'textdomain' ),
        'search_items'          => __( 'Search productions', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent productions:', 'textdomain' ),
        'not_found'             => __( 'Productions not found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in trash productions.', 'textdomain' ),
        'featured_image'        => _x( 'Featured productions', 'textdomain' ),
        'set_featured_image'    => _x( 'Set featured image', 'textdomain' ), 
        'remove_featured_image' => _x( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => _x( 'Use featured image', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels_production,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'production' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
	);

	register_post_type( 'production', $args );

	$labels_faq = array(
		'name'                  => _x( 'FAQs', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'FAQ', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'FAQs', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'FAQ', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add new', 'textdomain' ),
        'add_new_item'          => __( 'Add new FAQ', 'textdomain' ),
        'new_item'              => __( 'New FAQ', 'textdomain' ),
        'edit_item'             => __( 'Edit FAQ', 'textdomain' ),
        'view_item'             => __( 'View FAQ', 'textdomain' ),
        'all_items'             => __( 'All FAQs', 'textdomain' ),
        'search_items'          => __( 'Search FAQs', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent FAQs:', 'textdomain' ),
        'not_found'             => __( 'FAQs not found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in trash FAQs.', 'textdomain' ),
        'featured_image'        => _x( 'Featured FAQ', 'textdomain' ),
        'set_featured_image'    => _x( 'Set featured image', 'textdomain' ), 
        'remove_featured_image' => _x( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => _x( 'Use featured image', 'textdomain' ),
	);

	$args_faqs = array(
		'labels'             => $labels_faq,
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor'),
	);

	register_post_type( 'faq', $args_faqs );

	$labels_category = array(
		'name'              => _x( 'FAQ Category', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'FAQ Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search FAQ Category', 'textdomain' ),
		'all_items'         => __( 'All FAQ Category', 'textdomain' ),
		'parent_item'       => __( 'Parent FAQ Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent FAQ Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit FAQ Category', 'textdomain' ),
		'update_item'       => __( 'Update FAQ Category', 'textdomain' ),
		'add_new_item'      => __( 'Add new FAQ Category', 'textdomain' ),
		'new_item_name'     => __( 'New FAQ Category', 'textdomain' ),
		'menu_name'         => __( 'FAQ Category', 'textdomain' ),
	);
	$args_category = array(
		'hierarchical'      => true,
		'labels'            => $labels_category,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);
	register_taxonomy( 'faq_category', array( 'faq' ), $args_category );
}
add_action( 'init', 'granite_ukraine' );
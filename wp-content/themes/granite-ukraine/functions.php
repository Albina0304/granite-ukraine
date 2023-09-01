<?php 
add_theme_support( 'post-thumbnails' );
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
function my_scripts() {
    wp_enqueue_script( 'jQuery', "https://code.jquery.com/jquery-3.6.3.js", array(), false, true);
    wp_enqueue_script('main_js', get_template_directory_uri() . "/dist/js/main.js", array('jQuery'), false, true);
    wp_enqueue_style('main_css', get_template_directory_uri() . "/dist/css/main.css");
}
add_action('wp_enqueue_scripts', 'my_scripts');


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
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Налаштування головної теми',
        'menu_title'    => 'Загальні налаштування',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
add_image_size( 'logo-size', 140, 41 );
add_image_size( 'social-img', 16, 16 );
add_image_size( 'product-img', 282, 200 );
add_image_size( 'card-img', 40, 40 );
add_image_size( 'about-image', 282, 330 );
function getImage($image, $size = false) {
    if($image['mime_type'] !== 'image/svg+xml'):
    return wp_get_attachment_image($image['ID'], $size ? $size : 'full');
    else:
        return file_get_contents($image['url']);
    endif;
}

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
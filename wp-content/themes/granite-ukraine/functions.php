<?php 
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
function my_scripts() {
    wp_enqueue_script( 'main_js', get_template_directory_uri()."/dist/js/main.js", array(), '', true);
    wp_enqueue_script( 'jQuery', "https://code.jquery.com/jquery-3.6.3.js", array(), '', true);
    wp_enqueue_style ( 'main_css', get_template_directory_uri()."/dist/css/main.css");
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
add_action('wp_enqueue_scripts', 'my_scripts');
add_image_size( 'logo-size', 140, 41 );
add_image_size( 'social-img', 16, 16 );
function getImage($image, $size = false) {
    if($image['mime_type'] !== 'image/svg+xml'):
    return wp_get_attachment_image($image['ID'], $size ? $size : 'full');
    else:
        return file_get_contents($image['url']);
    endif;
}

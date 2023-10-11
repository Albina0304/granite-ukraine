<?php
function gu_scripts() {
    wp_enqueue_script( 'jQuery', "https://code.jquery.com/jquery-3.6.3.js", array(), false, true);
	wp_enqueue_script( 'map', "https://maps.googleapis.com/maps/api/js?key=".get_field('google_maps_ipi_key', 'options'), array('jQuery'), false, true);
    wp_enqueue_script('main_js', get_template_directory_uri() . "/dist/js/main.js", array('jQuery'), false, true);
    wp_enqueue_style('main_css', get_template_directory_uri() . "/dist/css/main.css");
    wp_localize_script( 'main_js', 'data_obj',
        array( 
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
        )   
    );
}
add_action('wp_enqueue_scripts', 'gu_scripts');
<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Налаштування головної теми',
        'menu_title'    => 'Загальні налаштування',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
function gu_acf_init() {
    acf_update_setting('google_api_key', get_field('google_maps_ipi_key', 'options'));
}
add_action('acf/init', 'gu_acf_init');
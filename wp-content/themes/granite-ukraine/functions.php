<?php 
if(!function_exists('granite_ukraine_setup')) :
    function granite_ukraine_setup() {
        add_theme_support('title-tag');
        add_theme_support('post_thumbnails');
    }
endif;
add_action('after_setup_theme','granite_ukraine_setup');
include_once 'includes/register-post-types.php';
include_once 'includes/global-settings.php';
include_once 'includes/scripts.php';
include_once 'includes/register-menu.php';
include_once 'includes/acf-settings.php';
include_once 'includes/image-sizes.php';
include_once 'includes/ajax-setting.php';
include_once 'includes/optimize-scripts.php';
<?php
add_image_size( 'logo-size', 140, 41 );
add_image_size( 'social-img', 16, 16 );
add_image_size( 'product-img', 282, 200 );
add_image_size( 'card-img', 40, 40 );
add_image_size( 'about-image', 282, 330 );
add_image_size( 'price-image', 70, 50 );
add_image_size( 'product-card', 588, 417 );
add_image_size( 'slider-img', 131, 93 );
add_image_size( 'labor-img', 282, 376 );
function getImage($image, $size = false) {
    if($image['mime_type'] !== 'image/svg+xml'):
    return wp_get_attachment_image($image['ID'], $size ? $size : 'full');
    else:
        return file_get_contents($image['url']);
    endif;
}
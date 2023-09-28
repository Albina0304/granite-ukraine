<?php
/* Template Name: Головна */
get_header();
if( have_rows('modules') ):
    while ( have_rows('modules') ) : the_row();
        if( get_row_layout() == 'hero' ):
            echo get_template_part('template-parts/modules/hero');
        elseif( get_row_layout() == 'products' ): 
            echo get_template_part('template-parts/modules/products');
        elseif( get_row_layout() == 'advantages' ): 
            echo get_template_part('template-parts/modules/advantages');
        elseif( get_row_layout() == 'about' ): 
            echo get_template_part('template-parts/modules/about');
        elseif( get_row_layout() == 'labors' ):
            $title = get_sub_field('title');
            $link = get_field('secondary_button', 'options');
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'suppress_filters' => false
            );
            $products = get_posts($args);
            $images = array();
            foreach ($products as $product) {
                $product_images = get_field('product_images', $product);
                if ($product_images) {
                    foreach ($product_images as $product_image) {
                        $images[] = $product_image;
                    }
                }
            }
            shuffle($images);
            $arr = array(
                'title' => $title,
                'images' => array_slice($images, 0, 6),
                'link' => $link,
                'images_count' => count($images)
            );
            echo get_template_part('template-parts/modules/labors', '', $arr);
        endif;
    endwhile;
endif;
get_footer();
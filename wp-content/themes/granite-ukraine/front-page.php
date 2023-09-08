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
                'posts_per_page' => -1
            );
            $products = get_posts($args);
            $images = array();
            foreach ($products as $product) {
                $product_images = get_field('product_images', $product);
                if ($product_images) {
                    $images = $product_images;
                }
            }
            $arr = array(
                'title' => $title,
                'images' => $images,
                'link' => $link
            );
            echo get_template_part('template-parts/modules/labors', '', $arr);
        elseif( get_row_layout() == 'form' ): 
            echo get_template_part('template-parts/modules/form');
        elseif (get_row_layout() == 'map'):
           echo get_template_part('template-parts/modules/map');
        elseif (get_row_layout() == 'modal'):
            echo get_template_part('template-parts/modules/modal');
        endif;
    endwhile;
endif;
get_footer();
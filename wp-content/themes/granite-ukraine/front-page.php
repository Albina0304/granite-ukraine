<?php
/* Template Name: Головна */
get_header();
if( have_rows('modules') ):
    while ( have_rows('modules') ) : the_row();
        if( get_row_layout() === 'hero' ):
            echo get_template_part('template-parts/modules/hero');
        elseif( get_row_layout() === 'products' ): 
            echo get_template_part('template-parts/modules/products');
        elseif( get_row_layout() === 'advantages' ): 
            echo get_template_part('template-parts/modules/advantages');
        elseif( get_row_layout() === 'about' ): 
            echo get_template_part('template-parts/modules/about');
            elseif( get_row_layout() === 'labors' ):
                $title = get_sub_field('title');
                $title_opt = get_sub_field('title_opt');
                $finalTitle = isset($_GET['ads_content']) && $_GET['ads_content'] === 'opt' ?  $title_opt : $title;
                $link = get_field('secondary_button', 'options');
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'suppress_filters' => false
                );
                if(isset($_GET['ads_content']) && $_GET['ads_content'] === 'opt') {
                    $args['post_type'] = 'production';
                    $image_field = 'images_productions';
                } else {
                    $image_field = 'product_images';
                }
                $products = get_posts($args);
                $images = array();
                foreach ($products as $product) {
                    $product_images = get_field($image_field, $product);
                    if ($product_images) {
                        foreach ($product_images as $product_image) {
                            $images[] = $product_image;
                        }
                    }
                }
                shuffle($images);
                $outImages = array_slice($images, 6);
                $imageRow = [];
                foreach($outImages as $image) {
                    if(isset($image['image'])) {
                        $imageRow[]['image'] = array(
                            'id' =>  $image['image'] ? $image['image']['id'] : '',
                            'sizes' => array(
                                'large' => $image['image'] ? $image['image']['sizes']['large'] : ''
                            )
                        );
                    }
                }
                $arr = array(
                    'title' => $finalTitle,
                    'medias' => array_slice($images, 0, 6),
                    'link' => $link,
                    'class_name' => 'home-labor',
                    'images_count' => count($images),
                    'additional_images' => $imageRow
                );
                echo get_template_part('template-parts/modules/labors', '', $arr);
            elseif( get_row_layout() === 'contact-form' ): 
            echo get_template_part('template-parts/modules/contact-form');
        endif;
    endwhile;
endif;
echo get_template_part('template-parts/general/form');
get_footer();
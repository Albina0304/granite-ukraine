<?php
get_header();?>
<section class="section decor-light hero-product">
    <div class="container">
        <div class="card-image">
            <?php the_post_thumbnail('product-img'); ?>
        </div>
        <h3 class="card-title">
            <?php the_title();?>
        </h3>
        <div class="card-description">
            <?php the_content();?>
        </div>
    </div>
</section>
<section class="labor">
    <?php 
      $product_images = get_field('product_images');
        $arr = array(
            'title' => __('Роботи', 'granite-ukraine'),
            'images' => $product_images,
            'link' => array(
                'title' => __('Завантажити більше', 'granite-ukraine')
            )
        );
        echo get_template_part('template-parts/modules/labors', '', $arr);
    ?>
</section>

<section class="related-products">
    <div class="container">
        <?php
        $post_id = get_the_ID();
        $related_products = get_posts(
            array(
                'post_type' => 'product',
                'posts_per_page' => 4,
                'suppress_filters' => false,
                'post__not_in' => array($post_id),
                'orderby' => 'rand'
            )
        );?>
    </div>
</section>















<?php get_footer();
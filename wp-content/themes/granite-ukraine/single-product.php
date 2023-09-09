<?php
get_header();?>
<section class="section decor-light hero-product">
    <div class="container">
        <div class="hero-card">
            <div class="card-image">
                <?php the_post_thumbnail('product-card'); ?>
            </div>
            <div class="hero-info">
                <h3 class="card-title">
                    <?php the_title();?>
                </h3>
                <div class="card-description">
                    <?php the_content();?>
                </div>
                <div class="price-from">
                    <?php 
                    $price_from = get_field('price_from');
                    echo $price_from;?>
                </div>
            </div>
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

<section class="related-products products decor-light section">
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
        );
        if (isset($title)):?>
            <h2 class="products-title">
                <?php echo $title; ?>
            </h2>
        <?php endif;?>
        <div class="product-cards">
            <?php if ($related_products) {
                foreach($related_products as $post) {
                    setup_postdata($post);?>
                    <div class="product-col">
                        <?php echo get_template_part('template-parts/cards/product-card');?>
                    </div>
                <?php }
            wp_reset_postdata(); }?>
        </div>
    </div>
    </div>
</section>















<?php get_footer();
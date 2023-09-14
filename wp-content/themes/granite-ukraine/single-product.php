<?php
get_header();
$price_from = get_field('price_from');
$product_images = get_field('product_images');
$slider_images = get_field('slider_images');
$post_id = get_the_ID();
$link = get_field('btn_primary', 'options');
?>
<section class="section decor-light hero-product">
    <div class="container">
        <div class="hero-card">
            <div class="hero-slider-wrap">
                <div class="card-image">
                    <div class="slider-image">
                        <?php the_post_thumbnail('product-card');?>
                    </div>
                    <?php foreach ($slider_images as $slider_image) : 
                        $image_id = $slider_image['image']['ID']; ?>
                        <div class="slider-image">
                            <?php echo wp_get_attachment_image($image_id, 'product-card');?>
                        </div> 
                    <?php endforeach; ?>
                </div>
                <div class="hero-slider">
                    <div class="slider-image">
                        <?php the_post_thumbnail('product-card');?>
                    </div>
                    <?php foreach ($slider_images as $slider_image) : 
                        $image_id = $slider_image['image']['ID']; ?>
                        <div class="slider-image">
                                <?php echo wp_get_attachment_image($image_id, 'slider-img');?>
                        </div> 
                    <?php endforeach; ?>
                </div>
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
                    echo $price_from;?>
                </div>
                <div class="section-button">
                    <?php 
                    if( $link ): 
                        $link_target = $link['target'] ? $link['target'] : '_self';?>
                        <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-price" href="#">
                            <?php echo __('Прайс', 'granite-ukraine'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="labor">
    <?php 
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
<?php     
echo get_template_part('template-parts/modules/form');
echo get_template_part('template-parts/modules/map');?>
<?php get_footer();
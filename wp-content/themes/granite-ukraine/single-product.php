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
                        <a href="<?php echo get_the_post_thumbnail_url();?>" data-lightbox="hero-granite">
                            <?php the_post_thumbnail('product-card');?>
                        </a>
                    </div>
                    <?php 
                    if ($slider_images) :
                        foreach ($slider_images as $slider_image) : 
                            $image_id = $slider_image['image']['ID'];?>
                            <div class="slider-image">
                                <?php echo wp_get_attachment_image($image_id, 'product-card');?>
                            </div> 
                        <?php endforeach;
                    endif; ?>
                </div>
                <div class="hero-slider">
                    <div class="slider-image">
                        <?php the_post_thumbnail('product-card', array('data-lightbox' => 'hero-granite'));?>
                    </div>
                    <?php if ($slider_images) :
                        foreach ($slider_images as $slider_image) : 
                            $image_id = $slider_image['image']['ID']; ?>
                            <div class="slider-image">
                                    <?php echo wp_get_attachment_image($image_id, 'slider-img');?>
                            </div> 
                        <?php endforeach; 
                    endif; ?>
                </div>
            </div>
            <div class="hero-info">
                <?php if (the_title()) : ?>
                    <h3 class="card-title">
                        <?php the_title();?>
                    </h3>
                <?php endif;?>
                <?php if (the_content()) : ?>
                    <div class="card-description">
                        <?php the_content();?>
                    </div>
                <?php endif;?>
                <?php if ($price_from) : ?>
                    <div class="price-from">
                        <?php echo $price_from;?>
                    </div>
                <?php endif;?>
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
            'images' => array_slice($product_images, 0, 6),
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
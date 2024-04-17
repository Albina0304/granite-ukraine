<?php
$product_images = get_field('product_images');
;?>
<div class="product-wrapper">
    <div class="product-slider">
        <a href="<?php echo get_permalink();?>" class="product-card">
            <?php if(has_post_thumbnail()) : ?>
                <div class="card-image">
                    <?php the_post_thumbnail('product-img'); ?>
                </div>
            <?php endif;
            if(get_the_title()) : ?>
                <h4 class="card-title">
                    <?php the_title();?>
                </h4>
            <?php endif;?>
        </a>
    </div>
    <div class="product-slider-nav">
        <?php 
        if($product_images) :
            foreach($product_images as $product_image) : ?>
                <div class="product-slider-nav-image">
                <?php echo wp_get_attachment_image($product_image, 'price-image') ;?>
                </div>
            <?php endforeach;
        endif;?>
    </div>
</div>
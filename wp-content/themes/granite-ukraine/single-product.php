<?php
get_header();
$price_from = get_field('price_from');
$product_images = get_field('product_images');
$slider_images = get_field('slider_images');
$post_id = get_the_ID();
$link = get_field('btn_primary', 'options');
$content = get_the_content();
$title = get_the_title();
$title_products = __('Цікаві пропозиції', 'granite-ukraine');
$related_products = get_posts(
    array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'suppress_filters' => false,
        'post__not_in' => array($post_id),
        'orderby' => 'rand'
    )
);?>
<section class="section hero-product">
    <div class="decor-light">
        <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
    </div>
    <div class="container">
        <div class="hero-card">
            <div class="hero-slider-wrap">
                <div class="slider-image">
                    <div class="slider-image-card">
                        <a href="<?php echo get_the_post_thumbnail_url();?>" data-lightbox="hero-granite">
                            <?php the_post_thumbnail('product-card', array('data-no-lazy' => -1));?>
                        </a>
                    </div>
                    <?php 
                    if ($slider_images) :
                        foreach ($slider_images as $slider_image) : 
                            $image_id = $slider_image['image']['ID'];
                            $image_large = wp_get_attachment_image_src($image_id, 'large');?>
                            <div class="slider-image-card">
                                <a href="<?php echo $image_large[0];?>" data-lightbox="hero-granite">
                                    <?php echo wp_get_attachment_image($image_id, 'product-card');?>
                                </a>
                            </div> 
                        <?php endforeach;
                    endif; ?>
                </div>
                <div class="hero-slider">
                    <div class="slider-image-card">
                        <?php the_post_thumbnail('product-card', array('data-lightbox' => 'hero-granite'));?>
                    </div>
                    <?php if ($slider_images) :
                        foreach ($slider_images as $slider_image) : 
                            $image_id = $slider_image['image']['ID']; ?>
                            <div class="slider-image-card">
                                <?php echo wp_get_attachment_image($image_id, 'slider-img',);?>
                            </div> 
                        <?php endforeach; 
                    endif; ?>
                </div>
            </div>
            <div class="hero-info">
                <?php if ($title) : ?>
                    <h3 class="hero-info-title">
                        <?php echo $title;?>
                    </h3>
                <?php endif;?>
                <?php if ($content) : ?>
                    <div class="hero-info-description">
                        <?php echo $content;?>
                    </div>
                <?php endif;?>
                <?php if ($price_from) : ?>
                    <div class="hero-info-price">
                        <?php echo $price_from;?>
                    </div>
                <?php endif;
                if($link) : ?>
                    <div class="section-button">
                        <?php $link_target = $link['target'] ? $link['target'] : '_self';?>
                        <a href="#" type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-price">
                            <?php echo __('Прайс', 'granite-ukraine'); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php if($product_images) : ?>
    <section class="labor">
        <?php $arr = array(
            'title' => __('Роботи', 'granite-ukraine'),
            'images' => array_slice($product_images, 0, 6),
            'class_name' => 'labor-single-product',
            'link' => array(
                'title' => __('Завантажити більше', 'granite-ukraine')
            ),
            'images_count' => count($product_images)
        );
        echo get_template_part('template-parts/modules/labors', '', $arr);?>
    </section>
<?php endif;
if($related_products) : ?>
    <section id="product" class="section products related-products">
        <div class="decor-light">
            <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
        </div>
        <div class="container">
            <?php if (isset($title_products)):?>
                <h2 class="products-title">
                    <?php echo $title_products; ?>
                </h2>
            <?php endif;?>
            <div class="product-cards">
                <?php foreach($related_products as $post) :
                    setup_postdata($post);?>
                    <div class="product-col">
                        <?php echo get_template_part('template-parts/cards/product-card');?>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
        </div>
    </section>
<?php endif;
    echo get_template_part('template-parts/general/modal-prices');
    echo get_template_part('template-parts/general/form');
get_footer();
<?php
$title = get_sub_field('title');
$products = get_posts(
    array(
        'post_type' => 'product',
        'posts_per_page' => -1,
        'suppress_filters' => false
    )
);
if($products) : ?>
    <section class="section products">
        <div class="decor-light">
            <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
        </div>
        <div class="container">
            <?php if ($title):?>
                <h2 class="products-title">
                    <?php echo $title;?>
                </h2>
            <?php endif;?>
            <div class="product-cards">
                <?php 
                    foreach ($products as $post) :
                        setup_postdata($post);?>
                        <div class="product-cards-column">
                            <?php echo get_template_part('template-parts/cards/product-card');?>
                        </div>
                    <?php endforeach;
                wp_reset_postdata();?>
            </div>
        </div>
    </section>
<?php endif;




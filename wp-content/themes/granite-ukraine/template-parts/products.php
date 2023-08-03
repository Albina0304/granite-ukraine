<?php 
$title = get_sub_field('title');
$products = get_posts(
    array(
        'post_type' => 'product',
        'posts_per_page' => -1
    )
);?>
<section class="products declight section">
    <div class="container">
        <div class="products-title">
            <?php if ($title):?>
                <h2>
                    <?php echo $title;?>
                </h2>
            <?php endif;?>
        </div>
        <div class="product-cards">
            <?php
            if ($products) {
                foreach ($products as $post) {
                    setup_postdata($post);?>
                    <div class="product-col">
                        <a href="<?php echo get_permalink();?>" class="product-card">
                            <div class="card-image">
                                <?php the_post_thumbnail('product-img'); ?>
                            </div>
                            <div class="card-title">
                                <h4>
                                    <?php the_title();?>
                                </h4>
                            </div>
                        </a>
                    </div>
                <?php }
            
            wp_reset_postdata(); }
            ?>
        </div>
    </div>
</section>




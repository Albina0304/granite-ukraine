<?php
$title = get_sub_field('title');
$products = get_posts(
    array(
        'post_type' => 'product',
        'posts_per_page' => -1,
        'suppress_filters' => false
    )
);?>
<section class="products decor-light section">
    <div class="container">
        <?php if ($title):?>
            <h2 class="products-title">
                <?php echo $title;?>
            </h2>
        <?php endif;?>
        <div class="product-cards">
            <?php
            if ($products) {
                foreach ($products as $post) {
                    setup_postdata($post);?>
                    <div class="product-col">
                        <?php echo get_template_part('template-parts/cards/product-card');?>
                    </div>
                <?php }
            wp_reset_postdata(); }
            ?>
        </div>
    </div>
</section>




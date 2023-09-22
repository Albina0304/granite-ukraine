<a href="<?php echo get_permalink();?>" class="product-card">
    <?php if(the_post_thumbnail('product-img')) : ?>
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
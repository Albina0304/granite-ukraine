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
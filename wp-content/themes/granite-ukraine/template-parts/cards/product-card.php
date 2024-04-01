<?php $product_tags = get_the_terms(get_the_id(),'product_tag');?>
<a href="<?php echo get_permalink();?>" class="product-card">
    <?php if(has_post_thumbnail()) : ?>
        <?php if($product_tags) : ?>
            <div class="tags">
                <?php foreach($product_tags as $product_tag) {?>
                    <span class="tag tag-sale">
                        <?php echo $product_tag->name;?>
                    </span>
                <?php }?>
            </div> 
        <?php endif;?>
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
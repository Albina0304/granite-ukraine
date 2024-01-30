<article class="posts-card-article" <?php post_class();?>>
    <?php if(has_post_thumbnail()):?>
        <a href="<?php the_permalink();?>" class="post-image">
            <?php the_post_thumbnail('product-img', get_the_ID());?>
        </a>
    <?php endif;?>
    <h3 class="posts-card-title">
        <a class="posts-card-title-reference" href="<?php the_permalink();?>">
            <?php the_title();?>
        </a>
    </h3>
    <a href="<?php the_permalink() ?>" class="btn btn-secondary">Дивитись більше...</a>
</article>
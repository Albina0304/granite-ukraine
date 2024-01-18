
 <!-- Blog, Категория, отметка -->
        <?php get_header();?>
        <div class="posts-wrap">
            <?php if($posts):?>
                <div class="posts">
                    <?php foreach ($posts as $post) :
                        setup_postdata($post);?>
                        <article <?php post_class();?>>
                            <?php if(has_post_thumbnail()):?>
                                <a href="<?php the_permalink();?>" class="post-image">
                                    <?php the_post_thumbnail('product-img', get_the_ID());?>
                                </a>
                            <?php endif;?>
                            <h3 class="title-link">
                                <a href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                            </h3>
                            <a href="<?php the_permalink() ?>" class="btn btn-secondary">Дивитись більше...</a>
                        </article>
                    <?php endforeach;?>
                </div>
            <?php endif;
            wp_reset_postdata();?>
        </div>
    </div>
</div>
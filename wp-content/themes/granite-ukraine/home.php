
<?php get_header();
$categories = get_terms( array(
    'taxonomy'   => 'category',
    'hide_empty' => false,
) );
$tags = get_terms( 
    array(
        'taxonomy'   => 'post_tag',
        'hide_empty' => true,
    ) 
);?>
<div class="section blog-page">
    <div class="decor-light">
        <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
    </div>
    <div class="container">
        <?php while(have_posts()) :
            the_post();?>
            <?php get_template_part('content', 'page'); ?>
        <?php endwhile;?>
        <section class="blog-posts">
            <div class="blog-main">
                <?php if($categories):?>
                    <div class="category">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <h3> Категорії</h3>
                            </a>
                            <nav class="dropdown-menu">
                                <?php foreach($categories as $category) {?>
                                    <ul class="blog-category">
                                        <li>
                                            <a href="<?php echo get_term_link($category) ?>"><?php echo $category->name ?></a>
                                        </li>
                                    </ul>
                                <?php } ?>
                            </nav>
                        </div>
                    </div>
                <?php endif;?>
                <aside>
                    <div class="blog-tags">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <h3> Теги </h3>
                            </a>
                            <?php if($tags):?>
                                <nav class="dropdown-menu">
                                    <?php foreach($tags as $tag) {?>
                                        <ul class="blog-tags">
                                            <li>
                                                <a href="<?php echo get_term_link($tag) ?>"><?php echo $tag->name ?></a>
                                            </li>
                                        </ul>
                                    <?php } ?>
                                </nav>
                            <?php endif;?>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="posts-wrap">
                <?php if($posts):?>
                    <section class="posts">
                        <?php foreach ($posts as $post) :
                            setup_postdata($post)?>
                            <article <?php post_class();?>>
                                <?php if(has_post_thumbnail()):?>
                                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('product-img', get_the_ID());?></a>
                                <?php endif;?>
                                <h3>
                                    <a href="<?php the_permalink();?>">
                                        <?php the_title();?>
                                    </a>
                                </h3>
                                <a href="<?php the_permalink() ?>" class="btn btn-secondary">Показати більше...</a>
                            </article>
                        <?php endforeach;?>
                    </section>
                <?php endif;?>
            </div>
            <?php wp_reset_postdata();?>
        </section>
    </div>
</div>
<?php get_footer();
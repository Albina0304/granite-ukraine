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
<div class="section blog-post blog-page">
    <div class="container">
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
        </section>
        <div class="blog-description">
            <?php if(has_post_thumbnail()):
                the_post_thumbnail(get_the_ID());
            endif;?>
            <h2>
                <?php the_title();?>
            </h2>
            <?php the_content();?>
        </div>
    </div>
</div>
<?php get_footer();
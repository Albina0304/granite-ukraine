<?php get_header();
$term_object = get_queried_object();
$tags = get_terms( 
    array(
        'tax_query' => array(
            'relation' => 'OR',
            array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => array( $term_object->term_id ),
            ),
            array(
                'taxonomy' => 'post_tag',
                'field' => 'term_id',
                'terms' => array( $term_object->term_id ),
                'operator' => 'IN',
            ),
        ),
    ),
);
$categories = get_terms( 
    array(
        'taxonomy'   => 'category',
        'hide_empty' => true
    ) 
);
$tagsItem = get_terms( 
    array(
        'taxonomy'   => 'post_tag',
        'hide_empty' => true,
    ) 
);
$page_for_posts = get_option( 'page_for_posts' );?>
<div class="section blog-page blog-post">
    <div class="decor-light">
        <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
    </div>
    <div class="container">
        <section class="blog-posts">
            <div class="blog-main">
                <?php if($categories):?>
                    <div class="category">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <h3 class="title-tags"> Категорії</h3>
                            </a>
                            <nav class="dropdown-menu">
                                <ul class="blog-category list">
                                    <li>
                                        <a href="<?php echo get_permalink($page_for_posts) ?>">Всі</a>
                                    </li>
                                    <?php foreach($categories as $category) {?>
                                        <li>
                                            <a href="<?php echo get_term_link($category) ?>"><?php echo $category->name ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                <?php endif;?>
                <aside>
                    <div class="blog-tags">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <h3 class="title-tags"> Теги </h3>
                            </a>
                            <?php if($tagsItem):?>
                                <nav class="dropdown-menu">
                                    <ul class="blog-tags list">
                                        <li>
                                            <a href="<?php echo get_permalink($page_for_posts) ?>">Всі</a>
                                        </li>
                                        <?php foreach($tagsItem as $tag) {?>
                                            <li>
                                                <a href="<?php echo get_term_link($tag) ?>"><?php echo $tag->name ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            <?php endif;?>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
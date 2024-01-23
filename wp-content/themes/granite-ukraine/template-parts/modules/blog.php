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
$serchParam = isset($_GET) && isset($_GET['s']) ? esc_html($_GET['s']) : '';
$catParam = isset($_GET) && isset($_GET['cat']) ? esc_html($_GET['cat']) : '';
$tagParam = isset($_GET) && isset($_GET['tag']) ? esc_html($_GET['tag']) : '';
$tagsItem = get_terms( 
    array(
        'taxonomy'   => 'post_tag',
        'hide_empty' => true,
    ) 
);
$paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
$args = array(
    'posts_per_page' => 10,
    'paged' => $paged
);
$page_for_posts = get_option( 'page_for_posts' );?>
<div class="section blog-page blog-post">
    <div class="decor-light">
        <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
    </div>
    <div class="container">
        <form action="">
            <div class="filter">
                <div class="filter-search">
                    <input class="input-search" type="text" name="s" value="<?php echo $serchParam;?>">
                    <div class="filter-btn">
                        <button class="btn btn-secondary">
                            Пошук
                        </button>
                    </div>
                </div>
                <div class="filter-options">
                    <select class="selection" name="cat" id="">
                        <option value="" name="">Всі категорії</option>
                        <?php foreach($categories as $category) {?>
                            <option class="selection-option" value="<?php echo $category->slug;?>"
                                <?php if($catParam===$category->slug) {
                                    echo 'selected';
                                };?>
                                ><?php echo $category->name;?>
                            </option>
                        <?php } ?>
                    </select>
                    <select class="selection" name="tag" id="">
                        <option value="">Всі позначки</option>
                        <?php foreach($tagsItem as $tag) {?>
                            <option class="selection-option" value="<?php echo $tag->slug;?>"
                                <?php if($tagParam===$tag->slug) {
                                    echo 'selected';
                                };?>
                                ><?php echo $tag->name;?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </form>
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
                                        <a href="<?php echo get_permalink($page_for_posts);?>">Всі</a>
                                    </li>
                                    <?php foreach($categories as $category) {?>
                                        <li>
                                            <a href="<?php echo get_permalink($page_for_posts);?>/?cat=<?php echo $category->slug;?>"><?php echo $category->name;?></a>
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
                                            <a href="<?php echo get_permalink($page_for_posts);?>/?tag=<?php echo $tag->slug;?>"><?php echo $tag->name;?></a>
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
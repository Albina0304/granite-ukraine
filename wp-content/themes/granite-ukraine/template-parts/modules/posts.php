
 <!-- Blog, Категория, отметка -->
<?php $paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
$serchParam = isset($_GET['s']) ? esc_html($_GET['s']) : '';
$catParam = isset($_GET['cat']) ? esc_html($_GET['cat']) : '';
$tagParam = isset($_GET['tag']) ? esc_html($_GET['tag']) : '';
$args = array(
    'posts_per_page' => 10,
    'paged' => $paged,
    's' => $serchParam,
    'tax_query' => array(
        'relation' => 'AND',
    ),
    'meta_query' => array(
        array(
            'key' => '_thumbnail_id',
            'compare' => 'EXISTS'
        ),
    ),
);
if($catParam && $catParam !== 'all')  {
    $args['tax_query'] =  array_merge($args['tax_query'] , array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => array( $catParam)
        )
    )); 
}
if($tagParam && $tagParam !== 'all') {
    $args['tax_query'] =  array_merge($args['tax_query'], 
            array(
            array(
                'taxonomy' => 'post_tag',
                'field' => 'slug',
                'terms' => array( $tagParam)
            )
        )
    );
};
$postsItems = query_posts(
    $args
);?>
<div class="posts-wrap">
    <?php if($postsItems):?>
        <div class="posts">
            <?php foreach ($postsItems as $post) :
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
        <div class="pagination">
            <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( 'Назад', 'textdomain' ),
                'next_text' => __( 'Вперед', 'textdomain' ),
            ) ); ?>
        </div>
    <?php endif;
    wp_reset_query();?>
</div>
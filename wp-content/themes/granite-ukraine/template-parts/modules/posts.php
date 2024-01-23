
 <!-- Blog, Категория, отметка -->
        <?php $paged = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
        $serchParam = isset($_GET) && isset($_GET['s']) ? esc_html($_GET['s']) : '';
        $catParam = isset($_GET) && isset($_GET['cat']) ? esc_html($_GET['cat']) : '';
        $tagParam = isset($_GET) && isset($_GET['tag']) ? esc_html($_GET['tag']) : '';
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
        if($catParam) {
            $args['tax_query'] =  array_merge($args['tax_query'] , array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => array( $catParam)
                )
            )); 
        }
        if($tagParam) {
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
        $postsItems = get_posts(
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
                <div class="pagination pagination-one">
                    <?php the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( 'Назад', 'textdomain' ),
                        'next_text' => __( 'Вперед', 'textdomain' ),
                    ) ); ?>
                </div>
                <div class="pagination pagination-two">
                    <?php $big = 99999999;
                    echo paginate_links(
                        array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '&paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages,
                            'prev_text' => __( 'Назад', 'textdomain' ),
                            'next_text' => __( 'Вперед', 'textdomain' ),
                        )
                    );?>
                </div>
                <div class="pagination pagination-three">
                    <?php global $paged;
                    if(empty($paged)) $paged = 1;
                    global $wp_query;
                    $query = $wp_query;
                    $total_pages = $query-> max_num_pages;
                    if($total_pages > 1) {
                        if($paged > 1) echo "<a href='" . get_pagenum_link($paged - 1) . "'class='arrow'> << </a>";
                        for($i = 1; $i <= $total_pages; $i++) {
                            if($i === $paged) {
                                echo "<span class='current'>$i</span>";
                            } else {
                                echo "<a href='" . get_pagenum_link($i) . "' class='inactive'>$i</a>";
                            }
                        }
                        if($paged < $total_pages) echo "<a href='" . get_pagenum_link($paged + 1) . "' class='arrow'> >> </a";
                    };?>
                </div>
            <?php endif;
            wp_reset_postdata();?>
        </div>
    </div>
</div>
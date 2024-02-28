<!-- Внутри одного поста -->
        <?php get_header();?>
        <div class="container">
            <div class="section blog-page blog-description">
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
</div>
<?php get_footer();
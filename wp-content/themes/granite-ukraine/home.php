 <!-- BLOG -->
 <?php get_header();?>
 <div class="section blog-page blog-post">
    <div class="container">
        <div class="decor-light">
            <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
        </div>
        <?php
        echo get_template_part('template-parts/modules/blog');
        echo get_template_part('template-parts/modules/posts');?>
    </div>
</div>
<?php get_footer();

<?php 
$title = get_sub_field('title');
$link = get_field('secondary_button', 'options');
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1
);
$products = get_posts($args);
if('labors') :
?>
<section class="section labors decor">
    <div class="container">
        <?php if ($title):?>
            <h2 class="labors-title">
                <?php echo $title;?>
            </h2>
        <?php endif;?>
        <div class="boxes">
            <?php 
            if($products):
            foreach($products as $product) {
                $images = get_field('product_images', $product);
                if($images):
                foreach($images as $image) {
                    if(is_array($image) && !empty($image['image'])) {
                        echo '<div class="box">' . wp_get_attachment_image($image['image']['ID']) . '</div>';
                    }
                }
                endif;
            }
            endif;
            ?>
        </div>
        <div class="section-button">
            <?php 
            if( $link ): 
                $link_target = $link['target'] ? $link['target'] : '_self';?>
                <a class="btn btn-primary" href="<?php echo get_home_url();?>">
                    <?php echo esc_html( $link['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif;?>
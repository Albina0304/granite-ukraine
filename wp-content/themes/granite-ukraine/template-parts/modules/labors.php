<?php
extract($args);
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
            if ($images) :
                foreach($images as $image) {
                    if(is_array($image) && !empty($image['image'])) { ?>
                    <div class="box">
                        <a href="<?php echo $image['image']['sizes']['large'];?>" data-lightbox="labor-images">
                            <?php echo wp_get_attachment_image($image['image']['id'], 'product-card');?>
                        </a>
                    </div>
                    <?php }
                } 
            endif;?>
        </div>
        <div class="section-button">
            <?php 
            if($link): 
                $link_target = isset($link['target']) ? $link['target'] : '_self';?>
                <a class="btn btn-primary" href="#" data-product_id="<?php echo get_the_id();?>">
                    <?php echo esc_html( $link['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
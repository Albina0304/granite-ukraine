<?php
extract($args);
if ($images) :
    if($additional_images) :
        $json = json_encode($additional_images, JSON_FORCE_OBJECT);
    endif;?>
    <section id="work" class="section decor labors <?php echo isset($class_name) ? $class_name : '';?>">
        <div class="container">
            <?php if ($title) : ?>
                <h2 class="labors-title">
                    <?php echo $title;?>
                </h2>
            <?php endif;?>
            <div class="boxes" data-images='<?php echo isset($json) ? $json : '';?>'>
                <?php foreach($images as $image) :
                    if(is_array($image) && !empty($image['image'])) : ?>
                        <div class="box">
                            <a href="<?php echo $image['image']['sizes']['large'];?>" data-lightbox="labor-images">
                                <?php echo wp_get_attachment_image($image['image']['id'], 'product-card');?>
                            </a>
                        </div>
                    <?php endif;
                endforeach;?>
            </div>
            <?php if($link && $images_count > 6) : ?>
                <div class="section-button">
                    <?php $link_target = isset($link['target']) ? $link['target'] : '_self';?>
                    <a href="#" class="btn" data-product_id="<?php echo get_the_id();?>" data-page="0">
                        <?php echo esc_html( $link['title'] ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif;
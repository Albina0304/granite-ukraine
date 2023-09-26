<?php
extract($args);
if ($images) : ?>
    <section id="work" class="section decor labors">
        <div class="container">
            <?php if ($title) : ?>
                <h2 class="labors-title">
                    <?php echo $title;?>
                </h2>
            <?php endif;?>
            <div class="boxes">
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
            <?php if($link && count($images) > 5) : ?>
                <div class="section-button">
                    <?php $link_target = isset($link['target']) ? $link['target'] : '_self';?>
                    <a href="#" class="btn" data-product_id="<?php echo get_the_id();?>">
                        <?php echo esc_html( $link['title'] ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif;
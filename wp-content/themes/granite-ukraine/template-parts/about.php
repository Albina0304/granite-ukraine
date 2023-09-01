<?php 
$title = get_sub_field('title');
$description = get_sub_field('description');
$repeater = get_sub_field('repeater');
$link = get_field('btn_primary', 'options');
if('about') :
?>
<section class="section about decor-light">
    <div class="container">
        <?php if ($title):?>
            <h2 class="about-title">
                <?php echo $title;?>
            </h2>
        <?php endif;?>
        <div class="about-columns">
            <div class="column">
                <?php echo $description;?>
            </div>
            <div class="column">
                <?php
                if ($repeater) {
                    foreach ($repeater as $img) {
                        $image = $img['image'];?>
                        <?php if ($image) : ?>
                            <div class="column-image">
                                <?php echo wp_get_attachment_image($image['ID'], 'about-image'); ?>  
                            <?php endif; ?>
                        </div>
                    <?php 
                }}?>
            </div>
        </div>
        <div class="section-button">
            <?php 
            if( $link ): 
                $link_target = $link['target'] ? $link['target'] : '_self';?>
                <a class="btn btn-secondary" href="<?php echo get_home_url();?>">
                    <?php echo esc_html( $link['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif;?>

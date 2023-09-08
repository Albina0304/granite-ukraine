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
            foreach($images as $image) {
                if(is_array($image) && !empty($image['image'])) {
                    echo '<div class="box">' . wp_get_attachment_image($image['image']['ID']) . '</div>';
                }
            } ?>
        </div>
        <div class="section-button">
            <?php 
            if($link): 
                $link_target = isset($link['target']) ? $link['target'] : '_self';?>
                <a class="btn btn-primary" href="#">
                    <?php echo esc_html( $link['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
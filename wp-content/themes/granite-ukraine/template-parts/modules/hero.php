<?php
$text = get_sub_field('text');
$link = get_field('btn_primary', 'options');
?>
<section class="hero decor">
    <div class="container">
        <?php if ($text):?>
            <h1 class="hero-title">
                <?php echo $text;?>
            </h1>
        <?php endif;?>
        <div class="section-button">
            <?php 
            if( $link ): 
                $link_target = $link['target'] ? $link['target'] : '_self';?>
                <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-form" href="#">
                    <?php echo esc_html( $link['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
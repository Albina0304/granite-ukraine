<?php $text = get_sub_field('text');
$link = get_field('btn_primary', 'options');?>
<section class="hero decor">
    <div class="container">
        <div class="hero-title">
            <h1>
                <?php echo $text;?>
            </h1>
        </div>
        <div class="section-button">
            <?php 
            if( $link ): 
                $link_target = $link['target'] ? $link['target'] : '_self';?>
                <a class="btn btn-secondary" href="<?php echo get_home_url();?>/#contacts">
                    <?php echo esc_html( $link['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
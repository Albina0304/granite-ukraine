<?php
$text = get_sub_field('text');
$text_opt = get_sub_field('text_opt');
$finalText = isset($_GET['ads_content']) && $_GET['ads_content'] === 'opt' ?  $text_opt : $text;
$link = get_field('btn_primary', 'options');
if($text) : ?>
    <section class="decor hero">
        <div class="container">
            <h1 class="hero-title">
                <?php echo $finalText;?>
            </h1>
            <?php if( $link ): ?>
                <div class="section-button">
                    <?php $link_target = $link['target'] ? $link['target'] : '_self';?>
                    <a href="#" type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-form">
                        <?php echo esc_html( $link['title'] ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif;
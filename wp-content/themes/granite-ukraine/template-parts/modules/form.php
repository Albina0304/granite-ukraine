<?php 
$title_form = get_field('title_form', 'options');
$text_form = get_field('text_form', 'options');
if($title_form) :
?>
<section class="section form decor">
    <div class="form-global">
        <div class="container">
            <?php if ($title_form):?>
                <h2 class="form-title">
                    <?php echo $title_form;?>
                </h2>
            <?php endif;?>
            <?php if ($text_form):?>
                <div class="form-description">
                    <?php echo $text_form;?>
                </div>
            <?php endif;?>
            <div class="form-contact">
                <?php echo do_shortcode (__('[contact-form-7 id="4239414"]','granite-ukraine'));?>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<?php 
$title = get_sub_field('title');
$text = get_sub_field('text');
if('form') :
?>
<section class="section form decor">
    <div class="form-global">
        <div class="container">
            <?php if ($title):?>
                <h2 class="form-title">
                    <?php echo $title;?>
                </h2>
            <?php endif;?>
            <?php if ($title):?>
                <div class="form-description">
                    <?php echo $text;?>
                </div>
            <?php endif;?>
            <div class="form-contact">
                <?php echo do_shortcode('[custom_contact_form]');?>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<?php 
$title_form = get_field('title_form', 'options');
$text_form = get_field('text_form', 'options');
$form = get_field('form', 'options');
if($form) : ?>
    <section class="section decor form">
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
                <?php endif;
                if($form) : ?>
                    <div class="form-contact">
                        <?php echo $form;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </section>
<?php endif;
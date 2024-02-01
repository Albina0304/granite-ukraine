<?php
extract($args);?>
<section id="contacts contactForm" class="section form contacts">
    <div class="decor-light">
        <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
    </div>
    <div class="form-global contact-form-global">
        <div class="container">
            <div class="contact-general-description">
                <?php if ($title):?>
                    <h2 class="form-title contact-title">
                        <?php echo $title;?>
                    </h2>
                <?php endif;?>
                <?php if ($description):?>
                    <div class="form-description contact-description">
                        <?php echo $description;?>
                    </div>
                <?php endif;?>
            </div>
            <?php
            if($form_shortcode) : ?>
                <div class="form-contact contact-form">
                    <?php echo $form_shortcode;?>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>

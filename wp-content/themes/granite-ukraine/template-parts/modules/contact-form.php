<?php
if (have_rows('modules')):
    while (have_rows('modules')) : the_row();
        if (get_row_layout() === 'contact'):
            $contact_title = get_sub_field('contact_title');
            $contact_description = get_sub_field('contact_description');
            $form_shortcode = get_sub_field('form_shortcode');?>
            <section id="contacts contactForm" class="section form contacts">
                <div class="decor-light">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
                </div>
                <div class="form-global contact-form-global ">
                    <div class="container">
                        <div class="contact-general-description">
                            <?php if ($contact_title):?>
                                <h2 class="form-title contact-title">
                                    <?php echo $contact_title;?>
                                </h2>
                            <?php endif;?>
                            <?php if ($contact_description):?>
                                <div class="form-description contact-description">
                                    <?php echo $contact_description;?>
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
        <?php endif;
    endwhile;
endif;

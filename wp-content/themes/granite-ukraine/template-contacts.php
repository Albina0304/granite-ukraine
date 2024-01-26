<?php
/* Template Name: Контакти */
get_header();
if (have_rows('modules')):
    while (have_rows('modules')) : the_row();
        if (get_row_layout() === 'contact'):
            $contact_title = get_sub_field('contact_title');
            $contact_description = get_sub_field('contact_description');
            $form_shortcode = get_sub_field('form_shortcode');
            $title_popular_questions = get_sub_field('title_popular_questions');
            $description_popular_questions = get_sub_field('description_popular_questions');
            $popular_questions = get_sub_field('popular_questions');
            echo get_template_part('template-parts/modules/contact');
        endif;
    endwhile;
endif;
if($form_shortcode) : ?>
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
if($popular_questions):?>
<section class="popular-questions section decor">
    <div class="question">
        <div class="container">
            <div class="question-description">
                <?php if ($title_popular_questions):?>
                    <h2 class="question-title">
                        <?php echo $title_popular_questions;?>
                    </h2>
                <?php endif;?>
                <?php if ($description_popular_questions):?>
                    <div class="question-description">
                        <?php echo $description_popular_questions;?>
                    </div>
                <?php endif;?>
            </div>
            <div class="accordion accordion-main" id="accordion-open">
                <?php foreach ($popular_questions as $popular_question => $post_id) {
                    $postQuestions = get_post($post_id);
                    if ($postQuestions) {?>
                        <div class="accordion-item">
                            <h2 class="accordion-title" id="accordion-heading-<?php echo $popular_question; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $popular_question; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $popular_question; ?>">
                                    <?php echo esc_html($postQuestions->post_title); ?>
                                    <div class="accordion-button-img">
                                        <div class="accordion-button-img-open"></div> 
                                        <div class="accordion-button-img-close"></div> 
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse-<?php echo $popular_question; ?>" class="accordion-collapse collapse" aria-labelledby="accordion-heading-<?php echo $popular_question; ?>" data-bs-parent="#accordion-open">
                                <div class="accordion-body"><?php echo apply_filters('the_content', $postQuestions->post_content); ?></div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
</section>
<?php endif;
get_footer();
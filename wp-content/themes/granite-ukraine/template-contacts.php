<?php
/* Template Name: Контакти */
get_header();
if (have_rows('modules_contacts')):
    while (have_rows('modules_contacts')) : the_row();
        if (get_row_layout() === 'contacts'):
            echo get_template_part('template-parts/modules/contact-form', '', array(
                'title' => get_sub_field('contact_title'),
                'description' => get_sub_field('contact_description'),
                'form_shortcode' => get_sub_field('form_shortcode')
            ));
        endif;
        if(get_row_layout() === 'extensive_questions') {
            echo get_template_part('template-parts/modules/faqs', '', array(
                'faq_title' => get_sub_field('title_questions'),
                'faq_description' => get_sub_field('description_questions'),
                'faqs' => get_sub_field('questions_object'),
                'faq_link' => get_sub_field('questions_link'),
            ));
        }
    endwhile;
endif;
get_footer();
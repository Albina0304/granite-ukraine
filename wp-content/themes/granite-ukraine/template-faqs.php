<?php
/* Template Name: Faqs */
get_header();
$faqs_taxonomy = get_terms( 
    array(
        'taxonomy'   => 'faq_category',
        'hide_empty' => false,
    )
);
$faq_title = get_field('faq_title');
$faq_description = get_field('faq_description');
?>
<section class="section popular-questions decor">
    <div class="faqs">
        <div class="container">
            <div class="faqs-description">
                <?php if ($faq_title):?>
                    <h2 class="faqs-title">
                        <?php echo $faq_title;?>
                    </h2>
                <?php endif;?>
                <?php if ($faq_description):?>
                    <div class="faqs-description">
                        <?php echo $faq_description;?>
                    </div>
                <?php endif;?>
            </div>
            <?php if($faqs_taxonomy) :
                foreach($faqs_taxonomy as $faq_taxonomy) {
                    $faqs_obj = array(
                        'post_type' => 'faq',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            'relation' => 'or',
                            array(
                                'taxonomy' => 'faq_category',
                                'field' => 'term_id',
                                'terms' => $faq_taxonomy -> term_id
                            )
                        )
                    );?>
                    <h3 class="faqs-category">
                        <?php echo $faq_taxonomy->name;?>
                    </h3>
                    <?php
                    $postsfaq = get_posts($faqs_obj);
                    if($postsfaq) :
                        echo get_template_part('template-parts/modules/faq-item', '', array(
                            'faqs' => $postsfaq
                        ));
                    endif;
                };
            endif;?>
        </div>
    </div>
</section>
<?php
get_footer();
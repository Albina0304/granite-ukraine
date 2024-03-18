<?php extract($args);
?>
<section class="section popular-questions decor">
    <div class="faqs">
        <div class="container">
            <div class="faqs-main">
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
            <?php echo get_template_part('template-parts/modules/faq-item', '', array(
                'faqs' => $faqs
            ));?>
            <div class="section-button">
                <?php if (!empty($faq_link) && is_array($faq_link)) : ?>
                    <a href="<?php echo esc_url($faq_link['url']); ?>" type="button" class="btn btn-sm btn-primary">
                        <?php echo esc_html($faq_link['title']); ?>
                        1
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

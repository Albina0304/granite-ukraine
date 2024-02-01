<?php extract($args);?>
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
            <?php echo get_template_part('template-parts/modules/faq-item', '', array(
                'faqs' => $faqs
            ));?>
        </div>
    </div>
</section>

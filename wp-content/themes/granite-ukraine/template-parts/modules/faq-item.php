<?php extract($args);?>
<div class="accordion accordion-main" id="accordion-open">
    <?php if (is_array($faqs) && !empty($faqs)) {
        foreach ($faqs as $faq => $post_id) :
            $postQuestions = get_post($post_id);
            if ($postQuestions) {?>
                <div class="accordion-item">
                    <h2 class="accordion-title" id="accordion-heading-<?php echo $faq; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $faq; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $faq; ?>">
                            <?php echo esc_html($postQuestions->post_title); ?>
                            <div class="accordion-button-img">
                                <div class="accordion-button-img-open"></div> 
                                <div class="accordion-button-img-close"></div> 
                            </div>
                        </button>
                    </h2>
                    <div id="collapse-<?php echo $faq; ?>" class="accordion-collapse collapse" aria-labelledby="accordion-heading-<?php echo $faq; ?>" data-bs-parent="#accordion-open">
                        <div class="accordion-body"><?php echo apply_filters('the_content', $postQuestions->post_content); ?></div>
                    </div>
                </div>
            <?php }
        endforeach;
    };?>
</div>
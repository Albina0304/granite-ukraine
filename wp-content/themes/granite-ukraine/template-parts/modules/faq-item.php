<?php extract($args);?>
<div class="accordion accordion-main" id="faq-<?php echo isset($cat_id) ? $cat_id : '';?>">
    <?php if (is_array($faqs) && !empty($faqs)) {
        foreach ($faqs as $key => $faqPost) :
            $post = $faqPost;
            setup_postdata($post);
            if ($post) {?>
                <div class="accordion-item">
                    <h2 class="accordion-title" id="accordion-heading-<?php echo get_the_ID();?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo get_the_ID(); ?>" aria-expanded="false" aria-controls="collapse-<?php echo get_the_ID(); ?>">
                            <?php echo __(get_the_title(), 'granite-ukraine' );?>
                            <div class="accordion-button-img">
                                <div class="accordion-button-img-open"></div> 
                                <div class="accordion-button-img-close"></div> 
                            </div>
                        </button>
                    </h2>
                    <div id="collapse-<?php echo get_the_ID(); ?>" class="accordion-collapse collapse" aria-labelledby="accordion-heading-<?php echo get_the_ID(); ?>" data-bs-parent="#faq-<?php echo isset($cat_id) ? $cat_id : '';?>">
                        <div class="accordion-body"><?php echo get_the_content();?></div>
                    </div>
                </div>
            <?php }
        endforeach;
        wp_reset_postdata();
    };?>
</div>
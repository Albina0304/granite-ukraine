<?php
if (have_rows('modules')):
    while (have_rows('modules')) : the_row();
        if (get_row_layout() === 'contact'):
            $title_popular_questions = get_sub_field('title_popular_questions');
            $description_popular_questions = get_sub_field('description_popular_questions');
            $popular_questions = get_sub_field('popular_questions');?>
            <section class="section popular-questions decor">
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
                            <?php if (is_array($popular_questions) && !empty($popular_questions)) {
                                foreach ($popular_questions as $popular_question => $post_id) :
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
                                endforeach;
                            };?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;
    endwhile;
endif;
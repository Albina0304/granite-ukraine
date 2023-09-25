<?php $modconf = get_field('modal_confirmation', 'options') ;?>
<?php if($modconf):?>
    <div class="modal fade" id="confirmation">
        <div class="modal-dialog modal-dialog-centered">
            <div class="decor modal-content">
                <?php if ($modconf['image']) :?>
                    <div class="modal-image">
                        <?php echo wp_get_attachment_image($modconf['image']['ID'], 'modal-img');?>
                    </div>
                <?php endif;?>
                <?php if ($modconf['title']) :?>
                    <h3 class="modal-title-confirmation">
                        <?php echo $modconf['title'];?>
                    </h3>
                <?php endif;?>
                <?php if ($modconf['text']) :?>
                    <div class="modal-text">
                        <?php echo $modconf['text'];?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
<?php endif;?>
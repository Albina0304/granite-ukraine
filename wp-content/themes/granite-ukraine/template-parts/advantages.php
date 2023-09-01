<?php 
$title = get_sub_field('title');
$repeater_cards = get_sub_field('repeater_card');
if('advantages') :
?>
<section class="advantages decor-light section">
    <div class="container">
        <?php if ($title):?>
            <h2 class="advantage-title">
                <?php echo $title;?>
            </h2>
        <?php endif;?>
        <div class="advantage-colons">
        <?php
            if ($repeater_cards) {
                foreach ($repeater_cards as $card) {
                    $image = $card['image'];
                    $title_card = $card['title'];
                    $description = $card['description'];?>
                    <div class="advantage-card">
                        <?php if ($image) : ?>
                            <div class="image-card">
                                <?php echo wp_get_attachment_image($image['ID'], 'card-img'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($title_card) : ?>
                            <h3 class="title-card">
                                <?php echo $title_card; ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($description) : ?>
                            <div class="description-card">
                                <?php echo $description; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php 
            }}?>
        </div>
    </div>
</section>
<?php endif;?>

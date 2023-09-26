<?php 
$title = get_sub_field('title');
$repeater_cards = get_sub_field('repeater_card');
if($repeater_cards) : ?>
    <section id="advantage" class="section advantages">
        <div class="decor-light">
            <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
        </div>
        <div class="container">
            <?php if ($title):?>
                <h2 class="advantage-title">
                    <?php echo $title;?>
                </h2>
            <?php endif;?>
            <div class="advantage-colons">
                <?php foreach ($repeater_cards as $card) :
                    $image = isset($card['image']) ? $card['image'] : '';
                    $title_card = $card['title'];
                    $description = $card['description'];?>
                    <div class="advantage-card">
                        <?php if (isset ($image['ID'])) : ?>
                            <div class="advantage-image">
                                <?php echo wp_get_attachment_image($image['ID'], 'card-img'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($title_card) : ?>
                            <h3 class="advantage-card-title">
                                <?php echo $title_card; ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($description) : ?>
                            <div class="advantage-description">
                                <?php echo $description; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php endif;?>
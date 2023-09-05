<?php 
$repeater_cards = get_sub_field('address');
if('map') :
?>
<section class="map decor">
    <div class="map-global">
        <div class="container">
            <div class="address-colons">
            <?php
                if ($repeater_cards) {
                    foreach ($repeater_cards as $card) {
                        $title_card = $card['title'];
                        $description = $card['text'];?>
                        <div class="address-card">
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
            <div class="google-map">
            <?php
// Подключаем плагин WP Go Maps
//if (function_exists('insert_wpgmaps')) {
    //echo insert_wpgmaps('[wpgmza id="1"]'); // Замените "1" на ID вашей карты
//}
?>
            </div>
        </div>
    </div>
</section>
<?php endif;?>

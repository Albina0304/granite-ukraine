<?php 
$address_cards = get_field('address_cards', 'options');
// $repeater_cards = get_sub_field('address');
if($address_cards) :
?>
<section class="map decor">
    <div class="map-global">
        <div class="container">
            <div class="address-colons">
            <?php
                if ($address_cards) {
                    foreach ($address_cards as $card) {
                        $title_card = $card['country'];
                        $description = $card['address'];?>
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
            </div>
        </div>
    </div>
</section>
<?php endif;?>

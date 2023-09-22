<?php 
$address_cards = get_field('address_cards', 'options');
$maps = get_field('maps', 'options');
$latsLang = [];
if($maps && $address_cards) : ?>
    <section class="decor map">
        <div class="map-global">
            <div class="container">
                <div class="map-address-colons">
                    <?php foreach($maps as $key => $google_map) :
                        if (isset($google_map['map']['lat']) && isset($google_map['map']['lng'])) :
                        $latsLang[$key] = array(
                            'lat' => $google_map['map']['lat'], 
                            'lang' => $google_map['map']['lng']);
                        endif;?>
                        <div class="map-address-card">
                            <?php if($google_map['map']['country']): ?>
                                <h3 class="map-title">
                                    <?php echo __($google_map['map']['country'], 'granite-ukraine');?>
                                </h3>
                            <?php endif;?>
                            <?php if($google_map['map']['name']): ?>
                                <div class="map-description">
                                    <?php echo __($google_map['map']['name'].', '.$google_map['map']['city'], 'granite-ukraine');?>
                                </div>
                            <?php endif;?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php if($latsLang) : ?>
                <div id="google-map" 
                    data-latlan='<?php echo json_encode($latsLang);?>'
                    data-marker='<?php echo get_template_directory_uri();?>/assets/images/map.svg'>
                </div>
            <?php endif;?>
        </div>
    </section>
<?php endif;
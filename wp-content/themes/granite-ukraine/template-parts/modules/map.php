<?php 
$address_cards = get_field('address_cards', 'options');
$maps = get_field('maps', 'options');
$latsLang = [];?>
<section class="map decor">
    <div class="map-global">
        <div class="container">
            <div class="address-colons">
                <?php foreach($maps as $key => $google_map) {
                    $latsLang[$key] = array('lat' => $google_map['map']['lat'], 'lang' => $google_map['map']['lng']);?>
                    <div class="address-card">
                        <?php if($google_map['map']['country']): ?>
                            <h3 class="title-card">
                                <?php echo __($google_map['map']['country'], 'granite-ukraine');?>
                            </h3>
                        <?php endif;?>
                        <?php if($google_map['map']['name']): ?>
                            <div class="description-card">
                                <?php echo __($google_map['map']['name'].', '.$google_map['map']['city'], 'granite-ukraine');?>
                            </div>
                        <?php endif;?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="google-map">
            <div id="googleMap" style="width:100%;height:400px;" 
                data-latlan='<?php echo json_encode($latsLang);?>'
                data-marker='<?php echo get_template_directory_uri();?>/assets/images/map.svg'>
            </div>
        </div>
    </div>
</section>
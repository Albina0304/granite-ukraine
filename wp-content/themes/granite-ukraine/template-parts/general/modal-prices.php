<?php 
$link = get_field('btn_miscount', 'options');
$page_modal_price = get_field('modal_price');
$global_product_image = get_field('product_image', 'options');
$page_product_image = get_post_thumbnail_id();
$product_image_id = $page_product_image ? $page_product_image : $global_product_image;
$global_modal_prices = get_field('modal_price', 'options');
$modal_price = !empty($page_modal_price['prices']) ? $page_modal_price : $global_modal_prices;
$modal_price_title = !empty($modal_price['title']) ? $modal_price['title'] : $global_modal_prices['title'];?>
<div class="modal fade" id="modal-price">
    <div class="modal-dialog">
        <div class="modal-content decor">
            <div class="modal-main">
                <?php if ($modal_price_title):?>
                    <h2 class="modal-title">
                        <?php echo $modal_price_title;?>
                    </h2>
                <?php endif;?>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="Property 1=close, color=black"><mask id="mask0_427_77246" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24"><rect id="Bounding box" width="24" height="24" fill="#D9D9D9"/></mask><g mask="url(#mask0_427_77246)"><path id="close" d="M12 13.0538L6.92689 18.1269C6.78844 18.2654 6.6144 18.3362 6.40479 18.3394C6.19519 18.3426 6.01795 18.2718 5.87309 18.1269C5.7282 17.982 5.65576 17.8064 5.65576 17.6C5.65576 17.3936 5.7282 17.218 5.87309 17.0731L10.9462 12L5.87309 6.9269C5.73462 6.78845 5.66379 6.61442 5.66059 6.4048C5.65737 6.1952 5.7282 6.01797 5.87309 5.8731C6.01795 5.72822 6.19359 5.65578 6.39999 5.65578C6.60639 5.65578 6.78202 5.72822 6.92689 5.8731L12 10.9462L17.0731 5.8731C17.2115 5.73464 17.3856 5.6638 17.5952 5.6606C17.8048 5.65739 17.982 5.72822 18.1269 5.8731C18.2718 6.01797 18.3442 6.1936 18.3442 6.4C18.3442 6.6064 18.2718 6.78203 18.1269 6.9269L13.0538 12L18.1269 17.0731C18.2654 17.2116 18.3362 17.3856 18.3394 17.5952C18.3426 17.8048 18.2718 17.982 18.1269 18.1269C17.982 18.2718 17.8064 18.3442 17.6 18.3442C17.3936 18.3442 17.218 18.2718 17.0731 18.1269L12 13.0538Z" fill="#ffff"/></g></g></svg></button>
            </div>
            <div class="body-price">
                <table class="body-price-table">
                    <thead>
                        <tr>
                            <th><?php echo __('Продукт', 'granite-ukraine');?></th>
                            <th><?php echo __('Розмір', 'granite-ukraine');?></th>
                            <th><?php echo __('Ціна', 'granite-ukraine');?></th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php if (is_array($modal_price['prices']) && !empty($modal_price['prices'])) :
                            foreach ($modal_price['prices'] as $price) :?>
                                <tr>
                                    <td>
                                        <?php echo wp_get_attachment_image($product_image_id, 'price-image'); ?>
                                    </td>
                                    <td>
                                        <?php foreach($price['sizes'] as $size) {
                                            echo $size['size'].'<br>';
                                        }?>
                                    </td>
                                    <td>
                                        <?php echo $price['cost'] .__(' ₸ ', 'granite-ukraine'); ?>
                                    </td>
                                </tr>
                            <?php endforeach;
                        endif;?>
                    </tbody>
                </table>
            </div>
            <?php if( $link ): ?>
                <div class="section-button">
                    <?php $link_target = $link['target'] ? $link['target'] : '_self';?>
                    <a href="#" type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-form">
                        <?php echo esc_html( $link['title'] ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
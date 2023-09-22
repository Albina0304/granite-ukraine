<?php
add_action("wp_ajax_labor_action", "labor_ajax");
add_action("wp_ajax_nopriv_labor_action", "labor_ajax");

function labor_ajax() {
	if ($_GET['post_id']):
		$product_images = get_field('product_images', $_GET['post_id']);
	endif;
	$images = array_slice($product_images, 6, -1);
	ob_start();
	if($images) {
		foreach($images as $image) {
			if(is_array($image) && !empty($image['image'])) { ?>
				<div class="box">
					<a href="<?php echo $image['image']['sizes']['large'];?>" data-lightbox="labor-images">
						<?php echo wp_get_attachment_image($image['image']['id'], 'product-card');?>
					</a>
				</div>
			<?php }
		} 
	}
	$image_boxes = ob_get_clean();
	return wp_send_json_success($image_boxes);
   	die();
}
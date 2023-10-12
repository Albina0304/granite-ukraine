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
add_action("wp_ajax_labor_action_home", "labor_ajax_home");
add_action("wp_ajax_nopriv_labor_action_home", "labor_ajax_home");

function labor_ajax_home() {
	if (!$_POST['images']) return;
		$images = $_POST['images'];
		$page = $_POST['page'];
		$counImages = count($images);
		$images = array_slice($images, 8 * $page, 8);
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
	return wp_send_json_success(
		array(
			'content' => $image_boxes,
			'lastPosts' => $counImages <= 8 * $page + 8
		)
	);
   	die();
}
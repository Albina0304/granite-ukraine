<?php 
$title = get_sub_field('title');
$description = get_sub_field('description');
$repeater = get_sub_field('repeater');
$link = get_field('btn_primary', 'options');
$utm_about = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
if ($utm_about === 'opt') {
    $about_images = get_sub_field('about_opt');
} else {
    $about_images = get_sub_field('repeater');
}
if($about_images&& $description) : ?>
    <section id="about-us" class="section about">
        <div class="decor-light">
            <img src="<?php echo get_template_directory_uri().'/assets/images/declight.png';?>" alt="" loading="lazy">
        </div>
        <div class="container">
            <?php if ($title) : ?>
                <h2 class="about-title">
                    <?php echo $title;?>
                </h2>
            <?php endif;?>
            <div class="about-columns">
                <?php if ($description) : ?>
                    <div class="about-column">
                        <?php echo $description;?>
                    </div>
                <?php endif;
                if ($about_images) : ?>
                    <div class="about-column">
                        <?php foreach ($about_images as $img) :
                            $image = isset($img['image']) ? $img['image'] : '';
                            if (isset($image['ID'])) : ?>
                                <div class="about-column-image">
                                    <?php echo wp_get_attachment_image($image['ID'], 'about-image-opt'); ?>  
                                </div>
                            <?php endif;
                        endforeach;?>
                    </div>
                <?php endif;?>    
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
    </section>
<?php endif;

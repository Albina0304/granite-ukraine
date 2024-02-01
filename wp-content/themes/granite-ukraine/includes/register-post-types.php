<?php
function granite_ukraine() {
	$labels = array(
		'name'                  => _x( 'Продукти', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Продукт', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Продукти', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Продукт', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Додати новий', 'textdomain' ),
        'add_new_item'          => __( 'Додати новий продукт', 'textdomain' ),
        'new_item'              => __( 'Новий продукт', 'textdomain' ),
        'edit_item'             => __( 'Редагувати продукт', 'textdomain' ),
        'view_item'             => __( 'Переглянути продукт', 'textdomain' ),
        'all_items'             => __( 'Всі продукти', 'textdomain' ),
        'search_items'          => __( 'Пошук продуктів', 'textdomain' ),
        'parent_item_colon'     => __( 'Основні продукти:', 'textdomain' ),
        'not_found'             => __( 'Продукти не знайдено.', 'textdomain' ),
        'not_found_in_trash'    => __( 'У кошику не знайдено продуктів.', 'textdomain' ),
        'featured_image'        => _x( 'Обкладинка продукту', 'textdomain' ),
        'set_featured_image'    => _x( 'Встановити зображення обкладинки', 'textdomain' ), 
        'remove_featured_image' => _x( 'Видалити зображення обкладинки', 'textdomain' ),
        'use_featured_image'    => _x( 'Використовувати як обкладинку', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
	);

	register_post_type( 'product', $args );

	$labels_faq = array(
		'name'                  => _x( 'FAQs', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'FAQ', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'FAQs', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'FAQ', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Додати новий', 'textdomain' ),
        'add_new_item'          => __( 'Додати новий FAQ', 'textdomain' ),
        'new_item'              => __( 'Новий FAQ', 'textdomain' ),
        'edit_item'             => __( 'Редагувати FAQ', 'textdomain' ),
        'view_item'             => __( 'Переглянути FAQ', 'textdomain' ),
        'all_items'             => __( 'Всі FAQs', 'textdomain' ),
        'search_items'          => __( 'Пошук FAQs', 'textdomain' ),
        'parent_item_colon'     => __( 'Основні FAQs:', 'textdomain' ),
        'not_found'             => __( 'FAQs не знайдено.', 'textdomain' ),
        'not_found_in_trash'    => __( 'У кошику не знайдено FAQs.', 'textdomain' ),
        'featured_image'        => _x( 'Обкладинка FAQ', 'textdomain' ),
        'set_featured_image'    => _x( 'Встановити зображення обкладинки', 'textdomain' ), 
        'remove_featured_image' => _x( 'Видалити зображення обкладинки', 'textdomain' ),
        'use_featured_image'    => _x( 'Використовувати як обкладинку', 'textdomain' ),
	);

	$args_faqs = array(
		'labels'             => $labels_faq,
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor'),
	);

	register_post_type( 'faq', $args_faqs );

	$labels_category = array(
		'name'              => _x( 'FAQ Category', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'FAQ Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Пошук FAQ Category', 'textdomain' ),
		'all_items'         => __( 'Всі FAQ Category', 'textdomain' ),
		'parent_item'       => __( 'Parent FAQ Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent FAQ Category:', 'textdomain' ),
		'edit_item'         => __( 'Закрити FAQ Category', 'textdomain' ),
		'update_item'       => __( 'Оновити FAQ Category', 'textdomain' ),
		'add_new_item'      => __( 'Додати FAQ Category', 'textdomain' ),
		'new_item_name'     => __( 'Нова FAQ Category', 'textdomain' ),
		'menu_name'         => __( 'FAQ Category', 'textdomain' ),
	);
	$args_category = array(
		'hierarchical'      => true,
		'labels'            => $labels_category,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);
	register_taxonomy( 'faq_category', array( 'faq' ), $args_category );
}
add_action( 'init', 'granite_ukraine' );
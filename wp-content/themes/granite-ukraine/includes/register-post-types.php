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
}
add_action( 'init', 'granite_ukraine' );
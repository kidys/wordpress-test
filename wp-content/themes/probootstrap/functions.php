<?php

/**
 * Register and Enqueue Styles.
 */
function probootstrap_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'probootstrap-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'probootstrap-style', 'rtl', 'replace' );

	// Add style CSS.
	wp_enqueue_style( 'probootstrap-style', get_template_directory_uri() . '/style.css', null, $theme_version );

}

add_action( 'wp_enqueue_scripts', 'probootstrap_register_styles' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function probootstrap_menus() {

	$locations = array(
		'primary'  => 'Главное верхнее меню'
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'probootstrap_menus' );

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'our-products', [
		'label'  => null,
		'labels' => [
			'name'               => 'Наши продукты',
			'singular_name'      => 'Наш продукт',
			'add_new'            => 'Добавить наш продукт',
			'add_new_item'       => 'Добавление нашего продукта',
			'edit_item'          => 'Редактирование нашего продукта',
			'new_item'           => 'Новый наш продукт',
			'view_item'          => 'Смотреть наш продукт',
			'search_items'       => 'Искать наш продукт',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Продукты',
		],
		'description'         => 'Описание типа записей наших продуктов',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-wordpress',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}
<?php

/*------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------
	## CUSTOM BODY CLASSES
--------------------------------------------------------------------------------------
------------------------------------------------------------------------------------*/

function custom_body_class( $classes ) {

	if ( is_page_template( 'front-page.php' ) ) {
		$classes[] = 'home';
	} else {
		$classes[] = 'internal';
	}
	if ( is_page_template( 'page-about-us.php' ) ) {
		$classes[] = 'about-us';
	}
	if ( is_page_template( 'page-blogie.php' ) ) {
		$classes[] = 'blogie';
	}
	if ( is_page_template( 'page-contact.php' ) ) {
		$classes[] = 'contact';
	}
	if ( is_page_template( 'page-experiences.php' ) ) {
		$classes[] = 'experiences';
	}
	if ( is_singular( 'post' ) ) {
		$classes[] = 'single-blogie';
	}
	if ( is_singular( 'experience' ) ) {
		$classes[] = 'single-experiences';
	}
	if ( is_404() ){
		$classes[] = 'error-404';
	}

	return $classes;
}

add_filter( 'body_class','custom_body_class' );

/*------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------
	## THUMBNAILS
--------------------------------------------------------------------------------------
------------------------------------------------------------------------------------*/

add_theme_support( 'post-thumbnails' );

/*------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------
	## MENUS
--------------------------------------------------------------------------------------
------------------------------------------------------------------------------------*/

function flowie_register_nav_menu() {
	register_nav_menus( array(
		'top_menu' => __( 'Top Menu', 'top-menu' ),
		'fs_menu'  => __( 'FS Menu', 'fs-menu' ),
	));
}

add_action( 'after_setup_theme', 'flowie_register_nav_menu', 0 );

function top_menu_walker($item_output, $item, $depth, $args) { 
	$menu_locations = get_nav_menu_locations();
	if ( has_term($menu_locations['top_menu'], 'nav_menu', $item) ) { 
		$item_output = preg_replace('/<a /', '<a class="text-smaller" ', $item_output, 1);
	} elseif ( has_term($menu_locations['fs_menu'], 'nav_menu', $item) ) { 
		$item_output = preg_replace('/<a /', '<a class="hvr-bounce-to-right text-bigger" ', $item_output, -1); 
	}
	return $item_output; 
}

add_filter('walker_nav_menu_start_el', 'top_menu_walker', 10, 4);

add_action('nav_menu_css_class', function ($classes, $item) {

	$post = get_queried_object();

	if (isset($post->post_type)) {
		if ($post->post_type == 'post') {
			$current_post_type_slug = get_permalink(get_option('page_for_posts'));
		} else {
			$current_post_type = get_post_type_object(get_post_type($post->ID));
			$current_post_type_slug = $current_post_type->rewrite['slug'];
		}

		$menu_slug = strtolower(trim($item->url));

		if (strpos($menu_slug, $current_post_type_slug) !== false) {
			$classes[] = 'current-menu-item';
		}
	}

	return $classes;

}, 10, 2);

/*------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------
	## CONTACT INFOS
--------------------------------------------------------------------------------------
------------------------------------------------------------------------------------*/

function contact_infos_init() {
	register_sidebar( array(
		'name' => 'Contact Infos',
		'id' => 'contact_infos',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

add_action( 'widgets_init', 'contact_infos_init' );
add_action( 'admin_menu', 'my_plugin_menu' );

function my_plugin_menu() {
	add_menu_page(
		'Contact Infos',
		'Contact Infos', 
		'manage_options',
		'contact-infos.php',
		'racing_config'
	);
}

function racing_config(){
	get_template_part('template-parts/contact-infos');
}

function redirect($a, $b) {
	echo "<script language=\"javascript\">setTimeout(\"location.href='$a'\",$b);</script>";
}

/*------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------
	## TEAM MEMBERS
--------------------------------------------------------------------------------------
------------------------------------------------------------------------------------*/

function custom_team() {
	$args = array(
		'labels' => array(
			'name' => 'Team Members',
			'singular_name' => 'Team Member',
			'menu_name' => 'Team Members',
			'name_admin_bar' => 'Team Members',
			'add_new' => 'New Team Member',
			'add_new_item' => 'Add New Team Member',
			'new_item' => 'New Team Member',
			'edit_item' => 'Edit Team Member',
			'public' => false,
			'view_item' => 'View Team Member',
			'all_items' => 'All Team Members',
			'search_items' => 'Search Team Member',
			'parent_item_colon' => 'Parent Team Member:',
			'not_found' => 'No Team Member found.',
			'not_found_in_trash' => 'No Team Member found in Trash.',
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'team-member'),
		'capability_type' => 'page',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => array(
			'title',
			'custom-fields',
		),
	);
	flush_rewrite_rules();
	register_post_type('team-member', $args);
}

add_action('init', 'custom_team');

/*------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------
	## EXPERIENCES
--------------------------------------------------------------------------------------
------------------------------------------------------------------------------------*/

function experiences() {
	$args = array(
		'labels' => array(
			'name' => 'Experiences',
			'singular_name' => 'Experience',
			'menu_name' => 'Experiences',
			'name_admin_bar' => 'Experiences',
			'add_new' => 'New Experience',
			'add_new_item' => 'Add New Experience',
			'new_item' => 'New Experience',
			'edit_item' => 'Edit Experience',
			'public' => false,
			'view_item' => 'View Experience',
			'all_items' => 'All Experiences',
			'search_items' => 'Search Experience',
			'parent_item_colon' => 'Parent Experience:',
			'not_found' => 'No Experience found.',
			'not_found_in_trash' => 'No Experience found in Trash.',
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'experience'),
		'capability_type' => 'page',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-palmtree',
		'supports' => array(
			'title',
			'custom-fields',
		),
	);
	flush_rewrite_rules();
	register_post_type('experience', $args);
}

add_action('init', 'experiences');

/*------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------
	## WP ADJUSTMENTS
--------------------------------------------------------------------------------------
------------------------------------------------------------------------------------*/

function wp_adjustments() {
	remove_filter( 'the_excerpt', 'wpautop' );
    remove_filter('acf_the_content', 'wpautop' );
	add_filter( 'acf_the_content', 'nl2br' );
}

add_action('acf/init', 'wp_adjustments');

function p_content_class($content){
	return preg_replace('/<p([^>]+)?>/', '<p$1 class="text-small wow fadeInUp">', $content, -1);
}

add_filter('the_content', 'p_content_class');

function h2_content_class($content){
	return preg_replace('/<h2([^>]+)?>/', '<h2$1 class="text-big wow fadeInUp">', $content, -1);
}

add_filter('the_content', 'h2_content_class');

function a_content_class($content){
	return preg_replace('/<a([^>]+)?>/', '<a$1 class="hvr-underline-from-left">', $content, -1);
}

add_filter('the_content', 'a_content_class');

function figure_content_class($content){
	return preg_replace('/<figcaption([^>]+)?>/', '<figcaption$1 class="text-small legend">', $content, -1);
}

add_filter('the_content', 'figure_content_class');
<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function lrb_register_product() {

	$labels = array(
		'name'                => 'Products',
		'singular_name'       => 'Product',
		'menu_name'           => 'Products',
		'name_admin_bar'      => 'Post Type',
		'parent_item_colon'   => 'Products',
		'all_items'           => 'products',
		'add_new_item'        => 'Add New products',
		'add_new'             => 'Add New products',
		'new_item'            => 'New products',
		'edit_item'           => 'Edit products',
		'update_item'         => 'Update products',
		'view_item'           => 'View products',
		'search_items'        => 'Search products',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => '',
		'description'         => 'products are delicious items that Le Red Bread sells',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-cart',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'products',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'lrb_register_product', 0 );

function lrb_register_testimonial() {
	$labels = array(
		'name'                => 'Testimonials',
		'singular_name'       => 'Testimonial',
		'menu_name'           => 'Testimonials',
		'name_admin_bar'      => 'Post Type',
		'parent_item_colon'   => 'Testimonials',
		'all_items'           => 'Testimonials',
		'add_new_item'        => 'Add New Testimonials',
		'add_new'             => 'Add New Testimonials',
		'new_item'            => 'New Testimonials',
		'edit_item'           => 'Edit Testimonials',
		'update_item'         => 'Update Testimonials',
		'view_item'           => 'View Testimonials',
		'search_items'        => 'Search Testimonials',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => '',
		'description'         => 'What others say about us',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-cart',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'testimonials',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'lrb_register_testimonial', 0 );
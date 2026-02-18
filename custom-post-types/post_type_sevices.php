<?php add_action( 'init', 'services_post_type' );
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function services_post_type() {
	$labels = array(
		'name' => 'Services',
		'singular_name' => 'Services',
		'add_new' => 'Add Service',
		'add_new_item' => 'Add Service',
		'edit_item' => 'Edit Service',
		'new_item' => 'New Service',
		'all_items' => __( 'All Services' ),
		'view_item' => 'View Service',
		'search_items' => 'Search Service',
		'not_found' =>  'No Service',
		'not_found_in_trash' => 'No Service in the trash',
		'parent_item_colon' => '',
	);

	register_post_type( 'services', array(
		'labels' => $labels,
		'public' => true,
        'publicly_queryable'=>false,
		'show_ui' => true,
		'exclude_from_search' => true,
		'query_var' => true,
        'rewrite'   => array( 'slug' => false, 'with_front' => false ),
        'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 10,
		'supports' => array( 'title','editor','thumbnail','page-attributes' ),

	
	) );

}

function services_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'services_categories', array( 'services' ), $args );
}
add_action( 'init', 'services_taxonomies', 0 );

?>
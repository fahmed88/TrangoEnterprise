<?php add_action( 'init', 'why_choose_us_post_type' );
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function why_choose_us_post_type() {
	$labels = array(
		'name' => 'Why Choose Us',
		'singular_name' => 'Why Choose Us',
		'add_new' => 'Add Text In Why Choose Us',
		'add_new_item' => 'Add Text In Why Choose Us',
		'edit_item' => 'Edit In Why Choose Us',
		'new_item' => 'New Why Choose Us',
		'all_items' => __( 'All Why Choose Us Text' ),
		'view_item' => 'View Why Choose Us',
		'search_items' => 'Search Why Choose Us',
		'not_found' =>  'No Why Choose Us',
		'not_found_in_trash' => 'No Why Choose Us in the trash',
		'parent_item_colon' => '',
	);

	register_post_type( 'why_choose_us', array(
		'labels' => $labels,
		'public' => true,
        'publicly_queryable'=>false,
		'show_ui' => true,
		'exclude_from_search' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 10,
		'supports' => array( 'title','editor','thumbnail' ),
		//'taxonomies' => array('category', 'post_tag')
	
	) );

}


function why_choose_us_taxonomies() {
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

    register_taxonomy( 'why_choose_us_categories', array( 'why_choose_us' ), $args );
}
add_action( 'init', 'why_choose_us_taxonomies', 0 );



if(function_exists('acf_add_local_field_group')){

	$fields = array (
	   array (
		  'key' => 'icon_html',
		  'label' => 'icon_html',
		  'name' => 'icon_html',
		  'type' => 'textarea',
		  'required' => 1,
	   ),
	);
 
	acf_add_local_field_group(array(
	   'key' => 'why_choose_us_group',
	   'title' => 'Custom Fields',
	   'fields' => $fields,
	   'location' => array (
		  array (
			 array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'why_choose_us',
			 ),
		  ),
	   ),
	));
 }

?>
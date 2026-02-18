<?php
add_action('init', 'dev_process_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function dev_process_post_type() {
    $labels = array(
        'name' => _x('Development Process', 'post type general name'),
        'singular_name' => _x('Development Process', 'post type singular name'),
        'add_new' => _x('Add New Development Process', 'Team Member'),
        'add_new_item' => __('Add Development Process'),
        'edit_item' => __('Edit Development Process'),
        'new_item' => __('New Development Process'),
        'view_item' => __('View Development Process'),
        'search_items' => __('Search Development Process'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'=>false,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 8,
        'supports' => array('title','editor','thumbnail','page-attributes','revisions')
    ); 
    register_post_type( 'dev_process' , $args );
}

function dev_process_taxonomies() {
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

    register_taxonomy( 'dev_process_categories', array( 'dev_process' ), $args );
}
add_action( 'init', 'dev_process_taxonomies', 0 );
?>
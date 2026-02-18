<?php
add_action('init', 'integration_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function integration_post_type() {
    $labels = array(
        'name' => _x('Integration Tabs', 'post type general name'),
        'singular_name' => _x('Integration Tabs', 'post type singular name'),
        'add_new' => _x('Add New Integration Tabs', 'Team Member'),
        'add_new_item' => __('Add Integration Tabs'),
        'edit_item' => __('Edit Integration Tabs'),
        'new_item' => __('New Integration Tabs'),
        'view_item' => __('View Integration Tabs'),
        'search_items' => __('Search Integration Tabs'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 8,
        'supports' => array('title','editor','thumbnail','page-attributes')
    ); 
    register_post_type( 'integration_tabs' , $args );
}


function integration_taxonomies() {
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

    register_taxonomy( 'integration_categories', array( 'integration_tabs' ), $args );
}
add_action( 'init', 'integration_taxonomies', 0 ); ?>
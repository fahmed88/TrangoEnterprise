<?php
add_action('init', 'affiliations_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function affiliations_post_type() {
    $labels = array(
        'name' => _x('Affiliations Logos', 'post type general name'),
        'singular_name' => _x('Affiliations Logos', 'post type singular name'),
        'add_new' => _x('Add New Affiliations Logos', 'Team Member'),
        'add_new_item' => __('Add Affiliations Logos'),
        'edit_item' => __('Edit Affiliations Logos'),
        'new_item' => __('New Affiliations Logos'),
        'view_item' => __('View Affiliations Logos'),
        'search_items' => __('Search Affiliations Logos'),
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
    register_post_type( 'affiliations_logos' , $args );
}


function affiliations_taxonomies() {
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

    register_taxonomy( 'affiliations_categories', array( 'affiliations_logos' ), $args );
}
add_action( 'init', 'affiliations_taxonomies', 0 ); ?>
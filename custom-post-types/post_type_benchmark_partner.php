<?php
add_action('init', 'benchmark_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function benchmark_post_type() {
    $labels = array(
        'name' => _x('Benchmark Partner', 'post type general name'),
        'singular_name' => _x('Benchmark Partner', 'post type singular name'),
        'add_new' => _x('Add New Benchmark Partner', 'Team Member'),
        'add_new_item' => __('Add Benchmark Partner'),
        'edit_item' => __('Edit Benchmark Partner'),
        'new_item' => __('New Benchmark Partner'),
        'view_item' => __('View Benchmark Partner'),
        'search_items' => __('Search Benchmark Partner'),
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
    register_post_type( 'benchmark_tabs' , $args );
}


function benchmark_taxonomies() {
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

    register_taxonomy( 'benchmark_categories', array( 'benchmark_tabs' ), $args );
}
add_action( 'init', 'benchmark_taxonomies', 0 ); ?>
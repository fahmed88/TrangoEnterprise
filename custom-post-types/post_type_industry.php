<?php

function custom_post_type_industry() {
   $supports = array(
      'title', 
      'editor', 
      // 'author', 
      'thumbnail', 
      // 'excerpt', 
      // 'custom-fields', 
      // 'comments', 
      // 'revisions', 
      'post-formats',
   );

   $labels = array(
      'name' => _x('Industries', 'plural'),
      'singular_name' => _x('industry', 'singular'),
      'menu_name' => _x('Industries', 'admin menu'),
      'name_admin_bar' => _x('industry', 'admin bar'),
      'add_new' => _x('Add New Industry', 'add new'),
      'add_new_item' => __('Add New Industry'),
      'new_item' => __('New Industry'),
      'edit_item' => __('Edit Industry'),
      'view_item' => __('View Industry'),
      'all_items' => __('All Industries'),
      'search_items' => __('Search Industry'),
      'not_found' => __('No Industry found.'),
   );

   $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'industry'),
      'has_archive' => false,
      'hierarchical' => false,
   );
   
   register_post_type('industry', $args);
}
add_action('init', 'custom_post_type_industry');

function industry_taxonomies() {
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

    register_taxonomy( 'industry_categories', array( 'industry' ), $args );
}
add_action( 'init', 'industry_taxonomies', 0 );
<?php

function custom_post_type_job() {
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
      'name' => _x('Jobs', 'plural'),
      'singular_name' => _x('job', 'singular'),
      'menu_name' => _x('Jobs', 'admin menu'),
      'name_admin_bar' => _x('job', 'admin bar'),
      'add_new' => _x('Add New Job', 'add new'),
      'add_new_item' => __('Add New Job'),
      'new_item' => __('New Job'),
      'edit_item' => __('Edit Job'),
      'view_item' => __('View Job'),
      'all_items' => __('All Jobs'),
      'search_items' => __('Search Job'),
      'not_found' => __('No Job found.'),
   );

   $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'job'),
      'has_archive' => false,
      'hierarchical' => false,
      'publicly_queryable' => false,
   );
   
   register_post_type('job', $args);
}
add_action('init', 'custom_post_type_job');

function job_taxonomies() {
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
        'show_in_menu'      => false,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'job_categories', array( 'job' ), $args );
}
add_action( 'init', 'job_taxonomies', 0 );

if(function_exists('acf_add_local_field_group')){

   $fields = array (
      array (
         'key' => 'job_location',
         'label' => 'Location',
         'name' => 'job_location',
         'type' => 'text',
         'required' => 1,
      ),
   );

   acf_add_local_field_group(array(
      'key' => 'job_group',
      'title' => 'Custom Fields',
      'fields' => $fields,
      'location' => array (
         array (
            array (
               'param' => 'post_type',
               'operator' => '==',
               'value' => 'job',
            ),
         ),
      ),
   ));
}
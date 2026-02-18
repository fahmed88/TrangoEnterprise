<?php

function custom_post_type_questionnaire() {
   $supports = array(
      'title', 
      'editor', 
      // 'author', 
      'thumbnail', 
      // 'excerpt', 
      // 'custom-fields', 
      // 'comments', 
       'revisions', 
      'post-formats',
     'page-attributes',
   );
   $labels = array(
      'name' => _x('Questionnaires', 'plural'),
      'singular_name' => _x('questionnaire', 'singular'),
      'menu_name' => _x('Questionnaires', 'admin menu'),
      'name_admin_bar' => _x('questionnaire', 'admin bar'),
      'add_new' => _x('Add New Questionnaire', 'add new'),
      'add_new_item' => __('Add New Questionnaire'),
      'new_item' => __('New Questionnaire'),
      'edit_item' => __('Edit Questionnaire'),
      'view_item' => __('View Questionnaire'),
      'all_items' => __('All Questionnaires'),
      'search_items' => __('Search Questionnaire'),
      'not_found' => __('No Questionnaire found.'),
   );
   $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'publicly_queryable'=>false,
      'query_var' => true,
      'rewrite' => array('slug' => 'Questionnaire'),
      'has_archive' => true,
      'hierarchical' => false,
   );
   register_post_type('Questionnaire', $args);
}
add_action('init', 'custom_post_type_questionnaire');

function questionnaire_taxonomies() {
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

    register_taxonomy( 'questionnaire', array( 'questionnaire' ), $args );
}
add_action( 'init', 'questionnaire_taxonomies', 0 );
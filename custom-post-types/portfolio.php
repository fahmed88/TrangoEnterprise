<?php

function custom_post_type_portfolio() {
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
      'name' => _x('Portfolios', 'plural'),
      'singular_name' => _x('portfolio', 'singular'),
      'menu_name' => _x('Portfolios', 'admin menu'),
      'name_admin_bar' => _x('portfolio', 'admin bar'),
      'add_new' => _x('Add New Portfolio', 'add new'),
      'add_new_item' => __('Add New Portfolio'),
      'new_item' => __('New Portfolio'),
      'edit_item' => __('Edit Portfolio'),
      'view_item' => __('View Portfolio'),
      'all_items' => __('All Portfolios'),
      'search_items' => __('Search Portfolio'),
      'not_found' => __('No Portfolio found.'),
   );

   $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'portfolio'),
      'has_archive' => false,
      'hierarchical' => false,
   );
   
   register_post_type('portfolio', $args);
}
add_action('init', 'custom_post_type_portfolio');

function portfolio_taxonomies() {
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

    register_taxonomy( 'portfolio_categories', array( 'portfolio' ), $args );
}
add_action( 'init', 'portfolio_taxonomies', 0 );

if(function_exists('acf_add_local_field_group')){

   $fields = array (
      array (
         'key' => 'portfolio_card_image',
         'label' => 'Card Image',
         'name' => 'portfolio_card_image',
         'type' => 'image',
         'required' => 1,
      ),
   );

   acf_add_local_field_group(array(
      'key' => 'portfolio_group',
      'title' => 'Custom Fields',
      'fields' => $fields,
      'location' => array (
         array (
            array (
               'param' => 'post_type',
               'operator' => '==',
               'value' => 'portfolio',
            ),
         ),
      ),
   ));
}
<?php

function custom_post_type_certificate() {
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
      'name' => _x('Certificates', 'plural'),
      'singular_name' => _x('certificate', 'singular'),
      'menu_name' => _x('Certificates', 'admin menu'),
      'name_admin_bar' => _x('certificate', 'admin bar'),
      'add_new' => _x('Add New Certificate', 'add new'),
      'add_new_item' => __('Add New Certificate'),
      'new_item' => __('New Certificate'),
      'edit_item' => __('Edit Certificate'),
      'view_item' => __('View Certificate'),
      'all_items' => __('All Certificates'),
      'search_items' => __('Search Certificate'),
      'not_found' => __('No Certificate found.'),
   );

   $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => false,
      'query_var' => true,
      'rewrite' => array('slug' => 'certificate'),
      'has_archive' => true,
      'hierarchical' => false,
   );
   
   register_post_type('certificate', $args);
}
add_action('init', 'custom_post_type_certificate');

if(function_exists('acf_add_local_field_group')){
   $fields = array (
      array(
         'key'          => 'certificate_bullets',
         'name'         => 'certificate_bullets',
         'label' => '',
         'type'         => 'repeater',
         'instructions' => '',
         'sub_fields'   => array(
            array(
               'key'   => 'title',
               'label' => 'Title',
               'name'  => 'title',
               'type'  => 'text',
               'required'  => 1,
            ),
            array (
               'key' => 'logo',
               'label' => 'Logo',
               'name' => 'logo',
               'type' => 'image',
               'required' => 1,
               'preview_size' => 'thumbnail',
            ),
         ),
         'button_label' => 'Add',
         'min'          => '1',
         'max'          => '9',
      ),
   );

   acf_add_local_field_group(array(
      'key' => 'certificate_cf_group',
      'title' => 'Custom Fields',
      'fields' => $fields,
      'location' => array (
         array (
            array (
               'param' => 'post_type',
               'operator' => '==',
               'value' => 'certificate',
            ),
         ),
      ),
   ));
}

function certificate_taxonomies() {
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

    register_taxonomy( 'certificate_categories', array( 'certificate' ), $args );
}
add_action( 'init', 'certificate_taxonomies', 0 );
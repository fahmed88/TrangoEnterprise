<?php

function custom_post_type_domain() {
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
      'name' => _x('Domains', 'plural'),
      'singular_name' => _x('domain', 'singular'),
      'menu_name' => _x('Domains', 'admin menu'),
      'name_admin_bar' => _x('domain', 'admin bar'),
      'add_new' => _x('Add New Domain', 'add new'),
      'add_new_item' => __('Add New Domain'),
      'new_item' => __('New Domain'),
      'edit_item' => __('Edit Domain'),
      'view_item' => __('View Domain'),
      'all_items' => __('All Domains'),
      'search_items' => __('Search Domain'),
      'not_found' => __('No Domain found.'),
   );
   $args = array(
      'supports' => $supports,
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => false,
      'query_var' => true,
      'rewrite' => array('slug' => 'domain'),
      'has_archive' => true,
      'hierarchical' => false,
   );
   register_post_type('domain', $args);
}
add_action('init', 'custom_post_type_domain');
if(function_exists('acf_add_local_field_group')){
   acf_add_local_field_group( array(
      'key'        => 'group_bullets',
      'title'      => 'Domain',
      'fields'     => array(
         array(
            'key'          => 'bullets',
            'name'         => 'bullets',
            'type'         => 'repeater',
            'instructions' => '',
            'sub_fields'   => array(
               array(
                  'key'   => 'image',
                  'label' => 'Slider Image',
                  'name'  => 'image',
                  'type'  => 'image',
               ),
            ),
            'button_label' => 'Add',
            'min'          => '1',
            'max'          => '8',
         ),
         array(
            'key'   => 'page_link',
            'label' => 'page_link',
            'name'  => 'page_link',
            'type'  => 'text',
         ),
      ),   
      
      
      
      'location'   => array(
         array(
            array(
               'param' => 'post_type',
               'operator' => '==',
               'value' => 'domain',
            ),
         ),
      ),
   ) );
}



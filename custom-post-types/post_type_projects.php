<?php
add_action('init', 'project_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function project_post_type() {
    $labels = array(
        'name' => _x('Projects', 'post type general name'),
        'singular_name' => _x('Projects', 'post type singular name'),
        'add_new' => _x('Add New Project', 'Team Member'),
        'add_new_item' => __('Add Project'),
        'edit_item' => __('Edit Project'),
        'new_item' => __('New Project'),
        'view_item' => __('View Project'),
        'search_items' => __('Search Project'),
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
    register_post_type( 'projects' , $args );
}


function project_taxonomies() {
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

    register_taxonomy( 'project_categories', array( 'projects' ), $args );
}
add_action( 'init', 'project_taxonomies', 0 );

//  ACF PLugins 

if(function_exists('acf_add_local_field_group')){

    $fields = array (
       array (
                 'key' => 'logo',
               'label' => 'Logo',
               'name' => 'logo',
               'type' => 'image',
               'required' => 1,
               'preview_size' => 'thumbnail',
       ),
        array (
            'key' => 'industry',
            'label' => 'industry',
            'name' => 'industry',
            'type' => 'text',
            'required' => 1,
        ),
        array (
            'key' => 'platform',
            'label' => 'platform',
            'name' => 'platform',
            'type' => 'text',
            'required' => 1,
         ),
         array (
            'key' => 'page_link',
            'label' => 'page_link',
            'name' => 'page_link',
            'type' => 'text',
            'required' => 1,
         ),
    );

 
    acf_add_local_field_group(array(
       'key' => 'projects_group',
       'title' => 'Custom Fields',
       'fields' => $fields,
       'location' => array (
          array (
             array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'projects',
             ),
          ),
       ),
    ));
 }




?>
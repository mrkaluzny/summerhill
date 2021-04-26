<?php
/*
* Creating a function to create our CPT Catalog
*/

function custom_post_type_testimonials()
{

  // Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x('Testimonials', 'Post Type General Name', 'twentythirteen'),
    'singular_name'       => _x('Testimonial', 'Post Type Singular Name', 'twentythirteen'),
    'menu_name'           => __('Testimonials', 'twentythirteen'),
    'parent_item_colon'   => __('Parent Testimonial', 'twentythirteen'),
    'all_items'           => __('All Testimonial', 'twentythirteen'),
    'view_item'           => __('View Testimonial', 'twentythirteen'),
    'add_new_item'        => __('Add New Testimonial', 'twentythirteen'),
    'add_new'             => __('Add New', 'twentythirteen'),
    'edit_item'           => __('Edit Testimonial', 'twentythirteen'),
    'update_item'         => __('Update Testimonial', 'twentythirteen'),
    'search_items'        => __('Search Testimonial', 'twentythirteen'),
    'not_found'           => __('Not Found', 'twentythirteen'),
    'not_found_in_trash'  => __('Not found in Trash', 'twentythirteen'),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __('testimonial', 'twentythirteen'),
    'description'         => __('testimonial', 'twentythirteen'),
    'labels'              => $labels,
    'supports'            => array('title', 'custom-fields'),
    'taxonomies'          => array('genres'),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 50,
    'menu_icon' => 'dashicons-groups',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'taxonomies'          => array('category'),
  );

  // Registering your Custom Post Type
  register_post_type('testimonial', $args);
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action('init', 'custom_post_type_testimonials', 0);

<?php
/*
* Creating a function to create our CPT Catalog
*/

function custom_post_type_programs()
{

  // Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x('Programs', 'Post Type General Name', 'twentythirteen'),
    'singular_name'       => _x('Program', 'Post Type Singular Name', 'twentythirteen'),
    'menu_name'           => __('Programs', 'twentythirteen'),
    'parent_item_colon'   => __('Parent Program', 'twentythirteen'),
    'all_items'           => __('All Program', 'twentythirteen'),
    'view_item'           => __('View Program', 'twentythirteen'),
    'add_new_item'        => __('Add New Program', 'twentythirteen'),
    'add_new'             => __('Add New', 'twentythirteen'),
    'edit_item'           => __('Edit Program', 'twentythirteen'),
    'update_item'         => __('Update Program', 'twentythirteen'),
    'search_items'        => __('Search Program', 'twentythirteen'),
    'not_found'           => __('Not Found', 'twentythirteen'),
    'not_found_in_trash'  => __('Not found in Trash', 'twentythirteen'),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __('program', 'twentythirteen'),
    'description'         => __('program', 'twentythirteen'),
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
    'menu_icon' => 'dashicons-screenoptions',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'taxonomies'          => array('category'),
  );

  // Registering your Custom Post Type
  register_post_type('program', $args);
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action('init', 'custom_post_type_programs', 0);

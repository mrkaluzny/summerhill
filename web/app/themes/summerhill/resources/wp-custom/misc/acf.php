<?php

add_action('acf/init', 'my_acf_init');
add_filter('acf/settings/save_json', 'acf_json_save_point');

function acf_json_save_point($path)
{
  $path = get_stylesheet_directory() . '/assets/acf-json';
  return $path;
}

function my_acf_init()
{
  acf_update_setting('google_api_key', 'AIzaSyAiN8Z_yXbPgum-N9AmrugwVd962ROQg3E');
}



if (function_exists('acf_add_options_page')) {


  // acf_add_options_page(array(
  //   'page_title'   => 'Theme General Settings',
  //   'menu_title'  => 'Theme Settings',
  //   'menu_slug'   => 'theme-general-settings',
  //   'capability'  => 'edit_posts',
  //   'redirect'    => false
  // ));

  // acf_add_options_sub_page("Top Bar");
  // acf_add_options_sub_page("Header");
  // acf_add_options_sub_page("Footer");
}

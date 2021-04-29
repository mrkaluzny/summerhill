<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function testimonials($testimonials_ids) {        
        $testimonials = [];


        foreach ($testimonials_ids as $id) {
            $single_testimonial = [
                'testimonial' => get_field('testimonial', $id),
                'author' => get_field('author', $id),
            ];

            array_push($testimonials, $single_testimonial);
        }

        return $testimonials;
    }


    public static function default_programs() {        
        $programs_arr = [];

        $args = [
            'post_type' => 'program',
            'post_status' => 'publish',
            'posts_per_page' => '6',
            'orderby' => 'title',
            'order' => 'ASC',
            
        ];

        $programs = new \WP_Query( $args );

        foreach ($programs->posts as $post) {
            $name = $post->post_title;
            $nameClean = is_numeric(substr($name, 0, 1)) ? substr($name, 3) : $name;
            

            $program = array(
                'name' => $nameClean,
                'slug' => $post->post_name,
                'post_id' => $post->ID,
            );
            array_push($programs_arr, $program);
        }

        wp_reset_postdata();
        return $programs_arr;
    }

    public static function custom_programs($program_ids_arr) {  
            $programs_arr = [];
      

        foreach ($program_ids_arr as $id) {
            $name = get_the_title($id);
            $nameClean = is_numeric(substr($name, 0, 1)) ? substr($name, 3) : $name;
            array_push($programs_arr, $nameClean);

        }

        wp_reset_postdata();
        return $programs_arr;
    }

}

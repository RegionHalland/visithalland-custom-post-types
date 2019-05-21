<?php

/*
Plugin Name: Visithalland Custom Post Types
Plugin URI: https://github.com/RegionHalland/visithalland-cms
Description: Wordpress plugin for adding custom post types used on https://www.visithalland.com.
Author: Sebastian Marcusson
Version: 1.0
Author URI: https://github.com/sebastiansson
*/

class VisithallandCustomPostTypes
{
    public function __construct()
    {
        $this->definePostTypes();
        $this->registerCustomPostTypes();
    }

    public function definePostTypes()
    {
        $post_types = array(
            'meet_local',
            'editor_tip',
            'spotlight',
            'happening',
            'places',
            'companies',
            'activity',
            'event',
            'tips_guides',
            'top_list'
        );

        return define(
            'VISITHALLAND_POST_TYPES',
            $post_types
        );
    }

    public function registerCustomPostTypes()
    {
        /**
         *
         * Register custom post type Meet Local
         *
         */
        if (!post_type_exists(VISITHALLAND_POST_TYPES[0])) {
            function custom_post_type_meet_local()
            {
                $labels = array(
                    'name'                  => _x('Meet our locals', 'Post Type General Name', 'visithalland'),
                    'singular_name'         => _x('Meet our locals', 'Post Type Singular Name', 'visithalland'),
                    'menu_name'             => __('Meet our locals', 'visithalland'),
                    'name_admin_bar'        => __('Meet our locals', 'visithalland'),
                );
                $args = array(
                    'label'                 => __('Meet our locals', 'visithalland'),
                    'description'           => __('Post Type Description', 'visithalland'),
                    'labels'                => $labels,
                    'supports'              => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => 'create_content',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => false,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'post',
                    'show_in_rest'       => true,
                    'menu_icon'           => 'dashicons-admin-users',
                    'rewrite' => array( 'slug' => 'upplevelser/%experience%/meet-a-local', 'with_front' => false )
                );
                register_post_type(VISITHALLAND_POST_TYPES[0], $args);
            }

            add_action('init', 'custom_post_type_meet_local');
        }

        /**
         *
         * Register custom post type Editor Tip
         *
         */
        if (!post_type_exists(VISITHALLAND_POST_TYPES[1])) {
            function custom_post_type_editor_tip()
            {
                $labels = array(
                    'name'                  => _x('Redaktionen tipsar', 'Post Type General Name', 'visithalland'),
                    'singular_name'         => _x('Redaktionen tipsar', 'Post Type Singular Name', 'visithalland'),
                    'menu_name'             => __('Redaktionen tipsar', 'visithalland'),
                    'name_admin_bar'        => __('Redaktionen tipsar', 'visithalland'),
                );
                $args = array(
                    'label'                 => __('Redaktionen tipsar', 'visithalland'),
                    'description'           => __('Post Type Description', 'visithalland'),
                    'labels'                => $labels,
                    'supports'              => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => 'create_content',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => false,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'post',
                    'show_in_rest'       => true,
                    'menu_icon'           => 'dashicons-groups',
                    'rewrite' => array( 'slug' => 'upplevelser/%experience%/editor_tip', 'with_front' => false )
                );
                register_post_type(VISITHALLAND_POST_TYPES[1], $args);
            }

            add_action('init', 'custom_post_type_editor_tip');
        }

        /**
         *
         * Register custom post type Spotlight (prev. Trip)
         *
         */
        if (!post_type_exists(VISITHALLAND_POST_TYPES[2])) {
            function custom_post_type_spotlights()
            {
                $labels = array(
                    'name'                  => _x('Spotlights', 'Post Type General Name', 'visithalland'),
                    'singular_name'         => _x('Spotlight', 'Post Type Singular Name', 'visithalland'),
                    'menu_name'             => __('Spotlights', 'visithalland'),
                    'name_admin_bar'        => __('Spotlights', 'visithalland'),
                );
                $args = array(
                    'label'                 => __('Spotlight', 'visithalland'),
                    'description'           => __('Post Type Description', 'visithalland'),
                    'labels'                => $labels,
                    'supports'              => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => 'create_content',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => false,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'post',
                    'show_in_rest'       => true,
                    'menu_icon'           => 'dashicons-star-filled',
                    'rewrite' => array( 'slug' => 'upplevelser/%experience%/spotlight', 'with_front' => false )
                );
                register_post_type(VISITHALLAND_POST_TYPES[2], $args);
            }
            add_action('init', 'custom_post_type_spotlights');
        }


        /**
         *
         * Register custom post type Happenings
         *
         */

        if (!post_type_exists(VISITHALLAND_POST_TYPES[3])) {
        // Register Happenings
        function custom_post_type_happenings()
        {
            $labels = array(
                'name' => _x('Happenings', 'Post Type General Name', 'visithalland'),
                'singular_name' => _x('Happening', 'Post Type Singular Name', 'visithalland'),
                'menu_name' => __('Happenings', 'visithalland'),
                'name_admin_bar' => __('Happenings', 'visithalland'),
            );
            $args = array(
                'label' => __('Happenings', 'visithalland'),
                'description' => __('Post Type Description', 'visithalland'),
                'labels' => $labels,
                'supports' => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
                'hierarchical' => false,
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => 'create_content',
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'can_export' => true,
                'has_archive' => true,
                'exclude_from_search' => false,
                'publicly_queryable' => true,
                'capability_type' => 'post',
                'show_in_rest' => true,
                'menu_icon' => 'dashicons-calendar-alt',
                'rewrite' => array( 'slug' => 'happenings', 'with_front' => false )
            );
            register_post_type(VISITHALLAND_POST_TYPES[3], $args);
        }
            add_action('init', 'custom_post_type_happenings', 1);
        }

        /**
         *
         * Register custom post type Places
         *
         */
        if (!post_type_exists(VISITHALLAND_POST_TYPES[4])) {
            function custom_post_type_places()
            {
                $labels = array(
                    'name'                  => _x('Platser', 'Post Type General Name', 'visithalland'),
                    'singular_name'         => _x('Platser', 'Post Type Singular Name', 'visithalland'),
                    'menu_name'             => __('Platser', 'visithalland'),
                    'name_admin_bar'        => __('Platser', 'visithalland'),
                );
                $args = array(
                    'label'                 => __('Platser', 'visithalland'),
                    'description'           => __('Post Type Description', 'visithalland'),
                    'labels'                => $labels,
                    'supports'              => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => 'create_content',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => false,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'post',
                    'show_in_rest'       => true,
                    'menu_icon'           => 'dashicons-location-alt',
                    //'rewrite' => array( 'slug' => 'place', 'with_front' => false )
                );
                register_post_type(VISITHALLAND_POST_TYPES[4], $args);
            }
            add_action('init', 'custom_post_type_places');
        }

        /**
         *
         * Register custom post type Companies
         *
         */
        if (!post_type_exists(VISITHALLAND_POST_TYPES[5])) {
            // Register companies
            function custom_post_type_companies()
            {
                $labels = array(
                    'name'                  => _x('Näringslivsaktörer', 'Post Type General Name', 'visithalland'),
                    'singular_name'         => _x('Näringslivsaktörer', 'Post Type Singular Name', 'visithalland'),
                    'menu_name'             => __('Näringslivsaktörer', 'visithalland'),
                    'name_admin_bar'        => __('Näringslivsaktörer', 'visithalland'),
                );
                $args = array(
                    'label'                 => __('Näringslivsaktörer', 'visithalland'),
                    'description'           => __('Post Type Description', 'visithalland'),
                    'labels'                => $labels,
                    'supports'              => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => 'create_content',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => false,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'post',
                    'show_in_rest'       => true,
                    'menu_icon'           => 'dashicons-store',
                    //'rewrite' => array( 'slug' => 'business', 'with_front' => false )
                );
                register_post_type(VISITHALLAND_POST_TYPES[5], $args);
            }
            add_action('init', 'custom_post_type_companies');
        }

        /**
         *
         * Register custom post type Activity
         *
         */
        if (!post_type_exists(VISITHALLAND_POST_TYPES[6])) {
            // Register activity
            function custom_post_type_activity()
            {
                $labels = array(
                    'name'                  => _x('A Day in Halland', 'Post Type General Name', 'visithalland'),
                    'singular_name'         => _x('A Day in Halland', 'Post Type Singular Name', 'visithalland'),
                    'menu_name'             => __('A Day in Halland', 'visithalland'),
                    'name_admin_bar'        => __('A Day in Halland', 'visithalland'),
                );
                $args = array(
                    'label'                 => __('A Day in Halland', 'visithalland'),
                    'description'           => __('Aktiviteter som används i A Day in Halland', 'visithalland'),
                    'labels'                => $labels,
                    'supports'              => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => 'a_day_in_halland',
                    'how_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => false,
                    'exclude_from_search'   => true,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'post',
                    'show_in_rest'       => true,
                    'menu_icon'           => 'dashicons-palmtree',
                    //'rewrite' => array( 'slug' => 'activity', 'with_front' => false )
                );
                register_post_type(VISITHALLAND_POST_TYPES[6], $args);
            }
            add_action('init', 'custom_post_type_activity');
        }

        /**
         *
         * Register custom post type Event
         *
         */
        if (!post_type_exists(VISITHALLAND_POST_TYPES[7])) {
            // Register activity
            function custom_post_type_event()
            {
                $labels = array(
                    'name'                  => _x('Event', 'Post Type General Name', 'visithalland'),
                    'singular_name'         => _x('Event', 'Post Type Singular Name', 'visithalland'),
                    'menu_name'             => __('Events', 'visithalland'),
                    'name_admin_bar'        => __('Event', 'visithalland'),
                );
                $args = array(
                    'label'                 => __('Events', 'visithalland'),
                    'description'           => __('Events som inte är en reseanledning och därför inte passar under Happenings.', 'visithalland'),
                    'labels'                => $labels,
                    'supports'              => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => 'create_content',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => false,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'post',
                    'show_in_rest'       => true,
                    'menu_icon'           => 'dashicons-calendar',
                    //'rewrite' => array( 'slug' => 'event', 'with_front' => false )
                );
                register_post_type(VISITHALLAND_POST_TYPES[7], $args);
            }
            add_action('init', 'custom_post_type_event');
        }

        /**
         *
         * Register custom post type Tips & Guider
         *
         */
        if (!post_type_exists(VISITHALLAND_POST_TYPES[8])) {
            // Register activity
            function custom_post_type_tips_guides()
            {

                // Registers Option Page for Featured Content
                if ( function_exists( 'acf_add_options_sub_page' ) ){
                    acf_add_options_sub_page(array(
                        'title'      => 'Tips & Guider',
                        'parent'     => 'themes.php',
                        'capability' => 'manage_options'
                    ));
                }
                
                $labels = array(
                    'name'                  => _x('Tips & Guider', 'Post Type General Name', 'visithalland'),
                    'singular_name'         => _x('Tips & Guider', 'Post Type Singular Name', 'visithalland'),
                    'menu_name'             => __('Tips & Guider', 'visithalland'),
                    'name_admin_bar'        => __('Tips & Guider', 'visithalland'),
                );
                $args = array(
                    'label'                 => __('Tips & Guider', 'visithalland'),
                    'description'           => __('Tips & Guider', 'visithalland'),
                    'labels'                => $labels,
                    'supports'              => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => 'create_content',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => true,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'post',
                    'show_in_rest'       => true,
                    'menu_icon'           => 'dashicons-book',
                    'rewrite' => array( 'slug' => 'tips-guider')
                );
                register_post_type(VISITHALLAND_POST_TYPES[8], $args);
            }
            add_action('init', 'custom_post_type_tips_guides');
        }


        /**
         *
         * Register custom post type Redaktionens Tips
         *
         */
        if (!post_type_exists(VISITHALLAND_POST_TYPES[9])) {
            // Register activity
            function custom_post_type_top_list()
            {

                $labels = array(
                    'name'                  => _x('Topplistor', 'Post Type General Name', 'visithalland'),
                    'singular_name'         => _x('Topplistor', 'Post Type Singular Name', 'visithalland'),
                    'menu_name'             => __('Topplistor', 'visithalland'),
                    'name_admin_bar'        => __('Topplistor', 'visithalland'),
                );
                $args = array(
                    'label'                 => __('Topplistor', 'visithalland'),
                    'description'           => __('Topplistor', 'visithalland'),
                    'labels'                => $labels,
                    'supports'              => array('title', 'author', 'revisions'),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => 'create_content',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => false,
                    'exclude_from_search'   => true,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'post',
                    'show_in_rest'       => true,
                    'menu_icon'           => 'dashicons-star-filled',
                    'rewrite' => array( 'slug' => 'topplistor')
                );
                register_post_type(VISITHALLAND_POST_TYPES[9], $args);
            }
            add_action('init', 'custom_post_type_top_list');
        }
    }
}

$vhcpt = new VisithallandCustomPostTypes();
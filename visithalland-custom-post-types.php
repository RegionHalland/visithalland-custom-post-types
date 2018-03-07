<?php

/*
Plugin Name: Visithalland Custom Post Types
Plugin URI: https://github.com/RegionHalland/visithalland-cms
Description: Wordpress plugin for adding custom post types used on https://www.visithalland.com.
Author: Sebastian Marcusson
Version: 0.9
Author URI: https://github.com/sebastiansson
*/

/**
 *
 * Register Meet Local custom post type
 *
 */
if ( !post_type_exists('meet_local') ) {
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
            'show_in_menu'          => true,
            'menu_position'         => 8,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-admin-users',
            'rewrite' => array( 'slug' => '%taxonomy_concept%/meet-a-local', 'with_front' => false )
        );
        register_post_type('meet_local', $args);
    }

    add_action('init', 'custom_post_type_meet_local');
}

/**
 *
 * Register Meet Local custom post type
 *
 */
if (!post_type_exists('editor_tip')) {
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
            'show_in_menu'          => true,
            'menu_position'         => 7,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-admin-users',
            'rewrite' => array( 'slug' => '%taxonomy_concept%/editor_tip', 'with_front' => false )
        );
        register_post_type('editor_tip', $args);
    }

    add_action('init', 'custom_post_type_editor_tip');
}

/**
 *
 * Register Meet Local custom post type
 *
 */
if (!post_type_exists('trip')) {
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
            'show_in_menu'          => true,
            'menu_position'         => 6,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-location-alt',
            'rewrite' => array( 'slug' => '%taxonomy_concept%/spotlight', 'with_front' => false )
        );
        register_post_type('trip', $args);
    }
    add_action('init', 'custom_post_type_spotlights');
}


/**
 *
 * Register Meet Local custom post type
 *
 */
if (!post_type_exists('happening')) {
    // Register Happenings
    function custom_post_type_happenings()
    {
        $labels = array(
            'name'                  => _x('Happenings', 'Post Type General Name', 'visithalland'),
            'singular_name'         => _x('Happening', 'Post Type Singular Name', 'visithalland'),
            'menu_name'             => __('Happenings', 'visithalland'),
            'name_admin_bar'        => __('Happenings', 'visithalland'),
        );
        $args = array(
            'label'                 => __('Happenings', 'visithalland'),
            'description'           => __('Post Type Description', 'visithalland'),
            'labels'                => $labels,
            'supports'              => array('title', 'author', 'revisions', 'thumbnail', 'editor'),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-calendar-alt',
            'rewrite' => array( 'slug' => '%taxonomy_concept%/happening', 'with_front' => false )
        );
        register_post_type('happening', $args);
    }
    add_action('init', 'custom_post_type_happenings', 1);

}


/**
 *
 * Register Meet Local custom post type
 *
 */
if (!post_type_exists('place')) {
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
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-location-alt',
            'rewrite' => array( 'slug' => 'place', 'with_front' => false )
        );
        register_post_type('places', $args);
    }
    add_action('init', 'custom_post_type_places');
}

/**
 *
 * Register Meet Local custom post type
 *
 */
if (!post_type_exists('company')) {
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
            'show_in_menu'          => true,
            'menu_position'         => 3,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'show_in_rest'       => true,
            'menu_icon'           => 'dashicons-store',
            'rewrite' => array( 'slug' => 'business', 'with_front' => false )
        );
        register_post_type('companies', $args);
    }
    add_action('init', 'custom_post_type_companies');

}



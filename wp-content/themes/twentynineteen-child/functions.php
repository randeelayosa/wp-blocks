<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
// END ENQUEUE PARENT ACTION


// BEGIN ENQUEUE THEME STYLESHEET
function theme_dependecies() {
    wp_enqueue_style( 'site-styles', get_stylesheet_directory_uri() . '/css/style.css');
    // wp_enqueue_script( 'script-name', get_stylesheet_directory_uri() . '/js/example.js');
}
add_action( 'wp_enqueue_scripts', 'theme_dependecies' );
// END ENQUEUE THEME STYLESHEET



// // BEGIN REGISTERING A CUSTOM POST TYPE
/*
* Creating a function to create our CPT
*/
function custom_post_type() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Movies',
        'singular_name'       => 'Movie',
        'menu_name'           => 'Movies',
        'parent_item_colon'   => 'Parent Movie',
        'all_items'           => 'All Movies',
        'view_item'           => 'View Movie',
        'add_new_item'        => 'Add New Movie',
        'add_new'             => 'Add New',
        'edit_item'           => 'Edit Movie',
        'update_item'         => 'Update Movie',
        'search_items'        => 'Search Movie',
        'not_found'           => 'Not Found',
        'not_found_in_trash'  => 'Not found in Trash'
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => 'movies',
        'description'         => 'Movie news and reviews',
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'movies', $args );

}

/* Hook into the 'init' action so that the function containing our post type registration is not unnecessarily executed.
*/
add_action( 'init', 'custom_post_type', 0 );

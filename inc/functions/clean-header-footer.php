<?php
/**
 * Clean header and footer function
 *
 * @package Tetloose-Theme
 **/

/**
 * Deregiater scripts and styles
 **/
function deregister_scripts_and_styles() {
    // wp_deregister_style( 'wpml-legacy-dropdown-0' );.
}

if ( ! is_admin() ) {
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
    add_filter( 'embed_oembed_discover', '__return_false' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    add_filter( 'use_default_gallery_style', '__return_false' );
    // add_action( 'wp_print_styles', 'deregister_scripts_and_styles', 100 );
    // Show head item list uncomment for development.
    // add_action( 'wp_print_scripts', 'wpcustom_inspect_scripts_and_styles' );.
}

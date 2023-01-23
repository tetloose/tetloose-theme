<?php
/**
 * Post Type active class
 *
 * @package Tetloose-Theme
 **/

/**
 * Function if page id == post type add class
 *
 * @param array  $classes array of strings.
 * @param object $menu_item check if true or false.
 **/
function post_type_active_class( $classes = array(), $menu_item = false ) {
    global $post;
    $id = ( isset( $post->ID ) ? get_the_ID() : null );
    if ( isset( $id ) ) {
        $classes[] = ( $menu_item->url == get_post_type_archive_link( $post->post_type ) ) ? 'current-menu-item is-active' : '';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'post_type_active_class', 10, 2 );

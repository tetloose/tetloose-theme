<?php
/**
 * Is post type
 *
 * @package Tetloose-Theme
 **/

/**
 * Function test if post type exists
 *
 * @param string $type value passed is a string.
 **/
function is_post_type( $type ) {
    global $wp_query;
    if ( $type == get_post_type( $wp_query->post->ID ) ) {
        return true;
    }
    return false;
}

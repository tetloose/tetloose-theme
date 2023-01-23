<?php
/**
 * Wordpress Admin Bar
 *
 * @package Tetloose-Theme
 **/

if ( ! current_user_can( 'administrator' ) ) {
    /**
     * Remove Admin bar if logged in user isn't an admin
     **/
    function remove_admin_bar() {
        return false;
    }

    add_filter( 'show_admin_bar', 'remove_admin_bar' );
}

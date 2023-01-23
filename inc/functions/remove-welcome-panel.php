<?php
/**
 * Remove Welcome Panel
 *
 * @package Tetloose-Theme
 **/

/**
 * Function remove welcome pannel
 **/
function remove_welcome_panel() {
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
    $user_id = get_current_user_id();
    if ( 0 !== get_user_meta( $user_id, 'show_welcome_panel', true ) ) {
        update_user_meta( $user_id, 'show_welcome_panel', 0 );
    }
}

add_action( 'load-index.php', 'remove_welcome_panel' );

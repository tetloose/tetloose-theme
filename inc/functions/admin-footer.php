<?php
/**
 * Remove Wordpress in footer
 *
 * @package TetlooseTheme
 **/

/**
 * Replaces Wordpress with link to Tetloose.com
 **/
function remove_footer_admin() {
    remove_filter( 'update_footer', 'core_update_footer' );
    echo '<p>Built by <a href="https://www.tetloose.com" target="_blank">Theme by Tetloose</a></p>';
}

add_filter( 'admin_footer_text', 'remove_footer_admin' );

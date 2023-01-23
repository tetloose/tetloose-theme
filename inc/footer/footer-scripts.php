<?php
/**
 * Footer Load scripts
 *
 * @package Tetloose-Theme
 */

$footer_scripts = get_field( 'footerScripts', 'option' );
wp_footer();
if ( ! empty( $footer_scripts ) ) {
    echo wp_kses_post( $footer_scripts );
}

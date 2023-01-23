<?php
/**
 * Head scripts
 *
 * @package Tetloose-Theme
 */

$header_scripts = get_field( 'headerScripts', 'option' );
wp_head();
if ( ! empty( $header_scripts ) ) {
    echo wp_kses_post( $header_scripts );
}

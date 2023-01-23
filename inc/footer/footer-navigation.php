<?php
/**
 * Footer Navigation
 *
 * @package Tetloose-Theme
 */

$footer_nav = get_field( 'footerNav', 'option' );

if ( ! empty( $footer_nav ) ) {
    $footer_menu = wp_nav_menu(
        array(
            'menu' => $footer_nav->ID,
            'container' => false,
            'items_wrap' => '<ul class="content__nav has-gutter">%3$s</ul>',
            'echo' => false,
        )
    );
    echo wp_kses_post( $footer_menu );
}

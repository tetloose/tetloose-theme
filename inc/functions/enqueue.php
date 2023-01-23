<?php
/**
 * Enqueue function
 *
 * @package Tetloose-Theme
 **/

add_action( 'wp_enqueue_scripts', 'scripts', 2 );
add_action( 'wp_enqueue_scripts', 'styles', 20 );
// add_action( 'wp_enqueue_scripts', 'remove_jquery', 1 );.

/**
 * Function remove jquery reg proper version from env tetloose-need-work
 **/
function remove_jquery() {
    wp_deregister_script( 'jquery' );
    // wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', null, null, false );
    // wp_enqueue_script( 'jquery' );.
}

/**
 * Function Load scripts
 */
function scripts() {
    $ver = null;
    foreach ( get_files( '/assets/js', [ 'main', 'runtime' ] ) as $file ) {
        wp_enqueue_script(
            $file,
            get_stylesheet_directory_uri() . '/assets/js/' . $file,
            array(),
            $ver,
            true
        );
        wp_enqueue_script( $file );
    }
}

/**
 * Function Load styles
 **/
function styles() {
    $ver = null;
    wp_dequeue_style( 'classic-theme-styles' );
    foreach ( get_files( '/assets/css', [ 'print', 'app' ] ) as $file ) {
        wp_enqueue_style(
            $file,
            get_stylesheet_directory_uri() . '/assets/css/' . $file,
            array(),
            $ver,
            false
        );
    }
}

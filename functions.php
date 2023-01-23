<?php
/**
 * Wordpress Functions
 *
 * @package Tetloose-Theme
 **/

/**
 * Require functions
 **/
require_once TEMPLATEPATH . '/inc/functions/starts-with.php';
require_once TEMPLATEPATH . '/inc/functions/enqueue.php';
require_once TEMPLATEPATH . '/inc/functions/admin-footer.php';
require_once TEMPLATEPATH . '/inc/functions/hide-default-dash-widgets.php';
require_once TEMPLATEPATH . '/inc/functions/remove-welcome-panel.php';
require_once TEMPLATEPATH . '/inc/functions/admin-layout.php';
require_once TEMPLATEPATH . '/inc/functions/admin-bar.php';
require_once TEMPLATEPATH . '/inc/functions/clean-header-footer.php';
require_once TEMPLATEPATH . '/inc/functions/gutenberg-block-library.php';
require_once TEMPLATEPATH . '/inc/functions/is-post-type.php';
require_once TEMPLATEPATH . '/inc/functions/post-type-active-class.php';
require_once TEMPLATEPATH . '/inc/functions/next-and-prev-links.php';
require_once TEMPLATEPATH . '/inc/functions/pagination.php';
require_once TEMPLATEPATH . '/inc/functions/bold-last-string.php';
require_once TEMPLATEPATH . '/inc/functions/sluggify.php';
require_once TEMPLATEPATH . '/inc/functions/truncate.php';
require_once TEMPLATEPATH . '/inc/functions/titleizeit.php';
require_once TEMPLATEPATH . '/inc/functions/class-classnames.php';

/**
 * Get files
 * Function to get file names from specific folder.
 * Used to retrieve files with hash cache busting labels.
 *
 * @param dir   $dir directories string.
 * @param files $files array of files to return.
 **/
function get_files( $dir, $files ) {
    $file_list = [];
    $directories = new DirectoryIterator( dirname( __FILE__ ) . $dir );
    foreach ( $directories as $directory ) {
        $file_name = $directory->getFilename();
        foreach ( $files as $file ) {
            if ( starts_with( $file_name, $file ) ) {
                array_push( $file_list, $file_name );
            }
        }
    }

    return $file_list;
}

// define( 'USE_JQUERY', getenv( 'USE_JQUERY' ) );.

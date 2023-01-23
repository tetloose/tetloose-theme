<?php
/**
 *  Pagination
 *
 * @package Tetloose-Theme
 **/

/**
 * Function test if post type exists
 *
 * @param string $pages value passed is a string.
 * @param number $range value passed is a number.
 **/
function pagination( $pages = '', $range = 2 ) {
    // phpcs:disable
    $showitems = ( $range * 2 ) + 1;
    global $paged;

    if ( empty( $paged ) ) {
        $paged = 1;
    }

    if ( $pages == '' ) {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if ( ! $pages ) {
            $pages = 1;
        }
    }
    if ( 1 != $pages ) {
        echo "<div class='l-container u-highlight is-pagination'>";
        echo "<div class='content is-center has-gutter'>";
        echo "<h2 class='content__heading'><strong>Navigation</strong></h2>";
        echo "<ul class='content__nav'>";
        if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
            echo "<li><a href='" . get_pagenum_link( 1 ) . "'><span><i class='u-icon--left'></i> Prev</span></a></li>";
        }

        for ( $i = 1; $i <= $pages; $i++ ) {
            if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
                echo ( $paged == $i ) ? "<li class='is-active'><span>" . $i . '</span></li>' : "<li><a href='" . get_pagenum_link( $i ) . "'><span>" . $i . '</a></li>';
            }
        }
        if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
            echo "<li><a href='" . get_pagenum_link( $pages ) . "'><span>Next <i class='u-icon--right'></i></span></a></li>";
        }
        echo "</ul>\n";
        echo "</div>\n";
        echo "</div>\n";
    }
    // phpcs:enable
}

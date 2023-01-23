<?php
/**
 *  Next and Prev links
 *
 * @package Tetloose-Theme
 **/

add_filter(
    'next_post_link',
    function( $link ) {
        $next_post = get_next_post();
        if ( ! empty( $next_post ) ) {
            $title = $next_post->post_title;
            $this_id = $next_post->ID;
            $description = get_field( 'description', $this_id );
            $link = str_replace( 'href=', 'title=" ' . $title . ' - ' . $description . '" href=', $link );
            return $link;
        }
    }
);

add_filter(
    'previous_post_link',
    function( $link ) {
        $previous_post = get_previous_post();
        if ( ! empty( $previous_post ) ) {
            $title = $previous_post->post_title;
            $this_id = $previous_post->ID;
            $description = get_field( 'description', $this_id );
            $link = str_replace( 'href=', 'title=" ' . $title . ' - ' . $description . '" href=', $link );
            return $link;
        }
    }
);

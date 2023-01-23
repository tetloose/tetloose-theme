<?php
/**
 * ACF loader
 *
 * @package Tetloose-Theme
 */

if ( have_rows( 'atoms' ) ) {
    while ( have_rows( 'atoms' ) ) :
        the_row();
        get_template_part( '/inc/atoms/atoms', 'title' );
        get_template_part( '/inc/atoms/atoms', 'song-kick' );
        get_template_part( '/inc/atoms/atoms', 'single-column-content-block' );
        get_template_part( '/inc/atoms/atoms', 'two-column-content-block' );
        get_template_part( '/inc/atoms/atoms', 'half-bleed-images' );
        get_template_part( '/inc/atoms/atoms', 'full-bleed-image' );
        get_template_part( '/inc/atoms/atoms', 'media-section' );
        get_template_part( '/inc/atoms/atoms', 'content-media' );
        get_template_part( '/inc/atoms/atoms', 'add-news' );
    endwhile;
}

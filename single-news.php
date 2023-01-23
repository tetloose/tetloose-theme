<?php
/**
 * Post type News Single
 *
 * @package Tetloose-Theme
 **/

get_header();
if ( have_posts() ) {
    if ( post_password_required( $post ) ) {
        get_template_part( '/inc/partials/partials', 'password-form' );
    } else {
        while ( have_posts() ) :
            the_post();
            get_template_part( '/inc/atoms/atoms', 'hero' );
            get_template_part( '/inc/atoms/atoms', 'single-title' );
            get_template_part( '/inc/atoms/loader', 'page' );
            get_template_part( '/inc/partials/partials', 'next-prev' );
            get_template_part( '/inc/atoms/atoms', 'cta' );
        endwhile;
    }
} else {
    get_template_part( '/inc/partials/partials', 'no-posts' );
}
get_footer();

<?php
/**
 * Post type News Archive
 *
 * @package Tetloose-Theme
 **/

get_header();
if ( have_posts() ) {
    get_template_part( '/inc/atoms/atoms', 'hero' );
    get_template_part( '/inc/partials/partials', 'news' );
    get_template_part( '/inc/partials/partials', 'pagination' );
    get_template_part( '/inc/atoms/atoms', 'cta' );
} else {
    get_template_part( '/inc/partials/partials', 'no-posts' );
}
get_footer();

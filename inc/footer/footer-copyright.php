<?php
/**
 * Footer Copyright
 *
 * @package Tetloose-Theme
 */

$website_copy = '&copy;' .
    ( get_bloginfo()
        ? ' ' . get_bloginfo()
        : '' ) . ' ' . get_the_date( 'Y' ) .
    ( get_field( 'footerCopyright', 'option' )
        ? ' ' . get_field( 'footerCopyright', 'option' )
        : '' );

if ( ! empty( $website_copy ) ) :
    ?>
    <p class="is-center has-gutter">
        <?php echo wp_kses_post( $website_copy ); ?>
    </p>
    <?php
endif;

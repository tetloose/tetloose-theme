<?php
/**
 * Logo
 *
 * @package Tetloose-Theme
 */

$header_logo = get_field( 'headerLogo', 'option' );

if ( ! empty( $header_logo ) ) :
    ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo u-bg is-contain" style="background-image: url(<?php echo esc_url( $header_logo['url'] ); ?>);">
        <?php if ( ! empty( get_bloginfo() ) ) : ?>
            <span class="hide"><?php echo esc_attr( get_bloginfo() ); ?></span>
        <?php endif; ?>
    </a>
    <?php
endif;

<?php
/**
 * Link
 *
 * @package Tetloose-Theme
 */

$header_link = get_field( 'headerLink', 'option' );

if ( ! empty( $header_link ) ) :
    ?>
    <a
        href="<?php echo esc_url( $header_link['url'] ); ?>"
        <?php if ( ! empty( $header_link['target'] ) ) : ?>
            target="<?php echo esc_attr( $header_link['target'] ); ?>"
        <?php endif ?>
    >
        <strong><?php echo esc_html( $header_link['title'] ); ?></strong>
    </a>
    <?php
endif;

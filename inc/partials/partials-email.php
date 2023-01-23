<?php
/**
 * Email
 *
 * @package Tetloose-Theme
 */

$header_email = get_field( 'headerEmail', 'option' );

if ( ! empty( $header_email ) ) :
    ?>
    <a href="mailto:<?php echo esc_url( $header_email ); ?>">
        <strong><?php echo esc_html( $header_email ); ?></strong>
    </a>
    <?php
endif;

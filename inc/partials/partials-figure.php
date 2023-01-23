<?php
/**
 * Image Figure
 *
 * @package Tetloose-Theme
 */

$class_names = new ClassNames(
    [
        'content__image u-bg js-imageR',
        get_field( 'headerBackgroundColour', 'option' ),
        $prefix ? $prefix : '',
    ]
);
?>
<figure class="<?php echo esc_attr( $class_names->container() ); ?>"
    <?php if ( ! empty( $sizes ) ) : ?>
        data-mobile="<?php echo esc_url( $image['sizes'][ $sizes . 'Mobile' ] ); ?>"
        data-tablet="<?php echo esc_url( $image['sizes'][ $sizes . 'Tablet' ] ); ?>"
        data-desktop="<?php echo esc_url( $image['sizes'][ $sizes . 'Desktop' ] ); ?>"
    <?php endif; ?>
    <?php if ( ! empty( $image['title'] ) ) : ?>
        title="<?php echo esc_attr( $image['title'] ); ?>"
    <?php endif; ?>>
</figure>

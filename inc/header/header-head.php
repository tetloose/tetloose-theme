<?php
/**
 * Master Head
 *
 * @package Tetloose-Theme
 */

$class_names = new ClassNames(
    [
        'masthead',
        get_field( 'headerBackgroundColour', 'option' ),
        get_field( 'headerBorderColour', 'option' ) ? 'u-hairline-bottom ' . get_field( 'headerBorderColour', 'option' ) : '',
    ],
    [
        'masthead__items',
        get_field( 'headerFontColour', 'option' ),
    ]
);
?>
<header class="<?php echo esc_attr( $class_names->container() ); ?> js-masthead">
    <?php get_template_part( '/inc/partials/partials', 'logo' ); ?>
    <div class="<?php echo esc_attr( $class_names->font() ); ?>">
        <?php
            get_template_part( '/inc/partials/partials', 'email' );
            get_template_part( '/inc/partials/partials', 'link' );
        ?>
    </div>
    <?php get_template_part( '/inc/partials/partials', 'navigation' ); ?>
</header>

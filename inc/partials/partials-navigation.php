<?php
/**
 * Navigation
 *
 * @package Tetloose-Theme
 */

$header_nav = get_field( 'headerNav', 'option' );
$header_nav_background_colour = get_field( 'headerNavBackgroundColour', 'option' ) ? get_field( 'headerNavBackgroundColour', 'option' ) : '';
$header_nav_font_colour = get_field( 'headerNavFontColour', 'option' ) ? get_field( 'headerNavFontColour', 'option' ) : '';
$header_nav_angles_background_colour = get_field( 'headerNavAnglesBackgroundColour', 'option' ) ? get_field( 'headerNavAnglesBackgroundColour', 'option' ) : '';

$class_names = new ClassNames(
    [
        'nav__trigger js-navTrigger',
    ],
    [
        get_field( 'headerNavTriggerColour', 'option' )
            ? get_field( 'headerNavTriggerColour', 'option' )
            : '',
        get_field( 'headerNavTriggerColourActive', 'option' )
            ? get_field( 'headerNavTriggerColourActive', 'option' )
            : '',
    ]
);

if ( ! empty( $header_nav ) ) :
    $header_menu = wp_nav_menu(
        array(
            'menu' => $header_nav->ID,
            'container' => false,
            'items_wrap' => '
            <nav class="nav js-nav ' . $header_nav_background_colour . ' ' . $header_nav_angles_background_colour . '">
                <span class="u-align-vertical">
                    <span class="u-align-vertical__item">
                        <ul class="' . $header_nav_font_colour . '">
                            %3$s
                        </ul>
                    </span>
                </span>
            </nav>',
            'echo' => false,
        )
    );
    echo wp_kses_post( $header_menu );
endif;

?>
<button class="<?php echo esc_attr( $class_names->container() ); ?>">
    <span class="nav__trigger-inside">
        <span class="<?php echo esc_attr( $class_names->font() ); ?>"></span>
        <span class="<?php echo esc_attr( $class_names->font() ); ?>"></span>
        <span class="<?php echo esc_attr( $class_names->font() ); ?>"></span>
        <span class="<?php echo esc_attr( $class_names->font() ); ?>"></span>
    </span>
    <i class="u-alt">Open navigation</i>
</button>

<?php
/**
 * Call to action
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

$class_names = new ClassNames(
    [
        'l-container is-content',
        is_archive()
            ? get_field( get_post_type() . 'CTA_backgroundColour', 'option' )
            : get_field( 'cta_backgroundColour' ),
        ( is_archive()
            ? ( get_field( get_post_type() . 'CTA_borderColour', 'option' )
                ? 'u-hairline-top ' . get_field( get_post_type() . 'CTA_borderColour', 'option' )
                : '' )
            : ( get_field( 'cta_borderColour' )
                ? 'u-hairline-top ' . get_field( 'cta_borderColour' )
                : '' ) ),
    ],
    [
        'content',
        is_archive()
            ? get_field( get_post_type() . 'CTA_fontColour', 'option' )
            : get_field( 'cta_fontColour' ),
    ]
);
$content_block_cta = is_archive()
    ? get_field( get_post_type() . 'CTA_contentBlockCTA', 'option' )
    : get_field( 'contentBlockCTA' );
if ( ! empty( $content_block_cta ) ) :
    ?>
    <section class="<?php echo esc_attr( $class_names->container() ); ?>">
        <div class="l-row">
            <div class="l-column">
                <div class="<?php echo esc_attr( $class_names->font() ); ?>">
                    <?php echo wp_kses_post( $content_block_cta ); ?>
                </div>
            </div>
        </div>
    </section>
    <?php
endif;

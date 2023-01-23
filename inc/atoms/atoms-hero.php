<?php
/**
 * Hero
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

$the_title = is_archive()
    ? titleizeit( get_post_type() )
    : get_the_title();
$full_bleed_image = is_archive()
    ? get_field( get_post_type() . '_fullBleedImage', 'option' )
    : get_field( 'fullBleedImage' );
$content_block = is_archive()
    ? get_field( get_post_type() . '_contentBlock', 'option' )
    : get_field( 'contentBlock' );
$no_title = is_archive()
    ? get_field( get_post_type() . '_noTitle', 'option' )
    : get_field( 'noTitle' );
$class_names = new ClassNames(
    [
        'hero',
        $full_bleed_image
            ? 'u-bg js-imageR'
            : '',
        is_archive()
            ? get_field( get_post_type() . '_imageGradiant', 'option' )
            : get_field( 'imageGradiant' ),
        ( is_archive()
            ? ( get_field( get_post_type() . '_parallaxImage', 'option' )
                ? 'is-parallax'
                : '' )
            : ( get_field( 'parallaxImage' )
                ? 'is-parallax'
                : '' ) ),
        is_archive()
            ? get_field( get_post_type() . '_imageAlignment', 'option' )
            : get_field( 'imageAlignment' ),
        ( $content_block
            ? ( $no_title
                ? 'is-intrinsic'
                : 'is-content' )
            : ( ! $no_title
                ? 'is-content'
                : 'is-intrinsic' ) ),
    ],
    [
        'content',
        is_archive()
            ? get_field( get_post_type() . '_textAlignment', 'option' )
            : get_field( 'textAlignment' ),
    ]
);
$img = new Image( [ 'fullBleed' ] );
?>
<header
    class="<?php echo esc_attr( $class_names->container() ); ?>"
    <?php if ( ! empty( $full_bleed_image ) ) : ?>
        data-mobile="<?php echo esc_attr( $full_bleed_image['sizes'][ $img->prefix() . 'Mobile' ] ); ?>"
        data-tablet="<?php echo esc_attr( $full_bleed_image['sizes'][ $img->prefix() . 'Tablet' ] ); ?>"
        data-desktop="<?php echo esc_attr( $full_bleed_image['sizes'][ $img->prefix() . 'Desktop' ] ); ?>"
        <?php if ( ! empty( $full_bleed_image['title'] ) ) : ?>
            title="<?php echo esc_attr( $full_bleed_image['title'] ); ?>"
        <?php endif; ?>
    <?php endif; ?>>
    <div class="<?php echo esc_attr( $class_names->font() ); ?>">
        <?php if ( ! empty( $the_title ) && ! $no_title ) : ?>
            <h1 class="content__title is-big">
                <span class="u-punk-text">
                    <?php bold_last_string( $the_title ); ?>
                </span>
            </h1>
        <?php endif; ?>
        <?php if ( ! empty( $content_block ) && ! $no_title ) : ?>
            <div class="u-punk-text">
                <?php echo wp_kses_post( $content_block ); ?>
            </div>
        <?php endif; ?>
    </div>
</header>

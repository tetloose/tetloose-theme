<?php
/**
 * Full bleed Image
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'fullBleedImage' ) :
    $class_names = new ClassNames(
        [
            'l-container is-gallery',
            get_sub_field( 'borderColour' ) ? 'u-hairline-top ' . get_sub_field( 'borderColour' ) : '',
        ]
    );
    $img = new Image(
        [
            'is-fullbleed',
            get_sub_field( 'parallaxImage' ) ? 'is-parallax' : '',
            get_sub_field( 'imageGradiant' ),
        ],
        [ 'fullBleed' ]
    );
    $image = get_sub_field( 'fullBleedImage' );
    $hide_for_later = get_sub_field( 'hideForLater' );
    if ( ! empty( $image ) && ! $hide_for_later ) :
        ?>
        <section class="<?php echo esc_attr( $class_names->container() ); ?>">
            <div class="gallery">
                <?php
                    $prefix = $img->prefix();
                    $sizes = $img->sizes();
                    include( locate_template( '/inc/partials/partials-figure.php' ) );
                ?>
            </div>
        </section>
        <?php
    endif;
endif;

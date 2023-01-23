<?php
/**
 * Half bleed Images
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'halfBleedImages' ) :

    $class_names = new ClassNames(
        [
            'l-container is-gallery',
            get_sub_field( 'backgroundColour' ),
            get_sub_field( 'borderColour' ) ? 'u-hairline-top ' . get_sub_field( 'borderColour' ) : '',
        ]
    );
    $hide_for_later = get_sub_field( 'hideForLater' );
    if ( have_rows( 'halfBleedImageGrid' ) && ! $hide_for_later ) :
        ?>
        <section class="<?php echo esc_attr( $class_names->container() ); ?>">
            <div class="l-row is-full no-gutter">
                <?php
                while ( have_rows( 'halfBleedImageGrid' ) ) :
                    the_row();
                        $img = new Image(
                            [
                                'is-halfbleed',
                                get_sub_field( 'parallaxImage' ) ? 'is-parallax' : '',
                                get_sub_field( 'imageGradiant' ),
                            ],
                            [ 'halfBleed' ]
                        );
                        $image = get_sub_field( 'halfBleedImage' );
                    if ( ! empty( $image ) ) :
                        ?>
                        <div class="l-column is-mobile-half no-gutter">
                            <?php
                                $prefix = $img->prefix();
                                $sizes = $img->sizes();
                                include( locate_template( '/inc/partials/partials-figure.php' ) );
                            ?>
                        </div>
                        <?php
                    endif;
                endwhile;
                ?>
            </div>
        </section>
        <?php
    endif;
endif;

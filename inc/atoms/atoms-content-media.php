<?php
/**
 * Content with Image
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'contentMedia' ) :
    $content_media_index = 0;
    if ( have_rows( 'contentMediaRepeater' ) ) :
        while ( have_rows( 'contentMediaRepeater' ) ) :
            the_row();
                $class_names = new ClassNames(
                    [
                        'l-container is-content-media',
                        get_sub_field( 'backgroundColour' ),
                        get_sub_field( 'borderColour' ) ? 'u-hairline-top ' . get_sub_field( 'borderColour' ) : '',
                    ],
                    [
                        'content has-gutter',
                        get_sub_field( 'fontColour' ),
                    ]
                );
                $img = new Image(
                    [
                        'is-halfbleed',
                        get_sub_field( 'parallaxImage' ) ? 'is-parallax' : '',
                        get_sub_field( 'imageGradiant' ),
                    ],
                    [ 'halfBleed' ]
                );
                $content_block = get_sub_field( 'contentBlock' );
                $image = get_sub_field( 'halfBleedImage' );
                $hide_for_later = get_sub_field( 'hideForLater' );
            if ( ! $hide_for_later ) : ?>
                <section class="<?php echo esc_attr( $class_names->container() ); ?>">
                    <div class="l-row is-full no-gutter is-middle">
                        <?php if ( ! empty( $image ) ) : ?>
                            <div class="l-column is-desktop-half no-gutter
                            <?php
                            if ( $content_media_index % 2 == 1 ) :
                                ?>
                                 has-desktop-pull-half<?php endif; ?>">
                                <?php
                                    $prefix = $img->prefix();
                                    $sizes = $img->sizes();
                                    include( locate_template( '/inc/partials/partials-figure.php' ) );
                                ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( ! empty( $content_block ) ) : ?>
                            <div class="l-column is-desktop-half no-desktop-gutter
                            <?php
                            if ( $content_media_index % 2 == 1 ) :
                                ?>
                                 has-desktop-push-half<?php endif; ?>">
                                <div class="<?php echo esc_attr( $class_names->font() ); ?>">
                                    <?php echo wp_kses_post( $content_block ); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $content_media_index ++; ?>
                    </div>
                </section>
                <?php
            endif;
        endwhile;
    endif;
endif;

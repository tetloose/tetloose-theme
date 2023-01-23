<?php
/**
 * Video embed
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'mediaSection' ) :
    $class_names = new ClassNames(
        [
            'l-container is-content-media',
            get_sub_field( 'backgroundColour' ),
            get_sub_field( 'borderColour' ) ? 'u-hairline-top ' . get_sub_field( 'borderColour' ) : '',
        ],
        [
            'content__iframe',
            get_sub_field( 'fontColour' ),
        ]
    );
    $media = get_sub_field( 'media' );
    $hide_for_later = get_sub_field( 'hideForLater' );
    if ( ! empty( $media ) && ! $hide_for_later ) :
        ?>
        <section class="<?php echo esc_attr( $class_names->container() ); ?>">
            <div class="l-row is-full no-gutter is-middle">
                <div class="l-column no-gutter">
                    <div class="<?php echo esc_attr( $class_names->font() ); ?>">
                        <?php echo wp_kses_post( $media ); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    endif;
endif;

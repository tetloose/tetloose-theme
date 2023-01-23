<?php
/**
 * Single column content block
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'singleColumnContentBlock' ) :
    $class_names = new ClassNames(
        [
            'l-container is-content',
            get_sub_field( 'backgroundColour' ),
            get_sub_field( 'borderColour' ) ? 'u-hairline-top ' . get_sub_field( 'borderColour' ) : '',
        ],
        [
            'content',
            get_sub_field( 'fontColour' ),
        ]
    );
    $content_block = get_sub_field( 'contentBlock' );
    $hide_for_later = get_sub_field( 'hideForLater' );
    if ( ! empty( $content_block ) && ! $hide_for_later ) :
        ?>
        <section class="<?php echo esc_attr( $class_names->container() ); ?>">
            <div class="l-row">
                <div class="l-column">
                    <div class="<?php echo esc_attr( $class_names->font() ); ?>">
                        <?php echo wp_kses_post( $content_block ); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    endif;
endif;

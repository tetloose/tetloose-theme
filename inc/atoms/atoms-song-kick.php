<?php
/**
 * Single column content block
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'songKick' ) :
    $class_names = new ClassNames(
        [
            'l-container is-content',
            get_sub_field( 'backgroundColour' ),
            get_sub_field( 'borderColour' ) ? 'u-hairline-top ' . get_sub_field( 'borderColour' ) : '',
        ],
        [
            get_sub_field( 'fontColour' ),
        ]
    );
    $btn = new Btn(
        get_sub_field( 'btn' ),
        get_sub_field( 'btnStyle' )
    );
    $song_kick_api_url = get_sub_field( 'songKickApiUrl' );
    $song_kick_show = get_sub_field( 'songKickShow' );
    $hide_for_later = get_sub_field( 'hideForLater' );
    if ( ! $hide_for_later ) :
        ?>
        <section class="<?php echo esc_attr( $class_names->container() ); ?>">
            <div class="l-row">
                <div class="l-column is-half is-centered">
                    <div
                        class="<?php echo esc_attr( $class_names->font() ); ?> js-songKick"
                        <?php if ( ! empty( $song_kick_api_url ) ) : ?>
                            data-url="<?php echo esc_url( $song_kick_api_url ); ?>"
                        <?php endif; ?>
                        <?php if ( ! empty( $song_kick_show ) ) : ?>
                            data-show="<?php echo esc_url( $song_kick_show ); ?>"
                        <?php endif; ?>>
                    </div>
                    <?php if ( ! empty( $btn ) ) : ?>
                        <div class="content">
                            <div class="btn is-center">
                                <a href="<?php echo esc_url( $btn->url() ); ?>" class="<?php echo esc_attr( $btn->style() ); ?>" <?php echo esc_attr( $btn->target() ); ?>>
                                    <?php echo esc_html( $btn->title() ); ?>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
    endif;
endif;

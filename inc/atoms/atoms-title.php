<?php
/**
 * Title
 * ACF
 *
 * @package Tetloose-Theme
 **/

$punk_title = get_field( 'punkTitle' );
$class_names = new ClassNames(
    [
        'l-container is-title',
        $punk_title ? 'is-punk' : '',
        get_sub_field( 'backgroundColour' ),
        get_sub_field( 'borderColour' ) ? 'u-hairline-top ' . get_sub_field( 'borderColour' ) : '',
    ],
    [
        ! $punk_title ? get_sub_field( 'fontColour' ) : 'u-punk-text',
        get_sub_field( 'textAlignment' ),
    ]
);

$title_block = get_sub_field( 'titleBlock' );
$sub_title = get_sub_field( 'subTitle' );
$hide_for_later = get_sub_field( 'hideForLater' );
if ( empty( $hide_for_later ) && ! empty( $title_block ) ) :
    ?>
    <section class="<?php echo esc_attr( $class_names->container() ); ?>">
        <div class="l-row">
            <div class="l-column">
                <h1 class="content__heading">
                    <span class="<?php echo esc_attr( $class_names->font() ); ?>">
                        <?php bold_last_string( $title_block ); ?>
                    </span>
                </h1>
                <?php if ( ! empty( $sub_title ) ) : ?>
                    <p class="content__paragraph">
                        <span class="<?php echo esc_attr( $class_names->font() ); ?>">
                            <?php echo esc_html( $sub_title ); ?>
                        </span>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
endif;

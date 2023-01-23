<?php
/**
 * Title
 * ACF
 *
 * @package Tetloose-Theme
 **/

$punk_title = get_field( 'title_punkTitle' );
$class_names = new ClassNames(
    [
        'l-container is-title',
        $punk_title ? 'is-punk' : '',
        get_field( 'title_backgroundColour' ),
        get_field( 'title_borderColour' ) ? 'u-hairline-top ' . get_field( 'title_borderColour' ) : '',
    ],
    [
        ! $punk_title ? get_field( 'title_fontColour' ) : 'u-punk-text',
        get_field( 'title_textAlignment' ),
    ]
);
$no_title = get_field( 'noTitle' );
$the_title = titleizeit( get_the_title() );
$sub_title = get_field( 'title_subTitle' );
if ( ! empty( $no_title ) && ! empty( $the_title ) ) : ?>
    <section class="<?php echo esc_attr( $class_names->container() ); ?>">
        <div class="l-row">
            <div class="l-column">
                <h1 class="content__heading">
                    <span class="<?php echo esc_attr( $class_names->font() ); ?>">
                        <?php bold_last_string( $the_title ); ?>
                    </span>
                </h1>
                <?php
                if ( ! empty( $sub_title ) ) :
                    ?>
                    <p class="content__paragraph">
                        <span class="<?php echo esc_attr( $class_names->font() ); ?>">
                            <?php echo esc_html( $sub_title ); ?>
                        </span>
                    </p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </section>
    <?php
endif;

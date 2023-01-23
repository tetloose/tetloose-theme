<?php
/**
 * News Post Type loop
 * ACF Flexible Content
 *
 * @package Tetloose-Theme
 **/

if ( get_row_layout() == 'addNews' ) :
    $class_names = new ClassNames(
        [
            'l-container',
            get_sub_field( 'backgroundColour' ),
            get_sub_field( 'borderColour' ) ? 'u-hairline-top ' . get_sub_field( 'borderColour' ) : '',
        ]
    );
    $img = new Image(
        [
            'is-halfbleed is-fixed',
            get_sub_field( 'parallaxImage' ) ? 'is-parallax' : '',
            get_sub_field( 'imageGradiant' ),
        ],
        [ 'halfBleed' ],
        [ 'is-news' ]
    );
    $add_news = get_sub_field( 'addNews' );
    $hide_for_later = get_sub_field( 'hideForLater' );

    if ( ! empty( $add_news ) && ! $hide_for_later ) :
        ?>
        <section class="<?php echo esc_attr( $class_names->container() ); ?>">
            <div class="l-row is-full no-gutter">
					<?php // phpcs:disable
					foreach ( $add_news as $i => $post ) :
                        $container_class = $i % 2 == 0 ? $img->container() . ' u-font-color-brand-2 btn-brand-2' : $img->container() . ' u-font-color-brand-1 btn-brand-1';
                        $prefix = $i % 2 == 0 ? $img->prefix() . ' u-gradiant-brand-1' : $img->prefix() . ' u-gradiant-brand-2';
                        $sizes = $img->sizes();
                    ?>
                    <div class="l-column is-tablet-1-third no-gutter">
                        <?php include( locate_template( '/inc/loops/loops-excerpt.php' ) ); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
		<?php wp_reset_postdata();
		// phpcs:enable
    endif;
endif;

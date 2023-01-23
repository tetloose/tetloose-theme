<?php
/**
 * Two column content block
 *
 * @package Tetloose-Theme
 */

$content_count = is_archive()
    ? count( get_field( get_post_type() . '_contentRepeater', 'option' ) )
    : count( get_sub_field( 'contentRepeater' ) );
$acf_repeater = is_archive()
    ? get_post_type() . '_contentRepeater'
    : 'contentRepeater';
$class_names = new ClassNames(
    [
        'l-container is-content',
        $content_count > 1
            ? 'has-tablet-divide'
            : '',
        is_archive()
            ? get_field( get_post_type() . '_backgroundColour', 'option' )
            : get_sub_field( 'backgroundColour' ),
        ( is_archive()
            ? ( get_field( get_post_type() . '_borderColour', 'option' )
                ? 'u-hairline-top ' . get_field( get_post_type() . 'borderColour', 'option' )
                : '' )
            : ( get_sub_field( 'borderColour' )
                ? 'u-hairline-top ' . get_sub_field( 'borderColour' )
                : '' ) ),
    ],
    [
        'l-column',
        $content_count > 1
            ? 'is-tablet-half'
            : '',
        is_archive()
            ? get_field( get_post_type() . '_fontColour', 'option' )
            : get_sub_field( 'fontColour' ),
    ]
);
if ( is_archive() ) :
    if ( have_rows( $acf_repeater, 'option' ) ) :
        ?>
        <section class="<?php echo esc_attr( $class_names->container() ); ?>">
            <div class="l-row is-middle">
                <?php
                while ( have_rows( $acf_repeater, 'option' ) ) :
                    the_row();
                    ?>
                    <?php $content_block = get_sub_field( 'contentBlock' ); ?>
                    <?php if ( ! empty( $content_block ) ) : ?>
                        <div class="<?php echo esc_attr( $class_names->font() ); ?>">
                            <div class="content">
                                <?php echo wp_kses_post( $content_block ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>
<?php else : ?>
    <?php if ( have_rows( $acf_repeater ) ) : ?>
        <section class="<?php echo esc_attr( $class_names->container() ); ?>">
            <div class="l-row is-middle">
                <?php
                while ( have_rows( $acf_repeater ) ) :
                    the_row();
                    ?>
                    <?php $content_block = get_sub_field( 'contentBlock' ); ?>
                    <?php if ( ! empty( $content_block ) ) : ?>
                        <div class="<?php echo esc_attr( $class_names->font() ); ?>">
                            <div class="content">
                                <?php echo wp_kses_post( $content_block ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>
    <?php
endif;

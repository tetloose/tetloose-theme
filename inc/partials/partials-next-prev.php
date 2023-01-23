<?php
/**
 * Next and prev pagination links
 *
 * @package Tetloose-Theme
 */

$prev_post = get_previous_post();
$next_post = get_next_post();
$title_block = get_field( 'nav_titleBlock' );

$class_names = new ClassNames(
    [
        'l-container is-pagination',
        get_field( 'nav_backgroundColour' )
            ? get_field( 'nav_backgroundColour' )
            : '',
        get_field( 'nav_borderColour' )
            ? 'u-hairline-top ' . get_field( 'nav_borderColour' )
            : '',
    ],
    [
        'content is-center has-gutter',
        get_field( 'nav_fontColour' )
            ? get_field( 'nav_fontColour' )
            : '',
    ]
);

if ( ! empty( $prev_post ) || ! empty( $next_post ) ) : ?>
    <div class="<?php echo esc_attr( $class_names->container() ); ?>">
        <div class="<?php echo esc_attr( $class_names->font() ); ?>">
            <h2 class="content__heading">
                <strong>
                    <?php if ( ! empty( $title_block ) ) : ?>
                        <?php echo esc_html( $title_block ); ?>
                    <?php else : ?>
                        Navigation
                    <?php endif; ?>
                </strong>
            </h2>
            <ul class="content__nav">
                <?php
                if ( ! empty( $prev_post ) ) :
                    $prev_title = strip_tags( str_replace( '"', '', $prev_post->post_title ) );
                    ?>
                    <li>
                        <a
                            href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"
                            class="u-icon--left"
                            <?php if ( ! empty( $prev_title ) ) : ?>
                                title="<?php echo esc_html( $prev_title ); ?>"
                            <?php endif; ?>></a>
                    </li>
                    <?php
                endif;
                ?>
                <li>
                    <a href="/news" class="u-icon--news" title="Back to news"></a>
                </li>
                <?php
                if ( ! empty( $next_post ) ) :
                    $next_title = strip_tags( str_replace( '"', '', $next_post->post_title ) );
                    ?>
                    <li>
                        <a
                            href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"
                            class="u-icon--right"
                            <?php if ( ! empty( $next_title ) ) : ?>
                                title="<?php echo esc_html( $next_title ); ?>"
                            <?php endif; ?>></a>
                    </li>
                    <?php
                endif;
                ?>
            </ul>
        </div>
    </div>
    <?php
endif;

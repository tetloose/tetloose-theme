<?php
/**
 * Post Type excerpt loop
 * tetloose need work
 *
 * @package Tetloose-Theme
 */

$the_post_type = get_post_type();
$default_button_text = get_field( 'defaultButtonText', 'option' );
$the_date = get_the_date( 'd/m/Y' );
$image = get_field( 'excerptImage' );
$sub_title = get_field( 'subTitle' );
$excerpt = get_field( 'excerpt' );

$class_names = new ClassNames(
    [
        'excerpt',
        $container_class ? $container_class : '',
    ]
);
?>
<article class="<?php echo esc_attr( $class_names->container() ); ?>">
    <a href="<?php echo esc_url( get_the_permalink() ); ?>">
        <?php
        if ( ! empty( $image ) ) {
            include locate_template( '/inc/partials/partials-figure.php' );
        }
        ?>
        <?php if ( $the_post_type === 'news' && ! is_paged() && isset( $top_story ) && $top_story === 0 ) : ?>
            <span class="excerpt__wrap">
        <?php endif; ?>
        <span class="excerpt__inside">
            <h3 class="content__heading excerpt__title is-center">
                <?php if ( ! empty( $the_post_type ) && $the_post_type === 'news' ) : ?>
                    <?php if ( ! empty( $the_date ) ) : ?>
                        <time class="content__small"><?php echo esc_html( $the_date ); ?></time>
                    <?php endif; ?>
                <?php endif; ?>
                <strong><?php echo esc_html( get_the_title() ); ?></strong>
            </h3>
            <?php if ( ! empty( $excerpt ) || ! empty( $sub_title ) ) : ?>
                <span class="excerpt__content content is-center">
                    <p>
                        <?php if ( ! empty( $sub_title ) ) : ?>
                            <?php echo esc_html( $sub_title ); ?>
                        <?php endif; ?>
                        <?php if ( ! empty( $excerpt ) ) : ?>
                            <?php echo esc_html( $excerpt ); ?>
                        <?php endif; ?>
                    </p>
                </span>
            <?php endif; ?>
            <?php if ( ! empty( $the_post_type ) && $the_post_type === 'news' && is_archive() ) : ?>
                <span class="btn is-center">
                    <span
                        class="btn__inside">
                        <?php if ( ! empty( $default_button_text ) ) : ?>
                            <?php echo esc_html( $default_button_text ); ?>
                        <?php else : ?>
                            Read more
                        <?php endif; ?>
                    </span>
                </span>
            <?php endif; ?>
        </span>
        <?php if ( ! empty( $the_post_type ) && $the_post_type === 'news' && ! is_archive() ) : ?>
            <span class="btn is-center">
                <span
                    class="btn__inside">
                    <?php if ( ! empty( $default_button_text ) ) : ?>
                        <?php echo esc_html( $default_button_text ); ?>
                    <?php else : ?>
                        Read more
                    <?php endif; ?>
                </span>
            </span>
        <?php endif; ?>
        <?php if ( $the_post_type === 'news' && ! is_paged() && isset( $top_story ) && $top_story === 0 ) : ?>
            </span>
        <?php endif; ?>
    </a>
</article>

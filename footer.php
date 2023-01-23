<?php
/**
 * Wordpress Footer
 *
 * @package Tetloose-Theme
 **/

$class_names = new ClassNames(
    [
        'mastfoot',
        get_field( 'footerBackgroundColour', 'option' ),
        get_field( 'footerBorderColour', 'option' ) ? 'u-hairline-top ' . get_field( 'footerBorderColour', 'option' ) : '',
    ],
    [
        'content is-center',
        get_field( 'footerFontColour', 'option' ),
    ]
);
?>
        </main>
        <?php
        if ( ! post_password_required( $post ) ) :
            ?>
            <footer class="<?php echo esc_attr( $class_names->container() ); ?>">
                <div class="<?php echo esc_attr( $class_names->font() ); ?> js-mastfoot">
                    <?php
                        get_template_part( '/inc/footer/footer', 'social' );
                        get_template_part( '/inc/footer/footer', 'navigation' );
                        get_template_part( '/inc/footer/footer', 'copyright' );
                    ?>
                </div>
            </footer>
            <?php
        endif;
        get_template_part( '/inc/footer/footer', 'scripts' );
        ?>
    </body>
</html>

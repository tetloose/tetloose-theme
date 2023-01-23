<?php
/**
 * Password form
 *
 * @package Tetloose-Theme
 */

    $password_protected_title = get_field( 'passwordProtectedTitle', 'option' );
    $password_protected_validation_error = get_field( 'passwordProtectedValidationError', 'option' );
    $password_protected_submit_title = get_field( 'passwordProtectedSubmitTitle', 'option' );
?>
<div class="l-container is-form">
    <div class="l-row">
        <div class="l-column">
            <?php if ( ! empty( $password_protected_title ) ) : ?>
                <div class="content__heading" title="<?php echo esc_attr( $password_protected_title ); ?>">
                    <?php echo wp_kses_post( $password_protected_title ); ?>
                </div>
            <?php endif; ?>
            <div class="form">
                <form action="<?php echo esc_url( home_url( '/' ) ); ?>/wp/wp-login.php?action=postpass" method="post" class="form form--password">
                    <input name="post_password" id="password-protected" type="password" value="" placeholder="Password"
                    <?php
                    if ( isset( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) && $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] != $post->post_password ) :
                        ?>
                         class="has-error"<?php endif; ?>>
                    <?php if ( isset( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) && $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] != $post->post_password ) : ?>
                        <span class="form__validation">
                            <?php if ( ! empty( $password_protected_validation_error ) ) : ?>
                                <?php echo esc_html( $password_protected_validation_error ); ?>
                            <?php else : ?>
                                Error
                            <?php endif; ?>
                        </span>
                    <?php endif; ?>
                    <span class="btn is-right">
                        <button class="btn__inside" type="submit">
                            <?php if ( ! empty( $password_protected_submit_title ) ) : ?>
                                <?php echo esc_html( $password_protected_submit_title ); ?>
                            <?php else : ?>
                                Submit
                            <?php endif; ?>
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>

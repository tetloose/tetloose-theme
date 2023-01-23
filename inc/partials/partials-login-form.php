<?php
/**
 * Login form
 *
 * @package Tetloose-Theme
 */

$login_title = get_field( 'loginTitle', 'option' );
$login_submit_title = get_field( 'loginSubmitTitle', 'option' );
$login_validation_error = get_field( 'loginValidationError', 'option' );
$login_forgot_password = get_field( 'loginForgotPassword', 'option' );
$form_method = get_permalink();

if ( is_user_logged_in() ) {
    header( 'Location: ' . esc_url( home_url( '/' ) ) );
    die();
// phpcs:disable
} elseif ( ! is_user_logged_in() && isset( $_POST['submit'] ) ) {
    $username = esc_sql( $_REQUEST['username'] );
    $password = esc_sql( $_REQUEST['password'] );
    $login_data = array();
    $login_data['user_login'] = $username;
    $login_data['user_password'] = $password;
    $user_verify = wp_signon( $login_data, false );

    if ( ! is_wp_error( $user_verify ) ) {
        header( 'Location: ' . esc_url( $form_method ) );
        die();
    }
}
// phpcs:enable
if ( ! is_user_logged_in() ) :
    ?>
    <div class="l-container is-form">
        <div class="l-row">
            <div class="l-column">
                <?php if ( ! empty( $login_title ) ) : ?>
                    <h2 class="content__heading" title="<?php echo esc_attr( $login_title ); ?>">
                        <?php echo esc_html( $login_title ); ?>
                    </h2>
                <?php endif; ?>
                <div class="form">
                    <form action="<?php echo esc_url( $form_method ); ?>" method="post">
                        <input id="username" type="text" placeholder="Username or email" name="username">
                        <input id="password" type="password" placeholder="Password" name="password">
                        <span class="btn is-right">
                            <button class="btn__inside" type="submit">
                                <?php if ( ! empty( $login_submit_title ) ) : ?>
                                    <?php echo esc_html( $login_submit_title ); ?>
                                <?php else : ?>
                                    Submit
                                <?php endif; ?>
                            </button>
                        </span>
                        <?php // phpcs:disable
                        if ( isset( $_POST['submit'] ) ) : ?>
                            <?php $user_verify = wp_signon( $login_data, false ); ?>
                            <?php
                            if ( is_wp_error( $user_verify ) ) :
                                ?>
                                <span class="form__validation">
                                    <?php if ( ! empty( $login_validation_error ) ) : ?>
                                        <?php echo esc_html( $login_validation_error ); ?>
                                    <?php else : ?>
                                        Incorrect username / password... try again
                                    <?php endif; ?>
                                </span>
                                <?php
                            endif;
                        endif;
                        // phpcs:enable
                        ?>
                        <p class="content__paragraph">
                            <a href="/wp/wp-login.php?action=lostpassword">
                                <?php if ( ! empty( $login_forgot_password ) ) : ?>
                                    <?php echo esc_html( $login_forgot_password ); ?>
                                <?php else : ?>
                                    Forgot password
                                <?php endif; ?>
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    endif;

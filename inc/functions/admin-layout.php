<?php
/**
 * Admin functions
 *
 * @package TetlooseTheme
 **/

/**
 * Removes personal options in user profile.
 **/
function hide_personal_options() {
    echo "\n" . '<script type="text/javascript">jQuery(document).ready(function($) { $(\'form#your-profile > h3:first\').hide(); $(\'form#your-profile > table:first\').hide(); $(\'form#your-profile\').show(); });</script>' . "\n";
}

add_action( 'admin_head', 'hide_personal_options' );

/**
 * Hide admin items from users.
 **/
function ld_custom_admin() {
    echo '<style>
        #wp-admin-bar-new-post,
        #wp-admin-bar-updates,
        #toplevel_page_aiowpsec,
        #wp-admin-bar-new-user,
        #wp-admin-bar-comments,
        #toplevel_page_edit-post_type-acf-field-group,
        #toplevel_page_wp-cachecom-inc-functions,
        #toplevel_page_gzip-ninja-speed-compression-gzip-ninja-speed-setting,
        #toplevel_page_cptui_main_menu,
        #toplevel_page_wpcf7 {
            display: none !important;
        }
    </style>';
}

/**
 * Remove Items from users.
 **/
function remove_items() {
    remove_menu_page( 'index.php' );
    remove_menu_page( 'edit-comments.php' );
    // remove_menu_page( 'themes.php' ).
    // remove_menu_page( 'plugins.php' ).
    // remove_menu_page( 'users.php' ).
    // remove_menu_page( 'tools.php' ).
    // remove_menu_page( 'options-general.php' ).
    remove_menu_page( 'edit.php' );
    remove_submenu_page( 'edit.php', 'edit.php' );
    remove_submenu_page( 'edit.php', 'post-new.php' );
    remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' );
    remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
}

add_action( 'admin_init', 'check_admin' );

/**
 * If super user isn't logged in remove items.
 **/
function check_admin() {
    $user_name = wp_get_current_user();
    $user_name = $user_name->user_login;
    if ( $user_name !== 'tetloose' ) {
        remove_items();
        add_action( 'admin_head', 'ld_custom_admin' );
        add_filter( 'acf/settings/show_admin', '__return_false' );
    }
}

/**
 * Redirect user to theme settings.
 **/
function dashboard_redirect() {
    wp_redirect( admin_url( 'admin.php?page=theme-settings' ) );
}

add_action( 'load-index.php', 'dashboard_redirect' );

/**
 * Redirect user to theme settings if wp-admin in url.
 **/
function login_redirect() {
    return admin_url( 'admin.php?page=theme-settings' );
}

add_filter( 'login_redirect', 'login_redirect', 10, 3 );

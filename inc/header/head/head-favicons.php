<?php
/**
 * Head favicons
 *
 * @package Tetloose-Theme
 */

$favicon_url = get_template_directory_uri() . '/assets/img/meta';
// Todo.
// Add theme color to env.
// Add version to env.
?>
<meta name="apple-mobile-web-app-title" content="<?php echo esc_attr( get_bloginfo() ); ?>">
<meta name="application-name" content="<?php echo esc_attr( get_bloginfo() ); ?>">
<meta name="msapplication-TileColor" content="#c2ad8d">
<meta name="theme-color" content="#c2ad8d">
<meta name="msapplication-TileImage" content="<?php echo esc_url( $favicon_url ); ?>/mstile-150x150.png?v=todo">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url( $favicon_url ); ?>/android-chrome-192x192.png?v=todo">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( $favicon_url ); ?>/apple-touch-icon.png?v=todo">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( $favicon_url ); ?>/favicon-16x16.png?v=todo">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( $favicon_url ); ?>/favicon-32x32.png?v=todo">
<link rel="shortcut icon" href="<?php echo esc_url( $favicon_url ); ?>/favicon.ico?v=todo">
<link rel="mask-icon" href="<?php echo esc_url( $favicon_url ); ?>/safari-pinned-tab.svg?v=todo" color="#c2ad8d">

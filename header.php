<?php
/**
 * Wordpress Header
 *
 * @package Tetloose-Theme
 **/

$class_names = new ClassNames( [ current_user_can( 'administrator' ) && is_user_logged_in() ? 'is-admin' : 'is-user' ] );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo esc_attr( $class_names->container() ); ?>">
<head>
    <?php
        get_template_part( '/inc/header/head/head', 'meta' );
        get_template_part( '/inc/header/head/head', 'favicons' );
        get_template_part( '/inc/header/head/head', 'scripts' );
    ?>
</head>
<body>
    <?php get_template_part( '/inc/header/header', 'head' ); ?>
    <main>

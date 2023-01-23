<?php
/**
 * 404 Page
 *
 * @package Tetloose-Theme
 **/

get_header();
$error_page_content = get_field( 'errorPageContent', 'option' );
if ( ! empty( $error_page_content ) ) :
    ?>
    <div class="l-container is-content">
        <div class="l-row">
            <div class="l-column">
                <div class="content">
                    <?php echo esc_attr( $error_page_content ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    endif;
get_footer();

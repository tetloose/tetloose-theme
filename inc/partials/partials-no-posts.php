<?php
/**
 * No Posts
 *
 * @package Tetloose-Theme
 */

$no_posts = get_field( 'noPosts', 'option' );
if ( ! empty( $no_posts ) ) :
    ?>
    <div class="l-container is-content">
        <div class="l-row">
            <div class="l-column">
                <div class="content">
                    <?php echo wp_kses_post( $no_posts ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
endif;

<?php
/**
 * Social links
 *
 * @package Tetloose-Theme
 */

$social_facebook = get_field( 'socialFacebook', 'option' );
$social_instagram = get_field( 'socialInstagram', 'option' );
$social_youtube = get_field( 'socialYouTube', 'option' );
$social_twitter = get_field( 'socialTwitter', 'option' );
$social_spotify = get_field( 'socialSpotify', 'option' );
$social_bandcamp = get_field( 'socialBandcamp', 'option' );

if ( ! empty( $social_facebook ) || ! empty( $social_instagram ) || ! empty( $social_youtube ) || ! empty( $social_twitter ) || ! empty( $social_spotify ) || ! empty( $social_bandcamp ) ) :
    ?>
    <span class="content__icons has-gutter">
        <?php if ( ! empty( $social_facebook ) ) : ?>
            <a href="<?php echo esc_url( $social_facebook ); ?>" target="_blank">
                <i class="u-icon--facebook"></i>
                <span class="u-alt">Facebook</span>
            </a>
        <?php endif ?>
        <?php if ( ! empty( $social_instagram ) ) : ?>
            <a href="<?php echo esc_url( $social_instagram ); ?>" target="_blank">
                <i class="u-icon--instagram"></i>
                <span class="u-alt">Instagram</span>
            </a>
        <?php endif ?>
        <?php if ( ! empty( $social_youtube ) ) : ?>
            <a href="<?php echo esc_url( $social_youtube ); ?>" target="_blank">
                <i class="u-icon--youtube"></i>
                <span class="u-alt">youtube</span>
            </a>
        <?php endif ?>
        <?php if ( ! empty( $social_twitter ) ) : ?>
            <a href="<?php echo esc_url( $social_twitter ); ?>" target="_blank">
                <i class="u-icon--twitter"></i>
                <span class="u-alt">Twitter</span>
            </a>
        <?php endif ?>
        <?php if ( ! empty( $social_spotify ) ) : ?>
            <a href="<?php echo esc_url( $social_spotify ); ?>" target="_blank">
                <i class="u-icon--spotify"></i>
                <span class="u-alt">Spotify</span>
            </a>
        <?php endif ?>
        <?php if ( ! empty( $social_bandcamp ) ) : ?>
            <a href="<?php echo esc_url( $social_bandcamp ); ?>" target="_blank">
                <i class="u-icon--bandcamp"></i>
                <span class="u-alt">Bandcamp</span>
            </a>
        <?php endif ?>
    </span>
    <?php
endif;

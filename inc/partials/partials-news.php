<?php
/**
 * News Post type
 *
 * @package Tetloose-Theme
 */

$top_story = 0;
$highlights = 0;
?>

<div class="l-container is-archive-news">
    <div class="l-row is-full no-gutter">
        <?php
        while ( have_posts() ) :
            the_post();
            $container_class = $highlights === 0
                ? 'is-news-archive u-font-color-dark btn-brand-1 u-hairline-top u-hairline-dark'
                : 'is-news-archive u-font-color-dark btn-brand-2 u-hairline-top u-hairline-dark';

            $prefix = $highlights === 0
                ? 'is-halfbleed u-gradiant-brand-1'
                : 'is-halfbleed u-gradiant-brand-2';

            $sizes = 'halfBleed';

            $column_class = ! is_paged() && $top_story === 0
                ? 'l-column no-gutter is-top-story'
                : 'l-column no-gutter is-tablet-half';

            ?>
            <div class="<?php echo esc_attr( $column_class ); ?>">
                <?php include( locate_template( '/inc/loops/loops-excerpt.php' ) ); ?>
            </div>
            <?php
            $top_story++;
            $highlights++;

            if ( $highlights > 1 ) {
                $highlights = 0;
            }
        endwhile;
        ?>
    </div>
</div>

<?php
/**
 * Social buttons
 *
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<div class="social__share">
    <?php _e( 'Share on' , 'minimal2017' ); ?>: 
    <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" 
       class="btn btn--facebook">facebook</a>
    <a href="http://twitter.com/share?url=<?php echo esc_url( get_permalink() ); ?>&
             text=<?php get_the_title(); ?>via=MarkDijkstra" class="btn btn--twitter">twitter</a>
</div>
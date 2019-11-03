<?php
/**
 * Post meta data.
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


<ul class="blogpost__meta">
    <li>
        <a href="<?php echo get_month_link('', ''); ?>">
            <?php the_time('F j, Y'); ?>
        </a>
    </li> 
    <li class="seperator">/</li>
    <li>
        <?php _e( 'By' , 'minimal2017' ); ?>
        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'display_name' ) ); 
            ?>"><?php echo get_the_author_meta('display_name');?>
        </a>
    </li> 
    <li class="seperator">/</li>
    <li>
        <?php the_category( ', ' ); ?>
    </li>
    <li class="seperator">/</li>
    <li>
        <?php 

            comments_popup_link(__( 'No comments'   , 'minimal2017' ), 
                                '1 '. __( 'Comment' , 'minimal2017' ), 
                                '% '.__( 'Comments' , 'minimal2017' ) 
            ); 

        ?>

    </li>
</ul>
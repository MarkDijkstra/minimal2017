<?php
/**
 * Template functions.
 *
 * Functions used to output template data.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Post meta.
 *
 * This returns the post meta data in each post.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

function minimal2017_postmeta(){ ?>
    
    <ul class="blogpost__meta">
        <li>
            <a href="<?php echo get_month_link('', ''); ?>">
                <?php the_date(); ?>
                <?php //the_time('F j, Y'); ?>
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

<?php }

/**
 * Social buttons.
 *
 * This returns the a couple of social buttons.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

function minimal2017_social(){ ?>   

    <div class="social__share">
        <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" 
           class="btn--facebook"><?php _e('share on' , 'minimal2017' );?> facebook</a>
        <a href="
                 http://twitter.com/share?url=<?php echo esc_url( get_permalink() ); ?>&text=<?php the_title(); ?>&via=MarkDijkstra" class="btn--twitter" target="_blank"><?php _e('share on' , 'minimal2017' );?> twitter</a>
    </div>

<?php }
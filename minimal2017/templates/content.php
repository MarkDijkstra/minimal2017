<?php

/**
 * Template part for posts on the frontpage.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage Minimal_2017
 * @author     Mark Dijkstra
 * @since      0.0.1
 * @version    0.0.1
 */

?>

<article <?php post_class( 'blogpost' ); ?> id="post-<?php the_ID(); ?>" role="article">

    <?php if ( is_sticky() && is_home() ) :?>

        <div class="sticky__label"><?php _e( 'Featured Post' , 'minimal2017' ); ?></div>

    <?php endif; ?> 

    <?php if ( has_post_thumbnail() ) :?>                             

        <a href="<?php echo esc_url( get_permalink() ); ?>" class="blogpost__image">
            <?php the_post_thumbnail(); ?>
        </a>

    <?php endif;
    
    echo minimal2017_postmeta(); ?> 
    
    <header class="blogpost__title">

        <?php 
        
            the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

        ?>                            

    </header>
    
    <div class="blogpost__content"> 

        <?php
        
            if ( has_excerpt() ) :

                the_excerpt();

            else:

                the_content(); 

            endif;
        
        ?>        
     
    </div>

    <a href="<?php echo esc_url( get_permalink() ); ?>" class="readmore">
        <?php _e( 'Continue reading' , 'minimal2017' ); ?> <span>&rarr;</span>
    </a>    
    
    <?php echo minimal2017_social(); ?> 

</article>
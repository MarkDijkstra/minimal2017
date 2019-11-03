<?php

/**
 * Template part for displaying none content.
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

<article <?php post_class('blogpage'); ?> id="post-<?php the_ID(); ?>" role="article">
    
    <?php the_title( '<h1 class>' , '</h1>' ); ?>
    
    <div class="blogpost__content"> 

        <?php the_content(); ?>        
     
    </div>
    
</article>
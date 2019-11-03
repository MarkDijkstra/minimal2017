<?php

/**
 * Template part for displaying posts.
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

<div class="author__box">                     
	<div class="author__avatar">
        
	<?php
     
		echo get_avatar( get_the_author_meta( 'user_email' ), 100 );
    
    ?>
     
	</div>
    <div class="author__info">
        <h5>
            <?php _e( 'About' , 'minimal2017' ); echo ' '; echo get_the_author_meta( 'display_name' ); ?>
        </h5>
        <p>
            <?php echo get_the_author_meta( 'description' ); ?>
        </p>
    </div>                
</div>
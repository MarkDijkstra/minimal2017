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


if ( post_password_required() ) {
    
	return;
    
}

?>

<div class="comments" id="comments">    
    
    <?php if ( have_comments() ) {
    
        $comments_number = get_comments_number(); ?>
    
        <h5>

            <?php if ( $comments_number === 1 ) {

                printf( _x( 'One comment on &ldquo;%s&rdquo;', 'comments title', 'minimal2017' ), get_the_title() );

            }else{

                printf(
                    _nx(
                        '%1$s comment on &ldquo;%2$s&rdquo;',
                        '%1$s comments on &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'minimal2017'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );

            }?>

        </h5>
    
    <?php 
        
    $args = array(
                  'style'             => 'div',
                  'reverse_top_level' => true,
                  'reply_text'        => __('reply' , 'minimal2017').' &rarr;',
                  'avatar_size'       => 0 ,
                  'format'            => 'html5'
            );
      
    echo '<div class="comments__list">';
    
             wp_list_comments( $args );
    
    echo '</div>'; 
    
    }else{
        
        echo '<h5>';
    
           printf( _x( 'No comments found for &ldquo;%s&rdquo;', 'comments title', 'minimal2017' ), get_the_title() );
    
        echo '</h5>';
    }

    ?>

</div>
    
    <?php
		comment_form( 
            array(
                'title_reply_before' => '<h5 id="reply-title">',
                'title_reply_after'  => '</h5>',
            ) 
        );
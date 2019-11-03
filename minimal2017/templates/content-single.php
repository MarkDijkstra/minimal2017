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

<article <?php post_class('blogpost'); ?> id="post-<?php the_ID(); ?>" role="article">

    <?php if ( has_post_thumbnail() ) :?>                             

        <div class="blogpost__image">
            <?php the_post_thumbnail(); ?>
        </div>
    
    <?php endif;
    
    echo minimal2017_postmeta();?>
    
    <header class="blogpost__title">

        <?php the_title( '<h1>', '</h1>' ); ?>                            

    </header>
    
    <div class="blogpost__content"> 

        <?php the_content(); ?>        
     
    </div>

    <div class="blogpost__tags">
        
        <?php if ( has_tag() ): ?>
    
            <span><?php _e( 'Tags' , 'minimal2017' ).':'; ?></span>

            <?php the_tags( '' , ', ' , '' ); ?>

        <?php else:         
        
            _e( 'No tags found!' , 'minimal2017' );
        
        endif;
        
        ?>       

    </div>    
    
    <?php echo minimal2017_social(); ?>   
    
</article>

    <?php if ( get_previous_post_link() || get_next_post_link() ) : ?> 

        <div class="pagination">
            <div class="float--left">                        

                <?php 
                    echo previous_post_link('<h4><span>&larr;'.  __( "previous" , "minimal2017" ).'</span>%link</h4>'); 
                ?>

            </div>
            <div class="float--right">

                <?php 
                    echo next_post_link('<h4><span>'.  __( "next" , "minimal2017" ).' &rarr;</span>%link</h4>'); 
                ?>

            </div>
        </div>            

    <?php endif;

    if ( '' !== get_the_author_meta( 'description' ) ) {

        get_template_part( 'templates/biography' );

    }

    if ( comments_open() || get_comments_number() ) {

        comments_template();

    }

    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) {?>

    <p class="no-comments"><?php _e( 'Comments are closed.' , 'minimal2017' ); ?></p>

<?php }
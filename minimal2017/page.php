<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage Minimal_2017
 * @author     Mark Dijkstra
 * @since      0.0.1
 * @version    0.0.1
 */

get_header(); ?>

    <main class="main" role="main">
        <div class="inner">

        <?php

        if ( have_posts() ) :

            while ( have_posts() ) : the_post();

                get_template_part( 'templates/content' , 'page' );
            
            endwhile;       

        else:

            get_template_part( 'templates/content' , 'none' );

        endif; ?>
              
        </div>
    </main>

<?php get_footer();
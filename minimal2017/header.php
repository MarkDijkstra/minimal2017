<?php
/**
 * The header for this theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div class="container">.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package    WordPress
 * @subpackage Minimal_2017
 * @author     Mark Dijkstra
 * @since      0.0.1
 * @version    0.0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    
    <meta name="description" content="Mark Dijkstra" />
    <meta name="keywords" content="" />
	<meta name="author" content="Mark Dijkstra" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="HandheldFriendly" content="true" />   
    <meta name="viewport" content="width=device-width, initial-scale=1" />    
    
    <?php wp_head(); ?>

</head>
<body <?php body_class('fadeineffect'); ?> >
   <div class="container">
        
        <header class="mainheader" role="banner">

            <div class="mainmenu">
                 <div class="inner">

                     <div class="float--left">                         
                        <nav role="navigation" aria-label="Main Menu">

                            <?php 

                                 wp_nav_menu( 
                                     array( 
                                         'theme_location' => 'header-menu',
                                         'container'      => 'div'
                                     ) 
                                 ); 

                            ?>
                            
                        </nav>
                     </div>

                     <div class="float--right">

                        <form role="search">
                            <input type="text" class="input__field" name="s" placeholder="<?php _e('Search...' , 'minimal2017'); ?>" aria-label="Search"/> 
                        </form>

                     </div>

                </div>
            </div>

            <div class="inner">

                <a href="<?php echo get_site_url(); ?>" class="mainheader__logo"></a>

                <div id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </header> 
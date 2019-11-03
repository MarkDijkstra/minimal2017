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
	<meta name="author" content="CreativeMilk" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="HandheldFriendly" content="true" />   
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        
	<link href="<?php echo get_theme_file_uri( 'assets/css/404.min.css' ) ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rasa" rel="stylesheet">
    
    <?php wp_head(); ?>

</head>
<body>
    <div id="container">
        <h1 style="display:none">I went to the website of Mark Dijkstra and all I got was this lousy 404 page!</h1>
        <div id="box">
            <a href="http://www.markdijkstra.eu" title="go to my home" class="home"><!-- home --></a>
            <a href="http://twitter.com/MarkDijkstra" title="follow me on twitter" class="twitter"><!-- twitter --></a>
            <a href="mailto:404@markdijkstra.eu" title="mail me" class="contact"><!-- contact --></a>
        </div>
    </div>

    <?php wp_footer(); ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-4702787-1', 'auto');
      ga('send', 'pageview');

    </script>

</body>
</html>
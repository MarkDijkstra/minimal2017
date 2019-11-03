<?php
/**
 * The footer for this theme.
 *
 * This is the template that displays the code that is used as a footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package    WordPress
 * @subpackage Minimal_2017
 * @author     Mark Dijkstra
 * @since      0.0.1
 * @version    0.0.1
 */

?>



        <footer class="mainfooter" role="contentinfo">
            <div class="inner">

                <div class="float--left">
                    <?php _e('Copyright', 'minimal2017'); ?> &copy; <?php echo date('Y');?>  Mark Dijkstra
                </div>

                <div class="float--right">
                   <?php _e('Made with', 'minimal2017'); ?> <span class="heart"></span> 
                    <a href="http://www.markdijkstra.eu"><?php _e('by', 'minimal2017'); ?> Mark Dijkstra</a>
                </div>

            </div>   
        </footer>

    </div>

    <?php wp_footer(); ?>

    <script type="text/javascript">
        WebFontConfig = {
        google: { families: [ 'Rasa' ] }
        };
        (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
        })(); 
    </script>


</body>
</html>
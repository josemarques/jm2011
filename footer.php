<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

  <footer>
     
      <ul class="social">
      	<li class="WordPress"><a href="http://feedingtherobots.com">Blog</a></li>
        <li class="twitter"><a href="http://twitter.com/josemarques">Twitter</a></li>
      	<li class="facebook"><a href="http://facebook.com/josemarques">Facebook</a></li>
      	<li class="flickr"><a href="http://www.flickr.com/photos/zahh/">Flickr</a></li>
      	<li class="lastfm"><a href="http://www.last.fm/user/zahh">Last.fm</a></li>
      </ul>
      
          
      <p class="credits">
        in <a href="http://wordpress.org/" class="wordpress">WordPress</a>, we trust
       
        <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
      </p>
  </footer>
</div> <!--! end of #container -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>html5-boilerplate/js/jquery-1.4.2.min.js"><\/script>')</script>


  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/script.js") ?>


  <?php wp_footer(); ?>

</body>
</html>

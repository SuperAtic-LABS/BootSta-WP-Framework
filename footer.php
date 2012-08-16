<?php
/** footer.php
 *
 * @author		SuperAtic
 * @package		WordPress
 * @subpackage	BootStar
 * @since		1.0.6 - 09.04.2012
 */
?>

        <?php if ( is_active_sidebar( 'widgets' ) ) : ?>
          <div class="widgets row-fluid show-grid"><?php dynamic_sidebar( 'widgets' ); ?></div>
        <?php endif; ?>
 

     <!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#"><i class="icon-arrow-up"></i>Up!</a></p>
        <p class="pull-left">&copy; 2012 - <a href="http://BootStar.SuperAtic.com" target="_blank">BootStar</a>.  <?php bloginfo('description'); ?></p>
      </footer>
      
    </div><!-- container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/google-code-prettify/prettify.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-alert.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-modal.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-tab.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-popover.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-button.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-typeahead.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/application.js"></script>

    <!-- Analytics
    ================================================== -->
    
	<?php wp_footer(); ?>
  </body>
</html>

<?php


/* End of file footer.php */

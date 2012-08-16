<?php
/** header.php
 *
 * @author		SuperAtic
 * @package		WordPress
 * @subpackage	BootStar
 * @since		1.0.6 - 09.04.2012
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"?>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo( 'name' ); ?><?php wp_title( '&#9733;' ); ?></title>
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="all" rel="stylesheet" />
    <link href="<?php bloginfo( 'template_url' ); ?>/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  
     <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class($class); ?> data-spy="scroll" data-target=".subnav" data-offset="50">


  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>
          <div class="nav-collapse">
              <?php if ( has_nav_menu( 'menu' ) ) : wp_nav_menu(); else : ?>
          <ul class="nav"><?php wp_list_pages( 'title_li=&depth=-1' ); ?></ul>
        <?php endif; ?>
       </div>

        </div>
      </div>
    </div>

<?php

/* End of file header.php */
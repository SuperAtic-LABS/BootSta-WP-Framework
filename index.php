<?php
/** index.php
 *
 * @author		SuperAtic
 * @package		WordPress
 * @subpackage	BootStar
 * @since		1.0.6 - 09.04.2012
 */
 
 get_header(); ?>



   <div class="container">
    
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <small> <i class="icon-eye-open"></i>&nbsp;<?php if(function_exists('bac_PostViews')) { echo bac_PostViews(get_the_ID());}?>&nbsp;&nbsp;&nbsp;<i class="icon-comment"></i>&nbsp;<?php comments_number('No Comments!', '1 Comment', '% Comments' );?>&nbsp;&nbsp;&nbsp;<?php the_tags('<i class="icon-tags"></i> ', ', ' , ''); ?></small>
            <?php the_content(); ?>
            <?php if ( !is_singular() && get_the_title() == '' ) : ?>
              <a href="<?php the_permalink(); ?>">(more...)</a>
            <?php endif; ?>
			<?php if ( is_singular() ) : ?>
              <div class="navigation"><p><?php posts_nav_link('separator','prelabel','nextlabel'); ?></p></div>
              <?php wp_link_pages( $args ); ?>
            <?php endif; ?>
            <div class="clear"> </div>
          </div><!-- post_class() -->

          <?php if ( is_singular() ) : ?>

<hr class="soften">

            <?php comments_template(); ?>
          <?php endif; ?>
        <?php endwhile; else: ?>
          <div class="hentry"><h2>Sorry, the page you requested cannot be found</h2></div>
        <?php endif; ?>

<?php
get_footer();


/* End of file index.php */
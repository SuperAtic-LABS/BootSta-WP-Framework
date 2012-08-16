<?php
  if ( !isset( $content_width ) ) $content_width = 960;
  if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'automatic-feed-links' );
  if ( function_exists( 'register_nav_menu' ) ) register_nav_menu( 'menu', 'Menu' );
  if ( function_exists('register_sidebar') ) register_sidebar( array(
    'name' => __( 'Widgets', 'simplest' ),
    'id' => 'widgets',
    'before_widget' => '<div class="widget span3">',
    'after_widget' => '</div><!-- widget -->',
    'before_title' => '<h4>',
    'after_title' => '</h4>') );

/************************************CODE-1***************************************
* @Author: Boutros AbiChedid
* @Date:   January 16, 2012
* @Websites: http://bacsoftwareconsulting.com/ ; http://blueoliveonline.com/
* @Description: Displays the Number of times Posts are Viewed on Your Blog.
* Function: Sets, Tracks and Displays the Count of Post Views (Post View Counter)
* Code is browser and JavaScript independent.
* @Tested on: WordPress version 3.2.1
*********************************************************************************/
//Set the Post Custom Field in the WP dashboard as Name/Value pair
function bac_PostViews($post_ID) {
 
    //Set the name of the Posts Custom Field.
    $count_key = 'post_views_count'; 
 
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
 
    //If the the Post Custom Field value is empty.
    if($count == ''){
        $count = 0; // set the counter to zero.
 
        //Delete all custom fields with the specified key from the specified post.
        delete_post_meta($post_ID, $count_key);
 
        //Add a custom (meta) field (Name/value)to the specified post.
        add_post_meta($post_ID, $count_key, '0');
        return $count . ' View';
 
    //If the the Post Custom Field value is NOT empty.
    }else{
        $count++; //increment the counter by 1.
        //Update the value of an existing meta key (custom field) for the specified post.
        update_post_meta($post_ID, $count_key, $count);
 
        //If statement, is just to have the singular form 'View' for the value '1'
        if($count == '1'){
        return $count . ' View';
        }
        //In all other cases return (count) Views
        else {
        return $count . ' Views';
        }
    }
}

// Custom Default Avatar
 if ( !function_exists('addgravatar') ) {
    function addgravatar( $avatar_defaults ) {
    $myavatar = get_bloginfo('template_directory').'/img/ico/apple-touch-icon-114-precomposed.png'; //=&gt; Change path to your custom avatar
    $avatar_defaults[$myavatar] = 'BootStar Avatar'; //=&gt; Change to your avatar name
    return $avatar_defaults;
    }
 add_filter( 'avatar_defaults', 'addgravatar' );
}

// Custom Default Background
add_custom_background();

$args = array(
	'default-color' => 'ffffff',
	'default-image' => get_template_directory_uri() . 'img/grid-18px-masked.png',
);
add_theme_support( 'custom-background', $args );


// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 200, true); // Normal post thumbnails


// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );


// Put post thumbnails into rss feed
function wpfme_feed_post_thumbnail($content) {
	global $post;
	if(has_post_thumbnail($post->ID)) {
		$content = '' . $content;
	}
	return $content;
}
add_filter('the_excerpt_rss', 'wpfme_feed_post_thumbnail');
add_filter('the_content_feed', 'wpfme_feed_post_thumbnail');


// Add custom menus
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'wpfme' ),
	//'example' => __( 'Example Navigation', 'wpfme' ),
) );


// Create custom sizes
// This is then pulled through to your theme useing the_post_thumbnail('custombig'); 
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size('customsmall', 200, 200, true); //narrow column
	add_image_size('custombig', 400, 400, true); //wide column
}


// Call Googles HTML5 Shim, but only for users on old versions of IE
function wpfme_IEhtml5_shim () {
	global $is_IE;
	if ($is_IE)
	echo '<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
}
add_action('wp_head', 'wpfme_IEhtml5_shim');


?>



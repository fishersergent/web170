<?php 
/*
Theme Name: Westwood Design
Author: Rosie Fisher-Sergent
Author URI: http://www.fishersergent.com/
Description: Theme for the Westwood Design landscaping company website
Version: 1.0
*/

//Register My Menus
register_nav_menus(array(
    'main-menu' => __( 'Main' ),
    ));
//

//Add Thumbnails Support
add_theme_support('post-thumbnails');
//

//Register sidebars

register_sidebars(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
//


//get_my_title_tag function for SEO

function get_my_title_tag() {
    global $post;
    
    if(is_front_page()) {//if its the front page get the description/tagline
        bloginfo('description');
        
    }elseif(is_page || is_single){//if its a page or single get the title
        
        the_title();
    }else{//everything else, get the description/tagline
        
        bloginfo('description');
    }
    
    if($post->post_parent){//for parent page
        echo ' | ';
        echo get_the_title($post->post_parent);//get the title for that page
    }
    
    echo ' | '; //echo fun stuff for more google fun
    bloginfo('name');
    echo ' | ';
    echo 'Seattle, WA ';  
}
//

//add page excerpt support for wordpress
	add_post_type_support( 'page', 'excerpt' );

//
?>
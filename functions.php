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

?>
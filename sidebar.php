<!------#sidebar------>
<div id="sidebar">

    
  <h2><?php echo get_the_title($post->post_parent); ?></h2>
        
            <ul>
               
                <?php if ($post->post_parent) { 
                wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); 
            } else { 
                wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); 
            }
                ?>

            </ul>
    
    <!--Begin Quote-->
    
        <div id="quote">
            <?php 
            if (get_post_meta($post->ID, 'quote', true)) : ?>
                <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote> 
           <!--get value of quote-->
            
            <?php endif; ?>
        </div><!--end #quote-->
    
    <!--End Quote-->
    
    <!--Dynamic Widgets-->
        
        <div id="dynamic-widgets">
            <?php dynamic_sidebar(); ?>
        </div><!--end #dynamic widgets-->
    
    <!--end Dynamic Widgets-->
    
    
    
    
        </div><!--end #sidebar-->
<!------end #sidebar----->
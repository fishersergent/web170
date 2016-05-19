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
        </div>
<!------end #sidebar----->
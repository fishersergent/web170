<!------#sidebar-home------>
<div id="sidebar">
       <h2><?php echo get_the_title($post->post_parent); ?></h2>
        
            <ul>
        <?php    
            if($post->post_parent) {
                    wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); 
            }else{
                    wp_list_pages(array('title_li' => '', 'child_of', $post->ID,)); 
                }
?>
            </ul>
        </div><!--end #sidebar-->
        
<!------end #sidebar-home----->
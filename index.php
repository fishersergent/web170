<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- Begin Meta -->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- End Meta -->
<title><?php bloginfo('description'); ?></title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/media.css"  type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
 
    
    <link href='https://fonts.googleapis.com/css?family=Overlock:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blueberry.css" type="text/css" />
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">//find jQuery library</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="<?php bloginfo ('template_directory'); ?>/js/jquery.blueberry.js"></script>
    
    <script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
 
</script>
    
<!---begin WP Head Function--->
    <?php wp_head(); ?>
<!---end WP Head Function--->
    
</head>
<body <?php body_class();?>>
    <div id="header">
         <div id="logo">
                 <a href="main.html"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
            </div><!--end #logo-->
        
        
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'nav', )); ?>
       

    <div class="blueberry">
      <ul class="slides">
          <li><img src="<?php bloginfo('template_directory'); ?>/images/banner1.jpg" alt="garden1" /></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/images/banner2.jpg" alt="garden2" /></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/images/banner3.jpg" alt="garden3" /></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/images/banner4.jpg" alt="garden4" /></li>
	
      </ul>
     </div><!-- end blueberry -->

<!---------#cta1---------->
    
    <div id="cta1">
 
        <a href="design.php">
        <ul>
            <li><h2>Westwood Design &amp; Landscaping</h2></li>
            <li>Beautiful design for the way you live</li>
        </ul>
            </a>
    </div><!--end #cta1-->

<!------#content------>
        <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <h2><?php the_category( '&bull;' ); ?></h2>
            
            <?php the_content(); ?>
            
        <?php endwhile;?>
        <?php endif; ?>
            </div>
    
<!-------end #content------>


<!------#sidebar------>
    <div id="sidebar">
        <h2><?php echo get_the_title($post->post_parent); ?></h2><!--...get the gateway page title-->
        <ul><?php    
            if($post->post_parent) {//if the page we're on has a parent
                    wp_list_pages(array('child_of' => '', 'title_li' => __(''))); //list the sub-pages with no title
            }else{//if the page does not have a parent
                    wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); //list the sub-pages with not title
                }
            ?></ul>
        </div><!--end #sidebar-->

<!------end #sidebar----->


   
<!--------------#CTAs-------------->

 <!------#cta2------>
    <div id="cta2">
        <h2><?php echo get_the_title($post->post_parent); ?></h2>
        <?php    
            if($post->post_parent) {//if the page we're on has a parent
      
                    wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); //do this
            }else{//do this
                    wp_list_pages(array('title_li' => '', 'child_of', $post->ID,)); 
                }
?>
        <h2>Posts</h2>
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
<?php the_content(''); // get the home page's content ?>
<?php endwhile; endif; // end loop one ?>
        

    </div><!--end #cta2-->

 <div id="cta3">
     
     <h2>Latest Posts:</h2>
         <ul>
        <?php rewind_posts(); // stop loop one ?>
<?php query_posts('showposts=4'); // give directions to loop two ?>
<?php while (have_posts()) : the_post(); // start loop two ?>
             <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
             
<?php endwhile; // end loop two ?>
         </ul>
</div><!--end #cta3-->
    

 <div id="cta4">
     <a href="restoration.php">
        <ul class="test">
         <li><img class="icon" src="<?php bloginfo('template_directory') ?>/images/leaf.png"></li>
        <li><h2>Restoration</h2></li>
        </ul>
     </a>
</div><!--end #cta4-->

<!--------------end #CTAs-------------->


<div id="footer">
        
        <div id="contactinfo">
       <ul>
        <li><p>(360)-555-1234</p></li>
        <li><p>employee@westwooddesign.com</p></li>
            </ul>
        </div><!--end contact info-->
        
        
        <div id="social">
            <ul>
        <a href=""><li><img src="<?php bloginfo('template_directory') ?>/images/pinterest.png" alt="pinterest"></li></a>
        <a href=""><li><img src="<?php bloginfo('template_directory') ?>/images/facebook.png" alt="facebook"></li></a>
        <a href=""><li><img src="<?php bloginfo('template_directory') ?>/images/instagram.png" alt="instagram"></li></a>
                </ul>
        </div><!--end social-->
        
        <div id="copy">
            <ul>
        <li>&copy;2016 Rosie Fisher-Sergent</li>
                </ul>
            </div><!--end copy-->
            
            
    </div><!--end #footer-->

<script src="js/doubletaptogo.js"></script>
    
    <script>
    $( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();
	});
    
    </script>
<!------this----->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->

<script src="js/jquery-ui.js"></script>
<script src="js/accordian.js"></script>
    
<!---begin WP Footer Function--->
    <?php wp_footer(); ?>
<!---end WP Footer Function--->
    
</body>
</html>

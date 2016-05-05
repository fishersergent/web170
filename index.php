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
    <!--<div id="header">
         <div id="logo">
                 <a href="main.html"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
            </div><!--end #logo-->
        
        
            <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => 'div', 'container_id' => 'nav', 'items_wrap' => '<ul id="navigation-items"></ul>' )); ?>
       
    
    <!--
<div id="nav" role="navigation">
<a href="#nav" title="Show navigation"><img class="mobilenav" src="images/menu.png" alt="menu"></a>
    <a href="#" title="Hide navigation"><img class="mobilenav" src="images/closemenu.png" alt="closemenu"></a>
            
    <ul id="navigation-items">
        <li>
        <a class="index" href="main.html" aria-haspopup="true">Home</a>
            </li>
        
        <li>
            <a class="main" href="about.php" aria-haspopup="true">About</a>
            <ul>
                <li class="drop"><a href="employeebio.php">Employee Bios</a></li>
                <li class="drop"><a href="conservation.php">Conservation Work</a></li>
            </ul>
        </li>
        
        <li>
            <a class="main" href="portfolio.html" aria-haspopup="true">Portfolio</a>
            <ul>
                <li class="drop"><a href="designjob1.php">Example Job Garden </a></li>
                <li class="drop"><a href="job2.php">Example Job Water Feature</a></li>
                <li class="drop"><a href="job3.php">Example Job Rock Wall</a></li>
                <li class="drop"><a href="job4.php">Example Job Installation</a></li>
            </ul>
        </li>
        <li>
            <a class="main" href="services.php" aria-haspopup="true">Services</a>
            <ul>
                <li class="drop"><a href="design.php">Landscape Design</a></li>
                <li class="drop"><a href="install.php">Installation</a></li>
                <li class="drop"><a href="maintenance.php">Maintenance</a></li>
            </ul>
        </li>
        <li><a class="main" href="contact.php">Contact</a></li>
    </ul>-->
<!--</div><!--end #nav-->
    
<!--</div><!--end #header-->
    <!--<div id="hero">-->
     <!-- start blueberry -->

    <div class="blueberry">
      <ul class="slides">
          <li><img src="<?php bloginfo('template_directory'); ?>/images/banner1.jpg" alt="garden1" /></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/images/banner2.jpg" alt="garden2" /></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/images/banner3.jpg" alt="garden3" /></li>
          <li><img src="<?php bloginfo('template_directory'); ?>/images/banner4.jpg" alt="garden4" /></li>
	
      </ul>
     </div><!-- end blueberry -->
       <!--  </div><!-- end #hero-->
    

    
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
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
        <h2><a href="<?php the_permalink(); //link to the page or posting ?>"><?php the_title(); //get the page or posting title ?></a></h2>
      <?php the_content(''); //get the page or posting written content ?>
      <?php endwhile; endif; //end the loop ?>
    </div><!--end #content-->
    
<!-------end #content------>

<!------#sidebar------>
    <div id="sidebar">
        <h2><?php echo get_the_title($post->post_parent); ?></h2>
        <?php    
            if($post->post_parent) {//if the page we're on has a parent
      
                    wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); //do this
            }else{//do this
                    wp_list_pages(array('title_li' => '', 'child_of', $post->ID,)); 
                }
?>
    </div><!--end #sidebar--->

<!------end #sidebar----->



<!------#sidebar2------>
    <div id="sidebar">
        <h2 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); //...get the gateway page title?></h2>
        <ul class="sub-navigation-items"><?php    
            if($post->post_parent) {//if the page we're on has a parent
      
                    wp_list_pages(array('child_of' => '', 'title_li' => __(''))); //list the sub-pages with no title
            }else{//if the page does not have a parent
                    wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); //list the sub-pages with not title
                }
            ?></ul>
    </div><!--end #sidebar2--->

<!------end #sidebar2----->


   
<!--------------#CTAs-------------->

    <div id="cta2">
        <a href="design.php">
        <ul class="test">
         <li><img class="icon" src="<?php bloginfo('template_directory') ?>/images/design.png"></li>
        <li><h2>Design</h2></li>
        </ul>
        </a>
</div><!--end #cta2-->

 <div id="cta3">
     <a href="maintenance.php">
        <ul class="test">
         <li><img class="icon" src="<?php bloginfo('template_directory') ?>/images/gear.png"></li>
        <li><h2>Maintenance</h2></li>
        </ul>
     </a>
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
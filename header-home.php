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
    <div id="page">
    <div id="header">
         <div id="logo">
                 <a href="<?php echo get_settings('home'); ?>"><!--this link needs to be fixed-->
                     <img class="logohome" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
            </div><!--end #logo-->
        
        
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'nav', )); ?>
       
<div id="middle">
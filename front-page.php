<?php get_header('home'); ?>

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
       <?php if(is_front_page()) {
            echo"
        <ul>
            <li><h2>Westwood Design &amp; Landscaping</h2></li>
            <li>Beautiful design for the way you live</li>
        </ul>
            ";
        } ?>
  
    </div><!--end #cta1-->

<!------#content------>
         <div id="content">
        
<article class="post-excerpt">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?><!--start loop one -->
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h5>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> </h5>
            
            <?php the_excerpt(); ?>
        <?php endwhile; endif; ?><!--end loop one-->
</article>
    </div><!--end#content-->
    
<!-------end #content------>


<?php get_sidebar('home'); ?>

<small>front-page.php</small>

<!--------------#CTAs-------------->

 <!------#cta2------>
    <div id="cta2">
        
<article class="post-excerpt">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?><!--start loop one -->
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h5>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> </h5>
            
            <?php the_excerpt(); ?>
        <?php endwhile; endif; ?><!--end loop one-->
</article>
    </div>

<!-----end #cta2----->

<!-------#cta3------->
 <div id="cta3">
     
     <h2>Latest Posts:</h2>
        <?php rewind_posts(); ?><!--stops loop one-->
        <?php query_posts('showposts=5'); ?><!--loop two, do something-->
        <?php while (have_posts()) : the_post(); ?><!--start loop 2-->
     <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
     
     <?php endwhile; ?><!--end loop 2-->
     
</div>
<!-----end #cta3----->
    
 <!------#cta4------>
 <div id="cta4">
     <a href="restoration.php">
        <ul class="test">
         <li><img class="icon" src="<?php bloginfo('template_directory') ?>/images/leaf.png"></li>
        <li><h2>Restoration</h2></li>
        </ul>
     </a>
</div><!---end #cta4--->

<!--------------end #CTAs-------------->

<?php get_footer(); ?>

<?php get_header(); ?>

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


<?php get_sidebar(); ?>

<small>page.php</small>
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
</div><!--end #cta4-->

<!--------------end #CTAs-------------->

<?php get_footer(); ?>

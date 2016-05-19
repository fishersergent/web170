<?php get_header(); ?>   


<!------#content------>
        <div id="content">
            
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
            
            <article class="post-excerpt">
        
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h4>Posted In: <?php the_category( ' &bull; ' ); ?></h4>
            <h5>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> </h5>
            <a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            <?php the_excerpt(); ?>
            </article>
            
        <?php endwhile;?>
        <?php endif; ?>
            </div>
<!-------end #content------>

<?php get_sidebar('blog'); ?>

<small>index.php</small>
<!--------------#CTAs-------------->

 <!------#cta2------>
<div id="cta2">
 <h3>Title</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum enim eget pulvinar laoreet. Fusce vel neque purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id tortor nibh. Cras egestas risus sed tempor auctor. Sed ullamcorper convallis purus eget ultricies. Vestibulum rhoncus orci diam, et congue magna iaculis eget. Vestibulum blandit ornare finibus.</p>
    
    </div><!--end #cta2-->

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

<?php get_header();?>

 <div class="flex-container" id="hintergrund">

  
	 </div>

    
    <div class="main">
		<mark>xxxxxxx</mark>
        <div class="abteilung-post">
        
        <?php the_post_thumbnail( 'theme-slug-single-post', array( 'class' => 'single-post-image' ) ); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part('template_parts/content-page');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content-page','error');?>
        <?php endif; ?>
        
        <?php previous_post_link();?>
        <?php next_post_link();?>
        
        
    </div>
</div>
    
   


<?php get_footer();?>
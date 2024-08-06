<?php get_header();?>

         <div class="flex-container" id="hintergrund-post">
	
</div> <div class="main">	
		<mark>SPBuchsatz</mark>          
		
				 <?php the_post_thumbnail( 'theme-slug-single-post', array( 'class' => 'single-post-image' ) ); ?>	
	
	 
	 
	 	 
	 
	 
	 
	 
	<div class="abteilung-post">
		
<main class="site-main"> 
	
<mark>SPBuchsatz</mark>        			
	<content> 
	<div class="spbuchsatz">
		
	
    			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					         
				<?php get_template_part('template_parts/content','page');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>
		</content>
			</div>
		</main>
        
    </div>
    
   
</div>

<?php get_footer();?>






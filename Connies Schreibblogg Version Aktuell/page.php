<?php get_header();?>

   
		 
	
 <div class="main">	
		<mark>page</mark>          
		
				
	
	 
	 
	 	 
	 
	 
	 
	 
	<div class="abteilung">
		
		 <?php the_post_thumbnail( 'theme-slug-single-post', array( 'class' => 'single-post-image' ) ); ?>	
<main class="site-main"> 

			<content> 
    			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					         
				<?php get_template_part('template_parts/content','page');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>
		</content>
		</main>
	 


        
   

<?php get_footer();?>







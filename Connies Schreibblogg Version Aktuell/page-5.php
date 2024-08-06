	<?php get_header();?>
<div class="flex-container">

    <div class="main">
        <div class="abteilung_connie">
<main class="site-main">
	
	
        
    <article class="site-content">
         <div class="flex-container image">
        <div class="image">
        <?php the_post_thumbnail( 'theme-slug-single-post', array( 'class' => 'single-post-image' ) ); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part('template_parts/content','page');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>	
	
        
        
        
        
        

   
			 </div>
  
		  </div>
			
</main>

			</main>
	 
<?php get_footer();?>
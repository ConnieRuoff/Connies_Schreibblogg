<?php get_header();?>

 <div class="flex-container" id="hintergrund">

    </div>

    <div class="main">
			     
		<div class="abteilung-post">
			<content>
			
         
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part('template_parts/content-page');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>
        
        <?php previous_posts_link();?>
        <?php next_posts_link();?>
        </content>
    </div>
		
    
    <?php get_sidebar();?>
		<mark>index</mark>   
</div>

<?php get_footer();?>
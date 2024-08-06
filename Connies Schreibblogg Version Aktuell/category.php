<?php get_header();?>
<div class="hintergrund">

    </div>
    <div class="main">
        <div class="abteilung-post">
 
    
  

    <mark>Kategory</mark>
    <article class="site-content">
        
        <h1><?php single_cat_title();?></h1>
        <?php echo category_description();?>
         
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part('template_parts/content');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>
        
        <?php previous_posts_link();?>
        <?php next_posts_link();?>
        
    </article>
    
    <?php get_sidebar();?>
		


<?php get_footer();?>
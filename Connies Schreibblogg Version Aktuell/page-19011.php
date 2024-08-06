<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">




    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php wp_title('');?> <?php bloginfo('name');?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    
    <?php wp_head();?>
</head>
	<body>
		
<div class="flex-container" id="hintergrund">	
		</div>
	<div class="spbuchsatz">
		 
		  
 

    <div class="main">
	<a href="<?php echo home_url('/');?>"><img src="https://schreibblogg.de/wp-content/uploads/2024/08/eigenesthemelogo2-1.png " alt="Schreibblogg Connie Ruoff"></a>
    <nav>
		

      <span><a href="https://schreibblogg.de">Home</a></span>
      <span><a href="https://schreibblogg.de/rezensionen-2">Rezensionen</a></span>
      <span><a href="https://schreibblogg.de/projekt-friedrich-duerrenmatt-2">Dürrenmatt</a></span>
      <span><a href="https://schreibblogg.de/Spbuchsatz">SPBuchsatz</a></span>
		<?php get_search_form();?>
    	</nav> 
	 
	 	 
	 
	 
	<div class="abteilung">
		
	<mark>spbuchsatz</mark>
      			
	<content> 

		
	<?php the_post_thumbnail( 'theme-slug-single-post', array( 'class' => 'single-post-image' ) ); ?>	
 
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					         
				<?php get_template_part('template_parts/content','page');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>
	
        
    
    
	</content>
	
		


<?php get_footer();?>



    
   







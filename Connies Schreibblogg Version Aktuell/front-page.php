<?php get_header();?>
  <!-- Mission Section -->

 

		  
	  <div class="flex-container" >
		  
 

    <div class="main">
        <div class="abteilung">
       
 <div id="store">
        <h4>Connie Ruoff</h4>
		<h1>SCHREIBBLOGG - der Literaturblog in Taunusstein</h1>
		
		 

    
     <div class="flex-container items">
		
			 
		 
        <div class="item">
			<a href=“https://schreibblogg.de/rezensionen-2.html“> <img src="https://schreibblogg.de/wp-content/uploads/2022/02/Buchwandgrau.jpg" alt="Rezensionen, Kritiken, Buchvorstellungen"></a>
			<span><a href="https://schreibblogg.de/rezensionen-2">Rezensionen</a></span>
        </div>
        <div class="item">
			<a href="https://schreibblogg.de/projekt-friedrich-duerrenmatt-2"><img src="https://schreibblogg.de/wp-content/uploads/2020/12/Duerrenmatt-Uebersicht-ueber-das-Prosawerk.jpg" alt="Friedrich Duerrenmatt Prosawerk"/></a>
           <span><a href="https://schreibblogg.de/projekt-friedrich-duerrenmatt-2">Projekt Friedrich Dürrenmatt</a></span>
        </div>
        <div class="item">
          <a href="https://schreibblogg.de/autoreninterviews"><img src="https://schreibblogg.de/wp-content/uploads/2019/07/Autoreninterview-teddy.jpg" alt="Autoreninterviews, Interviews"/></a>
			<span><a href="https://schreibblogg.de/autoreninterviews">Autoreninterviews</a></span>
        </div>
        <div class="item">
			<a href="https://schreibblogg.de/veranstaltungen"><img src="https://schreibblogg.de/wp-content/uploads/2021/05/Veranstaltungen-450x600-1.jpg" alt="Veranstaltungen, Buchmessen, Lesungen" /></a>
			<span><a href="https://schreibblogg.de/veranstaltungen">Veranstaltungen</a></span>
        </div>
		  <div class="item">
			  <a href="https://schreibblogg.de/ueber-mich-connie-ruoff"><img src="https://schreibblogg.de/wp-content/uploads/2021/08/IMG_0037.jpg" alt="Connie Ruoff, Schreibblogg"/></a>
			  <span><a href="https://schreibblogg.de/ueber-mich-connie-ruoff">Über mich</a></span>
        </div> 
        <div class="item"> 
			<a href="https://schreibblogg.de/spbuchsatz"><img src="https://schreibblogg.de/wp-content/uploads/2021/08/SPBuchsatz_Webseite_Titelbild.png" alt="SPBuchsatz"/></a>
			<span><a href="https://schreibblogg.de/spbuchsatz">SPBuchsatz</a></span>
       <div class="absatz">
		   
			</div>
          <!-- Mission Section -->
       <div  class="quote">
		    "Wer zu lesen versteht, besitzt den Schlüssel zu großen Taten und unerträumten Möglichkeiten"
		
			  <p>Aldous Huxley</p>
			</div>

  <article class="site-content">
	   <div class="container">
	     <div class="flex-container covers">
        <div class="cover">
	  <?php
	  
	  $args = array(
	  	post_type => 'post',
		posts_per_page => 3
	  );
	  
	  $loop2 = new WP_Query($args);
	
      
      if ($loop2->have_posts() ) : while ($loop2->have_posts() ) : $loop2->the_post(); ?>
           <?php get_template_part('template_parts/content');?>
      <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
      <?php endif; wp_reset_postdata();?>
        
	  </div>
			 </div> 
	  </div>
    		
		   </article>
    
	
		 </div>
	 </div>
			</div>
	
	<?php get_footer();?>



		
	

<section <?php post_class();?>>
<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <p><?php the_time('d.m.Y');?></p>
            <?php the_content();?>
    
</section> 
<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-details">

		<ul class="metas clearfix">


					<li class="author"><?php echo get_the_date(); ?></li>							
				
		</ul>
		

		
	</div><!-- Fin de toutes les données avant le post en lui même -->
    

        
	<div class="entry-content centre">

						
						<?php 
						$temp = $wp_query; 
						$wp_query= null; 
						$wp_query = new WP_Query('cat=26&posts_per_page=1');
						?>
						
						<?php if ($wp_query->have_posts()) : ?>
						
						
            <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
										
										<a href="<?php echo get_permalink(); ?>">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/noname.gif" title ="Animation du dimanche" alt="Animation du dimanche" />
										</a>
		            <?php endwhile; ?>
                
        		<?php endif; ?>
						<?php $wp_query = null; $wp_query = $temp; ?>
			

	</div><!-- end entry-content -->
	


</article>
<!-- end post-<?php the_ID(); ?> -->
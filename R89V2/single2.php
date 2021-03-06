<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */

get_header(); ?>


<div id="wrap">
	<div id="main" style="width:950px;">
			<div id="content"  style="width:788px;">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'single_sans_ligatus' ); ?>
						<?php comments_template( '', true ); ?>
					<?php endwhile; // end of the loop. ?>
			</div><!-- end content -->
			
					<div id="secondary" class="widget-area" role="complementary">



			<div id="author-meta" class="widget">
				<h4>A propos de l'auteur </h4>
				<div class="titre-auteur">
					<?php the_author(); ?>
				</div>
				<div class="photo-auteur">
				<?php echo get_avatar( get_the_author_id() , 72 ); ?>
				</div>			
				<p class="description-auteur"><?php the_author_description(); ?></p>
				<p class="lien-auteur"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ),get_the_author_meta( 'user_nicename')); ?>" >Lire tous ses articles</a></p>
				<div id="author-info">
					
					<a href="mailto:<?php echo antispambot(get_the_author_email()); ?>">&Eacute;crivez-lui</a>
					<!--<a href="<?php the_author_aim(); ?>">Suivez-le-la sur Twitter !</a>-->
				</div>
			
			</div>
	


			<?php dynamic_sidebar( 'sidebar-2-article' ); ?>
			<?php /*if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<?php endif; // end sidebar 1 widget area */?>
		  
		</div><!-- #secondary .widget-area -->
	
	</div>			
	



<?php get_footer(); ?>
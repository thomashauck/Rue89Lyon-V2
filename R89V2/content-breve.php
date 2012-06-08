<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-details">

		<ul class="metas clearfix">
					<li class="category">
						<?php if ( count( get_the_category() ) ) : ?>
							<?php printf( get_the_category_list(  ) ); ?>
						<?php endif; ?>
					</li>
					<li class="time"><?php the_time('G:i') ?></li>
					<li class="date"><?php echo get_the_date(); ?></li>							
					<li class="author">par <?php the_author() ?></li>						
		</ul>
		

		
	</div><!-- Fin de toutes les données avant le post en lui même -->
    
	<header class="entry-header">
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yoko' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
			<?php the_title(); ?>
			</a>
		</h2>
	</header><!-- end entry-header -->
        
	<div class="entry-content">
			<?php/* the_excerpt();*/ ?>		
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'yoko' ), 'after' => '</div>' ) ); ?>	
	</div><!-- end entry-content -->
	

	<div class="conteneur-nombre-comment">
		<?php comments_popup_link( "Pas de commentaire pour l'instant", "<strong>1 seul</strong> commentaire", '<strong>%</strong> commentaires', 'comments-link', 'Comments are off for this post'); ?>
	</div>
</article>
<!-- end post-<?php the_ID(); ?> -->
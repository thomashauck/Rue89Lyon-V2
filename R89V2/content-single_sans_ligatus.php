<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<ul class="metas clearfix">
						<?php if ( count( get_the_category() ) ) : ?>
								<li class="category">
								<?php printf( get_the_category_list(  ) ); ?>
								</li>
						<?php endif; ?>

					<li class="time"><?php the_time('G:i') ?></li>
					<li class="date"><?php echo get_the_date(); ?></li>							
					<li class="author">par <?php the_author() ?></li>						
		</ul>



	<header class="single-entry-header">
		<h1 class="entry-title" ><?php the_title(); ?></h1>
	</header>
	
		<?php if ( has_post_thumbnail()) : ?>
		<div class="single-entry-details">
			<a href="<?php the_permalink(); ?>"></a>
		</div><!-- end single-entry-details -->
		<?php endif; ?>
		


<!-- end single-entry-header -->

	<div class="single-entry-content">
	<?php if ( is_archive() || is_search()  ) : // Only display excerpts for archives and search. ?>
		<?php the_excerpt(); ?>	
	<?php else : ?>
			<?php the_content( ); ?>
			<div class="clear"></div>
				
	<?php endif; ?>

		
		
		
		
	<footer class="single-entry-meta">
		<p><?php if ( count( get_the_category() ) ) : ?>
			<?php printf( __( 'Categories: %2$s', 'yoko' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?> | 
			<?php endif; ?>
			<?php $tags_list = get_the_tag_list( '', ', ' ); 
			if ( $tags_list ): ?>
			<?php printf( __( 'Tags: %2$s', 'yoko' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> | 
			<?php endif; ?>
			<a href="<?php echo get_permalink(); ?>"><?php _e( 'Permalink ', 'yoko' ); ?></a>
			<?php edit_post_link( __( 'Edit &rarr;', 'yoko' ), '| <span class="edit-link">', '</span>' ); ?></p>
	</footer><!-- end entry-meta -->

	
	</div><!-- end single-entry-content -->

</article><!-- end post-<?php the_ID(); ?> -->

<div class="clear"></div>

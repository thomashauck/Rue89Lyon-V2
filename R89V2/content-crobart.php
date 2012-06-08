<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
		
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yoko' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
				<?php the_post_thumbnail('coldroite-thumb'); ?>
			</a>
		</div><!-- end entry-content -->
		<div class="entry-details">
		par <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ),get_the_author_meta( 'user_nicename')); ?>" >
			<?php the_author() ?></a>, <?php echo get_the_date(); ?> 
		</div><!-- Fin de toutes les données avant le post en lui même -->

</article>
<!-- end post-<?php the_ID(); ?> -->
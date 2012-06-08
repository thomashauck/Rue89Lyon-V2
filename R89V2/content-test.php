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
									<ul class="post-categories">
											<?php
													foreach((get_the_category()) as $category) {
																if($category->name !== 'blogs'){
																		$category_id = get_cat_ID( $category->cat_name );
																		$category_link = get_category_link( $category_id );
																		echo '<li><a href="'.$category_link.'">'.$category->cat_name.'</a></li>';
																}
													} 
											?>
									</ul>
								</li>
					<li class="time"><?php the_time('G:i') ?></li>
					<li class="date"><?php echo get_the_date(); ?></li>							
					<li class="author">par <?php the_author() ?></li>						
		</ul>
		
		<?php if ( has_post_thumbnail() ): ?>
			<?php echo  get_post_meta($post->ID, "images", true); ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('fleuve-thumb'); ?>
			</a>
		<?php endif; ?>
		
	</div><!-- Fin de toutes les données avant le post en lui même -->
    
	<header class="entry-header">
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yoko' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
			<?php the_title(); ?>
			</a>
		</h2>
	</header><!-- end entry-header -->
       <div class="blogs">Blogs <br>Rue<strong>89</strong><span>Lyon</span></div> 
	<div class="entry-content">
			<?php the_excerpt(); ?>		
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'yoko' ), 'after' => '</div>' ) ); ?>	
	</div><!-- end entry-content -->
	

	<div class="conteneur-nombre-comment">
				<?php 
				global $post;
				$ID_article = $post->ID;
				$total_vues = wpp_get_views($ID_article);
				if (	$total_vues >= 200) 	echo $total_vues.'<span> visites | </span>';
				 
				?>
		<?php comments_popup_link( "Pas de commentaire pour l'instant", "<strong>1 seul</strong> commentaire", '<strong>%</strong> commentaires', 'comments-link', 'Comments are off for this post'); ?>
	</div>
</article>
<!-- end post-<?php the_ID(); ?> -->
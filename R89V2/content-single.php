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
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="porte_interaction"> 
				<?php 
				global $post;
				$ID_article = $post->ID;
				$total_vues = wpp_get_views($ID_article);
				if (	$total_vues >= 200) 	echo $total_vues.'<span> visites | </span>';
				 
				?><?php comments_number( 'aucun <span>commentaire</span>', '1 <span>commentaire</span>', '% <span>commentaires</span>' ); ?>
				
		</div>
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


<div class="porte_abonement_article clearfix">

<p>
	<b>Vous avez appr&#xE9;ci&#xE9; cet article ?</b> <br>
	Abonnez-vous pour que Rue89Lyon puisse <br>en produire d&#x2019;autres et plus.
</p>
					<a href="http://s343802320.onlinehome.fr/_theme/soutenir-rue89lyon"><img src="http://s343802320.onlinehome.fr/_theme/wp-content/themes/R89V2/images/soutenir.gif"  width="110" alt="Soutenez Rue89Lyon" width="50" align="right"></a>
					</a></div>
		
		
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

<script type="text/javascript"><!--
google_ad_client = "ca-pub-1589803739623236";
/* Fin d&#39;article */
google_ad_slot = "6602147692";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<div class="clear"></div>

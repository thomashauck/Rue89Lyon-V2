<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */

get_header(); ?>
<?php if (! is_paged()) : ?>
		<?php get_template_part( 'une'); ?>
<?php endif ?>

<div id="wrap">
	<div id="main">
		<div id="secondary" class="widget-area" role="complementary"> 
			<div class="porte_abonement">
					<a style="padding: 0; border-width: 0;" href="_theme/soutenir-rue89lyon/"><img style="padding: 0; border-width: 0;" src="http://s343802320.onlinehome.fr/_theme/wp-content/themes/R89V2/images/soutenir.gif" width="140" alt="Rue89Lyon"/></a>
			</div>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<?php /*if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<?php endif; // end sidebar 1 widget area */?>
		</div><!-- #secondary .widget-area -->
		
		<div id="content">
			<?php
			$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
			$temp = $wp_query;
			$wp_query= null;
			$args = array(
				'tax_query' => array(
								array(
									'taxonomy' => 'post_format',
									'field' => 'slug',
									'terms' => array( 'post-format-une' ),
									'operator' => 'NOT IN'
								)
				),
				'cat' => ' -17, -83, -26, -116, -549',
				/* attention v�rifier les cat�gories */
				'posts_per_page' => 9,
				'paged' => $paged
			);
			$wp_query = new WP_Query($args);
			?>

			<?php if ($wp_query->have_posts()) : ?>
			
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
												<?php/* get_template_part( 'content');*/ ?>
												<?php get_template_part( 'content', get_post_format() );  ?>	
								<?php endwhile; ?>
									
			<?php endif; ?>
			
			
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<?php if(function_exists('wp_paginate')) {
		wp_paginate();
	} ?>
			<?php endif; ?>	
			
		
			<?php $wp_query = null; $wp_query = $temp;?>
					
		</div><!-- end content -->
	</div><!-- end main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
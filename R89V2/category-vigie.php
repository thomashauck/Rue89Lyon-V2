<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */

get_header(); ?>
<div id="wrap">
	<header class="page-header">
	<h1 class="page-title">
		<?php printf( __( 'Category Archives: %s', 'yoko' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
	</h1>
	<?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
	</header><!-- end page header -->
		
	<div id="main">
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2-article' ); ?>
			<?php /*if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<?php endif; // end sidebar 1 widget area */?>
		</div><!-- #secondary .widget-area -->
		
		<div id="content">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content-vigie' ); ?>
					<div class="clear"></div>
				<?php endwhile; ?>
				
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<nav id="nav-below">
						<div class="nav-previous">
							<?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'yoko' ) ); ?>
						</div>
						<div class="nav-next">
							<?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'yoko' ) ); ?>
						</div>
					</nav><!-- end nav-below -->
				<?php endif; ?>
		</div><!-- end content -->
	</div><!-- end main -->
<?php/* get_sidebar(); */?>
<?php get_footer(); ?>
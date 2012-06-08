<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */

get_header(); ?>

<div id="wrap">
<header class="page-header">
					<h1 class="page-title author">
					<?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'yoko' ),get_the_author() ); ?>
					</h1>
					<div class="archive-meta"><?php the_author_description(); ?></div>
				</header><!-- end page header -->
<div id="main">

	<div id="content">
				<?php the_post(); ?>



				<?php rewind_posts(); ?>
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content-auteur' ); ?>

				<?php endwhile; ?>
				
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<nav id="nav-below">
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'yoko' ) ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'yoko' ) ); ?></div>
					</nav><!-- end nav-below -->
				<?php endif; ?>

	</div><!-- end content -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
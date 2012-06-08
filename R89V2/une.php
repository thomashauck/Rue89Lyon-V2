<div class="clear"></div>




<!-- 


<div style="width:942px;margin-bottom:22px;margin-left:18px">
	<div id="une" >
		    <ul class="list_une">
        <li class="first" style="padding: 4px 4px 0px 4px;">
        <a href="http://s343802320.onlinehome.fr/_theme/?p=10850">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/wp-content/uploads/2012/05/tetiereAmiDeHollandeRue89Lyon.jpg" />
        </a>
        </li></ul>
	</div>
</div>

--!> 

<div id="une" >
    <ul class="list_une">
        <li class="first">
        	
						<?php 
						$temp = $wp_query; 
						$wp_query= null; 
						$args = array(
								'tax_query' => array(
										array(
											'taxonomy' => 'post_format',
											'field' => 'slug',
											'terms' => array( 'post-format-une' )
										)
								),
								'posts_per_page' => 1
						);
						$wp_query = new WP_Query($args);
						?>
						
						<?php if ($wp_query->have_posts()) : ?>
						
						
            <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php /*if ( has_post_format( 'une' )) : */?>
                            <ul class="metas article inline clearfix">
																<li>&nbsp;</li>                            
                                <li><strong>		<?php 
				global $post;
				$ID_article = $post->ID;
				$total_vues = wpp_get_views($ID_article);
				if (	$total_vues >= 200) 	echo $total_vues.'<span> visites | </span>';
				 
				?><?php comments_popup_link( "Pas de commentaire pour l'instant", "<strong>1 seul</strong> commentaire", '<strong>%</strong> commentaires', 'comments-link', 'Comments are off for this post'); ?></strong></li>	
                                <li class="date"><?php echo get_the_date(); ?> à <?php the_time('G:i') ?></li>							
                                <li class="author">par <?php the_author() ?></li>
	
                            </ul>
                            <?php if ( has_post_thumbnail() ): ?>
                            <?php echo  get_post_meta($post->ID, "images", true); ?>
                                <a href="<?php the_permalink(); ?>" class="illus"><?php the_post_thumbnail('thumb'); ?></a>
                            <?php endif; ?>
                            <h2 class="title"><a href="<?php echo get_permalink(); ?>" class="bg89"><?php the_title(); ?></a></h2>
                            <div class="bottom">
                                <p class="chapo">
                                     <?php the_excerpt(); ?> 
                                </p>
                            </div>  


                    <?php /*endif; */?>
                <?php endwhile; ?>
                
        		<?php endif; ?>
						<?php $wp_query = null; $wp_query = $temp; ?>
						
        </li>
    </ul>
</div>
<div class="clear"></div>


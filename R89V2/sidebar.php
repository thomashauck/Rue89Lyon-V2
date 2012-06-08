<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?>
<div id="tertiary" class="widget-area" role="complementary">

	
				<aside id="text-5" class="widget widget_text eccart-interieur">

						<div id='div-gpt-ad-1328784610102-0' style='width:300px; height:300px;'>
									<div class="ads_313538325f323330385f38343834"><script type="text/javascript">
        var rdads=new String(Math.random()).substring (2, 11);
        document.write('<sc'+'ript type="text/javascript" src="http://server1.affiz.net/tracking/ads_display.php?n=313538325f323330385f38343834_2a96aafdb9&rdads='+rdads+'"></sc'+'ript>');
        </script></div>
						</div>
						<span class="legend">Publicité</span>
			</aside>
				<!--	<aside id="text-99" class="widget widget_text eccart-interieur">

					<a href="http://www.rue89strasbourg.com/index.php/cine-debat-malbouffe/" title="Concours Documentaire Malbouffe">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/carrebouffe.jpg" alt="Concours Documentaire Malbouffe" />
					</a>
			</aside>-->
			<!-- ========================= DEBUT EN IMAGE  ====================================== -->





			<div id="crob" class="widget">
						<div class="title89"><span></span> EN<strong> IMAGES</strong></div>
						<?php 
						$temp = $wp_query; 
						$wp_query= null; 
						$wp_query = new WP_Query('posts_per_page=1&cat=51');
						?>
						
							<?php if ($wp_query->have_posts()) : ?>
							
							<?php /* Start the Loop */ ?>
									<?php while ( have_posts() ) : the_post(); ?>

											<?php get_template_part( 'content-crobart'); ?>
											<?php /*get_template_part( 'content', get_post_format() ); */ ?>
										
									<?php endwhile; ?>
									
						<?php endif; ?>
						<?php $wp_query = null; $wp_query = $temp; ?>		
									<div class="liens-plus"><a href="<?php bloginfo( url ); ?>/?cat=51" >Plus d'images</a></div>
						
			</div>

<!-- ========================= FIN EN IMAGE  ====================================== 

	

-->
			<aside id="top89" class="widget">
						<h3 class="title89">La <strong>Playlist</strong> des nuits sonores</h3>
						<iframe src="https://embed.spotify.com/?uri=spotify:user:juanisao:playlist:08xS9tD0gLVnK7FMCncukV" frameborder="0" allowtransparency="true" width="300" height="80"></iframe>
						
			</aside>

					<div id="locale" class="widget">
						<div class="title89"><span>VIE</span> DE <strong>QUARTIER</strong></div>


							<div  class="clearfix">
											<?php 
										  $categories =  get_categories('child_of=116'); 
											foreach ($categories as $category): ?>
					
					      				<div class="auteur_locale clearfix">
					      					<a href="#" title="Déplier le bloc" class="toggle down">&nbsp;</a>
						      				<?php 
													$temp = $wp_query; 
													$wp_query = null; 
													$categorieEnCours = $category->term_id;
													$wp_query = new WP_Query('posts_per_page=1&cat='.$categorieEnCours);
													?>

												
													<?php if ($wp_query->have_posts()) : ?>
									            <?php /* Start the Loop */ ?>
							                <?php while ( have_posts() ) : the_post(); ?>
							                						<div class="avatarblog">
									                     				<a href="<?php echo get_category_link( $category->term_id ); ?>" title="<?php echo $category->cat_name; ?>" >
																							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/<?php echo $category->slug; ?>-visuel.jpg"/>
																							</a>
																					</div>
	
																						<div class="clearfix infoABlog">
																					
																			
																					
																								<strong>
																							<a href="<?php echo get_category_link( $category->term_id ); ?>" title="<?php echo $category->cat_name; ?>">
																							Quartier : <?php echo $category->cat_name; ?>	</a></strong>
																							<br>	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yoko' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
																						<?php the_title(); ?>
																						</a> <br>
																							 par <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ),get_the_author_meta( 'user_nicename')); ?>" >
									                            	<span><?php the_author(); ?> </span>
																							</a>
							                          	</div>
		  
							                <?php endwhile; ?>
							                
							        		<?php endif; ?>
													<?php $wp_query = null; $wp_query = $temp; ?>				
					      				
					      				
					      				</div>
					      				
					      				<div class="sectionArticles" style="display:none;">		
					      				
					      					<ul class="nav clearfix">
																	<li><a href="#" rel="bioloc" class="">L'auteur</a></li>
																	<li><a href="#" rel="articlesloc" class="actif">Les articles</a></li>
													</ul>
								      					<ul class="liste_article_local bioloc" style="display:none">	
								      		
								      				<?php 
																$temp = $wp_query; 
																$wp_query = null; 
																$categorieEnCours = $category->term_id;
																$wp_query = new WP_Query('posts_per_page=1&cat='.$categorieEnCours);
																?>
																<?php if ($wp_query->have_posts()) : ?>
										            <?php /* Start the Loop */ ?>
								                <?php while ( have_posts() ) : the_post(); ?>
								                <li class="descriptionloc">

																			<div class="clearfix ">
																						<?php the_author_meta('description'); ?> 
																			
					                          	</div>
								                            
								 									</li>
								
								
								                   
								                <?php endwhile; ?>
								                
								        		<?php endif; ?>
														<?php $wp_query = null; $wp_query = $temp; ?>	
														</ul>
														
														
														
														<ul class="liste_article_local articlesloc">	
								      		
								      				<?php 
																$temp = $wp_query; 
																$wp_query = null; 
																$categorieEnCours = $category->term_id;
																$wp_query = new WP_Query('posts_per_page=8&cat='.$categorieEnCours);
																?>
																<?php if ($wp_query->have_posts()) : ?>
										            <?php /* Start the Loop */ ?>
								                <?php while ( have_posts() ) : the_post(); ?>
								                <li>
					
																			<div class="clearfix ">
																						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yoko' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
																						<?php the_title(); ?>
																						</a> 
																			
					                          	</div>
								                            
								 									</li>
								
								
								                   
								                <?php endwhile; ?>
								               <li class='totla'><a href="<?php echo get_category_link( $category->term_id ); ?>">Voir tous les articles</a></li> 
								        		<?php endif; ?>
														<?php $wp_query = null; $wp_query = $temp; ?>	
														
														</ul>
					      				</div>
      				
 												<? endforeach; ?>			
 												
							</div>
					

		</div>	
		
		
		
		
		


		
			
			<aside id="text-6" class="widget widget_text eccart-interieur">
						<div id='div-gpt-ad-1328784903440-0' style='width:300px; height:300px;'>
									<div class="ads_313538325f323330385f38343834"><script type="text/javascript">
        var rdads=new String(Math.random()).substring (2, 11);
        document.write('<sc'+'ript type="text/javascript" src="http://server1.affiz.net/tracking/ads_display.php?n=313538325f323330385f38343834_2a96aafdb9&rdads='+rdads+'"></sc'+'ript>');
        </script>
						</div>
						<span class="legend">Publicité</span>
			</aside>
	<!--			
 ========================= DEBUT GONFLEABLOG   ====================================== -->
			<div id="gonfleblog" class="widget">
					<div class="title89">Gonflés<span>à</span> <strong>blog</strong></div>	
					<ul class="nav clearfix light_gradient">
						<li><a href="#" rel="notes" class="actif">Dernières notes</a></li>
						<li><a href="#" rel="blogs" class="">Tous les blogs</a></li>
					</ul>
				
					<div class="section notes" style="display: block; ">
							<p class="inf">Dernières notes publiées sur <br><a href="?cat=203" class="color89"><strong>Rue89Lyon les blogs</strong></a></p>
							<div class="wrap_elements">
								<ul class="clearfix">
								<?php 
											$temp = $wp_query; 
											$wp_query = null; 
											$wp_query = new WP_Query('posts_per_page=5&cat=203');
											
											?>
											
											<?php if ($wp_query->have_posts()) : ?>
							            <?php /* Start the Loop */ ?>
					                <?php while ( have_posts() ) : the_post(); ?>
					                <li>
					                						<div class="avatarblog">
					                     				<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ),get_the_author_meta( 'user_nicename')); ?>" >
																			<?php echo get_avatar( get_the_author_id() , 28 ); ?>
																			</a>
																			</div>
																			<div class="clearfix infoABlog">
																						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'yoko' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
																						<?php the_title(); ?>
																						</a> 
																			<br>
																				<?php $cat = get_the_category(); 
																				$cat = $cat[1];
																				if($cat->cat_name =="blogs"){
																				
																					$cat = get_the_category();
																					$cat = $cat[0];
																					
																				}
																				
																				?>
																			sur <a href="/index.php/category/<?php echo $cat->category_nicename; ?>" title="<?php echo $cat->cat_name; ?>">
																			<span>
																			<?php echo $cat->cat_name; 	?>
																		 </span>
																			</a>
					                          </div>
					                            
					 									</li>
					
					
					                   
					                <?php endwhile; ?>
					                
					        		<?php endif; ?>
											<?php $wp_query = null; $wp_query = $temp; ?>	
											<li class="totalblog"><a href="category/blogs" title="Voir tous les articles des blogs">Voir tous les articles des blogs</a></li> 
										
								</ul>
							</div>			

					</div>
					

					<div class="section blogsg" style="display:none;">
						<div class="wrap_elements ">
							<ul  class="clearfix">
											<?php 
										  $categories =  get_categories('child_of=203'); 
											foreach ($categories as $category): ?>
					
					      				<li class="clearfix">
					      					
						      				<?php 
													$temp = $wp_query; 
													$wp_query = null; 
													$categorieEnCours = $category->term_id;
													$wp_query = new WP_Query('posts_per_page=1&cat='.$categorieEnCours);
													?>
												
													<?php if ($wp_query->have_posts()) : ?>
									            <?php /* Start the Loop */ ?>
							                <?php while ( have_posts() ) : the_post(); ?>
							                						<div class="avatarblog">
							                     				<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ),get_the_author_meta( 'user_nicename')); ?>" >
																					<?php echo get_avatar( get_the_author_id() , 28 ); ?>
																					</a>
																					</div>
																					<div class="clearfix infoABlog">
																					<a href="<?php echo get_category_link( $category->term_id ); ?>" title="<?php echo $category->cat_name; ?>">
																						<?php echo $category->cat_name; ?>
																					</a><br>
							                            par <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ),get_the_author_meta( 'user_nicename')); ?>" >
							                            	<span><?php the_author(); ?> </span>
							                            </a>
							                          	</div>
		  
							                <?php endwhile; ?>
							                
							        		<?php endif; ?>
													<?php $wp_query = null; $wp_query = $temp; ?>				
					      				
					      				
					      				</li>
      				
 												<? endforeach; ?>			
 												
							</ul>
						</div>
					</div>
			</div>
<!-- ========================= FIN GONFLEABLOG   ====================================== -->
					<aside id="text-6" class="widget widget_text eccart-interieur">
		
						<div id='div-gpt-ad-1328786347157-0' style='width:300px; height:300;'>
									<div class="ads_313538325f323330385f38343834"><script type="text/javascript">
        var rdads=new String(Math.random()).substring (2, 11);
        document.write('<sc'+'ript type="text/javascript" src="http://server1.affiz.net/tracking/ads_display.php?n=313538325f323330385f38343834_2a96aafdb9&rdads='+rdads+'"></sc'+'ript>');
        </script></div>
						</div>
						<span class="legend">Publicité</span>
			</aside>	

<aside id="text-1010" class="widget widget_text eccart-interieur">
							<div class="title89"><span>mon</span> Facebook<strong> aime</strong> 
							
							<a href="#" title="Déplier le bloc" class="toggle down">&nbsp;</a>
							</div>
<div class="fb-like-box" data-href="http://www.facebook.com/Rue89Lyon" data-width="302" data-show-faces="true" data-border-color="#D7D6E4" data-stream="true" data-header="false" style="display:none;"></div>
</aside>
			
			<div id="top89" class="widget">
						<div class="title89"><span>Le</span> top<strong>89</strong> <span>Lyon</span>
									<a href="#" title="Déplier le bloc" class="toggle up">&nbsp;</a>
							</div>
						<div class="contenu-top">
									<ul class="nav clearfix">
											<li><a href="#" rel="lus" class="actif">+ lus</a></li>
											<li><a href="#" rel="notes">+ commentés</a></li>
									</ul>
									<aside id="wpp-3" class="widget popular-posts lus">
												<?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular("range=monthly&order_by=views&limit=6&pages=0&stats_views=1&stats_comments=0"); ?>
									</aside>
									<aside id="wpp-2" class="widget popular-posts notes" style="display:none;" >
												<?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular("range=monthly&order_by=comments&limit=6&pages=0"); ?>
									</aside>

						</div>
			</div><!--
			<aside id="text-1000" class="widget widget_text eccart-interieur">
			<a target="_blank" href="http://www.comboutique.com/rue89strasbourg"><img src="http://www.comboutique.com/shop/packshot.php?usrid=63505&prduid=2708189&bkg=C0C0C0&typo=000000&message=T-Shirt+de+la+semaine" width="144" height="180" border="0"></a>
			<a target="_blank" href="http://www.comboutique.com/rue89strasbourg"><img src="http://www.comboutique.com/shop/packshot.php?usrid=63505&prduid=2708194&bkg=C0C0C0&typo=000000&message=T-Shirt+de+la+semaine" width="144" height="180" border="0" style="margin-left:10px;"></a>
		</aside>
			
			<aside id="text-6" class="widget widget_text eccart-interieur">
			 Pave3 
						<div id='div-gpt-ad-1328786347157-0' style='width:300px; height:300px;'>
									<div class="ads_313538325f323330385f38343834"><script type="text/javascript">
        var rdads=new String(Math.random()).substring (2, 11);
        document.write('<sc'+'ript type="text/javascript" src="http://server1.affiz.net/tracking/ads_display.php?n=313538325f323330385f38343834_2a96aafdb9&rdads='+rdads+'"></sc'+'ript>');
        </script></div>
						</div>
						<span class="legend">Publicité</span>
			</aside>
			
			<aside id="text-2" class="widget widget_text">
						<h3 class="title89"><span>SUR</span> TWITTER</h3>
						<div class="textwidget">
									<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
									<script>
									new TWTR.Widget({
									  version: 2,
									  type: 'profile',
									  rpp: 4,
									  interval: 30000,
									  width: 302,
									  height:440,
									  theme: {
										shell: {
										  background: '#D8D7E5',
										  color: '#333'
										},
										tweets: {
										  background: '#ffffff',
										  color: '#000000',
										  links: '#545665'
										}
									  },
									  features: {
										scrollbar: false,
										loop: true,
										live: true,
										behavior: 'all'
									  }
									}).render().setUser('rue89strasbourg').start();
									</script>
						</div>
			</aside>-->
			<!--
			<aside id="text-8" class="widget widget_text eccart-interieur">
						<div class="textwidget">
						 Pave4
									<div id='div-gpt-ad-1328786458421-0' style='width:300px; height:300px;'>
									<div class="ads_313538325f323330385f38343834"><script type="text/javascript">
        var rdads=new String(Math.random()).substring (2, 11);
        document.write('<sc'+'ript type="text/javascript" src="http://server1.affiz.net/tracking/ads_display.php?n=313538325f323330385f38343834_2a96aafdb9&rdads='+rdads+'"></sc'+'ript>');
        </script></div>
						</div>
						<span class="legend">Publicité</span>
			</aside> 
	-->
	
				<aside id="text-8" class="widget widget_text eccart-interieur">
						<div class="textwidget">
						
									<div id='div-gpt-ad-1328786458421-0' style='width:300px; height:300px;'>
									<div class="ads_313538325f323330385f38343834"><script type="text/javascript">
        var rdads=new String(Math.random()).substring (2, 11);
        document.write('<sc'+'ript type="text/javascript" src="http://server1.affiz.net/tracking/ads_display.php?n=313538325f323330385f38343834_2a96aafdb9&rdads='+rdads+'"></sc'+'ript>');
        </script></div>
						</div>
						<span class="legend">Publicité</span>
			</aside>


</div><!-- end tertiary .widget-area -->


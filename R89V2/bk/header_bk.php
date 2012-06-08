<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="favicon.ico">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'yoko' ), max( $paged, $page ) );
?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- FlexSlider pieces -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/flexslider.css" type="text/css" media="screen" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://s343802320.onlinehome.fr//_test/rue/wp-content/themes/theme_enfant/js/jquery.flexslider.js"></script>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	
	<!-- Includes for this demo -->
	<link rel="stylesheet" href="image_slider/demo.css" type="text/css" media="screen" />
	
	<!-- Hook up the FlexSlider -->
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
	</script>


<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26890560-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=123041741129529";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- debut zone de design du haut du site -->

<!-- fin zone de design du haut du site -->

<div id="page" class="clearfix">
	<header id="branding">
	
		<?php global $yoko_options;
		$yoko_settings = get_option( 'yoko_options', $yoko_options ); ?>
			
		<hgroup id="site-title">
		<?php if( $yoko_settings['custom_logo'] ) : ?>
			<a href="<?php echo home_url( '/' ); ?>" class="logo">
			<img src="<?php echo $yoko_settings['custom_logo']; ?>" alt="<?php bloginfo('name'); ?>" />
			</a>
		<?php else : ?>
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			<?php bloginfo( 'name' ); ?></a></h1>
				
		<?php endif; ?>
		
				<!-- debut zone de btn du haut du site -->
		<div id="zoneBtnHo">
			<a href="http://fr-fr.facebook.com/Rue89Lyon" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logoFacebook.gif"></a>
			<a href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fs343802320.onlinehome.fr%2F_test%2Frue%2F&screen_name=Rue89Lyon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logoTwitter.gif"></a>
			<a href="rss"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logoRss.gif"></a>
			<a href="contact"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logoContact.gif"></a>
			<a href="conseils-techniques/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logoTech.gif"></a>
		</div>
	<div id="input-search-header">
        <?php get_search_form(); ?>
	</div>
		<div class="clear"></div>
		
<div class="clear"></div>
			<nav id="mainnav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- end mainnav -->
		<!-- fin zone de btn du haut du site -->
		</hgroup><!-- end site-title -->
			
		<div class="clear"></div>
		<!-- debut zone de menu ho -->
		
		

	
		<div class="ads_313538325f323330385f36303238">
		<div id="head_pub">
		<script type="text/javascript">
        var rdads=new String(Math.random()).substring (2, 11);
        document.write('<sc'+'ript type="text/javascript" src="http://server1.affiz.net/tracking/ads_display.php?n=313538325f323330385f36303238_3a76fe8933&rdads='+rdads+'"></sc'+'ript>');
        </script>
        </div>
	</div>

		<div class="clear"></div>			
</header><!-- end header --><div class="clear"></div>
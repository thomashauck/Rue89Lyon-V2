<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="icon" type="image/png" href="http://www.rue89strasbourg.com/wp-content/themes/theme_enfant/favicon.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="http://www.rue89strasbourg.com/wp-content/themes/theme_enfant/favicon.png" /><![endif]-->

<title>
	<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );


	
	
	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- DEBUT WP HEAD-->
<?php wp_head(); ?>
<!-- FIN WP HEAD-->

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/6243656/MegaBanner', [728, 90], 'div-gpt-ad-1328784387897-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/6243656/Pave1', [300, 250], 'div-gpt-ad-1328784610102-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/6243656/Pave2', [300, 250], 'div-gpt-ad-1328784903440-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/6243656/Pave3', [300, 250], 'div-gpt-ad-1328786347157-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>


<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/6243656/Pave4', [300, 250], 'div-gpt-ad-1328786458421-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27296758-1']);
  _gaq.push(['_setDomainName', '.rue89strasbourg.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script type="text/javascript"> (function() { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = ('https:' == document.location.protocol ? 'https://' : 'http://' )+'s3.amazonaws.com/actionside-project/AS-2312547.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();</script>



</head>
	
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=238376106250606";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--
<p class="background_clic">

<a href="http://www.ecs-strasbourg.com/" title="ecs" class="background_clic" >
<img width="100%" height="100%" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/invi.gif" >

</a>

</p>

-->

<div id="page" class="clearfix">
	<header id="branding">
		<div class="media"><a href="http://twitter.com/rue89lyon" class="tw"></a>
			<a href="http://facebook.com/Rue89Lyon" class="rss"></a>
			<a href="http://feeds.feedburner.com/Rue89Strasbourg" class="fb"></a></div>
		<?php global $yoko_options;
		$yoko_settings = get_option( 'yoko_options', $yoko_options ); ?>
			
		<hgroup id="site-title">
	
					<div id="newsletter">
					<!--<form  action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=Rue89Strasbourg', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">-->
					<form action="http://rue89strasbourg.us4.list-manage.com/subscribe/post?u=5ebe4d2cd5548535322f2841f&amp;id=2cc103f91a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
						<p>
							<!--<input class="" type="text" name="email"/>-->
							<input type="email" value="" name="EMAIL" class="email saisie_newsletter" id="mce-EMAIL" placeholder="Votre adresse mail" required>
						</p>
						<!--
						<input type="hidden"  value="Rue89Strasbourg" name="uri"/>
						<input type="hidden" name="loc" value="fr_FR"/>
						-->
						<input type="submit" value="OK" class="bout_gauche" name="subscribe" id="mc-embedded-subscribe" />
					</form>
				</div>	
	
			
			<?php if( $yoko_settings['custom_logo'] ) : ?>
			<div class="logo-rue89-strasbourg">
				<a href="<?php echo home_url( '/' ); ?>" class="logo">
					<img src="<?php echo $yoko_settings['custom_logo']; ?>" alt="<?php bloginfo('name'); ?>" />
				</a>
			</div>
			<?php else : ?>
				<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<?php bloginfo( 'name' ); ?></a></h1>
					
			<?php endif; ?>
				<!-- debut zone de btn du haut du site -->
		<div id="meteo">
<?php if(function_exists(wp_forecast)) { 
                   wp_forecast('A'); 
                 } ?>
</div>

			<nav id="mainnav" class="clearfix" >
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<div id="input-search-header">
				<?php get_search_form(); ?>
				</div>
			</nav><!-- end mainnav -->
			
			
			
		<!-- fin zone de btn du haut du site -->
		</hgroup><!-- end site-title -->
			
		<div class="clear"></div>
		<!-- debut zone de menu ho -->

		
			<div id="head_pub">
				<!-- MegaBanner -->
				<div id='div-gpt-ad-1328784387897-0' style='width:728px; height:90px;'>
					<div class="ads_313538325f323330385f36303238"><script type="text/javascript">
        var rdads=new String(Math.random()).substring (2, 11);
        document.write('<sc'+'ript type="text/javascript" src="http://server1.affiz.net/tracking/ads_display.php?n=313538325f323330385f36303238_3a76fe8933&rdads='+rdads+'"></sc'+'ript>');
        </script></div>
			</div>
		

		<div class="clear"></div>
	</header><!-- end header -->
	


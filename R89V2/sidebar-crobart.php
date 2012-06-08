<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?>
<div id="tertiary" class="widget-area" role="complementary">
			<aside id="text-5" class="widget widget_text eccart-interieur">

						<div id='div-gpt-ad-1328784610102-0' style='width:300px; height:250px;'>
									<script type='text/javascript'>
									googletag.cmd.push(function() { googletag.display('div-gpt-ad-1328784610102-0'); });
									</script>
						</div>
						<span class="legend">Publicité</span>
			</aside>

			<div id="top89" class="widget">
						<div class="title89"><span>Le</span> top<strong>89</strong> <span>Strasbourg</span></div>
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
			</div>
			
			<!-- Pave2 -->
			<aside id="text-6" class="widget widget_text eccart-interieur">
						<div id='div-gpt-ad-1328784903440-0' style='width:300px; height:250px;'>
									<script type='text/javascript'>
									googletag.cmd.push(function() { googletag.display('div-gpt-ad-1328784903440-0'); });
									</script>
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
			</aside>
			
						
			<aside id="text-6" class="widget widget_text eccart-interieur">
			<!-- Pave3 -->
						<div id='div-gpt-ad-1328786347157-0' style='width:300px; height:250px;'>
									<script type='text/javascript'>
									googletag.cmd.push(function() { googletag.display('div-gpt-ad-1328786347157-0'); });
									</script>
						</div>
						<span class="legend">Publicité</span>
			</aside>
			
			<aside id="text-8" class="widget widget_text eccart-interieur">
						<div class="textwidget">
						<!-- Pave4 -->
									<div id='div-gpt-ad-1328786458421-0' style='width:300px; height:250px;'>
									<script type='text/javascript'>
									googletag.cmd.push(function() { googletag.display('div-gpt-ad-1328786458421-0'); });
									</script>
									</div>
						</div>
						<span class="legend">Publicité</span>
			</aside>
			
</div><!-- end tertiary .widget-area -->
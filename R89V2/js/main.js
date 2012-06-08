// JavaScript Document

/**
* hoverIntent r5 // 2007.03.27 // jQuery 1.1.2+
* <http://cherne.net/brian/resources/jquery.hoverIntent.html>
* 
* @param  f  onMouseOver function || An object with configuration options
* @param  g  onMouseOut function  || Nothing (use configuration options object)
* @author    Brian Cherne <brian@cherne.net>
*/

jQuery(document).ready(function ($) {
						   

	
	
	/* ONGLET DU TOP89 */
	$("#top89 .nav a").click(function(){
		var section = $(this).attr("rel");
		$(this).addClass("actif").parent().siblings().children().removeClass("actif");
		$(this).parent().parent().siblings(".popular-posts").show().not("." + section).hide();
		return false;
	});



	/* ONGLET DU GONFLEABLOG */
	$("#gonfleblog .nav a").click(function(){
		var section = $(this).attr("rel");
		$(this).addClass("actif").parent().siblings().children().removeClass("actif");
		$(this).parent().parent().siblings(".section").show().not("." + section).hide();
		return false;
	});
	
	$("#gonfleblog .nav a").click(function(){
		var section = $(this).attr("rel");
		$(this).addClass("actif").parent().siblings().children().removeClass("actif");
		$(this).parent().parent().siblings(".section").show().not("." + section).hide();
		return false;
	});
	
		$("#locale .nav a").click(function(){
		var section = $(this).attr("rel");
		$(this).addClass("actif").parent().siblings().children().removeClass("actif");
		$(this).parent().parent().siblings(".liste_article_local").show().not("." + section).hide();
		return false;
	});
	
		/* Toggle des blocs auteur */
	$("#locale .auteur_locale > .toggle").click(function(){
		$(this).toggleClass("up").toggleClass("down").parent().next(".sectionArticles").slideToggle().siblings(".sectionArticles:visible").slideToggle();
		return false;
	});
	
	$("#top89 .title89 > .toggle").click(function(){
		$(this).toggleClass("up").toggleClass("down").parent().next(".contenu-top").slideToggle().siblings(".contenu-top:visible").slideToggle();
		return false;
	});
	
	
	$("#text-1010 .title89 > .toggle").click(function(){
		$(this).toggleClass("up").toggleClass("down").parent().next(".fb-like-box").slideToggle().siblings(".fb-like-box:visible").slideToggle();
		return false;
	});
	
	
});




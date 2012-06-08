$(document).ready(function(){
						
  var $rebonds = $("#rebonds");
  // Check for presence of rebonds block was added to avoid javascript errors
  if ($rebonds.length > 0) {
  	$rebondsTop = $("#article .content + *").offset().top - $(window).height();
  	$footerTop = $("#commentaires").offset().top - $(window).height();
  	$closeRbds = false;					

  	$.slideRebonds = function() { 
  		$scrollHeight = $(window).scrollTop()
  		if($scrollHeight >= $rebondsTop && $scrollHeight < $footerTop && !$rebonds.is(":visible") && $closeRbds == false){
  			$rebonds.slideDown();
  		}		
  		if(($scrollHeight < $rebondsTop || $scrollHeight >= $footerTop) && $rebonds.is(":visible")){
  			$rebonds.slideUp();
  		}
  	}						
  	
  	// Init
  	$.slideRebonds();
  	
  	// A chaque scroll
  	$(window).scroll(function () {
  		$.slideRebonds();
  	});
  	
  	// Bouton de fermeture
  	$("#rebonds .close").click(function(){
  		$(this).parent().slideUp();
  		$closeRbds = true;
  		return false;
  	});
  }

});
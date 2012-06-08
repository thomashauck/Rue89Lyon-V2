$(document).ready(function(){
						   
	/* Popover diaporama */
	$(".diaporama a.launch, #diaporamas_list .wrap_elements li a").colorbox({
		transition: "none",
		href: function(){
			return $(this).attr('href') + " div#modal_content";
		},
		width:980,
		onComplete:function(){
			initDiapo();
		}
	});
						   
	/* Diaporama intro1 */	
	$(".diaporama:not(#modal_content, .navigable) .carousel").serialScroll({
		items:'li',
		lock:false,
		constant:false,
		duration:600,
		interval:5000,
		force:true,
		start:0
	});
	
	
	/* Diaporama navigable */	
	$(".diaporama.navigable").serialScroll({
		target:'div.carousel',
		items:'li',
		lock:false,
		prev:'ul.controls a.prev',
		next:'ul.controls a.next',
		constant:false,
		duration:600,
		interval:5000,
		force:true,
		start:0,
		onBefore:function( e, elem, $pane, $items, pos ){			
			$(".diaporama.navigable .count strong").text(pos + 1);
			if(e.type == "click") $(".diaporama.navigable div.carousel").trigger( 'stop' );
		}
	});
	
	/* Diaporama dans la modal */
	function initDiapo(){
		$("#modal_content.diaporama").serialScroll({
			target:'div.carousel',
			items:'li',
			prev:'ul.controls a.prev',
			next:'ul.controls a.next',
			lock:false,
			constant:false,
			duration:600,
			interval:5000,
			force:true,
			start:0,
			onBefore:function( e, elem, $pane, $items, pos ){
				// A Placer ici : raffraichissement de la pub
				
				
				$("#modal_content.diaporama .count strong").text(pos + 1);
				if(e.type == "click") $("#modal_content.diaporama div.carousel").trigger( 'stop' );
			}
		});
	}
	initDiapo();

});
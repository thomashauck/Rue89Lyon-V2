<?php



function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}


function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function hellgie_lance_iframe($atts, $content = null){
	return '<a href="' . $atts["href"] . '" class="fancybox" rel="fancybox">' . $content . '</a>';	
}

add_shortcode( 'iframe', 'hellgie_lance_iframe' );


function hellgie_lance_aside($atts, $content = null){
	return '<div class="aside ' . $atts["align"] . '" >' . $content . '</div>';	
}

add_shortcode( 'aside', 'hellgie_lance_aside' );

function hellgie_lance_bootstrap_tabs($atts, $content = null){
	
		// Extract the tab titles for use in the tabber widget.
			preg_match_all( '/tab titre="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
			$tab_titles = array();
			if ( isset( $matches[1] ) ) { $tab_titles = $matches[1]; } 
			$titles_html = '<ul id="myTab" class="nav nav-tabs">';
			$counter = 1;
			foreach ( $tab_titles as $t ) {
				$active = ($counter == 1 )? 'active' : '';
				$counter++;
				$element_titre = getRewriteString ( $t[0]);
				$titles_html .= '<li class="' . $active . '"><a href="#' . $element_titre . '"  data-toggle="tab" >' . $t[0] . '</a></li>' . "\n";
			}
			$titles_html .= '</ul>' . "\n";

			return $titles_html . '<div class="tab-content">'. do_shortcode( $content ). '</div>' ;
}

add_shortcode( 'tabs', 'hellgie_lance_bootstrap_tabs',90 );



function hellgie_lance_bootstrap_tab($atts, $content = null){
				$element_titre = getRewriteString ( $atts["titre"]);
				return '<div class="tab-pane fade" id="' . $element_titre . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'tab', 'hellgie_lance_bootstrap_tab',99 );


function getRewriteString($sString) {
     //Conversion des majuscules en minuscule
     $string = strtolower(htmlentities($sString)); 
     //Listez ici tous les balises HTML que vous pourriez rencontrer
     $string = preg_replace("/&(.)(acute|cedil|circ|ring|tilde|uml|grave);/", "$1", $string); 
     //Tout ce qui n'est pas caract�re alphanum�rique  -> _
     $string = preg_replace("/([^a-z0-9]+)/", "-", html_entity_decode($string)); 
     return $string;
}

// On ajoute un nouveau post format => nouveau
add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

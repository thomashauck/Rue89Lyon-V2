<?php
$post = $wp_query->post;
// Teste si catégorie de l'article a l'identifiant '9' pour choisir l'affichage
if ( in_category('26') ) {
include(STYLESHEETPATH.'/single2.php');
} else {
include(STYLESHEETPATH.'/single1.php');
}
?>
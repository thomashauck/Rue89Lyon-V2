<?php
/*
Template Name: Mailchimp Crocnote Feed
*/

header("Content-Type: application/rss+xml; charset=UTF-8");
echo '<?xml version="1.0"?>';

function my_wp_trim_excerpt(){
		if ( '' == $text ){
				$text = get_the_excerpt('');
				$text = apply_filters('the_content', $text);
				$text = str_replace(']]>', ']]&gt;', $text);
				$excerpt_length = 50;
				$words = explode(' ', $text, $excerpt_length + 1);
				if (count($words) > $excerpt_length)	{
						array_pop($words);
						array_push($words, '[...]');
						$text = implode(' ', $words);
				}
		}
		return $text;
}

function yoast_rss_date( $timestamp = null ) {

  $timestamp = ($timestamp==null) ? time() : $timestamp;
  echo date(DATE_RSS, $timestamp);
}


$numposts = 1;
$temp = $wp_query;
$wp_query= null;
$args = array(
    		'cat' => '26',
    		'posts_per_page' => $numposts
);
/* 
		39 blog
		17 breves
		26 crocnote
		116 locale
		19 vigie
		
*/

$lastpost = $numposts - 1;


$wp_query = new WP_Query($args);

?>


<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:slash="http://purl.org/rss/1.0/modules/slash/" version="2.0">
    <channel>
        <title>Votre titre</title>
        <atom:link href="http://www.rue89strasbourg.com/index.php/mailchimprss/" rel="self" type="application/rss+xml"/>
        <link>http://www.rue89strasbourg.com/</link>
        <description>Votre description</description>
        <language>fr-fr</language>
				<pubDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></pubDate>
				<lastBuildDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></lastBuildDate>
        <managingEditor>newsletter@rue89strasbourg.com (Pierre France)</managingEditor>
        <webMaster>newsletter@rue89strasbourg.com (Laurent jassaud)</webMaster>
        <sy:updatePeriod>hourly</sy:updatePeriod>
				<sy:updateFrequency>1</sy:updateFrequency>

        <?php if ($wp_query->have_posts()) : ?>
        
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post();
            
						$image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
            
            ?>
        
                <item>
                		<?php echo '<enclosure url="' . $image_attributes[0]. '" length="50000" type="image/jpeg" />'; ?>
                    <category><?php 
														foreach((get_the_category()) as $category) { 
														    echo $category->cat_name." "; 
														} 
										?></category>
                    <guid isPermaLink="false"><![CDATA[<?php the_permalink(); ?>]]></guid>
                    <title><![CDATA[<?php the_title(); ?>]]></title>
                    <link><?php the_permalink(); ?></link>
                    <dc:creator><?php the_author(); ?></dc:creator>
                    <description><![CDATA[<?php echo my_wp_trim_excerpt(); ?>]]></description>
                    <pubDate><?php yoast_rss_date( strtotime($post->post_date_gmt) ); ?></pubDate>
                    
										
                </item>
                
            <?php endwhile; ?>
            
        <?php endif; ?>
        
    </channel>
</rss>
<?php $wp_query = null; $wp_query = $temp;?>
<?php
//** WP optimalicatie **//
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter( 'feed_links_show_comments_feed', '__return_false' );
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');

function get_excerpt_SEO($count){
	$permalink = get_permalink();
	$yoastseo = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);
	if(!empty($yoastseo)){
	$excerpt = $yoastseo;
	}else{
	$excerpt = get_the_content();
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $count);
	$excerpt = $excerpt.'...';
	}
	return $excerpt;
}

function btn_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'tekst' => '',
        'link'  =>  '',
        'class'  =>  ''
    ), $atts );
 
	if(strpos(esc_attr($a['link']), '#') !== false){
		return '<span class="knop ' . esc_attr($a['class']) . '" data-toggle="modal" data-target="'.esc_attr($a['link']).'-Modal">' . esc_attr($a['tekst']) . '</span>';
	}else{
		return '<a class="knop ' . esc_attr($a['class']) . '" href="' . esc_attr($a['link']) . '">' . esc_attr($a['tekst']) . '</a>';
	}
}
add_shortcode( 'knop', 'btn_shortcode' );

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
wp_add_dashboard_widget('merkelijkheid_widget', 'Merkelijkheid', 'merkelijkheid_dasboard_widget');
}
 
function merkelijkheid_dasboard_widget() {
global $current_user; wp_get_current_user();
echo '<p>Beste <b>'.ucfirst($current_user->display_name).'</b>, Welkom in het dashboard van uw website. Het Team van Merkelijkheid staat klaar om uw vragen te beantwoorden!</p><a class="button-primary" href="https://merkelijkheid.nl" target="_blank">Merkelijkheid bezoeken</a>';
}

function wpc_dashboard_widgets() {  
	global $wp_meta_boxes;  
	wp_add_dashboard_widget( 'dashboard_custom_feed', 'Merkelijkheid blog', 'dashboard_custom_feed_output' ); //add new RSS feed output  
}  
function dashboard_custom_feed_output() {  
	echo '<div class="rss-widget">';  
	wp_widget_rss_output(array(  
		 'url' => 'https://merkelijkheid.nl/feed/',  
		 'title' => 'Merkelijkheid blog',  
		 'items' => 4,  
		 'show_summary' => 1,  
		 'show_author' => 0,  
		 'show_date' => 0   
	));  
	echo "</div>";  
}  
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets'); 


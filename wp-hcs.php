<?php
/*
Plugin Name: WP Half-Court Shot
Plugin URI: https://github.com/galengidman/WP-Half-Court-Shot
Description: integrates <a href="http://www.mediahack.com/apps/half-court-shot">mediaHACK's Half-Court Shot jsApp</a> into WordPress via shortcode
Version: 0.1
Author: Galen Gidman
Author URI: http://galengidman.com
License: GPL3
*/

function hcs_handler($atts) {
	
	extract(shortcode_atts(array(
		"jersey" => "",
		"shots" => "",
		"default_styles" => true,
		
	), $atts));
	
	return '
		<div id="hcs"></div>
		<link rel="stylesheet" href="https://halfcourtshot.googlecode.com/svn/tags/1/style/half-court-shot.css">
		<script src="https://halfcourtshot.googlecode.com/svn/tags/1/js/half-court-shot.jsapp.mh.min.js"></script>
		<script>var hcs = new HalfCourtShot({ jersey: "' . $jersey . '", shots: "' . $shots . '", goal: "hcs" });</script>
	';
		
}

add_shortcode('hcs', 'hcs_handler');
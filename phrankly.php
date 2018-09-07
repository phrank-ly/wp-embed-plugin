<?php
/*
 * Plugin Name: Phrankly Food and Drink Sourcing
 * Description: Embed Phrankly on your web page
 * Version: 1.1
 * Author: Phrankly
 * Author URI: https://www.phrankly.com
 */
function phrankly_embed($atts = []){
	$handle = $atts['handle'];

  	ob_start();

	if(empty($handle)) {
		echo '<p>You must provide a valid Phrankly handle in the form of: [phrankly handle="YourPhranklyHandle"]</p>';
		echo '<p>Please read the Installation instructions for more information.</p>';
	} else {
		$url = 'https://www.phrankly.com/embed/responsive/' . $handle;
		echo '<div style="position: relative; overflow: hidden; padding-bottom: 100%;"><iframe src="' . $url . '" style="position: absolute;top: 0; left: 0; width: 100%; height: 100%; border: 0;"></iframe></div>';
	}

	$output = ob_get_clean();
	return $output;
}
add_shortcode('phrankly', 'phrankly_embed');
?>

<?php
/*
 * Plugin Name: Phrankly
 * Description: Embed Phrankly on your web page.
 * Version: 1.0
 * Author: Phrankly
 * Author URI: http://www.phrankly.com
 */

function phrankly_embed($atts = []){
	$handle = $atts[handle];
	if(empty($handle)) {
		echo '<p>You must provide a valid Phrankly handle in the form of: [phrankly handle="YourPhranklyHandle"]</p>';
	} else {
		$url = 'https://phrankly.com/embed/responsive/' . $handle;
		echo '<iframe src="' . $url . '" style="border: 2px solid rgb(204, 204, 204); height: 400px; width: 400px;"/>';
	}
}
add_shortcode('phrankly', 'phrankly_embed');
?>

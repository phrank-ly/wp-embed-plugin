<?php
/*
 * Plugin Name: Phrankly
 * Description: Embed Phrankly on your web page.
 * Version: 1.0
 * Author: Phrankly
 * Author URI: https://www.phrankly.com
 */
function phrankly_embed($atts = []){
	$handle = $atts['handle'];

  ob_start();

	if(empty($handle)) {
		echo '<p>You must provide a valid Phrankly handle in the form of: [phrankly handle="YourPhranklyHandle"]</p>';
	} else {
		$url = 'https://dev.phrankly.com/embed/responsive/' . $handle;
		echo '<iframe src="' . $url . '" style="border: 2px solid rgb(204, 204, 204); height: 400px; width: 400px;"></iframe>';
	}

  $output = ob_get_clean();
  //print $output; // debug
  return $output;
}
add_shortcode('phrankly', 'phrankly_embed');
?>

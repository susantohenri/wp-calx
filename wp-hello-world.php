<?php
/*
* Plugin Name: WordPress Calx
* Description: Wordpress Calculator.
* Version: 1.0
* Author: Henri Susanto
* Author URI: http://github.com
*/

function wp_calx_shortcode(){
	$url = plugins_url('calx');
	echo "
	  <script type=\"text/javascript\" src=\"{$url}/numeral.min.js\"></script>
	  <script type=\"text/javascript\" src=\"{$url}/jquery-calx-2.1.1.js\"></script>
	  <script type=\"text/javascript\">
	    jQuery(document).ready(function () {
	      jQuery('#calx').calx()
	    })
	  </script>
	";
	echo "
		<div id=\"calx\">
			<input type=\"text\" data-cell=\"A1\">
			<br>
			<input type=\"text\" data-cell=\"A2\" data-formula=\"A1\">
			<br>
			<button>Calculate !</button>
		</div>
	";
}
add_shortcode('calx', 'wp_calx_shortcode');
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
			<label>Diameter</label>
			<input type=\"text\" data-cell=\"A1\">
			<br>
			<label>Circle Wide</label>
			<input type=\"text\" data-cell=\"A2\" data-formula=\"22/7*(A1/2)^2\" data-format=\"0,0[.]00\" disabled=\"disabled\">
			<br>
			<button>Calculate !</button>
		</div>
	";
}
add_shortcode('calx', 'wp_calx_shortcode');
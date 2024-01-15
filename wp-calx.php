<?php
/*
* Plugin Name: WordPress Calx
* Description: Wordpress Calculator.
* Version: 1.0
* Author: Henri Susanto
* Author URI: http://github.com
*/

add_shortcode('calx', function () {
	wp_register_script('numeral', plugin_dir_url(__FILE__) . 'numeral.min.js', ['jquery']);
	wp_enqueue_script('numeral');

	wp_register_script('calx', plugin_dir_url(__FILE__) . 'jquery-calx-2.2.8.min.js', ['jquery']);
	wp_enqueue_script('calx');

	wp_register_script('calx-init', plugin_dir_url(__FILE__) . 'jquery-calx-init.js', ['jquery'], 2);
	wp_enqueue_script('calx-init');
});

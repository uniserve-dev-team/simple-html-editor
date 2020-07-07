<?php
/**
 * Plugin Name
 *
 * @package           Basic HTML Editor
 * @author            Uniserve IT Solutions
 * @copyright         2020 Uniserve IT Hong Kong Limited
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Basic HTML Editor
 * Plugin URI:        https://uniserveit.com/
 * Description:       Basic HTML Editor
*/

/*
Automated Divorce is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Automated Divorce is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Automated Divorce. If not, see {License URI}.
*/


defined( 'ABSPATH' ) or die ('Oops, you have no access.');

class basic_html_editor
{
	function __construct(){
	// add_action('init', array( $this, 'custom_post_type') );

	}

	function register_front_end() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_wp' ));
	}


	function enqueue_wp(){
		wp_enqueue_script( 'ckeditor', plugins_url('/vendor/ckeditor/ckeditor.js', __FILE__ ));
		wp_enqueue_script( 'script', plugins_url('/assets/js/script.js', __FILE__ ));
	}

	function enqueue_admin(){
	}
}

if(class_exists('basic_html_editor')){
	$basic_html_editor = new basic_html_editor();
	$basic_html_editor->register_front_end();
}

//activate
register_activation_hook( __FILE__, array($basic_html_editor, 'activate') );

//deactivate
register_deactivation_hook(__FILE__, array($basic_html_editor, 'deactivate') );


/*************************
****   SHORTCODE    ******
**************************/

//general consultation form
require_once plugin_dir_path(__FILE__) . 'templates/template-editor-shortcode.php';

function get_html_editor(){
	$html_editor_shortcode = new html_editor_shortcode();

	return $html_editor_shortcode->html_editor();
}
add_shortcode('simple_editor', 'get_html_editor');
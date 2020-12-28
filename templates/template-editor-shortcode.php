<?php
/*
 * @package           Basic HTML Editor
 * this is a changes should be reflected to the prodsite
*/

defined( 'ABSPATH' ) or die ('Oops, you have no access.');

class html_editor_shortcode
{
	function html_editor(){
		$echo = "";
		$echo.='<div id="editor">';
			$echo.='<h1 style="text-align:center">Welcome to Basic HTML Editor</h1>';
			$echo.='<p style="text-align:center">Made with love by <a href="https://uniserveit.com">Uniserve IT Solutions</a>.</p>';
			$echo.='<p style="text-align:center">Please paste here your data then click the "Source" button at the top to get the HTML code</p>';
		$echo.='</div>';

		$echo.='<script>';
			$echo.='initSample();';
		$echo.='</script>';

		return $echo;
	}
}



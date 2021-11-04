<?php
/*
	Plugin Name: Scroll to Top by Towkir
	Description: A simple Scroll to Top plugin to your WordPress site.
	Plugin URI: https://github.com/t0wk1r/scroll-to-top-by-towkir
	Author: Md Abu Sayed Towkir
	Author URI: http://towkir.info
	Version: 1.0
	License: GPLv2 or later
	Text Domain: scroll_to_top_by_towkir
*/

/*
    Copyright (C) 2021  Md Abu Sayed Towkir  towkir29@gmail.com
*/


add_action('wp_footer','towkir_scroll_to_top');

function towkir_scroll_to_top(){

	?>
	<div class="scroll-to-top">
		<a href=""><i class="fa fa-chevron-up"></i></a>
	</div>

	<?php

}

add_action('wp_enqueue_scripts', 'scroll_to_top_styles');
function scroll_to_top_styles(){
	wp_enqueue_style('towkir-font-awesome', PLUGINS_URL('css/all.min.css', __FILE__));
	wp_enqueue_style('towkir-scroll-to-top', PLUGINS_URL('css/scroll-to-top-by-towkir.css', __FILE__));
	wp_enqueue_script('towkir-script-scroll-to-top', PLUGINS_URL('scripts/scroll-to-top-by-towkir.js', __FILE__), array('jquery'), '' , false);
}

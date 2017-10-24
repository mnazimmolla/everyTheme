<?php
function add_css_js(){
	//enqueue stylesheets
	wp_enqueue_style('Fonts-google', '//fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700|Libre+Baskerville', array(), '1.0.0', 'all');
	wp_enqueue_style('flaticon', get_template_directory_uri() .'/assets/css/flaticon.css', array(), '1.0.0', 'all');
	wp_enqueue_style('Fonts-Awesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('smoothbox-style', get_template_directory_uri() .'/assets/css/smoothbox.css', array(), '4.5.0', 'all');
	wp_enqueue_style('responsive-menu', get_template_directory_uri() .'/assets/css/responsive-menu.css', array(), '0.2.1', 'all');
	wp_enqueue_style('settings', get_template_directory_uri() .'/rs-plugin/css/settings.css', array(), '1.4.5', 'all');
	wp_enqueue_style('dynamic-captions', get_template_directory_uri() .'/rs-plugin/css/dynamic-captions.css', array(), '1.0.0', 'all');
	wp_enqueue_style('static-captions', get_template_directory_uri() .'/rs-plugin/css/static-captions.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '3.3.6', 'all');
	wp_enqueue_style('bootstrap-progressbar', get_template_directory_uri() .'/assets/css/bootstrap-progressbar.css"', array(), '0.9.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri() .'/assets/css/style.css"', array(), '1.0.0', 'all');
	wp_enqueue_style('responsive-style', get_template_directory_uri() .'/assets/css/responsive.css"', array(), '0.2.1', 'all');
	
	//enqueue javascript and jquery
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
	wp_enqueue_script('modernizr', get_template_directory_uri() .'/assets/menu/modernizr-custom.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('responsive', get_template_directory_uri() .'/assets/menu/responsive-menu.js', array('jquery'), '0.2.1', true);
	wp_enqueue_script('imagesloaded', get_template_directory_uri() .'/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '4.1.0', true);
	wp_enqueue_script('isotope', get_template_directory_uri() .'/assets/js/isotope.function.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('isotope-pkgd', get_template_directory_uri() .'/assets/js/isotope.pkgd.min.js', array('jquery'), '2.2.2', true);
	wp_enqueue_script('smoothbox', get_template_directory_uri() .'/assets/js/smoothbox.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('themepunch', get_template_directory_uri() .'/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('themepunch-revolution', get_template_directory_uri() .'/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '4.6.4', true);
	wp_enqueue_script('bootstrap-progressbar', get_template_directory_uri() .'/assets/js/bootstrap-progressbar.js', array('jquery'), '0.9.0', true);
	wp_enqueue_script('bootstrap-progressbar', '//maps.google.com/maps/api/js?key=AIzaSyBZ9LCkJO6IPkR-DndlDs5UPMeoDNKa7LA', array('jquery'), '1.0.0', true);
	wp_enqueue_script('gmaps', get_template_directory_uri() .'/assets/js/gmaps.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('custom', get_template_directory_uri() .'/assets/js/custom.js', array('jquery'), '1.0.0', true);
	
}
add_action('wp_enqueue_scripts', 'add_css_js');

function every_flaticon(){
	wp_enqueue_style('flaticon', get_template_directory_uri() .'/assets/css/flaticon.css', array(), '1.0.0', 'all');
}
add_action('admin_enqueue_scripts', 'every_flaticon');
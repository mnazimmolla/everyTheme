<?php

if(file_exists(get_template_directory().'/inc/enqueue.php')){
	require_once(get_template_directory().'/inc/enqueue.php');
}

if(file_exists(get_template_directory().'/inc/theme-supports.php')){
	require_once(get_template_directory().'/inc/theme-supports.php');
}

if(file_exists(get_template_directory().'/theme-options/cs-framework.php')){
	require_once(get_template_directory().'/theme-options/cs-framework.php');
}


if(file_exists(get_template_directory().'/inc/tgm-plugin/plugin-activation.php')){
	require_once(get_template_directory().'/inc/tgm-plugin/plugin-activation.php');
}

if(file_exists(get_template_directory().'/inc/custom-widgets.php')){
	require_once(get_template_directory().'/inc/custom-widgets.php');
}
if(file_exists(get_template_directory().'/inc/customizer.php')){
	require_once(get_template_directory().'/inc/customizer.php');
}
if(file_exists(get_template_directory().'/inc/breadcoumb.php')){
	require_once(get_template_directory().'/inc/breadcoumb.php');
}

if(file_exists(get_template_directory().'/inc/demo-importer.php')){
	require_once(get_template_directory().'/inc/demo-importer.php');
}
if(file_exists(get_template_directory().'/inc/every-comments.php')){
	require_once(get_template_directory().'/inc/every-comments.php');
}
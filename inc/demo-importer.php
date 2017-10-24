<?php
/**
 * Initialize DT Importer
 */
 include_once(ABSPATH . 'wp-admin/includes/plugin.php');
 if(is_plugin_active('every-demo-importer/init.php')){

	$settings      = array(
	  'menu_parent' => 'tools.php',
	  'menu_title'  => __('Demo Importer', 'every'),
	  'menu_type'   => 'add_submenu_page',
	  'menu_slug'   => 'dt_demo_importer',
	);
	$options        = array(
		'demo-1' => array(
		  'title'         => __('Demo 1', 'every'),
		  'preview_url'   => 'https://www.google.com/',
		  'front_page'    => 'Home',
		  'blog_page'     => 'Blog',
		  'menus'         => array(
				'header_menu'   => 'Header Menu', // Menu Location and Title
				'footer_menu' => 'Footer Menu',
			)
		),
		'demo-2' => array(
		  'title'         => __('Demo 2', 'every'),
		  'preview_url'   => 'https://www.yahoo.com/',
		  'front_page'    => 'Home',
		  'blog_page'     => 'Blog',
		  'menus'         => array(
				'header_menu'   => 'Header Menu',
				'footer_menu' => 'Footer Menu',
			)
		),
	);
	DT_Demo_Importer::instance( $settings, $options );
 }
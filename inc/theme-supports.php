<?php


function every_theme_support(){


	/* For the Featured Images
	===============================================================================*/
	add_theme_support('post-thumbnails' );
	/* For the Title tag
	===============================================================================*/
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_editor_style( $stylesheet = 'editor-style.css' );
	/* Switch default core markup for search form, comment form, and comments to output valid HTML5.
	===============================================================================*/
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	if ( ! isset( $content_width ) ) {
		$content_width = 1920;
	}
	/* Enable support for Post Formats.
	===============================================================================*/
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
	/* Default Thumbnail
	===============================================================================*/
	add_image_size( 'every-footer-thumb', 70, 70, true );
	add_image_size( 'every_blog_post_image', 370, 240, true );
	add_image_size( 'every_main_blog_image', 800, 300, true );
	add_image_size( 'every_single_image', 800, 340, true );
	add_image_size( 'every_related_image', 222, 180, true );


	/* Makes wci textdomain for translation
	===============================================================================*/
	load_theme_textdomain( 'every', get_template_directory() . '/languages' );
	/*  Add default posts and comments RSS feed links to head.
	===============================================================================*/
	add_theme_support( 'automatic-feed-links' );
	/* This theme uses wp_nav_menu()
	===============================================================================*/
	register_nav_menus( array(
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu',
	));
}
add_action('after_setup_theme','every_theme_support');

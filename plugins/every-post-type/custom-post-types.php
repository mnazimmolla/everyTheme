<?php

/*
Plugin Name: Every Custom Portfolios
Plugin URI: http://iamnazim.com/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Moh Nazim Uddin
Version: 1.0.0
Author URI: http://iamnazim.com/
*/



function every_portfolio_post() {
    $labels = array(
        'name'               => _x( 'Portfolios', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Portfolios', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'Portfolio', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Portfolio', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Portfolio', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Portfolios', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Portfolios', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Portfolios:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No Portfolios found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'every_portfolio_post' );


function every_portfolio_taxonomy() {
    $labels = array(
        'name'              => _x( 'Categorys', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Categorys', 'textdomain' ),
        'all_items'         => __( 'All Categorys', 'textdomain' ),
        'parent_item'       => __( 'Parent Category', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
        'edit_item'         => __( 'Edit Category', 'textdomain' ),
        'update_item'       => __( 'Update Category', 'textdomain' ),
        'add_new_item'      => __( 'Add New Category', 'textdomain' ),
        'new_item_name'     => __( 'New Category Name', 'textdomain' ),
        'menu_name'         => __( 'Category', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'category' ),
    );

    register_taxonomy( 'category', array( 'portfolio' ), $args );
}
add_action('init', 'every_portfolio_taxonomy', 0 );
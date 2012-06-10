<?php
/*
Plugin Name: blobNotes
Plugin URI: http://ben.lobaugh.net
Description: Fairly pointless plugin which provides a scrach notes place in wp-admin. Shows in wp-admin only, no front end component
Version: 1.0
Author: Ben Lobaugh
Author URI: http://ben.lobaugh.net
*/


add_action('init', 'blobNotes_init');
function blobNotes_init() {
  $labels = array(
    'name' => __('Blob Notes'),
    'singular_name' => __('Blob Note'),
    'add_new' => __('New Note'),
    'add_new_item' => __('Add New Note'),
    'edit_item' => __('Edit Note'),
    'new_item' => __('New Note'),
    'all_items' => __('All Notes'),
    'view_item' => __('View Note'),
    'search_items' => __('Search Notes'),
    'not_found' =>  __('No Notes found'),
    'not_found_in_trash' => __('No Notes found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Blob Notes'

  );
  $args = array(
    'labels' => $labels,
    'public' => true, 
    'publicly_queryable' => false, 
    'exclude_from_search' => true,
    'show_in_menu' => true, 
    'menu_icon' => plugins_url( 'logo-icon.png', __FILE__ ),// . '/blobNotes/logo-icon.png',
    'rewrite' => false, 
    'has_archive' => false,
    'capability_type' => 'post',
    'hierarchical' => false, 
    'supports' => array('title','editor'),
    'taxonomies' => array('category'),
     'show_in_nav_menus' => false
  ); 
  register_post_type('blobNotes',$args);
}

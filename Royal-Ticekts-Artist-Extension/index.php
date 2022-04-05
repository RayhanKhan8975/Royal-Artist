<?php 
/*
 *Plugin Name: Royal-Tickets-Artist-Extension;
 *Author: Aman Khan
 */
include('includes/init.php');
include('process/save-post.php');

add_action('init', 'artist_init');
add_action( 'save_post_artist', 'r_create_taxonomy', 10, 3 );

//add_action( 'artist_add_form_fields', 'r_artist_add_form_fields' );
//add_action( 'artist_edit_form_fields', 'r_artist_edit_form_fields' );


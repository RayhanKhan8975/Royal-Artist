<?php 

function r_create_taxonomy($post_id, $post, $update){
	$result = wp_insert_term( get_the_title($post_id), 'artist');
//  echo $result;
}





<?php 

function artist_init(){

	 $labels = array(
        'name'                  => _x( 'Artists', 'Post type general name', 'Artist' ),
        'singular_name'         => _x( 'Artist', 'Post type singular name', 'Artist' ),
        'menu_name'             => _x( 'Artists', 'Admin Menu text', 'Artist' ),
        'name_admin_bar'        => _x( 'Artist', 'Add New on Toolbar', 'Artist' ),
        'add_new'               => __( 'Add New', 'Artist' ),
        'add_new_item'          => __( 'Add New Artist', 'Artist' ),
        'new_item'              => __( 'New Artist', 'Artist' ),
        'edit_item'             => __( 'Edit Artist', 'Artist' ),
        'view_item'             => __( 'View Artist', 'Artist' ),
        'all_items'             => __( 'All Artists', 'Artist' ),
        'search_items'          => __( 'Search Artists', 'Artist' ),
        'parent_item_colon'     => __( 'Parent Artists:', 'Artist' ),
        'not_found'             => __( 'No Artists found.', 'Artist' ),
        'not_found_in_trash'    => __( 'No Artists found in Trash.', 'Artist' ),
        'featured_image'        => _x( 'Artist Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Artist' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Artist' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Artist' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Artist' ),
        'archives'              => _x( 'Artist archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Artist' ),
        'insert_into_item'      => _x( 'Insert into Artist', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Artist' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Artist', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Artist' ),
        'filter_items_list'     => _x( 'Filter Artists list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Artist' ),
        'items_list_navigation' => _x( 'Artists list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Artist' ),
        'items_list'            => _x( 'Artists list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Artist' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'description'        => 'A custom post type for Artist',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Artist' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'         => [
         'category' , 'post_tag'
        ],
        'show_in_rest'       => true
    );

    register_post_type('artist', $args);
if(!taxonomy_exists( 'artist' )){
  register_taxonomy(
  'artist',
  'event',
  [
  'label'        =>  __( 'Artist', 'Artist' ),
  'rewrite'      => [ 'slug'   =>  'artist' ],
  'show_in_rest' => true
  ] );
  
};
  }
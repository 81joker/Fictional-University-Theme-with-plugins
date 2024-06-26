<?php

function university_post_types()
{
  // // Campus Post Type
  // register_post_type('campus', array(
  //   // to add new Role User 
  //   'capability_type' => 'campus_test_role_nehad',
  //   // to add new Role User 
  //   'map_meta_cap' => true,

  //   'show_in_rest' => true,
  //   'supports' => array('title', 'editor', 'excerpt'),
  //   'rewrite' => array('slug' => 'campuses'),
  //   'has_archive' => true,
  //   'public' => true,
  //   'labels' => array(
  //     'name' => 'Campuses',
  //     'add_new_item' => 'Add New Campus',
  //     'edit_item' => 'Edit Campus',
  //     'all_items' => 'All Campuses',
  //     'singular_name' => 'Campus'
  //   ),
  //   'menu_icon' => 'dashicons-location-alt'
  // ));

  // Event Post Type
  register_post_type('event', array(
    // to add new Role User 
    'capability_type' => 'event_test_nehad',
    // to add new Role User 
    'map_meta_cap' => true,

    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  // Program Post Type
  register_post_type('program', array(
    'show_in_rest' => true,
    'supports' => array('title'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-awards'
  ));

  // Professor Post Type
  register_post_type('professor', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));
  // Note Post Type
  register_post_type('note', array(
    'capability_type' => 'note',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    // disable or Enable show public in Admin or clint
    'public' => false,
    // disable or Enable show just for admin dashboard
    'show_ui' => true,
    'labels' => array(
      'name' => 'Notes',
      'add_new_item' => 'Add New Note',
      'edit_item' => 'Edit Note',
      'all_items' => 'All Notes',
      'singular_name' => 'Note'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog'
  ));
  // Likes hert 
  register_post_type('like', array(
    'supports' => array('title') ,
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Likes',
      'add_new_item' => 'Add New Like',
      'edit_item' => 'Edit Note',
      'all_items' => 'All Likes',
      'singular_name' => 'Like'
    ),
    'menu_icon' => 'dashicons-heart'
  ));
}

add_action('init', 'university_post_types');

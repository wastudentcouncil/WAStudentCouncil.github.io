<?php

function WAStuco_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'WAStuco_resources');

// Naviaction Menus
register_nav_menus(array(
  'primary' => __( 'Primary Menu'),
  'footer' => __( 'Footer Menu'),
));

<?php

function moshi_enqueue_scripts() {
  wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri().'css/aminate.min.css');

  wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);

  wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'moshi_enqueue_scripts' );


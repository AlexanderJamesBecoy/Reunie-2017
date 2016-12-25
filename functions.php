<?php

function reunie2017_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'reunie2017_resources');

 ?>

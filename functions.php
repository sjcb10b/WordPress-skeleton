<?php

// Enqueue styles and scripts
function add_theme_scripts()
{   
     // css file
    wp_enqueue_style('boostrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
     // jquery scrip
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1, true);
   

}
add_action('wp_enqueue_scripts', 'add_theme_scripts');



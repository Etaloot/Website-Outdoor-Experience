<?php

// adding the css and js files
function outdoor_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;0,900;1,800&display=swap');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;1,400;1,700&display=swap');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script( "main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}


add_action('wp_enqueue_scripts', 'outdoor_setup'); 
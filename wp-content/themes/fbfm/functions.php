<?php

include "include/players.php";
include "include/news.php";

function fbfm_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri()."/plugins/bootstrap/js/bootstrap.min.js", array('jquery'), false, true);
    wp_enqueue_script( 'canvas-masking', get_stylesheet_directory_uri()."/plugins/canvas-masking/canvasmask.js", array('jquery'), false, true);
    wp_enqueue_script( 'transit', get_stylesheet_directory_uri()."/plugins/jquery.transit/jquery.transit.js", array('jquery'), false, true);
    wp_enqueue_script( 'unslider', get_stylesheet_directory_uri()."/plugins/unslider/dist/js/unslider-min.js", array('jquery'), false, true);
    wp_enqueue_script( 'icheck', get_stylesheet_directory_uri()."/plugins/icheck/icheck.min.js", array('jquery'), false, true);
    wp_enqueue_script( 'validation', get_stylesheet_directory_uri()."/plugins/jquery-validation/dist/jquery.validate.min.js", array('jquery'), false, true);
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri()."/js/scripts.js", array('jquery'), false, true);

    wp_enqueue_style('fbfm_font', 'https://fonts.googleapis.com/css?family=Roboto:300italic,500,500italic,300');
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/plugins/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawsome', get_stylesheet_directory_uri()."/plugins/font-awesome/css/font-awesome.min.css");
    wp_enqueue_style( 'unslider', get_stylesheet_directory_uri()."/plugins/unslider/dist/css/unslider.css");
    wp_enqueue_style( 'unslider-dots', get_stylesheet_directory_uri()."/plugins/unslider/dist/css/unslider-dots.css");
    wp_enqueue_style( 'grey', get_stylesheet_directory_uri()."/plugins/icheck/skins/square/grey.css");
    wp_enqueue_style( 'style', get_stylesheet_directory_uri()."/css/style.css");
    wp_enqueue_style( 'queries', get_stylesheet_directory_uri()."/css/queries.css");
}
add_action('wp_enqueue_scripts', 'fbfm_enqueue_scripts');


function fbfm_theme_init() {
    register_nav_menu('main_menu', 'Top main menu' );
    add_theme_support( 'post-thumbnails' );
}
add_action('init', 'fbfm_theme_init');


<?php

function enqueue_scripts() {
    var_dump('hi');
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri( ) .  '/assets/js/bootstrap.min.js', [], '1.0.0');
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri( ) . '/assets/js/magnific-popup.css' , [], '1.0.0');
    wp_enqueue_script( 'olw-carousel-min', get_template_directory_uri( ) .  '/assets/js/owl.carousel.min.js', [], '1.0.0');

    wp_enqueue_style( 'bootstrap', get_template_directory_uri( ) . '/assets/css/bootstrap.min.css', [], '1.0.0');
    wp_enqueue_style( 'icons', get_template_directory_uri( ) . '/assets/css/ionicons.css', [], '1.0.0');
    wp_enqueue_style( 'magnific', get_template_directory_uri( ) . '/assets/css/magnific-popup.css', [], '1.0.0');
    wp_enqueue_style( 'main', get_template_directory_uri( ) . '/assets/css/main.css', [], '1.0.0');
    wp_enqueue_style( 'owl', get_template_directory_uri( ) . '/assets/css/owl.carousel.css', [], '1.0.0');
}

add_action( 'wp-enqueue-scripts', 'enqueue_scripts');
<?php

add_theme_support( 'post-thumbnails' );

function enqueue_scripts( $hook ) {
    var_dump('hi');


    $args = array(
        'in_footer' => true,
        'strategy'  => 'defer',
    );

    $main_css = get_template_directory_uri() . '/assets/css/main.css';

    wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri( ) .  '/assets/js/bootstrap.min.js', [], '1.0.0', $args);
    wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri( ) . '/assets/js/jquery.magnific-popup.min.js' , [], '1.0.0', $args);
    wp_enqueue_script( 'olw-carousel-min', get_template_directory_uri( ) .  '/assets/js/script.js', [], '1.0.0', $args);

    wp_enqueue_style( 'bootstrap.min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.0.0' );
    wp_enqueue_style( 'ionicons.css', get_template_directory_uri() . '/assets/css/ionicons.css', false, '1.0.0' );
    wp_enqueue_style( 'magnific-popup.css', get_template_directory_uri() . '/assets/css/magnific-popup.css', false, '1.0.0' );
    wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/assets/css/owl.carousel.css', false, '1.0.0' );
    wp_enqueue_style( 'owl.carousel.theme.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.theme.min.css', false, '1.0.0' );
    wp_enqueue_style( 'main.css', get_template_directory_uri() . '/assets/css/main.css', false, '1.0.4' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts');
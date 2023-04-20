<?php 
    function add_theme_scripts() {
       wp_enqueue_style( 'style', get_stylesheet_uri() );
       wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
       wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
       wp_enqueue_style( 'main', get_theme_file_uri( ) . '/css/main.css');

       wp_enqueue_script( 'Jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], null, true);
       wp_enqueue_script('swiper','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',['Jquery'], null, true);
       wp_enqueue_script('layout',get_theme_file_uri( ) . '/js/layout.js',['Jquery'], null, true);
       wp_enqueue_script('form-validation',get_theme_file_uri( ) . '/js/form-validation.js',['Jquery'], null, true);
    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
?>

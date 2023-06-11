<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

    add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );
    function tt_child_enqueue_parent_styles() {
        wp_enqueue_style( 'owl-style', get_stylesheet_directory_uri().'/css/owl.carousel.min.css' );
        wp_enqueue_style( 'owl-theme-style', get_stylesheet_directory_uri().'/css/owl.theme.default.min.css' );
        
        wp_enqueue_script( 'jquerylibs', get_stylesheet_directory_uri().'/js/jquery-3.7.0.min.js' );
        wp_enqueue_script( 'owljs', get_stylesheet_directory_uri().'/js/owl.carousel.min.js' );
    }

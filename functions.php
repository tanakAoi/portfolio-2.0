<?php

/**
 * Theme Support
 */

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );


/**
 * Enqueue Front End Styles and Scripts
 */

function pf_enqueue_styles_and_scripts() {

    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.0' );

    wp_enqueue_script( 'collapsible-list', get_template_directory_uri() . '/src/js/collapsibleList.js', array(), '1.0', true );
    wp_enqueue_script( 'dark-mode', get_template_directory_uri() . '/src/js/darkMode.js', array(), '1.0', true );
    wp_enqueue_script( 'header-scroll', get_template_directory_uri() . '/src/js/headerScroll.js', array(), '1.0', true );
    wp_enqueue_script( 'scroll-to-top-button', get_template_directory_uri() . '/src/js/scrollToTopButton.js', array(), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'pf_enqueue_styles_and_scripts' );


/**
 * Remove Auto Paragraphs in CF7
 */

add_filter('wpcf7_autop_or_not', '__return_false');

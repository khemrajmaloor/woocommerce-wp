<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

/**
 * Contains theme support hooks
 */

// Enqueue styles
add_action( 'wp_enqueue_scripts', 'kasida_styles_scripts' );
function kasida_styles_scripts()
{
  wp_enqueue_style( 'kasida-main', get_template_directory_uri() . '/assets/css/main.min.css' );
  wp_enqueue_style( 'kasida-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
  wp_enqueue_style( 'kasida-splider', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css' );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'kasida-main', get_template_directory_uri() . '/assets/js/main.js', false );
  wp_enqueue_script( 'kasida-splider-main', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js' );
  wp_enqueue_script( 'kasida-splider-function', get_template_directory_uri() . '/assets/js/splider.js', false );
}

// Menus
if (!function_exists('register_kasida_menus')) {
  function register_kasida_menus() {
    register_nav_menus( array(
      'primary_menu' => __( 'Primary Menu', 'kasida_theme' ),
      'footer_menu_one' => __( 'Footer Menu One', 'kasida_theme' ),
      'footer_menu_two'  => __( 'Footer Menu Two', 'kasida_theme' ),
      'footer_menu_three'  => __( 'Footer Menu Three', 'kasida_theme' ),
  ) );
  }
  add_action( 'after_setup_theme', 'register_kasida_menus' );
}
?>
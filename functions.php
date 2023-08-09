<?php 

// Ajout du fichier css
function custom_styles() {
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//ajout de deux zones de menu à mon thème
function register_my_menus() {
 register_nav_menus(
   array( 'header-menu' => __( 'Menu du Header' ),
   'footer-menu' => __( 'Menu du Footer' ),)
   );
   }
   add_action( 'init', 'register_my_menus' );
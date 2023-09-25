<?php 

// Ajout du fichier css
function custom_styles() {
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

function script()
{
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
  wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox.js', array('jquery'), '1.0', true);
  
}
add_action('wp_enqueue_scripts', 'script');

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


function add_contact_link( $items, $args ) {
    $contact = '<li><a id="Btncontact">Contact</a></li>';
    if ( $args->theme_location == 'header-menu' ) {
      $items = $items . $contact;
    }
    return $items;
  }
add_filter( 'wp_nav_menu_items', 'add_contact_link', 10, 2 );

function set_photo_post_type_default_editor() {
  $post_type = 'photos'; 
  
  if (isset($_GET['post']) && $_GET['post'] != '' && isset($_GET['action']) && $_GET['action'] == 'edit') {
      $post_id = $_GET['post'];
      $post = get_post($post_id);

      if ($post->post_type == $post_type && $post->post_content == '') {
          $post->post_content = '[Block default content goes here]';
          wp_update_post($post);
      }
  }
}
add_action('admin_init', 'set_photo_post_type_default_editor');










  




   
  
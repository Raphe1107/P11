<?php 

// Ajout du fichier css
function custom_styles() {
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/style.css' );
  wp_enqueue_style('select2-css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css');
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );
function load_jquery() {
  wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'load_jquery');

// Ajout des scripts
function script()
{
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
  wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox.js', array('jquery'), '1.0', true);
  wp_enqueue_script('ajax', get_template_directory_uri() . '/js/ajax.js', array('jquery'), '1.0', true);
  wp_enqueue_script('burger', get_template_directory_uri() . '/js/burger.js', array('jquery'), '1.0', true);
  wp_enqueue_script('select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array('jquery'), '4.1.0-rc.0', true);
}
add_action('wp_enqueue_scripts', 'script');

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajout de menu à mon thème
function register_my_menus() {
 register_nav_menus(
   array( 'header-menu' => __( 'Menu du Header' ),
   'footer-menu' => __( 'Menu du Footer' ),)
   );
   }
add_action( 'init', 'register_my_menus' );


// Ajout du lien contact
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


// Bouton charger plus 
function weichie_load_more() {
  $ajaxposts = new WP_Query([
    'post_type' => 'photos',
    'posts_per_page' => 8,
    'paged' => $_POST['paged'],
  ]);

  $response = '';
  $max_pages = $ajaxposts->max_num_pages;

  if($ajaxposts->have_posts()) {
    ob_start();
    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
    $response .=  get_template_part('templates_part/photo-block'); 
    endwhile;
    $output = ob_get_contents();
    ob_end_clean();
  } 
  else {
    $response = '';
  }

  $result = [
    'max' => $max_pages,
    'html' => $output,
  ];

  echo json_encode($result);
  exit;
}

add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');


// Filtres
function filter_photos() {
  $category = isset($_POST['category']) ? $_POST['category'] : '';
  $format = isset($_POST['format']) ? $_POST['format'] : '';
  $date_order = isset($_POST['date_order']) ? $_POST['date_order'] : 'DESC';

  $args = array(
      'post_type' => 'photos',
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => $date_order,
      'tax_query' => array(),
  );

  if ($category) {
      $args['tax_query'][] = array(
          'taxonomy' => 'categorie',
          'field' => 'slug',
          'terms' => $category,
      );
  }

  if ($format) {
      $args['tax_query'][] = array(
          'taxonomy' => 'format',
          'field' => 'slug',
          'terms' => $format,
      );
  }

  $query = new WP_Query($args);

  if ($query->have_posts()) :
      while ($query->have_posts()) :
          $query->the_post();
          get_template_part('templates_part/photo-block');
      endwhile;
  else :
      echo '<p>Aucune photo trouvée. Veuillez sélectionner les filtres</p>';
  endif;

  wp_reset_query();
  die();
}

add_action('wp_ajax_filter_photos', 'filter_photos');
add_action('wp_ajax_nopriv_filter_photos', 'filter_photos');
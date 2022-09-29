<?php
// Ajouter la prise en charge des images mises en avant
  add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
  add_theme_support( 'title-tag' );
?>


<?php

register_nav_menus( array
('main' => 'Menu Principal',
'footer' => 'Bas de page',));
?>


<?php

function capitaine_register_assets(){

    // Déclarer style.css à la racine du thème
    wp_enqueue_style('capitaine', get_stylesheet_uri(), array(),'1.0');

    // Déclarer un autre fichier CSS
    wp_enqueue_style('capitaine', get_template_directory_uri() . 'style.css', array(),'1.0');


  wp_enqueue_script( 'bpc_togglemenu', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20160909', true );

    // Déclarer le JS
    wp_enqueue_script('main', get_stylesheet_directory_uri().'js/main.js', '', '');

    // // Bootstrap CSS
  	wp_register_style('bootstrap-css',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css");
  	wp_enqueue_style('bootstrap-css');
    // // Déclarer le Bootstrap JS 
  	wp_register_script('bootstrap-js',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js");
  	wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'capitaine_register_assets');

?>

<?php register_nav_menu('main', 'Main menu');?>

<?php
// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}


// register a new menu
register_nav_menu('main', 'Main menu'); 




// Validation du formulaire de contact

add_action('wp_ajax_nopriv_process_contact_form', 'process_contact_form');

function process_contact_form()
{
    $to = "jonathanmbaya13@gmail.com";
    $subject = $_POST["subject"];
    $headers = "Testing";
    $message = $_POST["message"];
    $attachments = "";

    
    $sent = wp_mail($to, $subject, $message, $headers, $attachments);
    if (! $sent) {
        echo "<span class='error'>Oups ! Erreur d'envoi du message.</span>";
    } else {
        echo "<span class='success'>Merci pour votre message.</span>";
    }
    wp_die();
}





// /*
// * On utilise une fonction pour créer notre custom post type 'Séries TV'
// */

// function wpm_custom_post_type() {

// 	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
// 	$labels = array(
// 		// Le nom au pluriel
// 		'name'                => _x( 'Séries TV', 'Post Type General Name'),
// 		// Le nom au singulier
// 		'singular_name'       => _x( 'Série TV', 'Post Type Singular Name'),
// 		// Le libellé affiché dans le menu
// 		'menu_name'           => __( 'Séries TV'),
// 		// Les différents libellés de l'administration

//     'all_items'           => __( 'Toutes les séries TV'),
// 		'view_item'           => __( 'Voir les séries TV'),
// 		'add_new_item'        => __( 'Ajouter une nouvelle série TV'),
// 		'add_new'             => __( 'Ajouter'),
// 		'edit_item'           => __( 'Editer la séries TV'),
// 		'update_item'         => __( 'Modifier la séries TV'),
// 		'search_items'        => __( 'Rechercher une série TV'),
// 		'not_found'           => __( 'Non trouvée'),
// 		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
// 	);

//   	// On peut définir ici d'autres options pour notre custom post type
	
// 	$args = array(
// 		'label'               => __( 'Séries TV'),
// 		'description'         => __( 'Tous sur séries TV'),
// 		'labels'              => $labels,
// 		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
// 		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
// 		/* 
// 		* Différentes options supplémentaires
// 		*/
// 		'show_in_rest' => true,
// 		'hierarchical'        => false,
// 		'public'              => true,
// 		'has_archive'         => true,
// 		'rewrite'			  => array( 'slug' => 'series-tv'),

// 	);


//   	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
// 	register_post_type( 'seriestv', $args );

// }

// add_action( 'init', 'wpm_custom_post_type', 0 );

















?>
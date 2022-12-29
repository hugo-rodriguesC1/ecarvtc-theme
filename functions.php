<?php

function ecarvtc_register_assets() {

    wp_enqueue_script( 
        'ecarvtc', 
        get_template_directory_uri() . '/script.js', 
        array(), 
        '1.0', 
        true
    );
    
    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'ecarvtc',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style( 
        'ecarvtc', 
        get_template_directory_uri() . '/tailwind.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'ecarvtc_register_assets' );

// vignettes
add_theme_support( 'post-thumbnails' );


//ajout menus multiples
function register_my_menu(){
    register_nav_menus( array(
        'header-menu-mobile' => __( 'Menu De Tete-mobile'),
        'header-menu-desktop' => __( 'Menu De Tete-desktop'),
        'footer-menu'  => __( 'Menu De Pied'),
    ) );
}
add_action( 'init', 'register_my_menu', 0 );


//ajout de type de contenu tarif
function init_my_custom_tarif()
{
   register_post_type(
       'tarif',
       array(
       'label' => 'tarifs',
       'labels' => array(
       'name' => 'Tarifs',
       'singular_name' => 'Tarif',
       'all_items' => 'Toutes les tarifs',
       'add_new_item' => 'Ajouter une tarif',
       'edit_item' => 'Éditer la tarif',
       'new_item' => 'Nouvelle tarif',
       'view_item' => 'Voir la tarif',
       'search_items' => 'Rechercher parmi les tarifs',
       'not_found' => 'Pas de tarif trouvée',
       'not_found_in_trash'=> 'Pas de tarif dans la corbeille'
       ),
       'public' => true,
       'capability_type' => 'post',
       'supports' => array(
       'title',
       'editor',
       'thumbnail'
       ),
       'has_archive' => true
       )
   );
}
add_action('init', 'init_my_custom_tarif');


//ajout de type de contenu évènement
function init_my_custom_event()
{
   register_post_type(
       'evenement',
       array(
       'label' => 'évènements',
       'labels' => array(
       'name' => 'Évènements',
       'singular_name' => 'Évènement',
       'all_items' => 'Toutes les évènements',
       'add_new_item' => 'Ajouter une évènement',
       'edit_item' => 'Éditer la évènement',
       'new_item' => 'Nouvelle évènement',
       'view_item' => 'Voir l évènement',
       'search_items' => 'Rechercher parmi les évènements',
       'not_found' => 'Pas de évènement trouvée',
       'not_found_in_trash'=> 'Pas de évènement dans la corbeille'
       ),
       'public' => true,
       'capability_type' => 'post',
       'supports' => array(
       'title',
       'editor',
       'thumbnail'
       ),
       'has_archive' => true
       )
   );
}
add_action('init', 'init_my_custom_event');



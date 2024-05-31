<?php
/**
 * Package Pays
 * Version 1.0.0
 */
/*
Plugin name: Pays
Plugin uri: https://github.com/eddytuto
Version: 1.0.0
Description: Permet d'afficher les destinations des catégories spécifiques
*/
echo header("Access-Control-Allow-Origin: http://localhost:81");
function pays_enqueue()
{
    $version_css = filemtime(plugin_dir_path( __FILE__ ) . "style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "js/pays.js");
    wp_enqueue_style(   'em_plugin_pays_css',
                        plugin_dir_url(__FILE__) . "style.css",
                        array(),
                        $version_css);

    wp_enqueue_script(  'em_plugin_pays_js',
                        plugin_dir_url(__FILE__) ."js/pays.js",
                        array(),
                        $version_js,
                        true);
}
add_action('wp_enqueue_scripts', 'pays_enqueue');

/* Création de la liste des destinations en HTML */
function creer_bouton_pays(){
    // Remplacez 'pays' par le slug de la catégorie parent ou une autre logique pour obtenir les catégories spécifiques
    $categories = get_categories(array(
        'child_of' => get_category_by_slug('pays')->term_id
    ));
    $contenu = '';
    foreach ($categories as $elm_categorie){
        $nom = $elm_categorie->name;    
        $id =  $elm_categorie->term_id;  
        $contenu .= '<button id="cat_'.$id.'" class="lien__categorie">'.$nom.'</button>';
    }
    return $contenu;
}

function creation_destinations_pays(){
    $contenu = creer_bouton_pays() .  '<div class="contenu__restapi"></div>';
    return $contenu;
}

add_shortcode('em_pays', 'creation_destinations_pays');

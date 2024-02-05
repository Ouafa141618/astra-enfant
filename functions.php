<?php
add_action('wp_enqueue_scripts', 'wpm_enqueue_styles');

function wpm_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Ajoute une nouvelle page personnalisée au menu de navigation
function ajouter_page_personnalisee_menu($items, $args) {
    // Vérifiez si c'est le menu du header
    if ($args->theme_location == 'Principal') {
        // Ajoutez le lien de la page personnalisée
        $items .= '<li><a href="' . home_url('/planty/admin/') . '">Admin</a></li>';
    }
    return $items;
}

// Ajoutez le filtre pour le hook wp_nav_menu_items
add_filter('wp_nav_menu_items', 'ajouter_page_personnalisee_menu', 10, 2);
?>

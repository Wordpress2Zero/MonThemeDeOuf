<?php
/**
 * Fonction pour ajouter les liens CSS et JavaScript de Bootstrap à la balise wp_head.
 */
function ajouter_css_et_js() {
 
 // Ajouter le lien CSS Bootstrap
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');

    // Ajouter le script JavaScript Bootstrap (bundle)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);
}

// Ajouter l'action pour exécuter la fonction lors du chargement des scripts
add_action('wp_enqueue_scripts', 'ajouter_css_et_js');


<?php
/**
 * Désactiver l'éditeur Gutenberg et utiliser l'éditeur classique.
 *
 * Cette fonction utilise le filtre `use_block_editor_for_post` pour désactiver
 * l'éditeur Gutenberg et rétablir l'éditeur classique pour tous les types de publications
 * (articles, pages, etc.).
 */
function desactiver_gutenberg_editor() {
    // Utilise le filtre `use_block_editor_for_post` pour désactiver Gutenberg.
    add_filter('use_block_editor_for_post', '__return_false', 10);
}

// Ajoute la fonction de désactivation de Gutenberg à l'action `init`.
add_action('init', 'desactiver_gutenberg_editor');
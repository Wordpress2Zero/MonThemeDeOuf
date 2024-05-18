<?php 

// Affiche l'auteur de l'article              
function Get_blog_auteur() {
    
    // Récupérer l'ID de l'auteur de l'article actuel
     $post_author_id = get_post_field( 'post_author', get_the_ID() );

     // Récupérer les informations de l'auteur
     $author_info = get_userdata( $post_author_id );

     // Vérifier si les informations de l'auteur existent
     if ( $author_info ) {
         // Récupérer le nom et le prénom de l'auteur
         $first_name = $author_info->first_name;
         $last_name = $author_info->last_name;

         // Afficher le nom complet de l'auteur
         return 'Auteur : ' . $first_name . ' ' . $last_name;
     } else {
         return 'Auteur inconnu';
     }
}   
// #####################################################################

function Get_article_img_url(){
    
    // Récupérer l'URL de l'image mise en avant pour l'article en cours
    $post_thumbnail_url = get_the_post_thumbnail_url();

    // Vérifier si une image mise en avant existe
    if ($post_thumbnail_url) {
        // Afficher l'URL de l'image mise en avant
        $img_url = $post_thumbnail_url;
    } else {
        $img_url = 'http://local-web-dv.local/wp-content/uploads/2024/05/blog-4.jpg';
    }
    
    return $img_url; 
}
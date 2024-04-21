<?php
/**
 * Fonction pour ajouter les liens CSS et JavaScript de Bootstrap à la balise wp_head.
 */
function ajouter_css_et_js() {
 
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');

    // Vendor CSS Files
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons-css', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('boxicons-css', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
    wp_enqueue_style('glightbox-css', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
    wp_enqueue_style('remixicon-css', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');

    // Template Main CSS File
    wp_enqueue_style('template-main-css', get_template_directory_uri() . '/assets/css/style.css');
    
    // ################## FOOTER ###############################################################
    // Inclusion des scripts dans le footer (true) ou dans le header (false)
    // Vendor JS Files
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('glightbox-js', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), null, true);
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('waypoints-js', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), null, true);
    wp_enqueue_script('validate-js', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), null, true);

    // Template Main JS File
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    
}

// Ajouter l'action pour exécuter la fonction lors du chargement des scripts
add_action('wp_enqueue_scripts', 'ajouter_css_et_js');
//##############################################################################


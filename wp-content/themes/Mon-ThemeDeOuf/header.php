<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
      <!-- Favicons -->
    <link href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo get_template_directory_uri() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
    <?php wp_head(); ?>
</head>
<body>
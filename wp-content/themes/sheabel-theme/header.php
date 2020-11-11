<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name');?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>



    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src=<?php echo get_template_directory_uri(). "/image/logo.png"; ?>></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

           <?php
            $defaults = array(
            'theme_location' => 'primary_menu',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
            );
            wp_nav_menu( $defaults );
          ?>

      </nav>
    </header>
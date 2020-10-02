<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="tete">
            <div class="barre">
                <a href="<?php echo home_url( '/' ); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <?php 
                    if(has_nav_menu('header_menu')){
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header_menu',
                                'menu_class' => 'navbar'
                            )
                        );
                    }
                ?>
            </div>
        </div>  
  </header>
    <?php wp_body_open(); ?>
    
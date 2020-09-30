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
                    <img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <nav class="navigation">
                    <ul>
                        <li class="pages"><a href="#">Menu</a></li>
                        <ul class="deroulante">
                            <li class="sous_titre"><a href="#">Accueil</a></li>
                            <li class="sous_titre"><a href="#">Articles</a></li>
                            <li class="sous_titre"><a href="#">Tag</a></li>
                        </ul>
                    </ul>
                </nav>
            </div>
        </div>  
  </header>
    <?php wp_body_open(); ?>
    
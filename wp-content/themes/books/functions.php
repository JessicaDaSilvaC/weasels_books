<?php

//Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

//Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

function jessica_register_script(){
    
    wp_enqueue_style( 'jessica_style', get_template_directory_uri() . "/style.css", array(), "1.0");

    wp_enqueue_script( 'jessica_script',
        get_template_directory_uri() . '/script.js',
        array("jquery"), 
        "1.0", 
        true
    );
}

function register_menu(){
    register_nav_menu('header_menu', __('Menu Header'));
}

add_action("wp_enqueue_scripts", "jessica_register_script");
add_action('init', 'register_menu');
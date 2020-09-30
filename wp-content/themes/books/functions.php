<?php

//Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

//Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

wp_register_style('style', get_stylesheet_uri());
wp_enqueue_style( 'style');

wp_enqueue_script( 'script',
get_template_directory_uri() . '/script.js',
array() );
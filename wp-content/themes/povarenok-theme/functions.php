<?php
// functions.php

// Регистрируем меню и поддержку логотипа
function povarenok_theme_setup() {
    register_nav_menus(array(
        'primary' => 'Главное меню (верхняя навигация)',
    ));

    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'povarenok_theme_setup');

// Подключаем стили и скрипты
function povarenok_enqueue_assets() {
    // основной стиль темы (style.css)
    wp_enqueue_style('povarenok-style', get_stylesheet_uri());

    // отдельный файл для хедера
    wp_enqueue_style('povarenok-header', get_template_directory_uri() . '/Layout/header/header.css', array('povarenok-style'));
    wp_enqueue_style('povarenok-header', get_template_directory_uri() . '/povarenok-theme/templatesHome/Home.css', array('povarenok-style'));

}
add_action('wp_enqueue_scripts', 'povarenok_enqueue_assets');

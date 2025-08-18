<?php
    // Enqueue styles and scripts
    function povarenok_enqueue_scripts() {
        wp_enqueue_style('povarenok-style', get_stylesheet_uri());
        wp_enqueue_script('povarenok-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
    }
    add_action('wp_enqueue_scripts', 'povarenok_enqueue_scripts');

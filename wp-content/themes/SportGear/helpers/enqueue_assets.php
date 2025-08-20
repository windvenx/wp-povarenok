<?php


function enqueue_css() {

    wp_enqueue_style("index",SportGear_URL . "assets/css/index.css");
    wp_enqueue_style("icon",SportGear_URL . "assets/iconfont/material-icons.css");


}

function enqueue_js() {
    wp_enqueue_script("jquery");
    wp_enqueue_script("header",SportGear_URL . "assets/js/header.js");
    wp_enqueue_script("recommended",SportGear_URL . "assets/js/recommended-product.js");
    wp_enqueue_script("product",SportGear_URL . "assets/js/product.js");
    wp_enqueue_script("cart",SportGear_URL . "assets/js/cart.js");

}

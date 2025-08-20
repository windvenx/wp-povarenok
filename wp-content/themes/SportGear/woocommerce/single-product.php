<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

// Проверка, что продукт существует
if (!$product || post_password_required()) {
    echo get_the_password_form();
    return;
}

if (!$product instanceof WC_Product) {
    $product = wc_get_product(get_the_ID());
}

$main_image_id = $product->get_image_id(); // Основное изображение
$gallery_image_ids = $product->get_gallery_image_ids(); // Галерея изображений
$main_image_url = wp_get_attachment_image_url($main_image_id, 'large'); // URL основного изображения

get_header('shop'); ?>

<main class="flex-auto">
    <div class="container">
        <div class="flex gap-[50px] mt-[20px] flex-col lg:flex-row  ">
            <div class="custom-product-gallery">
                <div class="thumbnails-wrapper">
                    <?php if (count($gallery_image_ids) > 3) : ?>
                        <button class="scroll-btn" id="scroll-up">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="transform: rotate(-90deg);">
                                <path fill="currentColor" d="M7.293 1.293a1 1 0 0 0 0 1.414L16.586 12l-9.293 9.293a1 1 0 1 0 1.414 1.414l10-10a1 1 0 0 0 0-1.414l-10-10a1 1 0 0 0-1.414 0"></path>
                            </svg>
                        </button>
                    <?php endif; ?>
                    <div class="thumbnails">
                        <img src="<?php echo esc_url($main_image_url); ?>" data-large="<?php echo esc_url($main_image_url); ?>" class="thumbnail" alt="<?php echo esc_attr($product->get_name()); ?>">
                        <?php foreach ($gallery_image_ids as $image_id): ?>
                            <img src="<?php echo esc_url(wp_get_attachment_image_url($image_id, 'thumbnail')); ?>" data-large="<?php echo esc_url(wp_get_attachment_image_url($image_id, 'large')); ?>" class="thumbnail" alt="<?php echo esc_attr($product->get_name()); ?>">
                        <?php endforeach; ?>
                    </div>
                    <?php if (count($gallery_image_ids) > 3) : ?>
                        <button class="scroll-btn" id="scroll-down">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="transform: rotate(90deg);">
                                <path fill="currentColor" d="M7.293 1.293a1 1 0 0 0 0 1.414L16.586 12l-9.293 9.293a1 1 0 1 0 1.414 1.414l10-10a1 1 0 0 0 0-1.414l-10-10a1 1 0 0 0-1.414 0"></path>
                            </svg>
                        </button>
                    <?php endif; ?>
                </div>
                <div class="main-image">
                    <img id="main-image" src="<?php echo esc_url($main_image_url); ?>" alt="<?php echo esc_attr($product->get_name()); ?>">
                </div>
            </div>

            <div class="product-info">
                <?php
                // Получение категорий текущего товара
                $terms = get_the_terms(get_the_ID(), 'product_cat');
                if ($terms && !is_wp_error($terms)) {
                    echo '<a href="' . esc_url(get_term_link($terms[0])) . '">' . esc_html($terms[0]->name) . '</a>';
                }
                ?>
                <h2><?php echo esc_html(the_title()); ?></h2>
                <?php render_price($product->get_id(), $product->is_on_backorder(1)); ?>
                <div class="short-description"><?php echo wp_kses_post($product->get_short_description()); ?></div>


                <div class="wp-block-button wc-block-grid__product-add-to-cart mt-[20px]">
                    <?php if ($product->is_in_stock()) : ?>
                        <a href="?add-to-cart=<?php echo get_the_ID() ?>"
                            aria-label="Добавить в корзину “<?php echo the_title() ?>”"
                            data-quantity="1"
                            data-product_id="<?php echo get_the_ID() ?>"
                            data-price="<?php esc_attr($product->get_regular_price()) ?>"
                            rel="nofollow"
                            class="wp-block-button__link  add_to_cart_button ajax_add_to_cart">В корзину</a>
                    <?php else: ?>
                        <button
                            class="wp-block-button__link  add_to_cart_button ajax_add_to_cart" disabled="disabled">Нет в наличии</button>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="product-tabs mb-[20px]">
            <ul class="tab-links">
                <li class="active"><a href="#description">Описание</a></li>
                <?php
                if ($product->get_attributes()) {
                ?>
                    <li><a href="#additional-info">Доп. информация</a></li>
                <?php
                }
                ?>
            </ul>
            <div class="tab-content" id="tab-content">
                <div id="description" class="tab active"><?php echo wp_kses_post($product->get_description()); ?></div>
                <?php
                if (count($product->get_attributes()) > 0) {
                ?>
                    <div id="additional-info" class="tab">
                        <table class="product-attributes-table">
                            <thead>
                                <tr>
                                    <th>Характеристика</th>
                                    <th>Описание</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($product->get_attributes() as $attribute): ?>
                                    <tr>
                                        <td><?php echo esc_html(wc_attribute_label($attribute->get_name())); ?></td>
                                        <td>
                                        <?php 
                                        if ($attribute->is_taxonomy()){
                                            echo  esc_html(implode(', ', wc_get_product_terms($product->get_id(), $attribute->get_name(), array('fields' => 'names'))));
                                        }
                                        else{
                                            echo esc_html(implode(', ', $attribute->get_options()));
                                        }
                                        ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</main>













<?php get_footer('shop'); ?>
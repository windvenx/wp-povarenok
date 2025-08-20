<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined('ABSPATH') || exit;

?>

<div class="cart-items flex flex-col md:flex-row">
    <!-- Products Section -->
    <div class="cart-product bg-gray-50 rounded-lg shadow mt-[20px] p-4 flex-auto">
        <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) : ?>
            <?php
            $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
            $product_name = $_product->get_name();
            $product_permalink = $_product->is_visible() ? $_product->get_permalink($cart_item) : '';
            $product_price = WC()->cart->get_product_price($_product);
            $product_quantity = $cart_item['quantity'];
            $product_thumbnail = $_product->get_image();
            $product_obj = wc_get_product($product_id);
            $is_on_sale = $product_obj->is_on_sale();
            $price_display = $is_on_sale ? $product_obj->get_sale_price() : $product_obj->get_price();
            ?>

            <article class="cart-item flex items-center space-x-4 py-4 border-b border-gray-200 last:border-none"
                     data-cart-item-key="<?php echo $cart_item_key; ?>"
                     aria-labelledby="product-name-<?php echo $cart_item_key; ?>">
                <!-- Миниатюра продукта -->
                <div class="product-thumbnail w-16 h-16 flex-shrink-0 cart-product-image">
                    <?php echo $product_permalink ? sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $product_thumbnail) : $product_thumbnail; ?>
                </div>

                <!-- Детали продукта -->
                <div class="product-details flex-1">
                    <h3 id="product-name-<?php echo $cart_item_key; ?>" class="product-name text-lg font-semibold">
                        <?php echo $product_permalink ? sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $product_name) : $product_name; ?>
                    </h3>
                    <button class="text-red-500 delete-product" aria-label="Удалить товар"
                            data-cart-item-key="<?php echo $cart_item_key; ?>">
                        <i class="material-icons block my-auto">delete</i>
                    </button>
                </div>

                <div class="flex gap-[20px] cart-price-control">
                    <!-- Цена продукта -->
                    <div class="product-price">
                <span class="static-price" style="font-size:18px;font-weight:800;">
                    <?php echo wc_price($price_display); ?>
                </span>
                    </div>

                    <!-- Управление количеством -->
                    <div class="product-quantity flex items-center space-x-2">
                        <button type="button" class="quantity-decrease bg-gray-200 p-1 rounded"
                                aria-label="Уменьшить количество" data-cart-item-key="<?php echo $cart_item_key; ?>">−
                        </button>
                        <input type="number" name="cart[<?php echo $cart_item_key; ?>][qty]"
                               value="<?php echo esc_attr($product_quantity); ?>"
                               class="quantity-input w-12 text-center border-gray-300 rounded" min="1"
                               data-cart-item-key="<?php echo $cart_item_key; ?>" aria-label="Количество">
                        <button type="button" class="quantity-increase bg-gray-200 p-1 rounded"
                                aria-label="Увеличить количество" data-cart-item-key="<?php echo $cart_item_key; ?>">+
                        </button>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>


    <!-- Summary Section -->
    <div class="summary bg-gray-50 rounded-lg shadow mt-[20px] p-6 md:w-[300px] md:ml-6">
        <a href="<?php echo esc_url(wc_get_checkout_url()); ?>"
           class="block bg-green-500 text-white font-semibold text-center py-3 rounded-lg mb-4">Перейти к оформлению</a>

        <div class="text-lg font-semibold mb-2">Ваша корзина</div>
        <div class="flex justify-between text-gray-700 mb-2">
            <span>Товары (<span class="cart-item-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>)</span>
            <span class="cart-subtotal"><?php echo wc_price(WC()->cart->get_cart_contents_total() + WC()->cart->get_discount_total()); ?></span>
            <!-- Сумма товаров без учета скидок -->
        </div>

        <?php if (WC()->cart->get_discount_total() > 0) : ?>
            <div class="flex justify-between text-gray-700 mb-2">
                <span>Скидка</span>
                <span class="text-red-500 cart-discount">- <?php echo wc_price(WC()->cart->get_discount_total()); ?></span>
                <!-- Сумма скидки -->
            </div>
        <?php endif; ?>

        <hr class="my-4">
    </div>
</div>

<div class="recommended-products mt-10 py-10 px-4 bg-gray-100 rounded-lg shadow-lg">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Вас может заинтересовать...</h3>
    <div>
        <?php
        $args = array(
            'posts_per_page' => 8,
            'orderby' => "rand",
            'post_type' => "product",
        );
        $products = new WP_Query($args);
        render_products($products);
        ?>


    </div>
</div>


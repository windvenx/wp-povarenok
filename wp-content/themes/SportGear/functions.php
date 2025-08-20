<?php

define("SportGear_URL", trailingslashit(get_template_directory_uri()));
define("SportGear_DIR",trailingslashit(get_template_directory()));


require_once SportGear_DIR . "helpers/import.php";

add_action('after_setup_theme', function() {
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo");

    add_theme_support("woocommerce");

    register_nav_menu("footer","Footer Menu");
});

add_action("wp_enqueue_scripts", function() {
    enqueue_css();
    enqueue_js();
});

add_filter("upload_mimes", function ($upload_mimes) {
    $upload_mimes['svg'] = 'image/svg+xml';
    return $upload_mimes;
});


function add_to_cart_via_ajax()
{
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    if ($product_id > 0) {
        $added = WC()->cart->add_to_cart($product_id);
        if ($added) {
            wp_send_json_success();
        } else {
            wp_send_json_error();
        }
    }
    wp_die();
}

add_action('wp_ajax_add_to_cart', 'add_to_cart_via_ajax');
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart_via_ajax');


add_action('wp_footer', function () {
    ?>
    <script>
        jQuery(document.body).on('added_to_cart removed_from_cart', function() {
            // AJAX request to update cart count
            jQuery.get('<?php echo esc_url(admin_url('admin-ajax.php')); ?>?action=update_cart_count', function(data) {
                jQuery('.cart-count').text(data);
            });
        });
    </script>
    <?php
});

add_action('wp_ajax_update_cart_count', 'update_cart_count');
add_action('wp_ajax_nopriv_update_cart_count', 'update_cart_count');


function update_cart_count()
{
    echo WC()->cart->get_cart_contents_count();
    wp_die();
}

add_filter('woocommerce_add_to_cart_fragments', 'update_cart_count_fragments');
function update_cart_count_fragments($fragments)
{
    ob_start();
    ?>
    <span class="cart-count absolute top-0 right-0 -mt-2 -mr-2 bg-red-500 text-white text-xs rounded-full px-1.5">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
    <?php
    $fragments['.cart-count'] = ob_get_clean();
    return $fragments;
}



add_action('wp_ajax_update_cart_quantity', 'update_cart_quantity');
add_action('wp_ajax_nopriv_update_cart_quantity', 'update_cart_quantity');

function update_cart_quantity()
{
    if (isset($_POST['cart_item_key']) && isset($_POST['quantity'])) {
        $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
        $quantity = intval($_POST['quantity']);

        if ($quantity > 0) {
            WC()->cart->set_quantity($cart_item_key, $quantity, true);

            // Получаем обновленные данные для ответа
            $cart_item = WC()->cart->get_cart()[$cart_item_key];
            $product = $cart_item['data'];
            $price_per_item = $product->is_on_sale() ? $product->get_sale_price() : $product->get_price();
            $product_total = wc_price($price_per_item * $quantity);
            $cart_subtotal = wc_price(WC()->cart->get_subtotal());
            $cart_total = wc_price(WC()->cart->get_total());
            $cart_discount = wc_price(WC()->cart->get_discount_total());
            $total_items = WC()->cart->get_cart_contents_count();

            wp_send_json_success(array(
                'product_total' => $product_total,
                'price_per_item' => wc_price($price_per_item), // Добавляем статическую цену
                'cart_subtotal' => $cart_subtotal,
                'cart_total' => $cart_total,
                'cart_discount' => $cart_discount,
                'total_items' => $total_items,
            ));
        } else {
            wp_send_json_error('Invalid quantity');
        }
    } else {
        wp_send_json_error('Invalid data');
    }
}


// PHP-функция для удаления товара из корзины
function remove_cart_item() {
    if (isset($_POST['cart_item_key'])) {
        $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
        $removed = WC()->cart->remove_cart_item($cart_item_key);

        if ($removed) {
            // Обновленные данные для AJAX-ответа
            $cart_subtotal = wc_price(WC()->cart->get_subtotal());
            $cart_total = wc_price(WC()->cart->get_total());
            $cart_discount = wc_price(WC()->cart->get_discount_total());
            $total_items = WC()->cart->get_cart_contents_count();

            wp_send_json_success(array(
                'cart_subtotal' => $cart_subtotal,
                'cart_total' => $cart_total,
                'cart_discount' => $cart_discount,
                'total_items' => $total_items
            ));
        } else {
            wp_send_json_error('Не удалось удалить товар из корзины');
        }
    } else {
        wp_send_json_error('Неверные данные');
    }
    wp_die();
}

// Регистрируем обработчик AJAX для удаления товара
add_action('wp_ajax_remove_cart_item', 'remove_cart_item');
add_action('wp_ajax_nopriv_remove_cart_item', 'remove_cart_item');



add_action('rest_api_init', function() {
    register_rest_route("telegram/v1", "cart", [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "send_cart_to_telegram",
        "permission_callback" => "__return_true",
    ]);
});





function send_cart_to_telegram(WP_REST_Request $request) {
    try {


        // Получение данных из запроса
        $data = $request->get_params();

        // Обработка данных (пример)
        $user_name = sanitize_text_field($data['billing_first_name'] . ' ' . $data['billing_last_name']);
        $user_phone = sanitize_text_field($data['billing_phone'] ?? '');
        $address = sanitize_text_field($data['billing_address_1'] . ', ' . $data['billing_city'] . ', ' . $data['billing_country']);

        $cart_item = isset($data['cart_items']) ? json_decode($data['cart_items'], true) : [];


        // Формируем сообщение
        $message = "Новый заказ:\nИмя: $user_name\nТелефон: $user_phone\nАдрес: $address\nТовары:\n";

        foreach($cart_item as $item){
            $message .= $item["name"] . "  " . $item["price"] . " цена " . $item["quantity"]  . "  количество\n";
        }

        // Логика отправки сообщения (не забудьте про ваш класс Telegram)
        $telegram = new Telegram();
        $telegram->send_text_to_telegram($message);



        // Возвращаем успешный ответ
        return new WP_REST_Response(['success' => true, 'message' => 'Заказ успешно отправлен.'], 200);

    } catch (Exception $e) {
        // Логируем ошибку для отладки
        error_log("Error in send_cart_to_telegram: " . $e->getMessage());

        // Возвращаем ответ с ошибкой
        return new WP_REST_Response(['success' => false, 'message' => 'Ошибка обработки заказа'], 500);
    }
}












new SportGear();
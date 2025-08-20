<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$cart_items = WC()->cart->get_cart();

$message = [];

foreach ($cart_items as $cart_item) {
    $_product = $cart_item['data'];
    $product_name = $_product->get_name();
    $product_quantity = $cart_item['quantity'];
    $product_price = $_product->get_price();

    $message[] = [
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => $product_quantity
    ];
}





?>

<div class="row mb-[20px]">
    <div class="col-md-6 mt-[10px]">
        <h2 class="checkout-title"><?php esc_html_e('Checkout', 'woocommerce'); ?></h2>
        <form name="checkout" method="post" class="checkout woocommerce-checkout" novalidate>
            <div class="form-row">
                <label for="billing_first_name"><?php esc_html_e('Имя', 'woocommerce'); ?> <span class="required">*</span></label>
                <input type="text" name="billing_first_name" id="billing_first_name" required
                       placeholder="<?php esc_attr_e('Enter your first name', 'woocommerce'); ?>">
            </div>
            <div class="form-row">
                <label for="billing_last_name"><?php esc_html_e('Фамилия', 'woocommerce'); ?> <span class="required">*</span></label>
                <input type="text" name="billing_last_name" id="billing_last_name" required
                       placeholder="<?php esc_attr_e('Enter your last name', 'woocommerce'); ?>">
            </div>
            <div class="form-row">
                <label for="billing_phone"><?php esc_html_e('Телефон', 'woocommerce'); ?> <span class="required">*</span></label>
                <input type="tel" name="billing_phone" id="billing_phone" required
                       placeholder="<?php esc_attr_e('Enter your phone number', 'woocommerce'); ?>">
            </div>
            <div class="form-row">
                <label for="billing_address_1"><?php esc_html_e('Адрес', 'woocommerce'); ?> <span class="required">*</span></label>
                <input type="text" name="billing_address_1" id="billing_address_1" required
                       placeholder="<?php esc_attr_e('Enter your address', 'woocommerce'); ?>">
            </div>
            <button type="submit" class="checkout_btn"><?php esc_html_e('Оформить заказ', 'woocommerce'); ?></button>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const checkoutForm = document.querySelector('.woocommerce-checkout');

        // Передаем данные о товарах в JavaScript
        const cartItems = <?php echo json_encode($message); ?>;

        checkoutForm.addEventListener("submit", function (e) {
            e.preventDefault(); // Prevent default submission

            const formData = new FormData(checkoutForm);

            // Добавляем cartItems в formData
            formData.append("cart_items", JSON.stringify(cartItems));

            // Отправляем данные на сервер
            fetch("<?php echo esc_url(rest_url('telegram/v1/cart')); ?>", {
                method: "POST",
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        checkoutForm.reset()
                    } else {
                        console.error("Error: " + (data.message || "Unknown error"));
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                });
        });
    });
</script>



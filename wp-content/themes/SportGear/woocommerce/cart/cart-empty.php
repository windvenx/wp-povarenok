<?php
defined('ABSPATH') || exit;

/**
 * Custom Empty Cart Page with Recommended Products
 */

?>

<div class="flex  mt-[20px] flex-col items-center justify-center min-h-[300px] text-center bg-gray-50 py-10 px-4 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-2">В корзине пока пусто</h2>
    <p class="text-gray-600 mb-6">Загляните на главную, чтобы выбрать товары или найдите нужное в поиске</p>

    <a href="<?php echo esc_url(home_url('/')); ?>" class="bg-red-600 text-white py-3 px-6 rounded-lg text-lg hover:bg-red-700 transition-colors">
        Перейти на главную
    </a>
</div>

<div class="recommended-products mt-10 py-10 px-4 bg-gray-100 rounded-lg shadow-lg">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Вас может заинтересовать...</h3>
    <div>
        <?php
        $args = array(
            'posts_per_page' => 8,
            'orderby'        => "rand",
            'post_type'      => "product",
        );
        $products = new WP_Query($args);

        render_products($products);

        ?>


    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        $('.add-to-cart-btn').on('click', function(event) {
            event.preventDefault();

            let productId = $(this).data('product-id');
            let button = $(this);

            // AJAX запрос для добавления товара в корзину
            $.ajax({
                url: '<?php echo esc_url(admin_url("admin-ajax.php")); ?>',
                type: 'POST',
                data: {
                    action: 'add_to_cart',
                    product_id: productId,
                },
                beforeSend: function() {
                    button.prop('disabled', true).text('Добавляется...');
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    } else {
                        button.text('Ошибка');
                    }
                }
            });
        });
    });
</script>
jQuery(document).ready(function ($) {
    // Изменение количества товаров с помощью кнопок + и -
    $('.quantity-increase, .quantity-decrease').on('click', function () {
        var $button = $(this);
        var input = $button.siblings('.quantity-input');
        var cartItemKey = input.data('cart-item-key');
        var currentQuantity = parseInt(input.val());
        var newQuantity = currentQuantity;

        if ($button.hasClass('quantity-increase')) {
            newQuantity = currentQuantity + 1;
        } else if ($button.hasClass('quantity-decrease') && currentQuantity > 1) {
            newQuantity = currentQuantity - 1;
        }

        input.val(newQuantity);
        updateCartQuantity(cartItemKey, newQuantity);
    });

    // Функция для отправки AJAX-запроса на сервер и обновления DOM
    function updateCartQuantity(cart_item_key, quantity) {
        $.ajax({
            url: wc_add_to_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'update_cart_quantity',
                cart_item_key: cart_item_key,
                quantity: quantity
            },
            success: function (response) {
                if (response.success) {
                    // Обновляем цену для каждого товара и общую сумму корзины
                    $('.product-price-' + cart_item_key).html(response.data.product_total);
                    $('.cart-subtotal').html(response.data.cart_subtotal);
                    $('.cart-total').html(response.data.cart_total);


                    // Обновляем общее количество товаров в корзине
                    let totalItems = response.data.total_items; // Assuming your AJAX response has this field
                    $('.cart-item-count').text(totalItems);
                    $('.cart-count').text(response.data.total_items); // обновляем счётчик в header


                    if (response.data.cart_discount && response.data.cart_discount !== '0.00') {
                        $('.cart-discount').html('- ' + response.data.cart_discount).parent().show();
                    } else {
                        $('.cart-discount').parent().hide(); // Скрыть скидку, если ее нет
                    }
                } else {
                    console.log('Ошибка обновления корзины');
                }
            },
            error: function () {
                console.log('AJAX-запрос не выполнен');
            }
        });
    }

    $('.delete-product').on('click', function () {
        var $button = $(this);
        var cartItemKey = $button.data('cart-item-key');

        $.ajax({
            url: wc_add_to_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'remove_cart_item',
                cart_item_key: cartItemKey
            },
            success: function (response) {
                if (response.success) {
                    // Удаляем товар из DOM
                    $('[data-cart-item-key="' + cartItemKey + '"]').remove();

                    // Обновляем общую сумму и количество товаров
                    $('.cart-subtotal').html(response.data.cart_subtotal);
                    $('.cart-total').html(response.data.cart_total);
                    $('.cart-item-count').text(response.data.total_items);
                    $('.cart-count').text(response.data.total_items); // обновляем счётчик в header

                    // Проверяем скидку
                    if (response.data.cart_discount && response.data.cart_discount !== '0.00') {
                        $('.cart-discount').html('- ' + response.data.cart_discount).parent().show();
                    } else {
                        $('.cart-discount').parent().hide();
                    }

                    // Если последний товар удален, перезагружаем страницу
                    if (response.data.total_items === 0) {
                        location.reload();
                    }
                } else {
                    console.log('Ошибка при удалении товара');
                }
            },
            error: function () {
                console.log('Не удалось выполнить AJAX-запрос');
            }
        });
    });

});
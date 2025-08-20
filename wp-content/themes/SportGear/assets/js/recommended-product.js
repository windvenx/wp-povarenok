jQuery(document).ready(function ($) {
    $('.add_to_cart_button').on('click', function (event) {
        event.preventDefault()

        const $button = $(this)
        const $productElement = $button.closest('.wc-block-grid__product')

        // Добавляем класс для анимации
        $productElement.addClass('added-to-cart-animation')

        // Удаляем класс после анимации
        setTimeout(() => {
            $productElement.removeClass('added-to-cart-animation')
        }, 400)

        // Используем AJAX для добавления товара в корзину
        $.post($button.attr('href'), function (response) {
            // Логика обновления и анимации для корзины
            updateCartCount()

            // Скрыть кнопку "Добавить в корзину"
            $button.hide()

            // Показать только кнопку "Просмотр корзины"
            const $viewCartButton = $productElement.find('.view-cart-button')
            if ($viewCartButton.length) {
                $viewCartButton.show()
            }
        })
    })

    function updateCartCount() {
        // Обновление счетчика корзины с анимацией
        $.ajax({
            url: wc_add_to_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'update_cart_count',
            },
            success: function (response) {
                $('.cart-count').text(response)
                $('.cart-count').addClass('pop-animation')
                setTimeout(() => $('.cart-count').removeClass('pop-animation'), 400)
            },
        })
    }
})
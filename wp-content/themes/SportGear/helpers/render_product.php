<?php


function render_product_filter(
    int|null $min_price,
    int|null $max_price,
    mixed    $stock_status,
    int      $out_of_stock_count,
    mixed    $almost_out_count,
    array    $ratings,
    array    $rating_counts,
    WP_Query $query,
    int      $in_stock_count,
    array    $prices): void
{
    ?>
    <!-- Боковая панель с фильтрами (адаптивная) -->
    <div class="w-full lg:w-1/4 p-4 bg-gray-100 border border-gray-300 rounded max-h-[500px]">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold">Фильтр товаров</h3>
            <button type="button" class="text-sm text-blue-500 lg:hidden" id="filterBtn">
                <i class="material-icons ml-2">arrow_drop_down</i>
            </button>
        </div>

        <div id="filters" class="lg:block hidden">
            <!-- Фильтр по цене -->
            <div class="mb-4">
                <div class="text-sm font-semibold mb-2">Цена (без налога)</div>
                <div class="flex gap-2 mb-2">
                    <input type="number" name="min_price"
                           value="<?php echo esc_attr($min_price) ?: min($prices); ?>"
                           placeholder="Мин." class="w-1/2 p-2 border border-gray-300 rounded text-sm">
                    <input type="number" name="max_price"
                           value="<?php echo esc_attr($max_price) ?: max($prices); ?>"
                           placeholder="Макс." class="w-1/2 p-2 border border-gray-300 rounded text-sm">
                </div>
            </div>

            <!-- Фильтр по состоянию на складе -->
            <div class="mb-4">
                <div class="text-sm font-semibold mb-2">Состояние на складе</div>
                <label class="flex items-center text-sm mb-1">
                    <input type="radio" name="stock_status" value="in_stock"
                           class="mr-2" <?php checked($stock_status, 'in_stock'); ?> <?php echo $in_stock_count == 0 ? 'disabled' : ''; ?>>
                    В наличии
                    <span class="ml-auto text-gray-500"><?php echo $in_stock_count; ?></span>
                </label>
                <label class="flex items-center text-sm mb-1">
                    <input type="radio" name="stock_status" value="out_of_stock"
                           class="mr-2" <?php checked($stock_status, 'out_of_stock'); ?> <?php echo $out_of_stock_count == 0 ? 'disabled' : ''; ?>>
                    Нет в наличии
                    <span class="ml-auto text-gray-500"><?php echo $out_of_stock_count; ?></span>
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="stock_status" value="backorder"
                           class="mr-2" <?php checked($stock_status, 'backorder'); ?> <?php echo $almost_out_count == 0 ? 'disabled' : ''; ?>>
                    Под заказ
                    <span class="ml-auto text-gray-500"><?php echo $almost_out_count; ?></span>
                </label>
            </div>

            <!-- Фильтр по рейтингу -->
            <div>
                <div class="text-sm font-semibold mb-2">Рейтинг</div>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <label class="flex items-center text-sm mb-1">
                        <input type="checkbox" name="rating[]" value="<?php echo $i; ?>"
                               class="mr-2" <?php echo in_array($i, $ratings) ? 'checked' : ''; ?> <?php echo $rating_counts[$i] == 0 ? 'disabled' : ''; ?>>
                        <span class="text-yellow-500"><?php echo str_repeat('★', $i); ?></span>
                        <span class="ml-auto text-gray-500"><?php echo $rating_counts[$i]; ?></span>
                    </label>
                <?php endfor; ?>
            </div>

            <!-- Кнопка для применения фильтра -->
            <button type="submit" class="w-full mt-4 bg-blue-600 text-white py-2 rounded">Фильтровать</button>
            <button type="button" id="resetFilters" class="w-full mt-2 bg-gray-300 text-gray-700 py-2 rounded">Сбросить фильтры</button>
        </div>
    </div>

    <script>
        document.getElementById('resetFilters').addEventListener('click', function() {
            let url = location.href
            location.href = url.replace(/(\?|&)(?!s=|product_cat=)[^&]+/g, '').replace(/&{2,}/g, '&').replace(/[?&]$/, '');
        });
    </script>

    <?php render_products($query); ?>
    <?php
}


function render_products(WP_Query $query): void
{
    ?>
    <!-- Отображение товаров (адаптивная сетка) -->
    <div>
        <ul class="wc-block-grid__products">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php
                $product = wc_get_product(get_the_ID());
                $product_photo = get_the_post_thumbnail_url(get_the_ID(), "medium");
                ?>
                <li class="wc-block-grid__product">
                    <a href="<?php the_permalink(); ?>">
                        <div class="wc-block-grid__product-image">
                            <img src="<?php echo esc_url($product_photo) ?>" alt="<?php the_title() ?>" loading="lazy"
                                 decoding="async" width="300" height="300">
                        </div>
                        <div class="wc-block-grid__product-title">
                            <?php the_title() ?>
                        </div>
                    </a>
                    <div class="wc-block-grid__product-price price">
                        <?php echo $product->get_price_html() ?>
                    </div>
                    <div class="wp-block-button wc-block-grid__product-add-to-cart">
                        <?php if ($product->is_in_stock())  : ?>
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
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
    <?php
}

function render_price($id = null, $backorder = false)
{
    $product_obj = wc_get_product($id);

    if (!$product_obj) {
        echo '<span style="font-size:16px;">Запрос цены</span>';
        return;
    }

    $regular_price = $product_obj->get_regular_price();
    ?>
    <p class="product-price">
        <?php
        if ($regular_price) {
            if ($product_obj->is_on_sale()) {
                $sale_price = $product_obj->get_sale_price();
                $discount_percentage = round((($regular_price - $sale_price) / $regular_price) * 100);
                echo '<span class="woocommerce-Price-amount amount" style="font-size:18px; font-weight:700; color:red;">' . wc_price($sale_price) . '</span>';
                echo '<span style="margin-left: 4px; margin-right: 4px; font-size:14px; color:#99a3ae; text-decoration:line-through;">' . wc_price($regular_price) . '</span>';
                echo '<span style="color:red;"> −' . esc_html($discount_percentage) . '%</span>';
            } else {
                echo '<span class="woocommerce-Price-amount amount" style="font-size:18px;font-weight:800;">' . wc_price($regular_price) . '</span>';
            }
        } else {
            echo '<span style="font-size:16px;">Запрос цены</span>';
        }
        ?>
    </p>
    <?php
}

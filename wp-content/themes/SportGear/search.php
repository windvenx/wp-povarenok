<?php


$search_text = isset($_GET["s"]) ? $_GET["s"] : "";
$product_category = isset($_GET["product_cat"]) ? $_GET["product_cat"] : "";
$min_price = isset($_GET["min_price"]) ? (int)$_GET["min_price"] : null;
$max_price = isset($_GET["max_price"]) ? (int)$_GET["max_price"] : null;
$stock_status = isset($_GET["stock_status"]) ? $_GET["stock_status"] : "";
$ratings = isset($_GET["rating"]) ? $_GET["rating"] : [];

// Основные аргументы для WP_Query
$args = array(
    'post_type' => 'product',
    's' => $search_text,
);

// Добавляем фильтр по категории товаров, включая подкатегории
if (!empty($product_category)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'name', // Изменено на 'name', так как передается название категории
            'terms' => $product_category,
            'include_children' => true, // Включаем подкатегории
            'operator' => 'IN',
        ),
    );
}

// Массив для `meta_query`, который будет содержать дополнительные фильтры
$args['meta_query'] = array();

// Фильтр по цене
if (!empty($min_price) && !empty($max_price)) {
    $args['meta_query'][] = array(
        'key' => '_price',
        'value' => array($min_price, $max_price),
        'compare' => 'BETWEEN',
        'type' => 'NUMERIC'
    );
}

// Фильтр по состоянию на складе
if ($stock_status === 'in_stock') {
    $args['meta_query'][] = array(
        'key' => '_stock_status',
        'value' => 'instock'
    );
} elseif ($stock_status === 'out_of_stock') {
    $args['meta_query'][] = array(
        'key' => '_stock_status',
        'value' => 'outofstock'
    );
} elseif ($stock_status === 'backorder') {
    $args['meta_query'][] = [
        'key' => '_stock_status',
        'value' => 'onbackorder',
        'compare' => '='
    ];
}

// Фильтр по рейтингу
if (!empty($ratings)) {
    $args['meta_query'][] = array(
        'relation' => 'OR',
    );
    foreach ($ratings as $rating) {
        $args['meta_query'][] = array(
            'key' => '_wc_average_rating',
            'value' => $rating,
            'compare' => '=',
            'type' => 'DECIMAL'
        );
    }
}

// Выполняем запрос
$query = new WP_Query($args);

if($query->posts) {
// Определение минимальной и максимальной цены
$all_products = wc_get_products(array('status' => 'publish', 'limit' => -1));
$prices = array_map(function ($product) {
    return $product->get_price();
}, $all_products);
$min_price_available = min($prices);
$max_price_available = max($prices);
}

// Инициализация счетчиков для фильтра
$in_stock_count = 0;
$out_of_stock_count = 0;
$almost_out_count = 0;
$rating_counts = array_fill(1, 5, 0); // Заполняем массив для рейтингов

// Подсчет товаров по состоянию и рейтингу
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $product = wc_get_product(get_the_ID());

        if ($product->is_in_stock() || $product->get_stock_status() === 'onbackorder') {
            $in_stock_count++;
        } elseif ($product->get_stock_status() === 'outofstock') {
            $out_of_stock_count++;
        }

        // Увеличиваем счётчик для предзаказа отдельно
        if ($product->get_stock_status() === 'onbackorder') {
            $almost_out_count++;
        }

        $rating = round($product->get_average_rating());
        if (isset($rating_counts[$rating])) {
            $rating_counts[$rating]++;
        }
    }
    wp_reset_postdata();

}




?>


<?php get_header() ?>



<main class="flex-auto">
    <div class="container px-4">
        <?php if ($query->have_posts()) : ?>
            <div class="mt-[10px]">
                <h2 class="text-xl font-bold"> По запросу <?php echo esc_html($search_text) ?> найдено <?php echo esc_html($query->post_count) ?>
                    товаров</h2>
                <form method="get" action="" class="flex flex-col lg:flex-row gap-6 mt-[10px]">
                    <input type="hidden" name="s" value="<?php echo esc_attr($search_text); ?>">
                    <input type="hidden" name="product_cat" value="<?php echo esc_attr($product_category); ?>">

                    <?php render_product_filter(
                        min_price: $min_price,
                        max_price: $max_price,
                        stock_status: $stock_status,
                        out_of_stock_count: $out_of_stock_count,
                        almost_out_count: $almost_out_count,
                        ratings: $ratings,
                        rating_counts: $rating_counts,
                        query: $query, in_stock_count: $in_stock_count,prices: $prices
                    ); ?>

                </form>
            </div>
        <?php else: ?>
            <h2 class="mt-4 mb-4 font-bold text-2xl">Ничего не нашлось по запросу «<?php echo esc_html($search_text); ?>»</h2>
            <p style="margin-bottom: 70px;">Попробуйте поискать по-другому или сократить запрос</p>

            <?php ?>

            <?php
            $args = [
                'post_type' => 'product',
                'posts_per_page' => 250,
                'orderby' => 'rand',
            ];

            $random_products = new WP_Query($args);

            // Проверьте, есть ли продукты
            if ($random_products->have_posts()) {
                ?>
                            <h2 class="text-xl font-bold mt-[15px] mb-[20px]">Возможно, вам понравится:
                            </h2>
                <?php
                render_products($random_products);
            }
            ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer() ?>

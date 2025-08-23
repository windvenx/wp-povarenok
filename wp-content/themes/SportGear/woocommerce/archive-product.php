<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined('ABSPATH') || exit;

get_header();


$min_price = isset($_GET["min_price"]) ? (int)$_GET["min_price"] : null;
$max_price = isset($_GET["max_price"]) ? (int)$_GET["max_price"] : null;
$stock_status = isset($_GET["stock_status"]) ? $_GET["stock_status"] : "";
$ratings = isset($_GET["rating"]) ? $_GET["rating"] : [];
$product_category = get_query_var('product_cat'); // Имя категории




// Основные аргументы для WP_Query
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
);

// Фильтр по категории товаров, включая подкатегории
if (!empty($product_category)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => $product_category,
            'include_children' => true,
            'operator' => 'IN',
        ),
    );
}

// Массив для `meta_query`
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
    $args['meta_query'][] = array(
        'key' => '_stock_status',
        'value' => 'onbackorder',
        'compare' => '='
    );
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

// Выполняем запрос с учетом всех фильтров
$query = new WP_Query($args);


if($query -> post){
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


    <main class="flex-auto">
    <div class="container">
        <?php
        if (woocommerce_product_loop()) {
            if (have_posts()) {
                ?>
                <div class="flex flex-wrap gap-3 justify-center">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="border rounded-lg p-2 shadow-md bg-white w-48 h-64 flex flex-col items-center">
                            <div class="flex justify-center flex-grow">
                                <?php
                                /**
                                 * woocommerce_before_shop_loop_item_title hook.
                                 * @hooked woocommerce_show_product_loop_sale_flash - 10
                                 * @hooked woocommerce_template_loop_product_thumbnail - 10
                                 */
                                do_action('woocommerce_before_shop_loop_item_title');
                                ?>
                            </div>
                            <div class="text-center mt-1">
                                <?php
                                /**
                                 * woocommerce_shop_loop_item_title hook.
                                 * @hooked woocommerce_template_loop_product_title - 10
                                 */
                                do_action('woocommerce_shop_loop_item_title');
                                ?>
                                <div class="text-yellow-400 mt-1 text-xs">
                                    <?php
                                    $rating = wc_get_rating_html(get_the_ID());
                                    if ($rating) {
                                        echo $rating;
                                    } else {
                                        echo '<span class="text-gray-400 text-xs">No ratings</span>';
                                    }
                                    ?>
                                </div>
                                <p class="text-gray-600 mt-1 text-sm"><?php echo wc_get_product()->get_price_html(); ?></p>
                                <?php if (wc_get_product()->is_in_stock()) : ?>
                                    <a href="?add-to-cart=<?php the_ID(); ?>" class="mt-1 inline-block bg-green-600 text-white px-2 py-1 rounded text-xs hover:bg-green-700">Под заказ</a>
                                <?php else : ?>
                                    <span class="mt-1 inline-block text-red-600 text-xs">Нет в наличии</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php
            }
        }
        ?>
    </div>
</main>

<?php


get_footer();

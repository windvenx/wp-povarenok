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


function enqueue_homepage_styles() {
    // Подключаем основной style.css
    wp_enqueue_style('theme-styles', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'enqueue_homepage_styles');


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

// Customizer: регистрируем настройки для цветовой схемы (live preview)
add_action('customize_register', function($wp_customize) {

    // Section
    $wp_customize->add_section('home_colors_section', [
        'title' => 'Цвета — Главная (Home)',
        'priority' => 30,
        'description' => 'Настройки цветовой схемы для главной страницы (live preview).'
    ]);

    // helper: регистрация setting + control для цвета (postMessage)
    $add_color = function($id, $label, $default) use ($wp_customize) {
        $wp_customize->add_setting($id, [
            'default' => $default,
            'transport' => 'postMessage', // живой превью
            'sanitize_callback' => 'sanitize_hex_color'
        ]);
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $id, [
            'label' => $label,
            'section' => 'home_colors_section'
        ]));
    };

    $add_color('home_color_border', 'Цвет границ (--border)', '#e8e8e8');
    $add_color('home_color_green', 'Акцентный цвет (--green)', '#16a34a');
    $add_color('home_color_card_bg', 'Фон карточки (--card-bg)', '#ffffff');
    $add_color('home_hero_start', 'Hero — цвет начала градиента', '#000000');
    $add_color('home_hero_end', 'Hero — цвет конца градиента', '#000000');
    $add_color('home_promo_overlay', 'Промо — цвет оверлея', '#000000');
    $add_color('home_btn_bg', 'Кнопка — фон', '#16a34a');
    $add_color('home_btn_text', 'Кнопка — текст', '#ffffff');

    // прозрачности — простые текстовые поля (0..1). Можно заменить на number control.
    $wp_customize->add_setting('home_hero_alpha', [
        'default' => '0.15',
        'transport' => 'postMessage',
        'sanitize_callback' => 'wp_kses_post'
    ]);
    $wp_customize->add_control('home_hero_alpha', [
        'label' => 'Hero — прозрачность градиента (0 - 1)',
        'section' => 'home_colors_section',
        'type' => 'text'
    ]);

    $wp_customize->add_setting('home_promo_alpha', [
        'default' => '0.55',
        'transport' => 'postMessage',
        'sanitize_callback' => 'wp_kses_post'
    ]);
    $wp_customize->add_control('home_promo_alpha', [
        'label' => 'Промо — прозрачность оверлея (0 - 1)',
        'section' => 'home_colors_section',
        'type' => 'text'
    ]);

});

// Enqueue customize preview script (использует wp.customize API)
add_action('customize_preview_init', function() {
    wp_enqueue_script(
        'theme-customize-preview',
        get_template_directory_uri() . '/assets/js/customize-preview.js',
        ['jquery', 'customize-preview'],
        null,
        true
    );
});

// === Метабокс: Цветовая схема для главной страницы ===
add_action('add_meta_boxes', function() {
    add_meta_box('home_colors_mb', 'Цветовая схема (Home)', 'render_home_colors_meta', 'page', 'side', 'default');
});

function render_home_colors_meta($post) {
    wp_nonce_field('home_meta_nonce', 'home_meta_nonce_field');

    // поля + значения по умолчанию
    $defaults = [
        '_home_color_border' => '#e8e8e8',
        '_home_color_green'  => '#16a34a',
        '_home_color_card_bg'=> '#ffffff',
        '_home_hero_start'   => '#000000',
        '_home_hero_end'     => '#000000',
        '_home_hero_alpha'   => '0.15', // прозрачность градиента
        '_home_promo_overlay'=> '#000000',
        '_home_promo_alpha'  => '0.55',
        '_home_btn_bg'       => '#16a34a',
        '_home_btn_text'     => '#ffffff',
    ];
    foreach ($defaults as $key => $def) {
        ${$key} = get_post_meta($post->ID, $key, true) ?: $def;
    }

    // вывод полей
    echo '<p><label>Цвет границ (--border)</label><br>';
    echo '<input type="color" name="_home_color_border" value="'.esc_attr($_home_color_border).'" style="width:100%"></p>';

    echo '<p><label>Акцентный цвет (--green)</label><br>';
    echo '<input type="color" name="_home_color_green" value="'.esc_attr($_home_color_green).'" style="width:100%"></p>';

    echo '<p><label>Фон карточки (--card-bg)</label><br>';
    echo '<input type="color" name="_home_color_card_bg" value="'.esc_attr($_home_color_card_bg).'" style="width:100%"></p>';

    echo '<hr><h4>Hero (градиент)</h4>';
    echo '<p><label>Цвет начала градиента</label><br>';
    echo '<input type="color" name="_home_hero_start" value="'.esc_attr($_home_hero_start).'" style="width:100%"></p>';

    echo '<p><label>Цвет конца градиента</label><br>';
    echo '<input type="color" name="_home_hero_end" value="'.esc_attr($_home_hero_end).'" style="width:100%"></p>';

    echo '<p><label>Прозрачность градиента (0 - 1)</label><br>';
    echo '<input type="text" name="_home_hero_alpha" value="'.esc_attr($_home_hero_alpha).'" style="width:100%" placeholder="0.15"></p>';

    echo '<hr><h4>Промо-оверлей</h4>';
    echo '<p><label>Цвет оверлея</label><br>';
    echo '<input type="color" name="_home_promo_overlay" value="'.esc_attr($_home_promo_overlay).'" style="width:100%"></p>';

    echo '<p><label>Прозрачность оверлея (0 - 1)</label><br>';
    echo '<input type="text" name="_home_promo_alpha" value="'.esc_attr($_home_promo_alpha).'" style="width:100%" placeholder="0.55"></p>';

    echo '<hr><h4>Кнопки</h4>';
    echo '<p><label>Фон кнопки</label><br>';
    echo '<input type="color" name="_home_btn_bg" value="'.esc_attr($_home_btn_bg).'" style="width:100%"></p>';

    echo '<p><label>Цвет текста кнопки</label><br>';
    echo '<input type="color" name="_home_btn_text" value="'.esc_attr($_home_btn_text).'" style="width:100%"></p>';
}

// helper: сохранить
add_action('save_post', 'save_home_colors_meta');
function save_home_colors_meta($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['home_meta_nonce_field']) || !wp_verify_nonce($_POST['home_meta_nonce_field'], 'home_meta_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $keys = [
        '_home_color_border',
        '_home_color_green',
        '_home_color_card_bg',
        '_home_hero_start',
        '_home_hero_end',
        '_home_hero_alpha',
        '_home_promo_overlay',
        '_home_promo_alpha',
        '_home_btn_bg',
        '_home_btn_text'
    ];
    foreach ($keys as $k) {
        if (isset($_POST[$k])) {
            update_post_meta($post_id, $k, sanitize_text_field($_POST[$k]));
        }
    }
}


// === Добавить в functions.php ===

// Поддержки темы + меню
add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus([
        'primary' => 'Главное меню',
        'footer'  => 'Футер'
    ]);
});

// Подключение Tailwind CDN и шрифтов Google (для быстрого прототипа)
add_action('wp_enqueue_scripts', function() {
    // Google Fonts
    wp_enqueue_style('theme-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap', [], null);
    // Tailwind CDN (demo)
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', [], null, false);
    // Твой основной фронт-скрипт (если надо) — не обязателен
    // wp_enqueue_script('theme-main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
});

// === Metaboxes для главной страницы (слайды и промо) ===

// Добавляем метабоксы
add_action('add_meta_boxes', function() {
    add_meta_box('home_slides_mb', 'Главный слайдер (3 слайда)', 'render_home_slides_meta', 'page', 'normal', 'high');
    add_meta_box('home_promos_mb', 'Промо-блоки (3 блока)', 'render_home_promos_meta', 'page', 'normal', 'high');
});

// Рендер метабоксов
function render_home_slides_meta($post) {
    wp_nonce_field('home_meta_nonce', 'home_meta_nonce_field');

    for ($i = 1; $i <= 3; $i++) {
        $title = get_post_meta($post->ID, "home_slide_title_{$i}", true);
        $subtitle = get_post_meta($post->ID, "home_slide_sub_{$i}", true);
        $img_id = get_post_meta($post->ID, "home_slide_img_{$i}", true);
        $img_url = $img_id ? wp_get_attachment_image_url($img_id, 'medium') : '';
        echo "<h4>Слайд {$i}</h4>";
        echo '<p><label>Заголовок</label><br>';
        echo '<input style="width:100%" type="text" name="home_slide_title_' . $i . '" value="' . esc_attr($title) . '"></p>';
        echo '<p><label>Подзаголовок</label><br>';
        echo '<textarea style="width:100%" name="home_slide_sub_' . $i . '">' . esc_textarea($subtitle) . '</textarea></p>';
        echo '<p><label>Изображение (ID или выбрать)</label><br>';
        echo '<input style="width:70%;display:inline-block;margin-right:6px" type="text" id="home_slide_img_' . $i . '" name="home_slide_img_' . $i . '" value="' . esc_attr($img_id) . '">';
        echo '<button class="button select-image" data-target="#home_slide_img_' . $i . '">Выбрать</button>';
        if ($img_url) {
            echo '<div style="margin-top:8px"><img src="' . esc_url($img_url) . '" style="max-width:200px;height:auto"></div>';
        }
        echo '<hr>';
    }
}

function render_home_promos_meta($post) {
    for ($i = 1; $i <= 3; $i++) {
        $title = get_post_meta($post->ID, "home_promo_title_{$i}", true);
        $category = get_post_meta($post->ID, "home_promo_cat_{$i}", true);
        $img_id = get_post_meta($post->ID, "home_promo_img_{$i}", true);
        $img_url = $img_id ? wp_get_attachment_image_url($img_id, 'medium') : '';
        echo "<h4>Промо {$i}</h4>";
        echo '<p><label>Категория (маленький текст)</label><br>';
        echo '<input style="width:100%" type="text" name="home_promo_cat_' . $i . '" value="' . esc_attr($category) . '"></p>';
        echo '<p><label>Заголовок</label><br>';
        echo '<input style="width:100%" type="text" name="home_promo_title_' . $i . '" value="' . esc_attr($title) . '"></p>';
        echo '<p><label>Изображение (ID или выбрать)</label><br>';
        echo '<input style="width:70%;display:inline-block;margin-right:6px" type="text" id="home_promo_img_' . $i . '" name="home_promo_img_' . $i . '" value="' . esc_attr($img_id) . '">';
        echo '<button class="button select-image" data-target="#home_promo_img_' . $i . '">Выбрать</button>';
        if ($img_url) {
            echo '<div style="margin-top:8px"><img src="' . esc_url($img_url) . '" style="max-width:200px;height:auto"></div>';
        }
        echo '<hr>';
    }
}

// Сохранение
add_action('save_post', function($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['home_meta_nonce_field']) || !wp_verify_nonce($_POST['home_meta_nonce_field'], 'home_meta_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // Slides
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["home_slide_title_{$i}"])) update_post_meta($post_id, "home_slide_title_{$i}", sanitize_text_field($_POST["home_slide_title_{$i}"]));
        if (isset($_POST["home_slide_sub_{$i}"])) update_post_meta($post_id, "home_slide_sub_{$i}", sanitize_textarea_field($_POST["home_slide_sub_{$i}"]));
        if (isset($_POST["home_slide_img_{$i}"])) update_post_meta($post_id, "home_slide_img_{$i}", intval($_POST["home_slide_img_{$i}"]));
    }
    // Promos
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["home_promo_title_{$i}"])) update_post_meta($post_id, "home_promo_title_{$i}", sanitize_text_field($_POST["home_promo_title_{$i}"]));
        if (isset($_POST["home_promo_cat_{$i}"])) update_post_meta($post_id, "home_promo_cat_{$i}", sanitize_text_field($_POST["home_promo_cat_{$i}"]));
        if (isset($_POST["home_promo_img_{$i}"])) update_post_meta($post_id, "home_promo_img_{$i}", intval($_POST["home_promo_img_{$i}"]));
    }
});

// Admin JS: media uploader for image selection
add_action('admin_enqueue_scripts', function($hook) {
    // только на редакторе страницы
    if ($hook !== 'post.php' && $hook !== 'post-new.php') return;
    wp_enqueue_media();
    wp_enqueue_script('home-admin-media', get_template_directory_uri() . '/assets/js/home-admin-media.js', ['jquery'], null, true);
});


add_action('after_setup_theme', function() {
    // Check if pages have already been created
    if (!get_option('sportgear_pages_created')) {
        // Define pages to create
        $pages = [
            [
                'post_title'   => 'Главная',
                'post_content' => 'Редактируйте этот контент через стандартный редактор. Это главная страница вашего сайта.',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'meta_input'   => [
                    '_wp_page_template' => 'home-exact-copy.php', // Assign custom template
                ],
                'is_front_page' => true, // Mark as front page
            ],
            [
                'post_title'   => 'О нас',
                'post_content' => 'Это страница "О нас". Добавьте информацию о вашей компании через редактор WordPress.',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'meta_input'   => [
                    '_wp_page_template' => 'default', // Use default template or another custom one
                ],
            ],
            [
                'post_title'   => 'Каталог',
                'post_content' => 'Это страница каталога. Добавьте описание или настройте отображение товаров.',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'meta_input'   => [
                    '_wp_page_template' => 'default',
                ],
            ],
        ];

        foreach ($pages as $page) {
            $page_id = wp_insert_post($page);

            if (!is_wp_error($page_id)) {
                // Set as front page if specified
                if (isset($page['is_front_page']) && $page['is_front_page']) {
                    update_option('show_on_front', 'page');
                    update_option('page_on_front', $page_id);
                }
            }
        }

        // Mark pages as created
        update_option('sportgear_pages_created', 1);
    }
}, 20);










new SportGear();
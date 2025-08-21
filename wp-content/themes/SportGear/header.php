<?php
$categories = get_terms(array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
    'parent' => 0
));
$contacts = get_option('sportgear_contacts', []);
?>

<!Doctype html>
<html <?php language_attributes(); ?> class="mt-0 h-full">

<head>
    <meta charset="<?php echo bloginfo("charset") ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo the_title() ?></title>
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="653Uw5hF4Gz90FacOs9UaN3mkRmC4dKJNnIBkdQFaoM" />
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        ul { list-style: none; }
        a { color: inherit; text-decoration: none; }
        button { font: inherit; cursor: pointer; border: 0; background: transparent; }

        /* Переменные, используемые в хедере */
        :root {
            --white: #ffffff;
            --black: #222222;
            --muted: #6b6b6b;
            --accent-start: #2fa336;
            --accent-end: #166b1b;
            --container-width: 1300px;
            --radius: 6px;
            --shadow: rgba(0,0,0,0.08);
        }

        /* Контейнер (центровка) — используется в header и nav */
        .container {
            width: var(--container-width);
            margin: 0 auto;
        }

        /* ==========================
           TOP UTILITY
           --------------------------
           Верхняя утилити-панель (Регистрация / Войти)
           ========================== */
        .top-utility {
            background: transparent;
            padding: 8px 0;
        }
        .top-utility__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .top-utility .util-link {
            color: var(--muted);
            font-size: 13px;
            margin-left: 10px;
        }
        .top-utility .util-delim { color: var(--muted); margin: 0 6px; }

        /* ==========================
           HEADER MAIN
           --------------------------
           Основная часть хедера (логотип, поиск, контакты)
           ========================== */
        .header-main { /* wrapper для основной части; можно задавать фон/отступы тут */ }

        /* Колонки хедера */
        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding-top: 16px;
            padding-bottom: 14px;
        }

        /* Блоки: left | center | right */
        .header-left,
        .header-center,
        .header-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        /* LEFT — логотип + выбор филиала */
        .header-left {
            min-width: 260px;
            align-items: center;
        }
        .site-logo svg,
        .site-logo img {
            height: 58px;
            display: block;
        }
        .branch-select { display: flex; flex-direction: column; gap: 3px; }
        .branch-label { font-size: 12px; color: var(--muted); }
        .branch-current {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--black);
            font-weight: 600;
            font-size: 16px;
        }

        /* CENTER — поиск */
        .header-center {
            flex: 1 1 520px;
            justify-content: center;
        }
        .search-form {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 720px;
            gap: 8px;
        }
        .search-input {
            flex: 1;
            border-radius: 8px;
            padding: 11px 14px;
            border: 1px solid rgba(0,0,0,0.08);
            color: var(--black);
            font-size: 15px;
            background: #f6f8f6;
        }
        .search-input::placeholder { color: #9aa19a; }
        .search-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border-radius: 8px;
            background: transparent;
            border: 1px solid rgba(0,0,0,0.06);
        }

        /* RIGHT — телефон + иконки действий */
        .header-right {
            min-width: 260px;
            justify-content: flex-end;
        }
        .contact-info { text-align: right; margin-right: 12px; }
        .contact-label { font-size: 12px; color: var(--muted); }
        .contact-number {
            font-size: 18px;
            font-weight: 700;
            color: var(--black);
        }
        .action-icons { display: flex; gap: 8px; align-items: center; }
        .icon-btn {
            height: 36px;
            min-width: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: #ffffff;
            border: 1px solid rgba(0,0,0,0.06);
            color: var(--black);
            font-size: 14px;
        }

        /* ==========================
           NAV (нижняя зелёная панель)
           ========================== */
        .header-nav { /* wrapper для nav — если нужен отступ между хедером и панелью */ }
        .site-nav {
            background: linear-gradient(180deg, var(--accent-start), var(--accent-end));
            padding: 10px 0;
            box-shadow: 0 6px 18px var(--shadow);
        }
        .nav-list {
            display: flex;
            gap: 8px;
            align-items: center;
            justify-content: space-between;
        }
        .nav-item { flex: 1 1 auto; display: flex; justify-content: center; }
        .nav-link {
            color: var(--white);
            font-weight: 800;
            font-size: 16px;
            padding: 12px 10px;
            text-align: center;
            width: 100%;
        }
        .nav-link--active { background: rgba(0,0,0,0.12); border-radius: 6px; }

        /* ==========================
           HEADER: Responsive
           ========================== */
        @media (max-width: 980px) {
            .branch-select { display: none; }
            .header-center { order: 3; width: 100%; margin-top: 10px; }
            .header-right .contact-info { display: none; }
            .nav-list { display: none; flex-direction: column; padding: 8px; border-radius: 8px; }
            .nav-open .nav-list { display: flex; }
        }
    </style>
</head>

<body class="h-full flex flex-col">
<header class="site-header" role="banner">
    <div class="header-main">            
        <div class="container">
            <div class="header-container">
                <div class="header-left">
                    <div class="site-logo" aria-hidden="false">
                        <a href="<?php echo home_url() ?>">
                            <?php
                            $logo = wp_get_attachment_image_src(get_theme_mod("custom_logo"), "full");
                            ?>
                            <?php if (!empty($logo)) : ?>
                                <img src="<?php echo esc_url($logo[0]) ?>" alt="<?php echo esc_attr(get_bloginfo("name")) ?>"
                                     class="w-auto h-16">
                            <?php else: ?>
                                <span class="self-center text-2xl font-semibold whitespace-nowrap"><?php echo esc_html(get_bloginfo("name")) ?></span>
                            <?php endif; ?>
                        </a>
                    </div>

                    <!-- <div class="branch-select">
                        <div class="branch-current" title="Текущий филиал">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" aria-hidden>
                                <path d="M12 2v20M5 9l7 7 7-7" stroke="#333" stroke-width="1.6" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <span>Бишкек</span>
                        </div>
                    </div> -->
                </div>

                <!-- CENTER: search -->
                <div class="header-center">
                    <form class="search-form" role="search" aria-label="Поиск по сайту" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <input class="search-input" type="search" name="s" placeholder="Поиск" aria-label="Поиск" id="product-search" />
                        <input type="hidden" name="post_type" value="product" /> <!-- Для поиска по продуктам WooCommerce -->
                        <button class="search-button" type="submit" aria-label="Поиск" id="search-button">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden>
                                <path d="M21 21l-4.35-4.35" stroke="#2a2a2a" stroke-width="1.6" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <circle cx="11" cy="11" r="6" stroke="#2a2a2a" stroke-width="1.6" fill="none"/>
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- RIGHT: phone + icons -->
                <div class="header-right">
                    <div class="contact-info">
                        <?php if (count($contacts) <= 1) : ?>
                            <a href="<?php echo esc_url("tel:" . formatting_phone($contacts[0]["contact"])) ?>"
                               class="flex items-center text-gray-600 text-16px font-bold leading-8" target="_blank">
                                <div class="contact-number"> <?php echo esc_html($contacts[0]["contact"]) ?> </div>
                            </a>
                        <?php elseif (count($contacts) > 1) : ?>
                            <div class="contact-number" id="contacts-button">
                                <?php echo esc_html($contacts[0]["contact"]) ?>
                            </div>
                            <div id="contacts-dropdown" class="absolute left-0 top-full bg-white border border-gray-300 w-full hidden z-50">
                                <ul>
                                    <?php foreach ($contacts as $contact) : ?>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer group/contact">
                                            <a href="<?php echo ($contact["description"] == "whatsapp"
                                                ? "https://wa.me/" . esc_attr(formatting_phone($contact["contact"]))
                                                : "tel:" . esc_attr(formatting_phone($contact["contact"]))) ?>"
                                               class="flex gap-[10px] items-center text-sm" target="_blank">
                                                <?php if (!empty($contact["icon"])) : ?>
                                                    <img src="<?php echo esc_attr($contact["icon"]) ?>" alt="icon"
                                                         class="w-[16px] h-[24px]">
                                                <?php else: ?>
                                                    <?php
                                                    echo ($contact["description"] == "whatsapp" ?
                                                        svg_whatsapp("fill-current group-hover/contact:fill-[#15b552] transition-colors") :
                                                        svg_phone_call("fill-current group-hover/contact:animate-shake"));
                                                    ?>
                                                <?php endif; ?>
                                                <span> <?php echo esc_html($contact["contact"]) . (!empty($contact["description"]) ? ($contact["description"] == "whatsapp" ? "" : " - " . esc_html($contact["description"])) : "") ?> </span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="action-icons">
                        <!-- <button class="icon-btn" title="Избранное">♡</button> -->
                        <a href="<?php echo wc_get_cart_url(); ?>" class="icon-btn relative" title="Корзина">
                            🛒
                            <span class="absolute top-0 right-0 -mt-2 -mr-2 bg-red-500 text-white text-xs rounded-full px-1.5 cart-count">
                                <?php echo WC()->cart->get_cart_contents_count(); ?>
                            </span>
                        </a>
                        <!-- <button class="icon-btn" title="Профиль">👤</button> -->
                    </div>
                </div>

            </div> <!-- /.header-container -->
        </div> <!-- /.container -->
    </div> <!-- /.header-main -->

    <!-- ОБЁРТКА #2: навигация (зелёная панель) -->
    <div class="header-nav">             <!-- <- новая обёртка для nav -->
        <nav class="site-nav" role="navigation" aria-label="Главное меню">
            <div class="container">
                <ul class="nav-list">
                    <?php foreach ($categories as $item) : ?>
                        <?php $subcategories = get_terms(array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            'parent' => $item->term_id,
                        )); ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (is_tax('product_cat', $item->term_id) ? 'nav-link--active' : ''); ?>" href="<?php echo esc_url(get_term_link($item)) ?>">
                                <?php echo esc_html($item->name) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </div> <!-- /.header-nav -->
</header>

<div class="mobile-menu w-full border-r border-black fixed top-0 left-0 h-full z-50 bg-white hidden" id="mobile-menu">
    <div class="flex items-center justify-between p-4 border-b border-gray-200">
        <span class="text-lg font-bold text-gray-800">МЕНЮ</span>
        <button id="close-menu" class="text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <nav class="flex flex-col p-4">
        <?php foreach ($categories as $item) : ?>
            <?php
            // Получаем подкатегории
            $subcategories = get_terms(array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'parent' => $item->term_id,
            ));
            ?>
            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                <a href="<?php echo esc_url(get_term_link($item)) ?>" class="text-gray-700 text-lg font-medium uppercase">
                    <?php echo esc_html($item->name) ?>
                </a>
                <?php if (!empty($subcategories)) : ?>
                    <button class="toggle-submenu">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                <?php endif; ?>
            </div>
            <!-- Submenu (initially hidden) -->
            <?php if (!empty($subcategories)) : ?>
                <div class="submenu hidden pl-4">
                    <?php foreach ($subcategories as $subcategory) : ?>
                        <a href="<?php echo esc_url(get_term_link($subcategory)) ?>" class="block py-2 text-gray-600 hover:text-blue-600">
                            <?php echo esc_html($subcategory->name) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>
</div>
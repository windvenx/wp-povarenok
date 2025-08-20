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
</head>



<body class="h-full flex flex-col">
<header class="py-3 border-b border-gray-200">
    <div class="container relative">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
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
            <div class="hidden lg:relative lg:flex lg:items-center lg:border lg:border-gray-300 lg:px-2 lg:py-1 lg:w-[44%]">
                <input type="text" placeholder="Поиск товара по каталогу"
                       class="flex-grow border-none outline-none px-2" id="product-search" />
                <button class="ml-2" id="search-button">
                    <i class="material-icons block my-auto">search</i>
                </button>
            </div>
            <div class="lg:relative lg:w-[20%] hidden lg:block">
                <?php if (count($contacts) <= 1) : ?>
                    <a href="<?php echo esc_url("tel:" . formatting_phone($contacts[0]["contact"])) ?>"
                       class="flex items-center text-gray-600 text-16px font-bold leading-8" target="_blank">
                        <i class="material-icons mr-2">phone</i>
                        <span style="font-size:15px;"> <?php echo esc_html($contacts[0]["contact"]) ?> </span>
                    </a>
                <?php elseif (count($contacts) > 1) : ?>
                    <a href="#" id="contacts-button"
                       class="flex items-center text-gray-600 text-16px font-bold leading-8">
                        <i class="material-icons mr-2">phone</i>
                        <span style="font-size:15px;"> <?php echo esc_html($contacts[0]["contact"]) ?> </span>
                        <i class="material-icons ml-2">arrow_drop_down</i>
                    </a>
                    <div id="contacts-dropdown"
                         class="absolute left-0 top-full bg-white border border-gray-300 w-full hidden z-50">
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
            <div class="flex items-center gap-[10px]">
                <div class="lg:hidden">
                    <button class="navbar-burger flex items-center text-black p-3" id="burger-button">
                        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <a href="<?php echo wc_get_cart_url(); ?>" class="relative flex items-center text-gray-700 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <span class="absolute top-0 right-0 -mt-2 -mr-2 bg-red-500 text-white text-xs rounded-full px-1.5 cart-count">
                            <?php echo WC()->cart->get_cart_contents_count(); ?>
                        </span>
                </a>


            </div>
        </div>
        <nav class=" hidden lg:block lg:mt-[10px]">
            <ul class="flex gap-[30px]">
                <?php foreach ($categories as $item) : ?>
                    <?php $subcategories = get_terms(array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        'parent' => $item->term_id,
                    )); ?>
                    <li class="group/list">
                        <a href="<?php echo esc_url(get_term_link($item)) ?>"
                           class="text-gray-700 hover:text-blue-600 text-sm font-medium uppercase"> <?php echo esc_html($item->name) ?></a>
                        <?php if (!empty($subcategories)) : ?>
                            <div class="absolute top-full left-0 w-full z-50 mx-auto bg-white shadow-lg rounded hidden group-hover/list:block">
                                <div class="p-4">
                                    <ul class="py-2 flex gap-[50px]">
                                        <?php foreach ($subcategories as $subcategory) : ?>
                                            <?php $thumbnail_id = get_term_meta($subcategory->term_id, 'thumbnail_id', true); ?>
                                            <li class="text-gray-600">
                                                <a href="<?php echo esc_url(get_term_link($subcategory)) ?>"
                                                   class="text-gray-700 hover:text-blue-600 text-sm font-medium uppercase">
                                                    <?php if ($thumbnail_id) : ?>
                                                        <?php $subcategory_image = wp_get_attachment_image_src($thumbnail_id, 'thumbnail')[0] ?>
                                                        <img src="<?php echo esc_url($subcategory_image) ?>" alt="<?php echo esc_attr($subcategory->name) ?>">
                                                    <?php endif ?>
                                                    <?php echo esc_html($subcategory->name) ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
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

</header>
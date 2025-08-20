<?php

get_header();

?>


<main class="flex-auto flex items-center justify-center">
    <div class="container text-center px-4 py-16">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Ты попал не туда</h1>
        <p class="text-lg text-gray-600 mb-8">Похоже, этой страницы не существует. Давайте вернемся к спортивному выбору!</p>
        <div class="flex justify-center gap-4">
            <a href="<?php echo esc_url(home_url()) ?>" class="px-6 py-3 bg-red-700 text-white rounded-lg hover:bg-red-800 transition">
                На главную
            </a>
            <a href="<?php echo esc_url(home_url("/shop")) ?>" class="px-6 py-3 bg-red-700 text-white rounded-lg hover:bg-red-800 transition">
                В каталог товаров
            </a>
        </div>
    </div>
</main>


<?php get_footer(); ?>

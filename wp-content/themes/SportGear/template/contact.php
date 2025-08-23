<?php
/*
Template Name: Контакты (Tailwind) — только Company/City/Contacts + карта внизу (контейнер 1300px)
Template Post Type: page
*/

get_header();
?>

<!-- Tailwind CDN (прототип) -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Локальный стиль для контейнера 1300px -->
<style>
  .max-w-1300 { max-width: 1550px; margin-left: auto; margin-right: auto; }
</style>

<?php
// Данные (оставлены только необходимые поля)
$company_name = 'ООО "Торговый дом Пищевые технологии"';
$city = 'г. Бишкек';
$address = "ул. Лермонтова 12, г. Бишкек";
$additional_info = 'Реквизиты и доп. информация при необходимости.';
?>

<main class="bg-white text-black min-h-screen">
  <section class="max-w-1300 mx-auto px-6 pt-20 pb-10">
    <div class="flex items-center justify-between">
      <div>
        <h1 class="mt-6 text-5xl md:text-6xl font-extrabold leading-none">КОНТАКТЫ</h1>
      </div>
    </div>
  </section>

  <!-- Верхняя секция: 3 блока (Company, City/Address, Contacts) -->
  <section class="border-t border-gray-200">
    <div class="max-w-1300 mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-6">

      <!-- Company -->
      <div class="p-6 border rounded-lg shadow-sm">
        <div class="text-xs text-gray-500">Компания</div>
        <div class="mt-2 text-lg font-semibold"><?php echo esc_html($company_name); ?></div>
        <div class="mt-4 text-sm text-gray-600"><?php echo esc_html($additional_info); ?></div>
      </div>

      <!-- City / Address -->
      <div class="p-6 border rounded-lg shadow-sm">
        <div class="text-xs text-gray-500">Город</div>
        <div class="mt-2 text-lg font-semibold"><?php echo esc_html($city); ?></div>
        <div class="text-xs text-gray-500 mt-4">Адрес</div>
        <div class="mt-2 text-sm text-gray-700"><?php echo esc_html($address); ?></div>
      </div>

      <!-- Contacts (общая информация) — занимает всю ширину под двумя колонками -->
      <div class="md:col-span-2 p-6 border rounded-lg shadow-sm">
        <div class="text-xs text-gray-500">Контакты</div>
        <div class="mt-2 text-sm text-gray-700">Если нужно добавить формы обратной связи или ссылки — разместим здесь. Телефоны и e-mail удалены по вашему запросу.</div>
      </div>

    </div>
  </section>

  <!-- Большая карта внизу на всю ширину контейнера (1300px) -->
  <section class="mt-8">
    <div class="w-full bg-white">
      <div class="max-w-1300 mx-auto px-6">
        <div class="border rounded-lg overflow-hidden">
          <div class="w-full h-[520px]">
            <!-- Замените src на ваш реальный embed Google/Yandex -->
            <iframe class="w-full h-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
              src="https://yandex.ru/map-widget/v1/?um=constructor%3Aplaceholder&source=constructor" aria-label="big-map"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
?>
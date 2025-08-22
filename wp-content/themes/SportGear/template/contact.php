<?php
/* Template Name: ContactsPage */
// index.php — одностраничный PHP шаблон с Tailwind CSS
// Инструкция: поместите этот файл в папку на локальном PHP-сервере (например, XAMPP или встроенный PHP: php -S localhost:8000)
// Положите изображения в /assets/img/ или поправьте ссылки на реальные изображения.
// Этот файл генерирует статическую копию главной страницы сайта https://zavod-pt.kg с использованием Tailwind CSS.

$phone = '+996 (555) 44 99 77';
$city = 'Бишкек';
$address_office = 'г. Бишкек, ул. Лермонтова 12 (напротив рынка Таатан)';
$address_warehouse = 'г. Бишкек, ул. Лермонтова 12а';

$menu = [
    'Оборудование' => [
        'Нейтральное оборудование','Тепловое оборудование','Холодильное оборудование','Электромеханическое оборудование','Хлебопекарное и кондитерское оборудование','Барное оборудование'
    ],
    'Посуда и инвентарь' => ['Посуда для японской кухни','Инвентарь барный','Инвентарь кондитерский','Инвентарь кухонный'],
    'Упаковка' => ['Контейнеры','Пакеты ПНД','Пленки, скотч','Вакуумные пакеты'],
    'Мебель' => ['Мебель офисная','Мебель для общепита','Постельное белье'],
    'Проф. химия' => ['Моющие средства','Дезинфекция']
];

// Пример карточек товаров/решений (замените реальными данными)
$products = [];
for ($i=1; $i<=8; $i++) {
    $products[] = [
        'title' => "Товар №$i",
        'price' => rand(5000, 150000) . ' сом',
        'img' => "https://via.placeholder.com/420x300?text=Product+$i",
        'desc' => 'Краткое описание продукта, основные характеристики и назначение.'
    ];
}
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Пищевые технологии — Главная</title>
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Небольшие кастомы */
    .bg-brand { background-color: #19552B; }
    .text-brand { color: #19552B; }
  </style>
</head>
<body class="font-sans antialiased text-slate-900">

<!-- Top bar -->

<!-- Hero -->
<section class="bg-[url('https://via.placeholder.com/1600x500?text=Hero+Image')] bg-cover bg-center">
  <div class="backdrop-brightness-75">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
      <h1 class="text-white text-4xl font-extrabold">Оборудование и решения для общепита</h1>
      <p class="text-white mt-4 max-w-2xl">Проектирование, поставка, монтаж и сервисное обслуживание профессионального оборудования — от кафе до промышленных цехов.</p>
      <div class="mt-6 flex gap-3">
        <a href="#catalog" class="bg-white text-brand px-4 py-2 rounded-md font-semibold">Смотреть каталог</a>
        <a href="#contacts" class="border border-white text-white px-4 py-2 rounded-md">Контакты</a>
      </div>
    </div>
  </div>
</section>

<!-- Promo blocks / Services -->
<section class="py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="p-6 border rounded">
        <h3 class="font-semibold">Проектирование и комплексное оснащение</h3>
        <p class="text-sm mt-2">Полный цикл: от проекта до запуска.</p>
      </div>
      <div class="p-6 border rounded">
        <h3 class="font-semibold">Сервис и гарантия</h3>
        <p class="text-sm mt-2">Официальный сервис и оригинальные запчасти.</p>
      </div>
      <div class="p-6 border rounded">
        <h3 class="font-semibold">Обучение и мастер-классы</h3>
        <p class="text-sm mt-2">Обучаем работе на оборудовании и повышаем квалификацию.</p>
      </div>
    </div>
  </div>
</section>

<!-- Catalog / Products -->
<section id="catalog" class="py-12 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-bold">Популярные товары</h2>
      <a href="#" class="text-sm underline">Смотреть все</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php foreach ($products as $p): ?>
      <div class="bg-white border rounded overflow-hidden">
        <img src="<?=htmlspecialchars($p['img'])?>" alt="<?=htmlspecialchars($p['title'])?>" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="font-medium"><?=htmlspecialchars($p['title'])?></h3>
          <p class="text-sm text-slate-600 mt-2"><?=htmlspecialchars($p['desc'])?></p>
          <div class="mt-4 flex items-center justify-between">
            <div class="font-semibold"><?=htmlspecialchars($p['price'])?></div>
            <a href="#" class="text-sm text-brand underline">Подробнее</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Главная: Адреса и контакты (Tailwind + PHP) -->
<main class="py-12 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <section aria-label="Адреса и контакты" class="bg-transparent">
      <div class="mb-6 text-sm text-gray-500">Главная — Адреса и контакты</div>
      <h1 class="text-3xl sm:text-4xl font-extrabold mb-8">Адреса и контакты</h1>

      <!-- Блоки: 1) Адрес и телефоны, 2) Доп. информация, 3) Кнопки/соцсети -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- 1. Адрес и телефоны -->
        <div class="col-span-1">
          <div class="bg-white rounded-lg shadow p-6">
            <div class="text-xl font-bold mb-3">Офис г. Бишкек</div>

            <div class="text-sm font-semibold text-gray-500">АДРЕС</div>
            <div class="mt-1 text-gray-700"><?=htmlspecialchars($address_office)?> (напротив рынка Таатан)</div>

            <div class="mt-4 text-sm font-semibold text-gray-500">ТЕЛЕФОНЫ И E‑MAIL</div>

            <div class="mt-3 space-y-3">
              <div class="p-3 rounded-lg bg-white shadow-sm">
                <div class="font-semibold text-gray-600">Ханбабаева Саида</div>
                <div class="font-extrabold text-gray-800">+996 (555) 44 99 77</div>
                <a class="text-sm text-gray-500" href="mailto:kg3@zavod-pt.ru">kg3@zavod-pt.ru</a>
              </div>

              <div class="p-3 rounded-lg bg-white shadow-sm">
                <div class="font-semibold text-gray-600">Байбеков Вадим</div>
                <div class="font-extrabold text-gray-800">+996 (500) 44 99 77</div>
                <a class="text-sm text-gray-500" href="mailto:kg6@zavod-pt.ru">kg6@zavod-pt.ru</a>
              </div>

              <div class="p-3 rounded-lg bg-white shadow-sm">
                <div class="font-semibold text-gray-600">Шеренкова Кристина (отд. посуды, инвентаря)</div>
                <div class="font-extrabold text-gray-800">+996 (702) 44 99 77</div>
                <a class="text-sm text-gray-500" href="mailto:kg7@zavod-pt.ru">kg7@zavod-pt.ru</a>
              </div>

              <div class="p-3 rounded-lg bg-white shadow-sm">
                <div class="font-semibold text-gray-600">Отдел продаж</div>
                <div class="font-extrabold text-gray-800">+996 (312) 97-35-70</div>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. Дополнительная информация -->
        <div class="col-span-1">
          <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-bold mb-3">Дополнительная информация</h3>
            <p class="text-sm text-gray-600">ЧАСЫ РАБОТЫ: с 9:00 до 17:30, выходные: суббота, воскресенье.</p>
            <p class="text-sm text-gray-600 mt-3">Адрес склада: г. Бишкек, ул. Лермонтова 12а</p>

            <div class="mt-6">
              <h4 class="font-semibold mb-2">Реквизиты</h4>
              <p class="text-sm text-gray-600">ООО "Торговый дом Пищевые технологии"</p>
              <p class="text-sm text-gray-600">Юридический адрес: Кыргызская Республика, г. Бишкек, ул. Лермонтова 12</p>
              <p class="text-sm text-gray-600">Фактический адрес: Кыргызская Республика, г. Бишкек, ул. Лермонтова 12</p>
              <p class="text-sm text-gray-600">Тел./факс: +996 (555) 44 99 77, +996 (702) 44 99 77</p>
            </div>

            <div class="mt-6">
              <a href="mailto:kg3@zavod-pt.ru" class="inline-block bg-green-700 text-white px-4 py-2 rounded-md font-bold uppercase">НАПИСАТЬ СООБЩЕНИЕ</a>
            </div>
          </div>
        </div>

        <!-- 3. Кнопки / соцсети -->
        <div class="col-span-1">
          <div class="bg-white rounded-lg shadow p-6 flex flex-col gap-4">
            <div>
              <h4 class="font-semibold">Соцсети</h4>
              <div class="mt-3 flex gap-3">
                <a class="w-12 h-12 bg-white rounded shadow flex items-center justify-center">vk</a>
                <a class="w-12 h-12 bg-white rounded shadow flex items-center justify-center">rutube</a>
                <a class="w-12 h-12 bg-white rounded shadow flex items-center justify-center">ok</a>
              </div>
            </div>

            <div class="mt-4">
              <h4 class="font-semibold">Заказать</h4>
              <div class="mt-2 flex flex-col gap-2">
                <a class="inline-block bg-green-700 text-white px-4 py-2 rounded-md font-bold" href="#">Заказать звонок</a>
                <a class="inline-block border border-gray-200 px-4 py-2 rounded-md" href="#">Задать вопрос</a>
              </div>
            </div>

            <div class="mt-auto text-sm text-gray-500">Офис: <?=htmlspecialchars($address_office)?></div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- КАРТА: теперь на всю ширину контейнера (скачаная картинка) -->
  <div class="mt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="rounded-lg overflow-hidden shadow">
        <!-- Поменяйте src на assets/img/map-contacts.jpg после скачивания -->
        <img src="assets/img/map-contacts.jpg" alt="Карта - г. Бишкек, Лермонтова 12" class="w-full h-auto block">
      </div>
      <p class="text-sm text-gray-500 mt-2">Если хотите — скачайте карту по этой ссылке и поместите файл в <code>assets/img/map-contacts.jpg</code> для локальной поставки: <a href="https://staticmap.openstreetmap.de/staticmap.php?center=42.8735,74.574&zoom=15&size=1600x760&maptype=mapnik&markers=42.8735,74.574,lightblue1" class="underline">скачать карту (OpenStreetMap)</a></p>
    </div>
  </div>
</main>

<!-- Contacts / Footer -->
<footer id="contacts" class="bg-white border-t mt-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div>
        <h4 class="font-bold">Контакты</h4>
        <p class="mt-2">Телефон: <a href="tel:<?=htmlspecialchars($phone)?>" class="underline"><?=htmlspecialchars($phone)?></a></p>
        <p class="mt-1">Офис: <?=$address_office?></p>
        <p class="mt-1">Склад: <?=$address_warehouse?></p>
      </div>
      <div>
        <h4 class="font-bold">О компании</h4>
        <ul class="mt-2 space-y-1 text-sm">
          <li><a href="#" class="underline">О компании</a></li>
          <li><a href="#" class="underline">Проекты</a></li>
          <li><a href="#" class="underline">Карьера</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold">Подписка</h4>
        <p class="text-sm mt-2">Получайте новости и акции на почту.</p>
        <form class="mt-3 flex">
          <input type="email" placeholder="Ваш email" class="border rounded-l px-3 py-2 w-full">
          <button class="bg-brand text-white px-4 rounded-r">Подписаться</button>
        </form>
      </div>
    </div>

    <div class="mt-8 text-sm text-slate-500">©️ <?=date('Y')?> Пищевые технологии. Все права защищены.</div>
  </div>
</footer>

<!-- City modal (simple) -->
<div id="cityModal" class="hidden fixed inset-0 bg-black/40 flex items-center justify-center">
  <div class="bg-white rounded p-6 w-96">
    <h3 class="font-semibold">Ваш город</h3>
    <p class="mt-2">Текущий город: <strong><?=$city?></strong></p>
    <div class="mt-4 flex justify-end">
      <button onclick="document.getElementById('cityModal').classList.add('hidden')" class="px-4 py-2 border rounded">Закрыть</button>
    </div>
  </div>
</div>

</body>
</html>
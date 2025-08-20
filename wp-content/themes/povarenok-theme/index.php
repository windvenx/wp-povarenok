<?php
// index.php — главный файл темы (фоллбек)
get_header();
?>

<main class="site-main">
  <?php
  if ( is_front_page() || is_home() ) {
      // Для главной: если есть front-page.php, WP его возьмет автоматически,
      // но на всякий случай подключаем шаблонная часть
      get_template_part('templates/template', 'home'); // /wp-content/themes/тема/templates/template-home.php
  } elseif ( is_page() ) {
      // Для обычных страниц: WP автоматически использует page.php, но можно подключить часть
      get_template_part('templates/template', 'page');
  } elseif ( is_single() ) {
      get_template_part('templates/template', 'single');
  } else {
      // фоллбек для архива/поиска/404
      get_template_part('templates/template', 'loop');
  }
  ?>
</main>

<?php
get_footer();

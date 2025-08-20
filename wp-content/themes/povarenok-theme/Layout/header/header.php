<?php
// header.php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="Header">
    <div class="Container Header__inner">
      <div class="Header-left">
        <div class="logo" aria-hidden="true">
          <div class="logo-box">
            <?php
            // вывод кастомного логотипа, если задан
            if ( function_exists('the_custom_logo') && has_custom_logo() ) {
                the_custom_logo();
            } else {
                // запасной текстовый логотип
                ?>
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="logo-text"><?php bloginfo('name'); ?></a>
                <?php
            }
            ?>
          </div>
        </div>

        <?php if ( false ) : // в исходном HTML был город; если нужен - поставь true ?>
        <div class="Header-city" title="Город">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="opacity:.9;margin-right:2px">
            <path d="M12 11.5a3 3 0 100-6 3 3 0 000 6z" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M19.5 10.5c0 6.5-7.5 11.5-7.5 11.5S4.5 17 4.5 10.5a7.5 7.5 0 1115 0z" stroke="currentColor" stroke-width="1.1" fill="none"/>
          </svg>
          Бишкек
        </div>
        <?php endif; ?>
      </div>

      <div class="Header-center">
        <?php
        // Поисковая форма: если хочешь свою — замени get_search_form()
        ?>
        <form class="Header-search" role="search" method="get" action="<?php echo esc_url( home_url('/') ); ?>" aria-label="Поиск по сайту">
          <input class="Search__input" type="search" name="s" placeholder="Поиск" aria-label="Поиск" value="<?php echo get_search_query(); ?>">
          <button class="Search__btn" aria-label="Найти" type="submit">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" /><circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="1.2" fill="none" /></svg>
          </button>
        </form>
      </div>

      <div class="Header-right">
        <div class="Header-phone"><strong><a href="tel:+996555449977">+996 (555) 44 99 77</a></strong></div>

        <div class="Header-icons">
          <?php
          // если используется WooCommerce — показываем корзину с счётчиком
          if ( function_exists('wc_get_cart_url') ) : ?>
            <a class="Icon-btn Icon-btn--cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e('Корзина', 'povarenok'); ?>">
              <span class="Icon-cart">🛒</span>
              <span class="Icon-count"><?php echo ( function_exists('WC') ? WC()->cart->get_cart_contents_count() : 0 ); ?></span>
            </a>
          <?php else : ?>
            <a class="Icon-btn Icon-btn--cart" href="<?php echo esc_url( home_url('/cart') ); ?>" title="<?php esc_attr_e('Корзина', 'povarenok'); ?>">
              <span class="Icon-cart">🛒</span>
            </a>
          <?php endif; ?>

          <?php
          // в исходном HTML были и другие иконки; по запросу их можно убрать/добавить.
          // Сейчас оставляю только корзину (иконки удаления ниже оставлены в комментарии).
          /*
          <a class="Icon-btn" href="#" title="Статистика">📊</a>
          <a class="Icon-btn" href="#" title="Избранное">❤</a>
          */
          ?>
        </div>
      </div>
    </div>

    <nav class="NavBar" role="navigation" aria-label="Главное меню">
      <div class="Container NavBar__inner">
        <?php
        // Вывод меню WP. Создай меню в админке и привяжи к 'primary' (зарегистрируй локацию в functions.php)
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'NavBar__menu',
                'container'      => false,
                'fallback_cb'    => false
            ) );
        } else {
            // fallback - статичные ссылки как в твоём HTML
            ?>
            <a class="NavBar__item NavBar__item--active" href="#">Оборудование</a>
            <a class="NavBar__item" href="#">Упаковка</a>
            <a class="NavBar__item" href="#">Посуда и инвентарь</a>
            <a class="NavBar__item" href="#">Мебель</a>
            <a class="NavBar__item" href="#">Проф. химия</a>
            <a class="NavBar__item" href="#">Автоматизация</a>
            <a class="NavBar__item" href="#">Запчасти</a>
            <a class="NavBar__item" href="#">Услуги</a>
            <a class="NavBar__item" href="#">Контакты</a>
            <?php
        }
        ?>
      </div>
    </nav>
  </header>

<?php
// продолжение шаблона (контент) будет в page / index — header.php закрывать body/footer не нужно
?>

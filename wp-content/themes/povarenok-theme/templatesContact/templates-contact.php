<?php
/**
 * Template Name: Contact
 * Template Post Type: product, page
 *
 * Файл: wp-content/themes/povarenok-theme/template-contact.php
 */

// Подключаем header (в header.php должны быть <head>, wp_head() и открытие <body>)
get_header();
?>

<main>
  <div class="Container Main-row">
    <section class="contact" aria-label="<?php esc_attr_e( 'Адреса и контакты', 'povarenok' ); ?>">
      <div class="contact-inner">
        <div class="breadcrumbs"><?php esc_html_e('Главная — Адреса и контакты', 'povarenok'); ?></div>
        <h1 class="page-title"><?php esc_html_e('Адреса и контакты', 'povarenok'); ?></h1>

        <div class="contact-grid">
          <!-- Центр -->
          <div>
            <div class="office">
              <div class="office-title"><?php esc_html_e('Офис г. Бишкек', 'povarenok'); ?></div>

              <div class="field">
                <strong><?php esc_html_e('АДРЕС', 'povarenok'); ?></strong>
                <div class="meta"><?php esc_html_e('Кыргызская Республика, г. Бишкек, ул. Лермонтова 12 (напротив рынка Таатан)', 'povarenok'); ?></div>
              </div>

              <div class="field"><strong><?php esc_html_e('ТЕЛЕФОНЫ И E-MAIL', 'povarenok'); ?></strong></div>

              <div class="phone-block">
                <div class="phone-left"><?php esc_html_e('Ханбабаева Саида:', 'povarenok'); ?></div>
                <div class="phone-right">
                  <div class="phone-number">+996 (555) 44 99 77</div>
                  <a class="phone-email" href="mailto:kg3@zavod-pt.ru">kg3@zavod-pt.ru</a>
                </div>
              </div>

              <div class="phone-block">
                <div class="phone-left"><?php esc_html_e('Байбеков Вадим:', 'povarenok'); ?></div>
                <div class="phone-right">
                  <div class="phone-number">+996 (500) 44 99 77</div>
                  <a class="phone-email" href="mailto:kg6@zavod-pt.ru">kg6@zavod-pt.ru</a>
                </div>
              </div>

              <div class="phone-block">
                <div class="phone-left"><?php esc_html_e('Шеренкова Кристина (отд. посуды, инвентаря):', 'povarenok'); ?></div>
                <div class="phone-right">
                  <div class="phone-number">+996 (702) 44 99 77</div>
                  <a class="phone-email" href="mailto:kg7@zavod-pt.ru">kg7@zavod-pt.ru</a>
                </div>
              </div>

              <div class="phone-block">
                <div class="phone-left"><?php esc_html_e('Отдел продаж:', 'povarenok'); ?></div>
                <div class="phone-right">
                  <div class="phone-number">+996 (312) 97-35-70</div>
                </div>
              </div>

              <div class="field">
                <strong><?php esc_html_e('ЧАСЫ РАБОТЫ', 'povarenok'); ?></strong>
                <div class="meta"><?php esc_html_e('с 9-00 до 17-30, Выходной: суббота, воскресенье.', 'povarenok'); ?></div>
              </div>

              <div class="field">
                <strong><?php esc_html_e('ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ', 'povarenok'); ?></strong>
                <div class="meta"><?php esc_html_e('Адрес склада: г. Бишкек, ул. Лермонтова 12а', 'povarenok'); ?></div>
              </div>
            </div>

            <div class="requisites">
              <h3><?php esc_html_e('Реквизиты:', 'povarenok'); ?></h3>
              <p><?php esc_html_e('ООО "Торговый дом Пищевые технологии"', 'povarenok'); ?></p>
              <p><?php esc_html_e('Юридический адрес: Кыргызская Республика, г. Бишкек, ул. Лермонтова 12', 'povarenok'); ?></p>
              <p><?php esc_html_e('Фактический адрес: Кыргызская Республика, г. Бишкек, ул. Лермонтова 12', 'povarenok'); ?></p>
              <p><?php esc_html_e('Тел./факс: +996 (555) 44 99 77, +996 (702) 44 99 77', 'povarenok'); ?></p>

              <div style="margin-top:12px">
                <a class="btn" href="#"><?php esc_html_e('НАПИСАТЬ СООБЩЕНИЕ', 'povarenok'); ?></a>
              </div>

              <div class="socials" style="display:flex;gap:10px;margin-top:12px">
                <div class="social-pill">vk</div>
                <div class="social-pill">yt</div>
                <div class="social-pill">ok</div>
              </div>
            </div>
          </div>

          <!-- Правая колонка: карта -->
          <div class="contact-col-right">
            <div class="map">
              <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=74.562%2C42.867%2C74.586%2C42.880&amp;layer=mapnik" allowfullscreen></iframe>
            </div>

            <div class="details">
              <h3><?php esc_html_e('Как добраться', 'povarenok'); ?></h3>
              <p><?php esc_html_e('Рядом рынок Таатан, парковка для посетителей. Ориентир — большая зелёная вывеска на углу.', 'povarenok'); ?></p>
            </div>
          </div>
        </div> <!-- /.contact-grid -->
      </div>
    </section>
  </div>
</main>

<?php
// Подключаем footer (footer.php должен содержать wp_footer() и закрывающие теги)
get_footer();

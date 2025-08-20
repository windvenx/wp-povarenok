<?php
// footer.php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<footer class="site-footer" role="contentinfo" aria-label="Футер сайта">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-col footer-col--logo" aria-hidden="true">
                <!-- логотип/бренд (можно вставить SVG или img) -->
            </div>

            <div class="col-block">
                <h4 class="footer-title">КАТАЛОГ</h4>
                <ul class="footer-list">
                    <li><a href="<?php echo esc_url( home_url( '/catalog/' ) ); ?>">Каталог</a></li>
                    <li><a href="#">Бренды</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Услуги</a></li>
                </ul>
            </div>

            <div class="footer-col footer-col--nav">
                <div class="col-block">
                    <h4 class="footer-title">КОМПАНИЯ</h4>
                    <ul class="footer-list">
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Торговля</a></li>
                        <li><a href="#">Производство</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contacts/' ) ); ?>">Контакты</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-col footer-col--info">
                <h4 class="footer-title">ИНФОРМАЦИЯ</h4>
                <ul class="footer-list">
                    <li><a href="#">Магазины</a></li>
                    <li><a href="#">Мастер-классы</a></li>
                    <li><a href="#">Готовые решения</a></li>
                    <li><a href="#">Дилерам</a></li>
                </ul>
            </div>

            <div class="footer-col footer-col--contacts">
                <h4 class="footer-title">ПОМОЩЬ</h4>

                <ul class="footer-list footer-list--help">
                    <li><a href="#">Как заказать</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">Поиск по каталогу</a></li>
                </ul>
            </div>

            <div class="footer-next-block">
                <form class="subscribe-form" action="#" method="post" novalidate>
                    <input class="subscribe-input" type="email" name="email" placeholder="Подписаться на рассылку" aria-label="Email">
                    <button class="subscribe-btn" type="submit" aria-label="Подписаться">
                        <svg width="16" height="16" viewBox="0 0 24 24" aria-hidden>
                            <path fill="#fff" d="M2 21l21-9L2 3v7l15 2-15 2z" />
                        </svg>
                    </button>
                </form>

                <div class="footer-contacts">
                    <div class="contact-item">
                        <svg class="icon" width="14" height="14" viewBox="0 0 24 24" aria-hidden>
                            <path fill="currentColor" d="M6.6 10.8a15.05 15.05 0 006.6 6.6l2.2-2.2a1 1 0 01.9-.3c1 .2 2 .3 2.9.3a1 1 0 011 1v3.7a1 1 0 01-1 1A19 19 0 013 5a1 1 0 011-1h3.7a1 1 0 011 1c0 1 .1 1.9.3 2.9.1.4-.1.8-.3.9L6.6 10.8z" />
                        </svg>
                        <a href="tel:+996555449977">+996 (555) 44 99 77</a>
                    </div>

                    <div class="contact-item">
                        <svg class="icon" width="14" height="14" viewBox="0 0 24 24" aria-hidden>
                            <path fill="currentColor" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-1.2 4.1L12 13 5.2 8.1 6 7.4 12 11l6-3.6.8.1z" />
                        </svg>
                        <div class="mail-list">
                            <a href="mailto:kg3@zavod-pt.ru">kg3@zavod-pt.ru</a><br>
                            <a href="mailto:kg6@zavod-pt.ru">kg6@zavod-pt.ru</a>
                        </div>
                    </div>

                    <div class="contact-item addr">
                        <svg class="icon" width="14" height="14" viewBox="0 0 24 24" aria-hidden>
                            <path fill="currentColor" d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zM12 11.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z" />
                        </svg>
                        <div class="addr-text">
                            <strong>Офис:</strong> г. Бишкек, ул. Лермонтова 12<br>
                            <strong>Склад:</strong> г. Бишкек, ул. Лермонтова 12a
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-legal">
            <div class="container footer-legal__inner">
                <div class="footer-legal__logo" aria-hidden="true">
                    <!-- Тут можно вставить SVG логотипа как в оригинале -->
                </div>

                <div class="footer-legal__copy">
                    <div class="footer-legal__copy-top">
                        © <?php echo date( 'Y' ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. Работаем для Вас с 1991 года.
                        <br>
                        Интернет-магазин оптовой и розничной продажи оборудования, посуды, инвентаря и мебели для баров,
                        кафе, столовых и ресторанов.
                    </div>

                    <div class="footer-legal__copy-bottom">
                        В связи с изменением курса валют, размещенные на сайте предложения о продаже любого вида товара
                        не являются публичной офертой. Информацию об актуальной цене товара, его наличии на складе и
                        сроках поставки, пожалуйста, уточняйте у менеджера интернет-магазина. Производитель оставляет за
                        собой право изменять характеристики товара, его внешний вид и комплектность без предварительного
                        уведомления продавца.
                    </div>
                </div>

                <div class="footer-legal__right">
                    <div class="footer-legal__socials" aria-label="Соцсети">
                        <!-- иконки соцсетей (можно заменить на ссылки) -->
                    </div>

                    <div class="footer-legal__seal" aria-hidden="true">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/performance.png' ); ?>" alt="Печать" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

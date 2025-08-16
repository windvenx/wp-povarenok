<?php
/*
Template Name: Contacts
*/
get_header(); ?>
<main class="site-main">
    <div class="container main-container">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo home_url(); ?>">Главная</a> — <?php the_title(); ?>
            </div>
        </header>
            <section class="contact-grid" aria-label="Контактная информация">

                <!-- Row 1, Col 1 -->
                <div class="contact-card">
                    <h2 class="card-title">Офис г. Бишкек</h2>
                    <div class="label">АДРЕС</div>
                    <div class="value">Кыргызская Республика, г. Бишкек, ул. Лермонтова 12 (напротив рынка Таатан)</div>
                </div>

                <!-- Row 1, Col 2 -->
                <div class="contact-card">
                    <div class="label">ТЕЛЕФОНЫ И E-MAIL</div>

                    <div class="person">
                        <div class="name">Ханбабаева Саида</div>
                        <div class="contact">+996 (555) 44 99 77<br><a href="mailto:kg3@zavod-pt.ru">kg3@zavod-pt.ru</a>
                        </div>
                    </div>

                    <div class="person highlight">
                        <div class="name">Байбеков Вадим</div>
                        <div class="contact">+996 (500) 44 99 77<br><a href="mailto:kg6@zavod-pt.ru">kg6@zavod-pt.ru</a>
                        </div>
                    </div>

                    <div class="person">
                        <div class="name">Отдел продаж</div>
                        <div class="contact">+996 (312) 97-35-70</div>
                    </div>
                </div>

                <!-- Row 2, Col 1 -->
                <div class="contact-card">
                    <div class="label">ЧАСЫ РАБОТЫ</div>
                    <div class="value">с 9:00 до 17:30, Выходной: суббота, воскресенье.</div>

                    <div class="label" style="margin-top:14px;">ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ</div>
                    <div class="value">Адрес склада: г. Бишкек, ул. Лермонтова 12a</div>
                </div>

                <!-- Row 2, Col 2 -->
                <div class="contact-card">
                    <div class="label">ОТВЕТСТВЕННЫЕ</div>

                    <div class="person">
                        <div class="name">Шеренкова Кристина</div>
                        <div class="contact">+996 (702) 44 99 77<br><a href="mailto:kg7@zavod-pt.ru">kg7@zavod-pt.ru</a>
                        </div>
                    </div>

                    <!-- Можно добавить ещё контакты -->
                </div>

            </section> 
        <div class="map-spacer" aria-hidden="true"></div>
    </div>
        <div class="map-full">
            <!-- Пример: временный placeholder. ЗАМЕНИ src на реальный Google Maps embed -->
            <iframe class="map-iframe" src="https://www.google.com/maps?q=ул+Лермонтова+12+Бишкек&output=embed"
                frameborder="0" allowfullscreen aria-hidden="false" title="Карта — Офис г. Бишкек"></iframe>
        </div>
</main>
<?php get_footer(); ?>  
<?php
/* Template Name: HomePage */
?>

<?php get_header(); ?>

<main class="flex-auto">
    <div class="container">
        <div class="layout">
            <aside class="sidebar sticky-sidebar">
                <div class="sticky-sidebar__inner">
                    <dv class="sidebar-menu">
                        <div class="sidebar-menu__item">
                            <a href="/brands/">
                                <span class="sidebar-menu__title">Каталог по брендам</span><br>
                                <span class="sidebar-menu__desc">Более 200 брендов</span>
                            </a>
                        </div>
                        <div class="sidebar-menu__item">
                            <a href="/catalog/">
                                <span class="sidebar-menu__title">Каталог по видам</span><br>
                                <span class="sidebar-menu__desc">Более 15 000 товаров</span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-banner">
                        <a
                            href="https://zavod-pt.ru/catalog/parokonvektomaty/filter/proizvoditel-is-5892120f-c3c2-11e3-93f0-101f742c074b/apply/">
                            <img data-lazyload=""
                                src="https://zavod-pt.kg/upload/iblock/ba0/p30euddqcmdtjnmbjtczc4pppj7rl89k.jpg"
                                data-src="/upload/iblock/ba0/p30euddqcmdtjnmbjtczc4pppj7rl89k.jpg"
                                alt="Пароконвектоматы" title="Пароконвектоматы"
                                class="img-responsive ls-is-cached lazyloaded">
                        </a>
                    </div>

                    <div class="sidebar-brand-block" style="padding-top:2px;">
                        <div class="brand-list box-shadow">
                            <div class="brand-list__item clearfix rounded bordered center-block">
                                <a href="/brands/pishchevye_tekhnologii/" class="brand-link">
                                    <img data-lazyload="" class="brand-logo ls-is-cached lazyloaded"
                                        src="<?php echo get_template_directory_uri(); ?>/img/pishteh_logo.svg"
                                        data-src="<?php echo get_template_directory_uri(); ?>/img/pishteh_logo.svg"
                                        alt="ПищТех" style="width: 75%;">
                                    <span class="brand-desc muted small">Собственное производство</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-links">
                        <div class="sidebar-links__item"><a href="/about/" class="dark_link font_sm">О нас</a></div>
                        <div class="sidebar-links__item"><a href="/howto/dostavka-i-oplata/"
                                class="dark_link font_sm">Доставка и оплата</a></div>
                        <div class="sidebar-links__item"><a href="/feedback" class="dark_link font_sm">Обратная
                                связь</a></div>
                    </div>
                    <div class="sidebar-links">
                        <div class="sidebar-links__item"><a href="/dealers/" class="dark_link font_sm">Стать дилером</a>
                        </div>
                    </div>
                    <div class="sidebar-links">
                        <div class="sidebar-links__item"><a href="/services/" class="dark_link font_sm">Услуги</a></div>
                    </div>
                    <div class="sidebar-links">
                        <div class="sidebar-links__item"><a href="/master-class/"
                                class="dark_link font_sm">Мастер-классы</a></div>
                    </div>
                    <div class="sidebar-links">
                        <div class="sidebar-links__item"><a href="/information/stati/"
                                class="dark_link font_sm">Статьи</a></div>
                    </div>
                    <div class="sidebar-links">
                        <div class="sidebar-links__item"><a href="/about/vakansii/"
                                class="dark_link font_sm">Вакансии</a></div>
                    </div>
                    <div class="sidebar-links">
                        <div class="sidebar-links__item"><a href="/cert/" class="dark_link font_sm">Сертификаты</a>
                        </div>
                    </div>
                </div>
            </aside>
            <main class="main-content">
                <section class="mt-20">
                    <div class="slider" id="heroSlider" aria-label="Главный слайдер">
                        <div class="slides" id="slides">
                            <!-- slide #1 -->
                            <div class="slide"
                                style="background-image: linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url('https://via.placeholder.com/1400x420?text=TERMObox+1');">
                                <div class="slide-inner">
                                    <div class="text">
                                        <div class="title">TERMOBOX</div>
                                        <p class="subtitle">Профессиональные термоконтейнеры и аксессуары — производство
                                            в России</p>
                                    </div>
                                    <div
                                        style="width:300px;height:150px;background:transparent;display:flex;align-items:center;justify-content:center;">
                                        <img src="https://via.placeholder.com/300x150?text=Product" alt=""
                                            style="max-width:100%;height:auto;object-fit:contain">
                                    </div>
                                </div>
                            </div>

                            <!-- slide #2 -->
                            <div class="slide"
                                style="background-image: linear-gradient(rgba(0,0,0,0.18), rgba(0,0,0,0.18)), url('https://via.placeholder.com/1400x420?text=TERMObox+2');">
                                <div class="slide-inner">
                                    <div class="text">
                                        <div class="title">Производство под заказ</div>
                                        <p class="subtitle">Индивидуальные размеры, брендинг и комплектация - быстро и
                                            качественно</p>
                                    </div>
                                    <div>
                                        <img src="https://via.placeholder.com/260x140?text=Box" alt=""
                                            style="max-width:100%;height:auto;object-fit:contain">
                                    </div>
                                </div>
                            </div>

                            <!-- slide #3 -->
                            <div class="slide"
                                style="background-image: linear-gradient(rgba(0,0,0,0.18), rgba(0,0,0,0.18)), url('https://via.placeholder.com/1400x420?text=TERMObox+3');">
                                <div class="slide-inner">
                                    <div class="text">
                                        <div class="title">Тепло и холод — на ура</div>
                                        <p class="subtitle">Сохраняем температуру при доставке: от мороза до жара</p>
                                    </div>
                                    <div>
                                        <img src="https://via.placeholder.com/260x140?text=Icon" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- arrows -->
                        <button class="arrow left" data-action="prev" aria-label="Предыдущий слайд">
                            <svg viewBox="0 0 24 24">
                                <path d="M15 18l-6-6 6-6" />
                            </svg>
                        </button>
                        <button class="arrow right" data-action="next" aria-label="Следующий слайд">
                            <svg viewBox="0 0 24 24">
                                <path d="M9 6l6 6-6 6" />
                            </svg>
                        </button>

                        <!-- dots -->
                        <div class="dots" id="dots" aria-hidden="false"></div>
                    </div>
                </section>

                <section class="mt-20">
                    <div class="promo-grid" role="list">
                        <a class="promo" href="#" role="listitem"
                            style="background-image: url('https://via.placeholder.com/500x300?text=Video');">
                            <div class="corner">Видео</div>
                            <div class="overlay">
                                <div class="left">
                                    <div class="category">Видео</div>
                                    <div class="headline">Готовим чизбургер с яйцом на жарочной поверхности ПищТех</div>
                                </div>
                                <div class="play" aria-hidden="true">
                                    <svg width="22" height="22" viewBox="0 0 24 24">
                                        <path d="M4 2l16 10-16 10z" fill="#111"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <a class="promo" href="#" role="listitem"
                            style="background-image: url('https://via.placeholder.com/500x300?text=Sale');">
                            <div class="corner">Горячие скидки</div>
                            <div class="overlay">
                                <div class="left">
                                    <div class="category">ГОРЯЧИЕ СКИДКИ</div>
                                    <div class="headline">Распродажа оборудования</div>
                                </div>
                                <div
                                    style="width:56px;height:56px;border-radius:8px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700">
                                    %
                                </div>
                            </div>
                        </a>

                        <a class="promo" href="#" role="listitem"
                            style="background-image: url('https://via.placeholder.com/500x300?text=Tableware');">
                            <div class="corner">Посуда</div>
                            <div class="overlay">
                                <div class="left">
                                    <div class="category">Посуда</div>
                                    <div class="headline">Все для сервировки стола</div>
                                </div>
                                <div
                                    style="width:56px;height:56px;border-radius:8px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700">
                                    →
                                </div>
                            </div>
                        </a>
                    </div>
                </section>

                <section class="features" aria-label="Преимущества">
                    <div class="feature">
                        <div class="feat-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="6" width="18" height="12" rx="2" />
                                <path d="M7 6v-2h10v2" />
                            </svg>
                        </div>
                        <h5>Собственное производство</h5>
                        <p>Современный российский завод пищевого оборудования</p>
                    </div>

                    <div class="feature">
                        <div class="feat-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M4 7h16v10H4z" />
                                <path d="M8 7v-3" />
                            </svg>
                        </div>
                        <h5>Проектирование и оснащение</h5>
                        <p>Комплексное оснащение с нуля в соответствии с ГОСТ</p>
                    </div>

                    <div class="feature">
                        <div class="feat-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M3 21c7-5 11-9 11-9s4 4 11 9" />
                            </svg>
                        </div>
                        <h5>Сервисное обслуживание</h5>
                        <p>Качественный монтаж, гарантийное и постгарантийное обслуживание</p>
                    </div>

                    <div class="feature">
                        <div class="feat-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="3" />
                            </svg>
                        </div>
                        <h5>Профессиональная экспертиза</h5>
                        <p>Наличие в штате шеф-поваров и инженеров</p>
                    </div>
                </section>

                <div class="catalog-header">
                    <h2>Лучшие предложения</h2>
                    <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" aria-label="Весь каталог">ВЕСЬ
                        КАТАЛОГ</a>
                </div>

                <section class="products" aria-label="Товары">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 4,
                    );
                    $products = new WP_Query($args);
                    if ($products->have_posts()):
                        while ($products->have_posts()):
                            $products->the_post();
                            global $product;
                            ?>
                            <article class="card" aria-labelledby="p<?php the_ID(); ?>-title">
                                <div class="thumb">
                                    <?php echo woocommerce_get_product_thumbnail(); ?>
                                </div>
                                <div class="card-body">
                                    <div class="rating">
                                        <div class="stars" aria-hidden="true">
                                            <?php
                                            $rating = $product->get_average_rating();
                                            for ($i = 1; $i <= 5; $i++) {
                                                echo '<span class="star' . ($i <= $rating ? ' filled' : '') . '"></span>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <h3 id="p<?php the_ID(); ?>-title" class="title"><?php the_title(); ?></h3>
                                    <div class="meta">
                                        <div class="availability"><span class="dot"></span>
                                            <?php echo $product->is_in_stock() ? 'В наличии' : 'Нет в наличии'; ?></div>
                                        <div class="country">
                                            <?php echo get_post_meta(get_the_ID(), '_country', true) ?: 'Россия'; ?></div>
                                    </div>
                                    <div class="code">Код: <?php echo $product->get_sku() ?: 'N/A'; ?></div>
                                    <div class="price-row">
                                        <div class="price"><?php echo $product->get_price_html(); ?></div>
                                        <div class="country"></div>
                                    </div>
                                </div>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </section>

                <section class="hero-bleed" aria-label="Баннер — собственное производство">
                    <div class="hero">
                        <div class="hero-left">
                            <div class="eyebrow">Собственное производство</div>
                            <h1>Пищевые технологии</h1>
                            <p>Завод пищевого оборудования и комплексное оснащение объектов общественного питания.
                                Качественные линии, печи, холодильные решения и сервис под ключ.</p>
                        </div>
                        <div class="hero-right">
                            <div class="hero-image" role="img" aria-label="Изображение оборудования"></div>
                        </div>
                    </div>
                </section>

                <section class="about" aria-label="О компании">
                    <div>
                        <div class="meta">О компании</div>
                        <h2>Пищевые технологии</h2>
                        <p class="lead">Российский торгово-промышленный холдинг «Пищевые технологии» является одним из
                            признанных лидеров в области изготовления и реализации пищевого оборудования, упаковки,
                            посуды и инвентаря, мебели, а также продукции для столовых, кафе, ресторанов, баров,
                            пиццерий и хлебопекарных предприятий.</p>
                        <p class="lead">Мы поставляем комплексные решения: от проектирования кухни до установки и
                            постгарантийного обслуживания.</p>
                        <a class="btn" href="#">Подробности</a>
                    </div>

                    <div class="image-wrap" aria-hidden="true">
                        <img src="https://via.placeholder.com/1000x600?text=Showroom+Image" alt="Зал с оборудованием">
                    </div>
                </section>

                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </main>
        </div>
    </div>
</main>

<?php get_footer(); ?>
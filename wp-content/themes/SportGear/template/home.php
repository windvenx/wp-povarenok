<?php
/* Template Name: HomePage */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Главная</title>

    <!-- Tailwind CDN (демо). В продакшене билдьте CSS. -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --border: #e8e8e8;
            --green: #16a34a;
            --card-bg: #ffffff;
        }

        html,
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* If theme's footer is fixed/absolute, remove that in footer.php. This file expects footer to be static. */
    </style>
</head>

<body class="font-sans text-black bg-white antialiased leading-relaxed">

    <?php
    get_header();
    ?>

    <div class="min-h-screen flex flex-col">
        <div class="layout flex flex-row flex-1 gap-6 max-w-[calc(1700px+320px)] mx-auto py-8 px-4 items-start w-full">
            <aside
                class="sidebar sticky top-0 w-[320px] min-w-[260px] max-w-[400px] bg-[#f9f9f9] shadow-[2px_0_8px_rgba(0,0,0,0.05)]">
                <div class="sticky-sidebar__inner py-6 relative translate-z-0 will-change-[position,transform] pb-8">
                    <div class="sidebar-menu m-0 p-0 relative whitespace-nowrap">
                        <?php
                        if (file_exists(get_template_directory() . '/template-parts/sidebar-home.php')) {
                            get_template_part('template-parts/sidebar-home');
                        } else {
                            ?>
                            <div
                                class="sidebar-menu__item py-3.5 px-4.25 border border-[#ececec] rounded clear-both transition-[transform,box-shadow] duration-200 ease-in-out">
                                <a href="/brands/">
                                    <span class="sidebar-menu__title text-[#066e21]">Каталог по брендам</span><br>
                                    <span class="sidebar-menu__desc text-[#999]">Более 200 брендов</span>
                                </a>
                            </div>
                            <div
                                class="sidebar-menu__item py-3.5 px-4.25 border border-[#ececec] rounded clear-both transition-[transform,box-shadow] duration-200 ease-in-out mt-4">
                                <a href="/catalog/">
                                    <span class="sidebar-menu__title text-[#066e21]">Каталог по видам</span><br>
                                    <span class="sidebar-menu__desc text-[#999]">Более 15 000 товаров</span>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                    <div class="sidebar-banner mt-8">
                        <a
                            href="https://zavod-pt.ru/catalog/parokonvektomaty/filter/proizvoditel-is-5892120f-c3c2-11e3-93f0-101f742c074b/apply/">
                            <img src="https://zavod-pt.kg/upload/iblock/ba0/p30euddqcmdtjnmbjtczc4pppj7rl89k.jpg"
                                alt="Пароконвектоматы" title="Пароконвектоматы"
                                class="img-responsive w-full block rounded">
                        </a>
                    </div>

                    <div class="sidebar-brand-block mt-8 pt-0.5">
                        <div
                            class="brand-list box-shadow shadow-[0_2px_8px_rgba(0,0,0,0.05)] transition-[transform,box-shadow] duration-200 ease-in-out">
                            <div
                                class="brand-list__item clearfix rounded bordered border-[var(--border)] mx-auto bg-white py-3 px-4 flex items-center">
                                <a href="/brands/pishchevye_tekhnologii/"
                                    class="brand-link flex flex-col items-center no-underline">
                                    <img class="brand-logo w-[75%] mb-1.5" src="./img/pishteh_logo.svg" alt="ПищТех">
                                    <span
                                        class="brand-desc muted small text-[#888] text-[0.8rem] opacity-70">Собственное
                                        производство</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-links mt-4 space-y-2 px-4">
                        <div class="sidebar-links__item"><a href="/about/" class="font_sm text-black no-underline">О
                                нас</a></div>
                        <div class="sidebar-links__item"><a href="/howto/dostavka-i-oplata/"
                                class="font_sm text-black no-underline">Доставка и оплата</a></div>
                        <div class="sidebar-links__item"><a href="/feedback"
                                class="font_sm text-black no-underline">Обратная связь</a></div>
                        <div class="sidebar-links__item"><a href="/dealers/"
                                class="font_sm text-black no-underline">Стать дилером</a></div>
                        <div class="sidebar-links__item"><a href="/services/"
                                class="font_sm text-black no-underline">Услуги</a></div>
                        <div class="sidebar-links__item"><a href="/master-class/"
                                class="font_sm text-black no-underline">Мастер-классы</a></div>
                        <div class="sidebar-links__item"><a href="/information/stati/"
                                class="font_sm text-black no-underline">Статьи</a></div>
                        <div class="sidebar-links__item"><a href="/about/vakansii/"
                                class="font_sm text-black no-underline">Вакансии</a></div>
                        <div class="sidebar-links__item"><a href="/cert/"
                                class="font_sm text-black no-underline">Сертификаты</a></div>
                    </div>
                </div>
            </aside>

            <main class="main-content flex-1 min-w-0 py-8 px-6 pl-8 bg-white order-1 overflow-auto">
                <section class="mt-5">
                    <div class="slider relative w-full rounded-lg overflow-hidden bg-black" id="heroSlider"
                        aria-label="Главный слайдер">
                        <div class="slides flex transition-transform duration-[450ms] ease-in-out will-change-transform"
                            id="slides">
                            <?php
                            $slides = [];
                            for ($i = 1; $i <= 3; $i++) {
                                $slides[] = [
                                    'title' => get_post_meta(get_the_ID(), "home_slide_title_{$i}", true) ?: '',
                                    'sub' => get_post_meta(get_the_ID(), "home_slide_sub_{$i}", true) ?: '',
                                    'img_id' => get_post_meta(get_the_ID(), "home_slide_img_{$i}", true) ?: 0,
                                ];
                            }
                            $all_empty = true;
                            foreach ($slides as $s) {
                                if ($s['title'] || $s['sub'] || $s['img_id']) {
                                    $all_empty = false;
                                    break;
                                }
                            }
                            if ($all_empty) {
                                $slides = [
                                    ['title' => 'TERMOBOX', 'sub' => 'Профессиональные термоконтейнеры и аксессуары', 'img_id' => 0, 'bg' => 'https://via.placeholder.com/1400x420?text=TERMObox+1'],
                                    ['title' => 'Производство под заказ', 'sub' => 'Индивидуальные размеры, брендинг и комплектация', 'img_id' => 0, 'bg' => 'https://via.placeholder.com/1400x420?text=TERMObox+2'],
                                    ['title' => 'Тепло и холод — на ура', 'sub' => 'Сохраняем температуру при доставке', 'img_id' => 0, 'bg' => 'https://via.placeholder.com/1400x420?text=TERMObox+3'],
                                ];
                            }

                            foreach ($slides as $s):
                                $bg = '';
                                if (!empty($s['img_id']) && intval($s['img_id'])) {
                                    $img_url = wp_get_attachment_image_url(intval($s['img_id']), 'full');
                                    if ($img_url)
                                        $bg = "background-image: linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url('" . esc_url($img_url) . "');";
                                } elseif (!empty($s['bg'])) {
                                    $bg = "background-image: linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url('" . esc_url($s['bg']) . "');";
                                } else {
                                    $bg = "background-image: linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url('https://via.placeholder.com/1400x420?text=TERMObox');";
                                }
                                ?>
                                <div class="slide min-w-full flex-shrink-0 relative h-80 flex items-center justify-center bg-cover bg-center"
                                    style="<?php echo $bg; ?>">
                                    <div
                                        class="slide-inner w-full max-w-[1100px] flex items-center justify-between px-6 gap-5">
                                        <div class="text text-white max-w-[60%]">
                                            <div class="title text-[34px] mb-2 font-extrabold text-[#ffd83a]">
                                                <?php echo esc_html($s['title']); ?></div>
                                            <p class="subtitle text-lg m-0 text-white/90"><?php echo esc_html($s['sub']); ?>
                                            </p>
                                        </div>
                                        <div
                                            style="width:300px;height:150px;display:flex;align-items:center;justify-content:center;">
                                            <?php if (!empty($s['img_id'])): ?>
                                                <img src="<?php echo esc_url(wp_get_attachment_image_url(intval($s['img_id']), 'medium')); ?>"
                                                    alt="" style="max-width:100%;height:auto;object-fit:contain">
                                            <?php else: ?>
                                                <img src="https://via.placeholder.com/300x150?text=Product" alt=""
                                                    style="max-width:100%;height:auto;object-fit:contain">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <button
                            class="arrow left absolute top-1/2 -translate-y-1/2 w-11 h-11 rounded-md bg-white/95 flex items-center justify-center cursor-pointer shadow left-3.5"
                            data-action="prev" aria-label="Предыдущий слайд">
                            <svg viewBox="0 0 24 24" class="w-5 h-5">
                                <path d="M15 18l-6-6 6-6" stroke="#1b1b1b" stroke-width="2" fill="none" />
                            </svg>
                        </button>
                        <button
                            class="arrow right absolute top-1/2 -translate-y-1/2 w-11 h-11 rounded-md bg-white/95 flex items-center justify-center cursor-pointer shadow right-3.5"
                            data-action="next" aria-label="Следующий слайд">
                            <svg viewBox="0 0 24 24" class="w-5 h-5">
                                <path d="M9 6l6 6-6 6" stroke="#1b1b1b" stroke-width="2" fill="none" />
                            </svg>
                        </button>

                        <div class="dots absolute left-1/2 -translate-x-1/2 bottom-3.5 flex gap-2 items-center"
                            id="dots" aria-hidden="false"></div>
                    </div>
                </section>

                <section class="mt-5">
                    <div class="promo-grid grid grid-cols-3 gap-4.5" role="list">
                        <?php
                        for ($i = 1; $i <= 3; $i++) {
                            $cat = get_post_meta(get_the_ID(), "home_promo_cat_{$i}", true) ?: 'Категория';
                            $title = get_post_meta(get_the_ID(), "home_promo_title_{$i}", true) ?: 'Заголовок';
                            $img_id = get_post_meta(get_the_ID(), "home_promo_img_{$i}", true);
                            $bg_url = $img_id ? wp_get_attachment_image_url(intval($img_id), 'full') : "https://via.placeholder.com/500x300?text=Promo+{$i}";
                            ?>
                            <a class="promo relative rounded-lg overflow-hidden min-h-[260px] bg-cover bg-center flex items-end text-white"
                                href="#" role="listitem" style="background-image: url('<?php echo esc_url($bg_url); ?>');">
                                <div
                                    class="corner absolute left-3.5 top-3.5 bg-black/55 py-1.5 px-2.5 rounded text-white text-[12px]">
                                    <?php echo esc_html($cat); ?></div>
                                <div
                                    class="overlay w-full p-4.5 bg-gradient-to-t from-black/55 to-transparent flex gap-3 items-center justify-between">
                                    <div class="left flex flex-col gap-2">
                                        <div class="category text-[12px] text-white/80 uppercase tracking-wide">
                                            <?php echo esc_html($cat); ?></div>
                                        <div class="headline text-base font-bold m-0"><?php echo esc_html($title); ?></div>
                                    </div>
                                    <div
                                        style="width:56px;height:56px;border-radius:8px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700">
                                        →</div>
                                </div>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </section>

                <section class="features grid grid-cols-4 gap-4.5 py-6 items-start border-b border-[var(--border)]"
                    aria-label="Преимущества">
                    <div class="feature text-center py-1.5 px-3">
                        <div class="feat-icon w-14 h-14 mx-auto mb-2.5 flex items-center justify-center rounded-[10px]">
                            <svg viewBox="0 0 24 24" class="w-7 h-7">
                                <rect x="3" y="6" width="18" height="12" rx="2" stroke="var(--green)" stroke-width="1.8"
                                    fill="none" />
                            </svg>
                        </div>
                        <h5 class="m-0 mb-2 text-base font-semibold">Собственное производство</h5>
                        <p class="m-0 text-muted text-[13px]">Современный российский завод пищевого оборудования</p>
                    </div>

                    <div class="feature text-center py-1.5 px-3">
                        <div class="feat-icon w-14 h-14 mx-auto mb-2.5 flex items-center justify-center rounded-[10px]">
                            <svg viewBox="0 0 24 24" class="w-7 h-7">
                                <path d="M4 7h16v10H4z" stroke="var(--green)" stroke-width="1.8" fill="none" />
                            </svg>
                        </div>
                        <h5 class="m-0 mb-2 text-base font-semibold">Проектирование и оснащение</h5>
                        <p class="m-0 text-muted text-[13px]">Комплексное оснащение с нуля в соответствии с ГОСТ</p>
                    </div>

                    <div class="feature text-center py-1.5 px-3">
                        <div class="feat-icon w-14 h-14 mx-auto mb-2.5 flex items-center justify-center rounded-[10px]">
                            <svg viewBox="0 0 24 24" class="w-7 h-7">
                                <path d="M3 21c7-5 11-9 11-9s4 4 11 9" stroke="var(--green)" stroke-width="1.8"
                                    fill="none" />
                            </svg>
                        </div>
                        <h5 class="m-0 mb-2 text-base font-semibold">Сервисное обслуживание</h5>
                        <p class="m-0 text-muted text-[13px]">Качественный монтаж, гарантийное и постгарантийное
                            обслуживание</p>
                    </div>

                    <div class="feature text-center py-1.5 px-3">
                        <div class="feat-icon w-14 h-14 mx-auto mb-2.5 flex items-center justify-center rounded-[10px]">
                            <svg viewBox="0 0 24 24" class="w-7 h-7">
                                <circle cx="12" cy="8" r="3" stroke="var(--green)" stroke-width="1.8" fill="none" />
                            </svg>
                        </div>
                        <h5 class="m-0 mb-2 text-base font-semibold">Профессиональная экспертиза</h5>
                        <p class="m-0 text-muted text-[13px]">Наличие в штате шеф-поваров и инженеров</p>
                    </div>
                </section>

                <div class="catalog-header flex items-center justify-between py-5">
                    <h2 class="m-0 text-[26px] font-semibold">Лучшие предложения</h2>
                    <a href="#" aria-label="Весь каталог" class="text-muted text-[13px] no-underline">ВЕСЬ КАТАЛОГ</a>
                </div>

                <section class="products grid grid-cols-4 gap-4.5" aria-label="Товары">
                    <?php
                    $args = [
                        'post_type' => 'product',
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                    ];
                    $products = new WP_Query($args);
                    if ($products->have_posts()):
                        while ($products->have_posts()):
                            $products->the_post();
                            $wc_product = function_exists('wc_get_product') ? wc_get_product(get_the_ID()) : null;
                            $in_stock = $wc_product ? ($wc_product->is_in_stock() ? 'В наличии' : 'Нет в наличии') : (get_post_meta(get_the_ID(), '_stock_status', true) === 'instock' ? 'В наличии' : 'N/A');
                            $sku = $wc_product ? $wc_product->get_sku() : (get_post_meta(get_the_ID(), '_sku', true) ?: 'N/A');
                            $price_html = $wc_product ? $wc_product->get_price_html() : (get_post_meta(get_the_ID(), '_price', true) ? number_format_i18n((float) get_post_meta(get_the_ID(), '_price', true), 0) . ' сом' : '—');
                            ?>
                            <article
                                class="card bg-[var(--card-bg)] border border-[var(--border)] rounded-md overflow-hidden flex flex-col min-h-[420px]">
                                <div
                                    class="thumb p-5.5 flex items-center justify-center min-h-[210px] bg-gradient-to-b from-white to-[#fafafa]">
                                    <?php if (has_post_thumbnail()): ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>"
                                            class="max-w-full max-h-[190px] object-contain block">
                                    <?php else: ?>
                                        <img src="https://via.placeholder.com/300x180?text=Product"
                                            alt="<?php the_title_attribute(); ?>"
                                            class="max-w-full max-h-[190px] object-contain block">
                                    <?php endif; ?>
                                </div>
                                <div class="card-body p-4.5 flex flex-col gap-2.5 flex-1">
                                    <h3 class="title text-[15px] font-semibold text-[#111] m-0 mb-1.5"><?php the_title(); ?>
                                    </h3>
                                    <div class="meta text-[13px] text-muted flex gap-3 items-center flex-wrap">
                                        <div
                                            class="availability inline-flex gap-2 items-center font-semibold text-[var(--green)] text-[13px]">
                                            <span class="dot w-2 h-2 rounded-full bg-[var(--green)] inline-block"></span>
                                            <?php echo esc_html($in_stock); ?>
                                        </div>
                                        <div class="country">
                                            <?php echo esc_html(get_post_meta(get_the_ID(), '_country', true) ?: 'Россия'); ?>
                                        </div>
                                    </div>
                                    <div class="code text-muted text-[13px]">Код: <?php echo esc_html($sku); ?></div>
                                    <div class="price-row mt-auto flex items-center justify-between gap-3 pt-1.5">
                                        <div class="price text-lg font-bold"><?php echo wp_kses_post($price_html); ?></div>
                                    </div>
                                </div>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p>Товары не найдены.</p>';
                    endif;
                    ?>
                </section>

                <section
                    class="hero-bleed w-full bg-gradient-to-r from-[#0f2f11] via-[#19581e] to-[#123318] text-white py-7 mt-8">
                    <div class="hero max-w-[1700px] mx-auto grid grid-cols-[1fr_480px] gap-6 items-center px-3">
                        <div class="hero-left py-7 px-3">
                            <div class="eyebrow text-[12px] text-[#cfe6cf] tracking-wide mb-2 uppercase">Собственное
                                производство</div>
                            <h1 class="m-0 mb-2.5 text-[34px] leading-tight font-extrabold text-[#ffd83a]">Пищевые
                                технологии</h1>
                            <p class="m-0 text-white/85 max-w-[520px] text-[15px]">Завод пищевого оборудования и
                                комплексное оснащение объектов общественного питания. Качественные линии, печи,
                                холодильные решения и сервис под ключ.</p>
                        </div>
                        <div class="hero-right flex items-center justify-center px-3">
                            <div class="hero-image w-full h-[140px] bg-[url('https://via.placeholder.com/900x220?text=Banner+Image')] bg-contain bg-no-repeat bg-right min-h-[160px]"
                                role="img" aria-label="Изображение оборудования"></div>
                        </div>
                    </div>
                </section>

                <section class="about max-w-[1700px] my-9 mx-auto grid grid-cols-[1fr_540px] gap-10 items-center px-3">
                    <div>
                        <div class="meta text-muted uppercase text-[12px] tracking-wide mb-2">О компании</div>
                        <h2 class="m-0 mb-4.5 text-[28px]"><?php the_title(); ?></h2>
                        <div class="lead text-[#6b6b6b] m-0 mb-4.5 leading-relaxed">
                            <?php the_content(); ?>
                        </div>
                        <a class="btn inline-block bg-[var(--green)] text-white py-3 px-5 rounded-md no-underline font-bold shadow"
                            href="#">Подробности</a>
                    </div>
                    <div class="image-wrap w-full overflow-hidden rounded-lg border border-[var(--border)]">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
                                class="block w-full h-full object-cover">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/1000x600?text=Showroom+Image" alt="Зал с оборудованием"
                                class="block w-full h-full object-cover">
                        <?php endif; ?>
                    </div>
                </section>

            </main>
        </div>
    </div>
</main>

<?php get_footer(); ?>

<script>
    (function () {
        const slidesEl = document.getElementById('slides');
        const slides = slidesEl ? slidesEl.children : [];
        const dotsEl = document.getElementById('dots');
        let idx = 0;
        function renderDots() {
            if (!dotsEl) return;
            dotsEl.innerHTML = '';
            for (let i = 0; i < slides.length; i++) {
                const d = document.createElement('button');
                d.className = 'w-2.5 h-2.5 rounded-full ' + (i === idx ? 'bg-white' : 'bg-white/60');
                d.setAttribute('aria-label', 'Перейти к слайду ' + (i + 1));
                d.onclick = () => { idx = i; update(); };
                dotsEl.appendChild(d);
            }
        }
        function update() {
            if (!slidesEl) return;
            slidesEl.style.transform = `translateX(-${idx * 100}%)`;
            renderDots();
        }
        document.querySelectorAll('[data-action="prev"]').forEach(btn => {
            btn.addEventListener('click', () => { idx = Math.max(0, idx - 1); update(); });
        });
        document.querySelectorAll('[data-action="next"]').forEach(btn => {
            btn.addEventListener('click', () => { idx = Math.min(slides.length - 1, idx + 1); update(); });
        });
        let auto = setInterval(() => { idx = (idx + 1) % slides.length; update(); }, 5000);
        const slider = document.getElementById('heroSlider');
        if (slider) {
            slider.addEventListener('mouseenter', () => clearInterval(auto));
            slider.addEventListener('mouseleave', () => auto = setInterval(() => { idx = (idx + 1) % slides.length; update(); }, 5000));
        }
        update();
    })();
</script>
<?php
// single-product.php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        $post_id = get_the_ID();
        $price = povarenok_get_meta( $post_id, 'price', '158 452 сом' );
        $stock = povarenok_get_meta( $post_id, 'stock', 'В наличии' );
        $volume = povarenok_get_meta( $post_id, 'volume', '' );
        ?>
        <main class="site-main">
            <div class="container product-page">

                <div class="product-top">
                    <div class="breadcrumbs"><?php // Вы можете подключить breadcrumbs здесь ?></div>
                    <h1 class="product-title"><?php the_title(); ?></h1>
                </div>

                <div class="product-grid">
                    <div class="product-left">
                        <div class="gallery">
                            <div class="main-image">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'large' );
                                } else {
                                    // fallback image
                                    echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/no-image.png' ) . '" alt="">';
                                }
                                ?>
                            </div>

                            <div class="thumbs" aria-hidden="true">
                                <?php
                                // thumbnails: берём вложения изображения
                                $attachments = get_attached_media( 'image', $post_id );
                                $count = 0;
                                foreach ( $attachments as $att ) {
                                    if ( $count > 3 ) break;
                                    $thumb = wp_get_attachment_image( $att->ID, 'thumbnail' );
                                    echo $thumb;
                                    $count++;
                                }
                                ?>
                            </div>
                        </div>

                        <div class="product-tabs" role="tablist" aria-label="Табы товара">
                            <button class="tab tab--active" role="tab" aria-selected="true">Описание</button>
                            <button class="tab" role="tab" aria-selected="false">Характеристики</button>
                            <button class="tab" role="tab" aria-selected="false">Документы</button>
                        </div>

                        <section class="specs" aria-labelledby="specs-title">
                            <h2 id="specs-title" class="specs-title">Технические характеристики</h2>
                            <table class="spec-table" role="table" aria-label="Технические характеристики">
                                <tbody>
                                <tr><td>Производитель</td><td><?php echo povarenok_get_meta( $post_id, 'manufacturer', 'ПИЩТЕХ' ); ?></td></tr>
                                <tr><td>Страна</td><td><?php echo povarenok_get_meta( $post_id, 'country', 'Россия' ); ?></td></tr>
                                <tr><td>Напряжение</td><td><?php echo povarenok_get_meta( $post_id, 'voltage', '380 В' ); ?></td></tr>
                                <tr><td>Мощность</td><td><?php echo povarenok_get_meta( $post_id, 'power', '6 кВт' ); ?></td></tr>
                                <tr><td>Объем</td><td><?php echo $volume; ?></td></tr>
                                <tr><td>Габариты</td><td><?php echo povarenok_get_meta( $post_id, 'dimensions', '970 × 650 × 900 мм' ); ?></td></tr>
                                </tbody>
                            </table>
                        </section>

                        <div class="long-desc">
                            <?php the_content(); ?>
                        </div>

                    </div> <!-- /.product-left -->

                    <aside class="product-right" aria-label="Покупка и рекомендации">
                        <div class="price-card" role="region" aria-labelledby="price-label">
                            <div id="price-label" class="price"><?php echo esc_html( $price ); ?></div>
                            <div class="stock"><?php echo esc_html( $stock ); ?></div>

                            <div class="qty-row">
                                <div class="qty-controls">
                                    <button type="button" aria-label="Уменьшить">−</button>
                                    <input id="qty" type="number" value="1" min="1" aria-label="Количество">
                                    <button type="button" aria-label="Увеличить">+</button>
                                    <button class="btn btn-buy" type="button">Добавить в корзину</button>
                                </div>
                            </div>
                            <button class="btn btn-buy btn-white" type="button">Купить в 1 клик</button>
                        </div>

                        <div class="recommended" aria-label="Рекомендуемые товары">
                            <h4 class="recommended-title">Рекомендуем</h4>
                            <ul class="rec-list">
                                <?php
                                // Пример: вывести 3 последних поста
                                $rec = new WP_Query( array( 'posts_per_page' => 3 ) );
                                if ( $rec->have_posts() ) {
                                    while ( $rec->have_posts() ) {
                                        $rec->the_post();
                                        ?>
                                        <li>
                                            <?php if ( has_post_thumbnail() ) the_post_thumbnail( 'thumbnail' ); else echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/no-image.png' ) . '" alt="">' ; ?>
                                            <div class="r-info">
                                                <div class="r-title"><?php the_title(); ?></div>
                                                <div class="r-price"><?php echo povarenok_get_meta( get_the_ID(), 'price', '—' ); ?></div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                }
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>

                    </aside>

                </div> <!-- /.product-grid -->

            </div> <!-- /.container -->
        </main>
        <?php
    endwhile;
endif;

get_footer();

<?php
/* Template Name: single-exact-copy */
?>

<?php get_header(); ?>

<style>
  :root{--content-width:1300px}
  body{background:#fff;color:#111;font-family:Inter,system-ui,-apple-system,'Helvetica Neue',Arial}
  .product-container{max-width:var(--content-width);margin:0 auto;padding:24px}
  .breadcrumbs{color:#6b6b6b;font-size:13px;margin-bottom:10px}
  h1.product-title{font-size:28px;font-weight:800;margin:0 0 10px}

  .layout{display:flex;gap:28px;align-items:flex-start}
  /* левый большой блок */
  .left-col{flex:1;min-width:0}
  .product-card{background:#fff;border:1px solid rgba(0,0,0,.06);border-radius:8px;padding:20px}
  .gallery{display:flex;gap:16px;flex-direction:column}
  .main-image-box{border:1px solid rgba(0,0,0,.04);border-radius:8px;display:flex;align-items:center;justify-content:center;padding:18px;background:#fff;min-height:720px}
  .main-image{width:100%;height:auto;max-height:1400px;object-fit:contain;display:block}
  .thumbs{display:flex;gap:12px;justify-content:flex-start;margin-top:12px}
  .thumb{width:140px;height:140px;object-fit:cover;border-radius:6px;border:1px solid rgba(0,0,0,.06);cursor:pointer}

  /* табы */
  .tabs{display:flex;gap:10px;margin-top:20px;flex-wrap:wrap}
  .tabs .tab{padding:10px 14px;border-radius:6px;background:#f6f8f6;border:1px solid rgba(0,0,0,.04);font-weight:600;cursor:pointer}
  .tabs .tab.active{background:#fff;border-color:#2fa336;color:#111}

  /* specs */
  .specs-card{background:#fff;border:1px solid rgba(0,0,0,.06);border-radius:8px;padding:18px;margin-top:18px}
  .specs-card h3{margin:0 0 12px;font-size:18px}
  .specs-table{width:100%;border-collapse:collapse}
  .specs-table tr{border-bottom:1px dashed rgba(0,0,0,.06)}
  .specs-table td{padding:10px 8px;vertical-align:top}
  .specs-table td:first-child{color:#6b6b6b;width:60%}
  .desc-text{color:#666;line-height:1.6;margin-top:12px}

  /* правый блок */
  .right-col{width:340px;flex-shrink:0;position:sticky;top:28px}
  .buy-box{background:#fff;border:1px solid rgba(0,0,0,.06);border-radius:8px;padding:18px}
  .price-row{display:flex;align-items:center;gap:12px;justify-content:space-between}
  .price-big{font-size:36px;font-weight:900;color:#111}
  .status{display:flex;align-items:center;gap:8px}
  .status-dot{width:10px;height:10px;border-radius:999px;background:#2fa336;display:inline-block}
  .status-text{color:#2fa336;font-weight:700}

  .price-note{font-size:13px;color:#6b6b6b;margin-top:6px}
  .qty-row{display:flex;gap:8px;align-items:center;margin-top:14px}
  .qty-row button{padding:8px 12px;border:1px solid rgba(0,0,0,.08);border-radius:6px;background:#fff;cursor:pointer}
  .qty-row input{width:70px;text-align:center;padding:8px;border:1px solid rgba(0,0,0,.06);border-radius:6px}

  .actions{display:flex;flex-direction:column;gap:10px;margin-top:14px}
  .btn-primary{background:linear-gradient(#2fa336,#1f8b2b);color:#fff;padding:12px;border-radius:8px;font-weight:800;border:none;cursor:pointer}
  .btn-secondary{background:#fff;border:1px solid rgba(0,0,0,.06);padding:10px;border-radius:8px;font-weight:700;cursor:pointer}

  .small-link{display:block;margin-top:10px;color:#6b6b6b;font-size:13px;text-decoration:none}

  /* похожие товары */
  .similar-wrap{margin-top:22px}
  .similar-header{display:flex;align-items:center;justify-content:space-between}
  .similar-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin-top:12px}
  .similar-item{background:#fff;border:1px solid rgba(0,0,0,.04);padding:10px;border-radius:8px;text-align:center}
  .similar-item img{width:100%;height:140px;object-fit:contain;margin-bottom:8px}
  .similar-item .sim-title{font-size:13px;font-weight:600}
  .sim-price{color:#0b7a0b;font-weight:800;margin-top:6px}

  /* responsive */
  @media(max-width:1024px){
    .layout{flex-direction:column}
    .right-col{width:100%;position:static;order:2}
    .similar-grid{grid-template-columns:repeat(2,1fr)}
  }
</style>

<main class="product-container">

  <!-- breadcrumbs + title -->
  <div>
    <nav class="breadcrumbs">Главная — Каталог — Оборудование — Тепловое оборудование</nav>
    <h1 class="product-title">Сковорода электрическая ПищТех СЭП-0,25</h1>
    <div class="meta-row" style="color:#6b6b6b;font-size:13px;margin-top:6px">
      Код товара: н0000180343 &nbsp;&nbsp; Артикул: СЭП-0,25
    </div>
  </div>

  <div class="layout" style="margin-top:18px;">

    <!-- LEFT -->
    <div class="left-col">
      <div class="product-card">

        <div class="gallery">
          <div class="main-image-box">
            <!-- большая картинка -->
            <img id="mainImg" class="main-image" src="https://zavod-pt.kg/upload/resize_cache/iblock/748/450_450_140cd750bba9870f18aada2478b24840a/q050r137uvmfzpl7gllqp2hjyxlw7qp8.jpeg" alt="Сковорода">
          </div>

          <div class="thumbs" aria-hidden="true">
            <!-- миниатюры (если есть несколько) -->
            <img class="thumb" data-src="https://zavod-pt.kg/upload/resize_cache/iblock/748/900_900_140cd750bba9870f18aada2478b24840a/q050r137uvmfzpl7gllqp2hjyxlw7qp8.jpeg" src="https://zavod-pt.kg/upload/resize_cache/iblock/748/200_200_140cd750bba9870f18aada2478b24840a/q050r137uvmfzpl7gllqp2hjyxlw7qp8.jpeg" alt="">
            <img class="thumb" data-src="https://zavod-pt.kg/upload/iblock/5de/other1.jpg" src="https://zavod-pt.kg/upload/iblock/5de/other1_small.jpg" alt="">
            <img class="thumb" data-src="https://zavod-pt.kg/upload/iblock/5de/other2.jpg" src="https://zavod-pt.kg/upload/iblock/5de/other2_small.jpg" alt="">
          </div>

          <!-- табы (как на сайте) -->
          <div class="tabs" role="tablist" aria-label="Product tabs">
            <button class="tab active" data-tab="desc">Описание</button>
            <button class="tab" data-tab="avail">Наличие</button>
            <button class="tab" data-tab="docs">Документы и файлы</button>
            <button class="tab" data-tab="more">Дополнительно</button>
          </div>

          <!-- содержимое табов -->
          <div id="tab-desc" class="tab-content" style="margin-top:14px">
            <div class="specs-card">
              <h3>Технические характеристики</h3>
              <table class="specs-table" aria-hidden="false">
                <tbody>
                  <tr><td>Производитель</td><td>ПИЩТЕХ</td></tr>
                  <tr><td>Страна</td><td>Россия</td></tr>
                  <tr><td>Входное напряжение, В</td><td>380</td></tr>
                  <tr><td>Габариты без упаковки (ДхШхВ), мм</td><td>985x850(900)x820(840)</td></tr>
                  <tr><td>Гарантийный срок</td><td>12 мес.</td></tr>
                  <tr><td>Номинальная мощность, кВт</td><td>6</td></tr>
                  <tr><td>Объем, л</td><td>38</td></tr>
                </tbody>
              </table>

              <p class="desc-text">Крышка, борта, пульт управления и лицевая часть обшивки чаши выполнены из нержавеющей стали, остальные элементы — оцинкованная сталь. Чаша выполнена из чугуна. Температура рабочей поверхности от 45 до 270 °C. Оснащена аварийным предохранителем от перегрева свыше 320 °C.</p>
            </div>
          </div>

          <div id="tab-avail" class="tab-content" style="display:none;margin-top:14px">
            <div class="specs-card">
              <h3>Наличие</h3>
              <p class="desc-text">На складе: <strong>Под заказ</strong> или уточняйте у менеджера. Возможна доставка и расчёт сроков.</p>
            </div>
          </div>

          <div id="tab-docs" class="tab-content" style="display:none;margin-top:14px">
            <div class="specs-card">
              <h3>Документы и файлы</h3>
              <p class="desc-text"><a href="#" class="small-link">Загрузить паспорт (pdf)</a></p>
            </div>
          </div>

          <div id="tab-more" class="tab-content" style="display:none;margin-top:14px">
            <div class="specs-card">
              <h3>Дополнительно</h3>
              <p class="desc-text">Информация о комплектации, опциях и аксессуарах — уточняйте у менеджера.</p>
            </div>
          </div>

        </div><!-- /.gallery -->

        <!-- похожие товары -->
        <div class="similar-wrap">
          <div class="similar-header">
            <h4 style="margin:0;font-size:18px;font-weight:700">Похожие товары</h4>
            <!-- единый бейдж -->
            <span style="background:#eaf7ec;color:#0b7a0b;padding:8px 12px;border-radius:999px;font-weight:800;font-size:12px;border:1px solid rgba(47,163,54,.12)">Рекомендую</span>
          </div>

          <div class="similar-grid">
            <div class="similar-item">
              <img src="https://zavod-pt.kg/upload/resize_cache/iblock/748/400_400_140cd750bba9870f18aada2478b24840a/q050r137uvmfzpl7gllqp2hjyxlw7qp8.jpeg" alt="">
              <div class="sim-title">Сковорода электрическая</div>
              <div class="sim-price">191 940 сом</div>
              <button class="btn-secondary" style="margin-top:8px">В корзину</button>
            </div>
            <!-- ещё элементы... -->
          </div>
        </div>

      </div><!-- /.product-card -->
    </div><!-- /.left-col -->

    <!-- RIGHT -->
    <aside class="right-col">
      <div class="buy-box">
        <div class="price-row">
          <div class="price-big">164 338 сом</div>
          <div>
            <!-- цена-статус -->
          
          </div>
        </div>

        <div class="price-note">Варианты цен: 164 338 сом</div>

        <div class="qty-row" style="margin-top:14px">
          <button id="decr">−</button>
          <input id="qty" type="number" min="1" value="1" aria-label="Количество">
          <button id="incr">+</button>
        </div>

        <div class="actions">
          <button class="btn-primary" id="addToCart">В корзину</button>
          <button class="btn-secondary" id="oneClick">Купить в 1 клик</button>
        </div>

        <a href="#" class="small-link">Получить дополнительную информацию можно у менеджера интернет-магазина</a>

        <div style="margin-top:12px">
          <button class="btn-secondary" style="width:100%">Рассчитать доставку</button>
        </div>
      </div>

      <!-- рекомендованные -->
      <div style="margin-top:18px;background:#fff;border:1px solid rgba(0,0,0,.06);border-radius:8px;padding:12px">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <div style="font-weight:700">Рекомендованные товары</div>
        </div>

        <div style="margin-top:10px">
          <div style="display:flex;gap:10px;align-items:center;padding:10px 0;border-top:1px solid rgba(0,0,0,.04)">
            <img src="https://zavod-pt.kg/upload/resize_cache/iblock/748/200_200_140cd750bba9870f18aada2478b24840a/q050r137uvmfzpl7gllqp2hjyxlw7qp8.jpeg" style="width:72px;height:56px;object-fit:cover;border-radius:6px" alt="">
            <div>
              <div style="font-size:13px;font-weight:600">Ванна моечная ПищТех ЭКОНОМ</div>
              <div style="color:#0b7a0b;font-weight:800;margin-top:6px">17 328 сом</div>
            </div>
          </div>

          <!-- другие rec-items -->
        </div>
      </div>
    </aside>

  </div><!-- /.layout -->

</main>

<?php get_footer(); ?>

<script>
  (function(){
    // qty control
    const incr = document.getElementById('incr');
    const decr = document.getElementById('decr');
    const qty = document.getElementById('qty');
    if(incr) incr.addEventListener('click', ()=> qty.value = Math.max(1, parseInt(qty.value||1)+1));
    if(decr) decr.addEventListener('click', ()=> qty.value = Math.max(1, parseInt(qty.value||1)-1));

    // thumbs -> main
    document.querySelectorAll('.thumb').forEach(el=>{
      el.addEventListener('click', ()=>{
        const src = el.dataset.src || el.src;
        const main = document.getElementById('mainImg'); if(main) main.src = src;
        document.querySelectorAll('.thumb').forEach(t=> t.style.boxShadow = '');
        el.style.boxShadow = '0 4px 18px rgba(0,0,0,.08)';
      });
    });

    // tabs behaviour
    document.querySelectorAll('.tabs .tab').forEach(btn=>{
      btn.addEventListener('click', ()=>{
        document.querySelectorAll('.tabs .tab').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const tab = btn.dataset.tab;
        ['desc','avail','docs','more'].forEach(id=>{
          const el = document.getElementById('tab-'+id);
          if(!el) return;
          el.style.display = (id === tab) ? 'block' : 'none';
        });
      });
    });

    // addToCart dummy
    const addToCart = document.getElementById('addToCart');
    if(addToCart){
      addToCart.addEventListener('click', ()=>{
        // сюда интегрируйте ваш AJAX/add-to-cart
        alert('Добавлено в корзину: ' + (qty ? qty.value : 1) + ' шт.');
      });
    }

    // one click
    const oneClick = document.getElementById('oneClick');
    if(oneClick){
      oneClick.addEventListener('click', ()=>{
        // можно открыть модал с формой, пока просто пример
        alert('Оформить покупку в 1 клик — откроется форма (реализуйте модал).');
      });
    }
  })();
</script>

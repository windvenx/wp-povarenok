<?php
/**
 * Custom Single Product Template
 */

if (!defined('ABSPATH')) exit;

global $product;

if (!$product || !$product instanceof WC_Product) {
    $product = wc_get_product(get_the_ID());
}

$main_image_id   = $product->get_image_id();
$gallery_ids     = $product->get_gallery_image_ids();
$main_image_url  = wp_get_attachment_image_url($main_image_id, 'large');

get_header('shop'); ?>

<div class="container">
    <main class="product-container">

  <!-- breadcrumbs + title -->
  <div>
    <?php woocommerce_breadcrumb(); ?>
    <h1 class="product-title"><?php the_title(); ?></h1>
    <div class="meta-row" style="color:#6b6b6b;font-size:13px;margin-top:6px">
      Код товара: <?php echo esc_html($product->get_sku()); ?>
    </div>
  </div>

  <div class="layout" style="margin-top:18px;">

    <!-- LEFT -->
    <div class="left-col">
      <div class="product-card">

        <div class="gallery">
          <div class="main-image-box">
            <img id="mainImg" class="main-image" 
                 src="<?php echo esc_url($main_image_url); ?>" 
                 alt="<?php the_title_attribute(); ?>">
          </div>

          <!-- thumbnails -->
          <?php if ($gallery_ids): ?>
          <div class="thumbs">
            <?php foreach ($gallery_ids as $img_id): ?>
              <img class="thumb"
                   data-src="<?php echo esc_url(wp_get_attachment_url($img_id)); ?>"
                   src="<?php echo esc_url(wp_get_attachment_image_url($img_id, 'thumbnail')); ?>"
                   alt="<?php the_title_attribute(); ?>">
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

          <!-- Tabs -->
          <div class="tabs" role="tablist" aria-label="Product tabs">
            <button class="tab active" data-tab="desc">Описание</button>
            <?php if ($product->get_attributes()) : ?>
              <button class="tab" data-tab="specs">Характеристики</button>
            <?php endif; ?>
          </div>

          <!-- tab contents -->
          <div id="tab-desc" class="tab-content" style="margin-top:14px">
            <div class="specs-card">
              <h3>Описание</h3>
              <p class="desc-text"><?php echo wp_kses_post($product->get_description()); ?></p>
            </div>
          </div>

          <?php if ($product->get_attributes()) : ?>
          <div id="tab-specs" class="tab-content" style="display:none;margin-top:14px">
            <div class="specs-card">
              <h3>Характеристики</h3>
              <table class="specs-table">
                <tbody>
                <?php foreach ($product->get_attributes() as $attr): ?>
                  <tr>
                    <td><?php echo esc_html(wc_attribute_label($attr->get_name())); ?></td>
                    <td>
                      <?php
                      if ($attr->is_taxonomy()) {
                          echo esc_html(implode(', ', wc_get_product_terms($product->get_id(), $attr->get_name(), ['fields'=>'names'])));
                      } else {
                          echo esc_html(implode(', ', $attr->get_options()));
                      }
                      ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <?php endif; ?>

        </div>
      </div>
    </div>

    <!-- RIGHT -->
    <aside class="right-col">
      <div class="buy-box">
        <div class="price-row">
          <div class="price-big">
            <?php echo $product->get_price_html(); ?>
          </div>
        </div>

        <!-- Add to cart -->
        <div class="actions">
          <?php woocommerce_template_single_add_to_cart(); ?>
        </div>
      </div>
    </aside>

  </div>
</main>
</div>

<?php get_footer('shop'); ?>

<style>
  :root {
    --container-width: 1450px; /* можно менять централизованно */
  }

  .site-container {
    width: 100%;
    max-width: var(--container-width);
    margin: 0 auto;
    padding: 0 16px;
    box-sizing: border-box;
  }
</style>

<footer class="bg-[#303030] shadow">
  <div class="site-container p-4 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <a href="<?php echo home_url() ?>" class="mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
        <?php
        $logo = wp_get_attachment_image_src(get_theme_mod("custom_logo"), "full");
        ?>
        <?php if (!empty($logo)) : ?>
          <img src="<?php echo esc_url($logo[0]) ?>" alt="<?php echo esc_attr(get_bloginfo("name")) ?>"
               class="w-auto h-16">
        <?php else: ?>
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">
            <?php echo esc_html(get_bloginfo("name")) ?>
          </span>
        <?php endif; ?>
      </a>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'Footer',
        'container' => 'ul',
        'menu_class' => 'flex flex-wrap gap-[20px] items-center mb-6 text-sm font-medium text-white sm:mb-0 footer-list',
      ));
      ?>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <span class="block text-sm text-white sm:text-center">
      © 2025 <a href="<?php echo esc_url(home_url()) ?>" class="hover:underline">POVARENOK</a>. Все права защищены.
    </span>
  </div>
</footer>

<script>
  (function(w,d,u){
    var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
    var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
  })(window,document,'https://compservice24.com.kg/upload/crm/site_button/loader_6_29aenm.js');
</script>
</body>
</html>

(function($){
  // helper: hex -> rgba
  function hexToRgba(hex, alpha) {
    if (!hex) return 'rgba(0,0,0,' + alpha + ')';
    hex = hex.replace('#','');
    if (hex.length === 3) {
      hex = hex.split('').map(function(h){ return h + h; }).join('');
    }
    var bigint = parseInt(hex, 16);
    var r = (bigint >> 16) & 255;
    var g = (bigint >> 8) & 255;
    var b = bigint & 255;
    return 'rgba(' + r + ',' + g + ',' + b + ',' + alpha + ')';
  }

  // список настроек, которые мы слушаем
  var colorSettings = [
    'home_color_border',
    'home_color_green',
    'home_color_card_bg',
    'home_hero_start',
    'home_hero_end',
    'home_hero_alpha',
    'home_promo_overlay',
    'home_promo_alpha',
    'home_btn_bg',
    'home_btn_text'
  ];

  // Для каждой настройки подписываемся на изменения
  if (window.wp && wp.customize) {
    colorSettings.forEach(function(key){
      wp.customize(key, function(value) {
        value.bind(function(newVal) {
          // обновляем соответствующие CSS-переменные
          switch(key) {
            case 'home_color_border':
              document.documentElement.style.setProperty('--border', newVal);
              break;
            case 'home_color_green':
              document.documentElement.style.setProperty('--green', newVal);
              break;
            case 'home_color_card_bg':
              document.documentElement.style.setProperty('--card-bg', newVal);
              break;
            case 'home_hero_start':
            case 'home_hero_end':
            case 'home_hero_alpha':
              // берем текущие 3 значения и записываем два CSS var --hero-grad-start/--hero-grad-end
              var start = wp.customize('home_hero_start')() || '#000000';
              var end = wp.customize('home_hero_end')() || '#000000';
              var alpha = parseFloat(wp.customize('home_hero_alpha')() || '0.15');
              document.documentElement.style.setProperty('--hero-grad-start', hexToRgba(start, alpha));
              document.documentElement.style.setProperty('--hero-grad-end', hexToRgba(end, alpha));
              break;
            case 'home_promo_overlay':
            case 'home_promo_alpha':
              var promoColor = wp.customize('home_promo_overlay')() || '#000000';
              var promoAlpha = parseFloat(wp.customize('home_promo_alpha')() || '0.55');
              document.documentElement.style.setProperty('--promo-overlay', hexToRgba(promoColor, promoAlpha));
              break;
            case 'home_btn_bg':
              document.documentElement.style.setProperty('--btn-bg', newVal);
              break;
            case 'home_btn_text':
              document.documentElement.style.setProperty('--btn-text', newVal);
              break;
          }
        });
      });
    });

    // Initial apply для preview (когда Customizer загружается)
    $(function(){
      var start = wp.customize('home_hero_start')() || '#000000';
      var end = wp.customize('home_hero_end')() || '#000000';
      var a = parseFloat(wp.customize('home_hero_alpha')() || '0.15');
      document.documentElement.style.setProperty('--hero-grad-start', hexToRgba(start, a));
      document.documentElement.style.setProperty('--hero-grad-end', hexToRgba(end, a));
      var promoColor = wp.customize('home_promo_overlay')() || '#000000';
      var promoA = parseFloat(wp.customize('home_promo_alpha')() || '0.55');
      document.documentElement.style.setProperty('--promo-overlay', hexToRgba(promoColor, promoA));
      document.documentElement.style.setProperty('--border', wp.customize('home_color_border')() || '#e8e8e8');
      document.documentElement.style.setProperty('--green', wp.customize('home_color_green')() || '#16a34a');
      document.documentElement.style.setProperty('--card-bg', wp.customize('home_color_card_bg')() || '#ffffff');
      document.documentElement.style.setProperty('--btn-bg', wp.customize('home_btn_bg')() || '#16a34a');
      document.documentElement.style.setProperty('--btn-text', wp.customize('home_btn_text')() || '#ffffff');
    });
  }
})(jQuery);

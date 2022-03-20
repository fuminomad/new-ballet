<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- 公開前に削除 noindex-->
<meta name="robots" content="noindex" />

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!-- adobe fonts -->
  <script>
    (function(d) {
      var config = {
          kitId: 'juo0nbo',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/dbx2bft.css">
  <!-- webフォントチラつき防止（低速環境考慮） -->
  <script>
    setTimeout(function() {
      document.getElementsByTagName("html")[0].classList.add("loading-delay");
    }, 3000);
  </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header j-header">
    <div class="p-header-inner">



      <h1 class="p-header-logo"><a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/sumiya-logo-3.png" alt="ロゴ" loading="lazy" width="135" height="71">
        </a></h1>

      <div class="p-header-nav">
        <?php
        wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'global', //ヘッダーメニューをここに表示すると指定
            // 'container' => 'div',
            'container_class' => 'p-header-nav__items',
            'menu_class' => 'p-header-nav__item',
          )
        );
        ?>
      </div>
      <div class="p-header_btn j-header_btn">
        <div class="p-header_hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <?php
    wp_nav_menu(
      array(
        'depth' => 1,
        'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
        'container' => 'nav',
        'container_class' => 'p-header_nav',
        'menu_class' => 'p-header_nav_list',
      )
    );
    ?>
    <div class="p-header_nav-background"></div>
  </header>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>大城皮フ科クリニック江南院｜愛知県江南市の皮膚科・美容皮膚科</title>
  <meta name="description" content="江南駅から車10分・駐車場完備。休診中だった大城皮フ科クリニック江南院が2025年7月診療再開。一般・小児・美容皮膚科まで幅広く対応。診療時間・アクセスはこちら。">

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NPQHBLXJ');</script>
  <!-- End Google Tag Manager -->

  <link rel="icon" href="https://oshiro-skin-clinic.com/favicon.ico">
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet"
    href="<?php echo get_template_directory_uri(); ?>/css/main.css?<?php echo date('YmdHi', filemtime(get_template_directory() . '/css/main.css')); ?>">
  <!-- WEB FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
    rel="stylesheet">

  <?php wp_head(); ?>
</head>

<?php $page_info = get_page_meta_info(); ?>

<body <?php echo body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPQHBLXJ" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php if (is_front_page()): ?>
    <header>
      <div class="header_inner">
        <h1 class="header_logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.svg"
              alt="大城皮フ科クリニック 江南院"></a></h1>
        <!-- <nav class="g_nav">
      <ul class="g_nav_list">
        <li class="g_nav_item"><a href="#">クリニックについて</a></li>
        <li class="g_nav_item"><a href="#">診療メニュー</a></li>
        <li class="g_nav_item"><a href="#">症例一覧</a></li>
        <li class="g_nav_item"><a href="#">料金表</a></li>
        <li class="g_nav_item"><a href="#">アクセス</a></li>
      </ul>
      <div id="openbtn" class="btn_hamburger">
        <div class="hamburger_lines">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
    </nav> -->
      </div>
      <!-- <div class="ham_con">
    <div class="ham_con_inner container_s">
    </div>
  </div> -->
    </header>

    <!-- メインビジュアル -->
    <div class="mv">
      <div class="mv_swiper">
        <ul class="swiper-wrapper">
          <li class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mv01.webp" alt="" class="pc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mv01_sp.webp" alt="" class="sp">
          </li>
        </ul>
      </div>
      <div class="mv_copy">
        <!-- <p class="date">7月1日 OPEN!</p> -->
        <p class="read">江南市の<br>
          皆さまにとって<span class="underline">通いやすく</span><br>
          <span class="underline">皮膚科専門医が必ず診察する</span><br>
          体制を整えた皮膚科医院です。</p>
        <p class="txt">「日本一患者様思いの皮膚科」<br>
          「地域の皆様に気軽に最新の医療を」を<br>
          更に高いレベルで追求します。</p>
      </div>
    </div>
  <?php endif; ?>

  <!-- 右追従メニュー -->
  <div class="fixed_cta">
    <ul class="fixed_cta_list">
      <li class="fixed_cta_item oguchi">
        <a href="https://oshiro-skin-clinic.com/" target="_blank">
          <i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/cta_icon_reservation.svg"
              alt=""></i>
          大口本院<br>予約
        </a>
      </li>
      <li class="fixed_cta_item konan">
        <a href="https://oshiro.mdja.jp" target="_blank">
          <i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/cta_icon_reservation.svg"
              alt=""></i>
          江南院<br>予約
        </a>
      </li>
      <li class="fixed_cta_item line">
        <a href="https://lin.ee/0ZzlqhH" target="_blank">
          <i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/cta_icon_line.svg" alt=""></i>
          LINE
        </a>
      </li>
      <li class="fixed_cta_item instagram">
        <a href="https://www.instagram.com/oshiro_skin_clinic/" target="_blank">
          <i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/cta_icon_instagram.svg" alt=""></i>
          Instagram
        </a>
      </li>
      <li class="fixed_cta_item blog">
        <a href="https://oshiro-skin-clinic.com/blog/" target="_blank">
          <i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/cta_icon_blog.svg" alt=""></i>
          ブログ
        </a>
      </li>
    </ul>
  </div>

  <main>
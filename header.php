<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M8QTBK5');
  </script>
  <!-- End Google Tag Manager -->
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <link rel="stylesheet"
    href="<?php echo get_template_directory_uri(); ?>/css/main.css?<?php echo date('YmdHi', filemtime(get_template_directory() . '/css/main.css')); ?>">
  <!-- WEB FONT -->
  <link rel="stylesheet" href="https://use.typekit.net/psw4cdu.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Shippori+Mincho:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<?php $page_info = get_page_meta_info(); ?>

<body <?php echo body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8QTBK5" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <!-- ご予約・お問い合わせ/ハンバーガー 最初だけ出現 -->
    <div class="contact-ham__btn contact-ham__btn--intro">
      <?php include(get_template_directory() . '/template-parts/common/reservation-buttons.php'); ?>

      <div class="common__btn-hamburger openbtn">
        <div class="hamburger_lines">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
    </div>
    <div class="header-inner">
      <?php if (!is_singular('general')): ?>
        <<?php echo $page_info['logo_tag']; ?> class="g-nav__logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-color--konan.svg" alt="大城皮フ科クリニック 江南院">
          </a>
        </<?php echo $page_info['logo_tag']; ?>>
      <?php endif; ?>

      <div class="g-nav">
        <ul class="g-nav_list">
          <!-- 当院について -->
          <li class="g-nav_item has-dropdown-small">
            <a href="<?php echo home_url(); ?>/about/">
              <p class="label">２つのクリニック</p>
              <p class="sub_label">CLINIC</p>
            </a>
            <div class="dropdown-menu-small">
              <div class="dropdown-menu-small__inner">
                <ul class="dropdown-menu-small__list">
                  <li class="dropdown-menu-small__item">
                    <a href="https://oshiro-skin-clinic.com/" target="_blank">大口本院</a>
                  </li>
                  <li class="dropdown-menu-small__item">
                    <a href="<?php echo home_url(); ?>">江南院</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <!-- 江南院について -->
          <li class="g-nav_item has-dropdown-small">
            <a href="<?php echo home_url(); ?>/visit/">
              <p class="label">江南院について</p>
              <p class="sub_label">ABOUT</p>
            </a>
            <div class="dropdown-menu-small">
              <div class="dropdown-menu-small__inner">
                <ul class="dropdown-menu-small__list">
                  <li class="dropdown-menu-small__item">
                    <a href="<?php echo home_url(); ?>/about/">江南院について</a>
                  </li>
                  <li class="dropdown-menu-small__item">
                    <a href="<?php echo home_url(); ?>/visit/">初めての方へ</a>
                  </li>
                  <li class="dropdown-menu-small__item">
                    <a href="<?php echo home_url(); ?>/access/">アクセス</a>
                  </li>
                  <li class="dropdown-menu-small__item">
                    <a href="https://oshiro-skin-clinic.com/blogcat/info-konan/" target="_blank">お知らせ</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <!-- 一般皮膚科/小児皮膚科 -->
          <li class="g-nav_item has-dropdown-large">
            <a href="" style="pointer-events: none;">
              <p class="label">一般皮膚科/小児皮膚科</p>
              <p class="sub_label">DERMATOLOGY</p>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu__inner">
                <div class="dropdown-menu__head">
                  <ul class="nav-list">
                    <li class="nav-item">
                      <a href="https://oshiro-skin-clinic.com/general/" target="_blank" rel="noopener noreferrer">一般皮膚科</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://oshiro-skin-clinic.com/child/" target="_blank" rel="noopener noreferrer">小児皮膚科</a>
                    </li>
                  </ul>
                </div>
                <div class="dropdown-menu__main">
                  <div class="subject-block">
                    <!-- <p class="subject-block__ttl">一般皮膚科/小児皮膚科の疾患</p> -->

                    <ul class="list-arrow">
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/atipic-dermatitis/" target="_blank" rel="noopener noreferrer">
                          アトピー性皮膚炎 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/seborrheic-dermatitis/" target="_blank" rel="noopener noreferrer">
                          脂漏性皮膚炎（顔や頭のかゆみ） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/dry-skin/" target="_blank" rel="noopener noreferrer">
                          乾燥肌 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/hand-eczema/" target="_blank" rel="noopener noreferrer">
                          手湿疹/手荒れ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/hives/" target="_blank" rel="noopener noreferrer">
                          じんましん </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/ingrown-nail/" target="_blank" rel="noopener noreferrer">
                          巻き爪/陥入爪 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/shingles/" target="_blank" rel="noopener noreferrer">
                          帯状疱疹 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/athlete-foot/" target="_blank" rel="noopener noreferrer">
                          水虫 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/acne-php/" target="_blank" rel="noopener noreferrer">
                          にきび（尋常性ざ瘡） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/vitiligo/" target="_blank" rel="noopener noreferrer">
                          白斑 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/red-face/" target="_blank" rel="noopener noreferrer">
                          赤ら顔（酒さ/毛細血管拡張症） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/hair-loss/" target="_blank" rel="noopener noreferrer">
                          円形脱毛症 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/corn-callus/" target="_blank" rel="noopener noreferrer">
                          たこ/うおのめ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/epidermal-cyst/" target="_blank" rel="noopener noreferrer">
                          粉瘤（アテローム） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/sunburn/" target="_blank" rel="noopener noreferrer">
                          日焼け </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/contact-dermatitis/" target="_blank" rel="noopener noreferrer">
                          かぶれ（接触皮膚炎） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/abrasion-cut/" target="_blank" rel="noopener noreferrer">
                          切り傷/すり傷 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/food-allergy-rash/" target="_blank" rel="noopener noreferrer">
                          食物アレルギー </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/palmoplantar-pustulosis/" target="_blank" rel="noopener noreferrer">
                          掌蹠膿疱症 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/lipoma/" target="_blank" rel="noopener noreferrer">
                          脂肪腫 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/infantile-hemangioma/" target="_blank" rel="noopener noreferrer">
                          血管腫（乳児血管腫いちご状血管腫） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/malassezia-folliculitis/" target="_blank" rel="noopener noreferrer">
                          マラセチア毛包炎 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/nevus/" target="_blank" rel="noopener noreferrer">
                          ほくろ（色素性母斑） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/nail-fungus/" target="_blank" rel="noopener noreferrer">
                          爪水虫 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/rosacea/" target="_blank" rel="noopener noreferrer">
                          酒さ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/corns/" target="_blank" rel="noopener noreferrer">
                          うおのめ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/herpes/" target="_blank" rel="noopener noreferrer">
                          単純ヘルペス </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- // 一般皮膚科/小児皮膚科 -->
          <!-- 皮膚外科/成形外科 -->
          <li class="g-nav_item has-dropdown-large">
            <a href="https://oshiro-skin-clinic.com/surgery/" target="_blank" rel="noopener noreferrer">
              <p class="label">皮膚外科/形成外科</p>
              <p class="sub_label">SURGERY</p>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu__inner">
                <div class="dropdown-menu__head">
                  <ul class="nav-list">
                    <li class="nav-item">
                      <a href="https://oshiro-skin-clinic.com/surgery/" target="_blank" rel="noopener noreferrer">皮膚外科/形成外科</a>
                    </li>
                  </ul>
                </div>
                <div class="dropdown-menu__main">
                  <div class="subject-block">
                    <!-- <p class="subject-block__ttl">皮膚外科/形成外科の疾患</p> -->

                    <ul class="list-arrow">
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/seborrheic-keratosis/" target="_blank" rel="noopener noreferrer">
                          老人性いぼ（脂漏性角化症） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/scar-keloid/" target="_blank" rel="noopener noreferrer">
                          瘢痕・ケロイド </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/ingrown-nail/" target="_blank" rel="noopener noreferrer">
                          巻き爪・陥入爪 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/burn/" target="_blank" rel="noopener noreferrer">
                          やけど </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/epidermal-cyst/" target="_blank" rel="noopener noreferrer">
                          粉瘤（アテローム） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/abrasion-cut/" target="_blank" rel="noopener noreferrer">
                          すり傷・切り傷 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/infantile-hemangioma/" target="_blank" rel="noopener noreferrer">
                          赤あざ（いちご状血管腫・単純性血管腫） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/nevus/" target="_blank" rel="noopener noreferrer">
                          ほくろ（母斑） </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/blue-nevus/" target="_blank" rel="noopener noreferrer">
                          青あざ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/general/nevus-spilus/" target="_blank" rel="noopener noreferrer">
                          茶あざ </a>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- // 皮膚外科/成形外科 -->

          <!-- 美容皮膚科 -->
          <li class="g-nav_item has-dropdown-large">
            <a href="https://oshiro-skin-clinic.com/beauty/" target="_blank" rel="noopener noreferrer">
              <p class="label">美容皮膚科</p>
              <p class="sub_label">AESTHETICS</p>
            </a>
            <div class="dropdown-menu dropdown-beauty">
              <div class="dropdown-menu__inner">
                <div class="dropdown-menu__head">
                  <ul class="nav-list">
                    <li class="nav-item">
                      <a href="https://oshiro-skin-clinic.com/beauty/" target="_blank" rel="noopener noreferrer">美容皮膚科</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://oshiro-skin-clinic.com/case/" target="_blank" rel="noopener noreferrer">症例写真</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://oshiro-skin-clinic.com/price/" target="_blank" rel="noopener noreferrer">料金表</a>
                    </li>
                  </ul>
                  <?php get_template_part('template-parts/common/beauty-note-konan'); ?>
                </div>

                <div class="dropdown-menu__main">
                  <div class="subject-block">
                    <p class="subject-block__ttl">お悩み一覧</p>

                    <ul class="list-arrow">
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/medical-diet/" target="_blank" rel="noopener noreferrer">
                          メディカルダイエット </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/body-odor-hyperhidrosis/" target="_blank" rel="noopener noreferrer">
                          ワキガ・多汗症 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/removal/" target="_blank" rel="noopener noreferrer">
                          医療脱毛 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/hyperpigmentation/" target="_blank" rel="noopener noreferrer">
                          炎症後色素沈着・くすみ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/rosacea/" target="_blank" rel="noopener noreferrer">
                          赤ら顔・酒さ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/skin-rejuvenation/" target="_blank" rel="noopener noreferrer">
                          肌育・肌質改善 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/bruise/" target="_blank" rel="noopener noreferrer">
                          あざ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/pores/" target="_blank" rel="noopener noreferrer">
                          毛穴の開き・黒ずみ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/aga/" target="_blank" rel="noopener noreferrer">
                          AGA・女性の薄毛 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/texture/" target="_blank" rel="noopener noreferrer">
                          きめ・ハリ・ツヤ不足 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/stain/" target="_blank" rel="noopener noreferrer">
                          シミ・肝斑・そばかす </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/wrinkles/" target="_blank" rel="noopener noreferrer">
                          しわ・たるみ・小顔 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/tattoo/" target="_blank" rel="noopener noreferrer">
                          タトゥー・アートメイク除去 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/acne/" target="_blank" rel="noopener noreferrer">
                          ニキビ・ニキビ痕 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/earrings/" target="_blank" rel="noopener noreferrer">
                          ピアス </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/worries/moles-warts/" target="_blank" rel="noopener noreferrer">
                          ほくろ・いぼ </a>
                      </li>
                    </ul>

                  </div>

                  <div class="subject-block">
                    <p class="subject-block__ttl">美容皮膚科の治療</p>

                    <ul class="list-arrow">
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/hyaluron/" target="_blank" rel="noopener noreferrer">
                          ヒアルロン酸注射 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/botox/" target="_blank" rel="noopener noreferrer">
                          ボトックス注射 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/sunekos/" target="_blank" rel="noopener noreferrer">
                          スネコス注射 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/pluryal/" target="_blank" rel="noopener noreferrer">
                          プルリアルデンシファイ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/art-make/" target="_blank" rel="noopener noreferrer">
                          アートメイク </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/peeling/" target="_blank" rel="noopener noreferrer">
                          ピーリング </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/isotretinoin/" target="_blank" rel="noopener noreferrer">
                          イソトレチノイン </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/kabeline/" target="_blank" rel="noopener noreferrer">
                          カベリン </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/spectra-2/" target="_blank" rel="noopener noreferrer">
                          ハリウッドスペクトラ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/mosaic-3d/" target="_blank" rel="noopener noreferrer">
                          モザイク3D </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/trifill-pro/" target="_blank" rel="noopener noreferrer">
                          トライフィルプロ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/xerf-rf/" target="_blank" rel="noopener noreferrer">
                          XERF ザーフ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/vbeam-2/" target="_blank" rel="noopener noreferrer">
                          VビームⅡ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/ultracel-zi/" target="_blank" rel="noopener noreferrer">
                          ウルトラセルZi </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/co2-fractional/" target="_blank" rel="noopener noreferrer">
                          CO2 RE </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/3d-camera/" target="_blank" rel="noopener noreferrer">
                          3Dカメラ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/ib103q/" target="_blank" rel="noopener noreferrer">
                          Qスイッチルビーレーザー </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/eco2/" target="_blank" rel="noopener noreferrer">
                          エコツーエボリューション </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/lasemd/" target="_blank" rel="noopener noreferrer">
                          ラセムド </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/infini/" target="_blank" rel="noopener noreferrer">
                          インフィニハイブリッド </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/potenza/" target="_blank" rel="noopener noreferrer">
                          ポテンツァ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/dermapen/" target="_blank" rel="noopener noreferrer">
                          ダーマペン4 </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/hydra-shower/" target="_blank" rel="noopener noreferrer">
                          ハイドラシャワー </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/soprano/" target="_blank" rel="noopener noreferrer">
                          ソプラノチタニウム </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/clarity/" target="_blank" rel="noopener noreferrer">
                          クラリティツイン </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/healite/" target="_blank" rel="noopener noreferrer">
                          ヒーライトⅡ </a>
                      </li>
                      <li>
                        <a href="https://oshiro-skin-clinic.com/beauty/rebeau/" target="_blank" rel="noopener noreferrer">
                          レビュー2 </a>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- 美容皮膚科 -->
          <li class="g-nav_item has-dropdown-small">
            <a href="https://oshiro-skin-clinic.com/doctors-cosme/" target="_blank">
              <p class="label">ドクターズコスメ</p>
              <p class="sub_label">COSME</p>
            </a>
            <div class="dropdown-menu-small">
              <div class="dropdown-menu-small__inner">
                <ul class="dropdown-menu-small__list">
                  <li class="dropdown-menu-small__item">
                    <a href="https://oshiro-skin-clinic.shop/?utm_source=official_site&utm_medium=referral&utm_campaign=cosme_product_page&utm_content=&top"
                      target="_blank">オンラインショップ</a>
                  </li>
                  <li class="dropdown-menu-small__item">
                    <a href="https://oshiro-skin-clinic.com/doctors-cosme/" target="_blank">取り扱い製品一覧</a>
                  </li>
                  <li class="dropdown-menu-small__item">
                    <a href="https://oshiro-skin-clinic.shop/chrono-verso.html?utm_source=official_site&utm_medium=referral&utm_campaign=cosme_product_page&utm_content=&chrono-verso"
                      target="_blank">クロノヴァーソ</a>
                  </li>
                  <li class="dropdown-menu-small__item">
                    <a href="https://oshiro-skin-clinic.shop/products/500.html?utm_source=official_site&utm_medium=referral&utm_campaign=cosme_product_page&utm_content=&chrono-un-deux"
                      target="_blank">クロノアンドゥ</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <!-- <li class="g-nav_item">
            <a href="#">
              <p class="label">採用情報</p>
              <p class="sub_label">RECRUIT</p>
            </a>
          </li> -->
        </ul>
      </div>
      <!-- ご予約・お問い合わせ/ハンバーガー -->
      <div class="contact-ham__btn">
        <?php include(get_template_directory() . '/template-parts/common/reservation-buttons.php'); ?>
        <div class="common__btn-hamburger openbtn">
          <div class="hamburger_lines">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
        </div>
      </div>
    </div>

    <?php include(get_template_directory() . '/template-parts/common/reservation-modal-konan.php'); ?>
    <?php include(get_template_directory() . '/template-parts/common/reservation-modal-oguchi.php'); ?>

    <!-- ハンバーガーメニュー -->
    <div class="ham-contents">
      <!-- ご予約・お問い合わせ/ハンバーガー -->
      <div class="contact-ham__btn">
        <?php include(get_template_directory() . '/template-parts/common/reservation-buttons.php'); ?>
        <div class="common__btn-hamburger openbtn">
          <div class="hamburger_lines">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="ham-contents__inner container-m">
        <p class="ham-logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-color--konan.svg" alt="大城皮フ科クリニック 江南院">
          </a>
        </p>
        <div class="ham--left-right">
          <div class="ham--left">
            <div class="ham--banner sp">
              <ul class="banner__list">
                <li class="banner__item">
                  <a href="https://oshiro-skin-clinic.shop/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/banner-online-store.webp" alt="オンラインストアバナー">
                  </a>
                </li>
              </ul>
            </div>
            <div class="ham--sns sns sp">
              <ul class="sns__list">
                <li class="sns__item">
                  <a href="https://www.instagram.com/oshiro_skin_clinic/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sns-instagram.webp" alt="Instagram">
                  </a>
                </li>
                <li class="sns__item">
                  <a href="https://www.youtube.com/channel/UCcqbuu9Gf0VfEPmhj_dtBpA" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sns-youtube.webp" alt="YouTube">
                  </a>
                </li>
                <li class="sns__item">
                  <a href="https://line.me/R/ti/p/%40krk6891a" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sns-line.webp" alt="LINE">
                  </a>
                </li>
              </ul>
            </div>

            <!-- 大口院メニュー -->
            <div class="ham-contents__nav ham-contents__nav--clinic">
              <ul class="ham-contents__nav-list">
                <li class="ham-contents__nav-item nav-item--general-child">
                  <div class="ham-contents__nav-accordion">
                    <a href="https://oshiro-skin-clinic.com/" target="_blank">
                      <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/img_hum-section--oguchi-sp.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_hum-section--oguchi.webp" alt="" loading="lazy">
                      </picture>
                      大口本院トップ
                    </a>

                  </div>
                  <div class="nav-accordion__area">
                    <ul class="nav-accordion__list">
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/about/" target="_blank">大口本院について</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/visit/" target="_blank">初めての方へ</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/access/" target="_blank">アクセス</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/genre/news/" target="_blank">お知らせ</a>
                      </li>

                    </ul>
                  </div>
                </li>
              </ul>
            </div>

            <!-- 江南院メニュー -->
            <div class="ham-contents__nav ham-contents__nav--clinic">
              <ul class="ham-contents__nav-list">
                <li class="ham-contents__nav-item nav-item--general-child">
                  <div class="ham-contents__nav-accordion">
                    <a href="<?php echo home_url(); ?>">
                      <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/img_hum-section--konan-sp.webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_hum-section--konan.webp" alt="" loading="lazy">
                      </picture>
                      江南院トップ
                    </a>

                  </div>
                  <div class="nav-accordion__area">
                    <ul class="nav-accordion__list">
                      <li class="nav-accordion__item">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>">江南院について</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="<?php echo esc_url(home_url('/visit/')); ?>">初めての方へ</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="<?php echo esc_url(home_url('/access/')); ?>">アクセス</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/blogcat/info-konan/" target="_blank" rel="noopener noreferrer">お知らせ</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>

            <!-- 両院共通 -->
            <div class="ham-contents__nav nav--other">
              <ul class="ham-contents__nav-list">
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.com/genre/blog/" target="_blank">ブログ</a>
                </li>
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.com/recruit/" target="_blank">求人情報</a>
                </li>
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.com/faq/" target="_blank">よくある質問</a>
                </li>
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.com/price/" target="_blank">美容料金表</a>
                </li>
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.com/case/" target="_blank">症例写真</a>
                </li>

                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.com/medical-cooperation/" target="_blank">病診連携について</a>
                </li>
                <li class="ham-contents__nav-item is-full-width">
                  <a href="https://oshiro-skin-clinic.com/inquiry-media/" target="_blank">メディア掲載/出演依頼のお問い合せ</a>
                </li>
              </ul>
            </div>

            <!-- ドクターズコスメ -->
            <div class="ham-contents__nav nav--doctors-cosme">
              <p class="ham-contents__nav-ttl">ドクターズコスメ</p>
              <ul class="ham-contents__nav-list">
                <li class="ham-contents__nav-item">
                  <a href="<?php echo home_url(); ?>/doctors-cosme#anchor-all">取り扱い製品一覧</a>
                </li>
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.shop/chrono-verso.html?utm_source=official_site&utm_medium=referral&utm_campaign=cosme_product_page&utm_content=&chrono-verso"
                    target="_blank">クロノヴァーソ
                    <span class="supplement-badge">院長監修のオリジナルコスメ</span>
                  </a>
                </li>
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.shop/products/500.html?utm_source=official_site&utm_medium=referral&utm_campaign=cosme_product_page&utm_content=&chrono-un-deux"
                    target="_blank">クロノアンドゥ
                    <span class="supplement-badge">院長監修のオリジナルコスメ</span>
                  </a>
                </li>
              </ul>
            </div>

            <!-- 一般皮膚科 -->
            <div class="ham-contents__nav nav--general">
              <p class="ham-contents__nav-ttl">一般皮膚科</p>
              <ul class="ham-contents__nav-list">
                <li class="ham-contents__nav-item nav-item--general-child">
                  <div class="ham-contents__nav-accordion"><a href="https://oshiro-skin-clinic.com/general/" target="_blank" rel="noopener noreferrer">一般皮膚科トップ</a>
                  </div>
                  <div class="nav-accordion__area">
                    <ul class="nav-accordion__list">
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/general/atipic-dermatitis/" target="_blank" rel="noopener noreferrer">アトピー性皮膚炎</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/general/acne-php/" target="_blank" rel="noopener noreferrer">にきび（尋常性ざ瘡）</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/general/warts/" target="_blank" rel="noopener noreferrer">いぼ（尋常性疣贅）</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/general/#anchor-menu" target="_blank" rel="noopener noreferrer">その他の疾患</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>

            <!-- 小児科皮膚科 -->
            <div class="ham-contents__nav nav--general">
              <p class="ham-contents__nav-ttl">小児科皮膚科</p>
              <ul class="ham-contents__nav-list">
                <li class="ham-contents__nav-item nav-item--general-child">
                  <div class="ham-contents__nav-accordion"><a href="https://oshiro-skin-clinic.com/child/" target="_blank" rel="noopener noreferrer">小児科皮膚科トップ</a>
                  </div>
                  <div class="nav-accordion__area">
                    <ul class="nav-accordion__list">
                      <!-- <li class="nav-accordion__item">
            <a href="https://oshiro-skin-clinic.com/general/" target="_blank" rel="noopener noreferrer">乳児湿疹</a>
          </li> -->
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/general/warts/" target="_blank" rel="noopener noreferrer">いぼ</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/general/hives/" target="_blank" rel="noopener noreferrer">じんましん</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/child/#anchor-menu" target="_blank" rel="noopener noreferrer">その他の疾患</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>

            <!-- 皮膚外科/形成外科 -->
            <div class="ham-contents__nav nav--general">
              <p class="ham-contents__nav-ttl">皮膚外科 / 形成外科</p>
              <ul class="ham-contents__nav-list">
                <li class="ham-contents__nav-item nav-item--general-child">
                  <div class="ham-contents__nav-accordion"><a href="https://oshiro-skin-clinic.com/surgery/" target="_blank" rel="noopener noreferrer">皮膚外科 /
                      形成外科トップ</a></div>
                  <div class="nav-accordion__area">
                    <ul class="nav-accordion__list">
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/general/epidermal-cyst/" target="_blank" rel="noopener noreferrer">粉瘤（アテローム）</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/general/ingrown-nail/" target="_blank" rel="noopener noreferrer">巻き爪/陥入爪</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/general/nevus/" target="_blank" rel="noopener noreferrer">ほくろ（色素性母斑）</a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/surgery/#anchor-menu" target="_blank" rel="noopener noreferrer">その他の疾患</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>

            <!-- 美容診療 -->
            <div class="ham-contents__nav nav--beauty">
              <p class="ham-contents__nav-ttl">美容診療</p>
              <?php get_template_part('template-parts/common/beauty-note-konan'); ?>
              <ul class="ham-contents__nav-list">
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.com/beauty/" target="_blank" rel="noopener noreferrer">美容診療トップ</a>
                </li>
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.com/price/" target="_blank" rel="noopener noreferrer">料金表</a>
                </li>
                <li class="ham-contents__nav-item">
                  <a href="https://oshiro-skin-clinic.com/case/" target="_blank" rel="noopener noreferrer">症例一覧</a>
                </li>
                <li class="ham-contents__nav-item">
                  <p class="ham-contents__nav-accordion">お悩み一覧</p>
                  <div class="nav-accordion__area">
                    <ul class="nav-accordion__list">
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/medical-diet/" target="_blank" rel="noopener noreferrer">
                          メディカルダイエット </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/body-odor-hyperhidrosis/" target="_blank" rel="noopener noreferrer">
                          ワキガ・多汗症 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/removal/" target="_blank" rel="noopener noreferrer">
                          医療脱毛 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/hyperpigmentation/" target="_blank" rel="noopener noreferrer">
                          炎症後色素沈着・くすみ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/rosacea/" target="_blank" rel="noopener noreferrer">
                          赤ら顔・酒さ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/skin-rejuvenation/" target="_blank" rel="noopener noreferrer">
                          肌育・肌質改善 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/bruise/" target="_blank" rel="noopener noreferrer">
                          あざ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/pores/" target="_blank" rel="noopener noreferrer">
                          毛穴の開き・黒ずみ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/aga/" target="_blank" rel="noopener noreferrer">
                          AGA・女性の薄毛 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/texture/" target="_blank" rel="noopener noreferrer">
                          きめ・ハリ・ツヤ不足 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/stain/" target="_blank" rel="noopener noreferrer">
                          シミ・肝斑・そばかす </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/wrinkles/" target="_blank" rel="noopener noreferrer">
                          しわ・たるみ・小顔 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/tattoo/" target="_blank" rel="noopener noreferrer">
                          タトゥー・アートメイク除去 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/acne/" target="_blank" rel="noopener noreferrer">
                          ニキビ・ニキビ痕 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/earrings/" target="_blank" rel="noopener noreferrer">
                          ピアス </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/worries/moles-warts/" target="_blank" rel="noopener noreferrer">
                          ほくろ・いぼ </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="ham-contents__nav-item">
                  <p class="ham-contents__nav-accordion">治療メニュー一覧</p>
                  <div class="nav-accordion__area">
                    <ul class="nav-accordion__list">
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/hyaluron/" target="_blank" rel="noopener noreferrer">
                          ヒアルロン酸注射 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/botox/" target="_blank" rel="noopener noreferrer">
                          ボトックス注射 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/sunekos/" target="_blank" rel="noopener noreferrer">
                          スネコス注射 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/pluryal/" target="_blank" rel="noopener noreferrer">
                          プルリアルデンシファイ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/art-make/" target="_blank" rel="noopener noreferrer">
                          アートメイク </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/peeling/" target="_blank" rel="noopener noreferrer">
                          ピーリング </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/isotretinoin/" target="_blank" rel="noopener noreferrer">
                          イソトレチノイン </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/kabeline/" target="_blank" rel="noopener noreferrer">
                          カベリン </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/spectra-2/" target="_blank" rel="noopener noreferrer">
                          ハリウッドスペクトラ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/mosaic-3d/" target="_blank" rel="noopener noreferrer">
                          モザイク3D </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/trifill-pro/" target="_blank" rel="noopener noreferrer">
                          トライフィルプロ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/xerf-rf/" target="_blank" rel="noopener noreferrer">
                          XERF ザーフ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/vbeam-2/" target="_blank" rel="noopener noreferrer">
                          VビームⅡ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/ultracel-zi/" target="_blank" rel="noopener noreferrer">
                          ウルトラセルZi </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/co2-fractional/" target="_blank" rel="noopener noreferrer">
                          CO2 RE </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/3d-camera/" target="_blank" rel="noopener noreferrer">
                          3Dカメラ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/ib103q/" target="_blank" rel="noopener noreferrer">
                          Qスイッチルビーレーザー </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/eco2/" target="_blank" rel="noopener noreferrer">
                          エコツーエボリューション </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/lasemd/" target="_blank" rel="noopener noreferrer">
                          ラセムド </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/infini/" target="_blank" rel="noopener noreferrer">
                          インフィニハイブリッド </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/potenza/" target="_blank" rel="noopener noreferrer">
                          ポテンツァ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/dermapen/" target="_blank" rel="noopener noreferrer">
                          ダーマペン4 </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/hydra-shower/" target="_blank" rel="noopener noreferrer">
                          ハイドラシャワー </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/soprano/" target="_blank" rel="noopener noreferrer">
                          ソプラノチタニウム </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/clarity/" target="_blank" rel="noopener noreferrer">
                          クラリティツイン </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/healite/" target="_blank" rel="noopener noreferrer">
                          ヒーライトⅡ </a>
                      </li>
                      <li class="nav-accordion__item">
                        <a href="https://oshiro-skin-clinic.com/beauty/rebeau/" target="_blank" rel="noopener noreferrer">
                          レビュー2 </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>

          </div>

          <div class="ham--right">
            <div class="ham--banner pc">
              <ul class="banner__list">
                <li class="banner__item">
                  <a href="https://oshiro-skin-clinic.shop/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/banner-online-store.webp" alt="オンラインストアバナー">
                  </a>
                </li>
              </ul>
            </div>
            <!-- <div class="ham--cta">
              <ul class="cta__list">
                <li class="cta__item cta-line">
                  <a href="https://line.me/R/ti/p/%40krk6891a" target="_blank">LINE予約はこちら</a>
                </li>
                <li class="cta__item cta-web">
                  <a href="https://ssc.doctorqube.com/oshiro-skin-clinic/" target="_blank">Web予約はこちら</a>
                </li>
                <li class="cta__item cta-tel">
                  <a href="tel:050-5538-1079">電話予約はこちら</a>
                </li>
              </ul>
            </div> -->
            <div class="ham--sns sns pc">
              <ul class="sns__list">
                <li class="sns__item">
                  <a href="https://www.instagram.com/oshiro_skin_clinic/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sns-instagram.webp" alt="Instagram">
                  </a>
                </li>
                <li class="sns__item">
                  <a href="https://www.youtube.com/channel/UCcqbuu9Gf0VfEPmhj_dtBpA" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sns-youtube.webp" alt="YouTube">
                  </a>
                </li>
                <li class="sns__item">
                  <a href="https://line.me/R/ti/p/%40krk6891a" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sns-line.webp" alt="LINE">
                  </a>
                </li>
              </ul>
            </div>
            <div class="ham--privacy-policy">
              <a href="https://ssc.doctorqube.com/oshiro-skin-clinic/privacy.html" target="_blank"
                class="privacy-policy_link">プライバシーポリシー</a>
            </div>
          </div>
        </div>
      </div>

      <!-- SP用固定CTA -->
      <div class="fixed-btn-contact">
        <?php include(get_template_directory() . '/template-parts/common/fixed-cta-buttons.php'); ?>
        <!-- <div class="common__btn-contact">
          <a href="#">ご予約・お問い合わせ</a>
        </div> -->
      </div>

    </div>
  </header>

  <!-- SP用固定CTA -->
  <div class="fixed-btn-contact" id="fixed-btn-contact">
    <?php include(get_template_directory() . '/template-parts/common/fixed-cta-buttons.php'); ?>
  </div>
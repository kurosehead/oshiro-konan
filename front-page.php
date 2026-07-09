<?php get_header(); ?>

<main>
  <!-- MV -->
  <div class="top--mv">
    <p class="mv__logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white--konan.svg" alt="大城皮フ科クリニック江南院">
      </a>
    </p>

    <div class="mv">
      <div class="mv_swiper">
        <ul class="swiper-wrapper">
          <li class="swiper-slide">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/mv01_sp.webp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv01.webp" alt="" loading="eager" fetchpriority="high">
            </picture>
          </li>
          <li class="swiper-slide">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/mv02_sp.webp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv02.webp" alt="">
            </picture>
          </li>
          <li class="swiper-slide">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/mv03_sp.webp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv03.webp" alt="">
            </picture>
          </li>
          <li class="swiper-slide">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/mv04_sp.webp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv04.webp" alt="">
            </picture>
          </li>
          <li class="swiper-slide">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/mv05_sp.webp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv05.webp" alt="">
            </picture>
          </li>
        </ul>
      </div>
      <div class="mv__overlay" aria-hidden="true"></div>
      <div class="mv_copy">
        <p class="txt">大城皮フ科クリニック江南院</p>
        <p class="read">
          江南市の皆さまにとって<br>
          通いやすく皮膚科専門医が<br>
          必ず診察します
        </p>
      </div>
    </div>
  </div>


  <div class="news-information__wrap container">
    <!-- NEWS -->
    <section class="top--news">
      <?php
      $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
          array(
            'taxonomy' => 'genre',  // タクソノミー名
            'field' => 'slug',   // タームをスラッグで指定
            'terms' => 'news',   // 表示したいタームのスラッグ
          ),
        ),
      );
      $the_query = new WP_Query($args);
      ?>
      <h2 class="sec-ttl">NEWS</h2>
      <?php if ($the_query->have_posts()): ?>
        <ul class="news__list">
          <?php while ($the_query->have_posts()):
            $the_query->the_post(); ?>
            <li class="news__item">
              <a href="<?php the_permalink(); ?>">
                <time><?php the_time('Y.m.d'); ?></time>
                <p class="post-ttl">
                  <?php the_title(); ?>
                </p>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif;
      wp_reset_postdata(); ?>
      <div class="news__btn btn-more--underline">
        <a href="<?php echo home_url(); ?>/genre/news/">もっと見る</a>
      </div>
    </section>

    <!-- INFORMATON -->
    <section class="top--information">
      <h2 class="sec-ttl">INFORMATON</h2>
      <div class="information-table--area">
        <table class="information-table">
          <tbody>
            <tr>
              <th>受付時間</th>
              <td>月</td>
              <td>火</td>
              <td>水</td>
              <td>木</td>
              <td>金</td>
              <td>土</td>
              <td>日</td>
            </tr>
            <tr>
              <th>9:00~<br class="sp">12:00</th>
              <td class="on">〇</td>
              <td class="on">〇</td>
              <td class="on">〇</td>
              <td class="off">ー</td>
              <td class="on">〇</td>
              <td class="on">〇</td>
              <td class="off">ー</td>
            </tr>
            <tr>
              <th>14:00~<br class="sp">17:00</th>
              <td class="on">〇</td>
              <td class="on">〇</td>
              <td class="on">〇</td>
              <td class="off">ー</td>
              <td class="on">〇</td>
              <td class="off">ー</td>
              <td class="off">ー</td>
            </tr>
          </tbody>
        </table>
        <p class="notes">【休診日】木・土・日</p>
        <p class="notes">受付時間が過ぎても診察が続いている場合、ご予約されている患者さまに限り午前は12:00まで、午後は17:30まで</p>
      </div>
    </section>
  </div>

  <!-- 勤務医カレンダー -->
  <section class="top--calendar">
    <div class="container">
      <h2 class="sec-ttl">CALENDAR</h2>
      <div class="top-calendar__calendar">
        <ul class="top-calendar__doctor-list" aria-label="勤務医アイコンの説明">
          <li class="top-calendar__doctor top-calendar__doctor--man">
            <img
              class="top-calendar__doctor-icon"
              src="<?php echo get_template_directory_uri(); ?>/img/icon_oshiro.svg" alt="">
            <span class="top-calendar__doctor-name">大城医師</span>
          </li>
          <li class="top-calendar__doctor top-calendar__doctor--man">
            <img
              class="top-calendar__doctor-icon"
              src="<?php echo get_template_directory_uri(); ?>/img/icon_shibata.svg" alt="">
            <span class="top-calendar__doctor-name">柴田医師</span>
          </li>
          <li class="top-calendar__doctor top-calendar__doctor--man">
            <img
              class="top-calendar__doctor-icon"
              src="<?php echo get_template_directory_uri(); ?>/img/icon_takeuchi.svg" alt="">
            <span class="top-calendar__doctor-name">竹内医師</span>
          </li>
          <li class="top-calendar__doctor top-calendar__doctor--woman">
            <img
              class="top-calendar__doctor-icon"
              src="<?php echo get_template_directory_uri(); ?>/img/icon_nagata.svg" alt="">
            <span class="top-calendar__doctor-name">永田医師</span>
          </li>
          <li class="top-calendar__doctor top-calendar__doctor--woman">
            <img
              class="top-calendar__doctor-icon"
              src="<?php echo get_template_directory_uri(); ?>/img/icon_kamata.svg" alt="">
            <span class="top-calendar__doctor-name">鎌田医師</span>
          </li>
        </ul>

        <div class="top-calendar__list">
          <section class="top-calendar__item" aria-labelledby="calendar-202607">
            <h3 class="top-calendar__month" id="calendar-202607">
              <time datetime="2026-07">2026年 7月</time>
            </h3>

            <figure class="top-calendar__figure">
              <img
                class="top-calendar__image"
                src="<?php echo get_template_directory_uri(); ?>/img/calendar/202607.webp"
                alt="2026年7月の勤務医カレンダー">
            </figure>
          </section>

          <section class="top-calendar__item" aria-labelledby="calendar-202608">
            <h3 class="top-calendar__month" id="calendar-202608">
              <time datetime="2026-08">2026年 8月</time>
            </h3>

            <figure class="top-calendar__figure">
              <img
                class="top-calendar__image"
                src="<?php echo get_template_directory_uri(); ?>/img/calendar/202608.webp"
                alt="2026年8月の勤務医カレンダー">
            </figure>
          </section>
        </div>
      </div>
    </div>
  </section>


  <!-- ACCESS -->
  <section class="top--access" id="anchor-access">
    <div class="container">
      <h2 class="sec-ttl">ACCESS</h2>
      <div class="map-area">
        <div class="illust-map">
          <img src="<?php echo get_template_directory_uri(); ?>/img/illust-map--konan.webp" alt="地図イラスト">
        </div>
        <div class="google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.0100983395123!2d136.8764842!3d35.355395699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600309f290da99e7%3A0x8017623685107c23!2z5aSn5Z-O55qu44OV56eR44Kv44Oq44OL44OD44Kv5rGf5Y2X6Zmi!5e0!3m2!1sja!2sjp!4v1783580355946!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
      </div>
      <div class="btn-more">
        <a href="https://maps.app.goo.gl/gr4bZZkCGaePdeK88" target="_blank">Googleマップを見る</a>
      </div>
    </div>
  </section>

  <!-- PROMISE -->
  <section class="top--promise">
    <div class="promise__inner">
      <div class="promise___ttl">
        <p class="en">OUR PROMISE TO YOU</p>
        <h2 class="ja">患者様へのお約束</h2>
      </div>
      <p class="promise__lead">すべての方に、信頼の医療を。</p>
      <p class="promise__lead-sub">赤ちゃんからご高齢の方まで、<br>肌のお悩みに誠実に向き合います。</p>
      <p class="promise__txt txt">
        もう一度、江南市の皆さまのお肌を支えたい。<br>
        大口本院への通院が難しかった方々のために、的確な診断を支える設備と、<br>
        お迎え前やお仕事の間にも立ち寄りやすい「14時開始の午後診療」で、<br>
        暮らしに寄り添う安心を提供します。<br>
        どんな小さなお悩みも、確かな技術でお応えいたします。
      </p>
      <div class="promise__obj-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/promise-obj_sp.webp" alt="">
      </div>
    </div>
  </section>

  <!-- FEAURES -->
  <section class="top--features">
    <div class="sec-ttl--bilingual">
      <p class="en">FEATURES</p>
      <h2 class="ja">大城皮フ科クリニックが<br>多くの方に選ばれる理由</h2>
    </div>
    <div class="features__list">
      <!-- features01 -->
      <div class="features__item">
        <div class="features__head">
          <h3 class="features__ttl">再び江南市の<br>かかりつけ皮膚科へ</h3>
          <div class="features__num">1</div>
        </div>
        <div class="features__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/features01-figure.webp" alt="">
        </div>
        <div class="features__panel">
          <p class="txt">
            「大口本院は遠くて通いづらい」というお声を頂戴することも多かったため、もう一度江南市で診療を行い、地域のお役に立ちたいと戻ってまいりました。<br>
            江南院で、本院と同水準の安心できる皮膚科診療をお届けします。<br>
            皆さまに寄り添う身近なクリニックとして、どんなことでもご相談ください。
          </p>
        </div>
        <div class="num01-img-area">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/features01-img01.webp" alt="">
          </div>
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/features01-img02.webp" alt="">
          </div>
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/features01-img03.webp" alt="">
          </div>
        </div>
      </div>
      <!-- features02 -->
      <div class="features__item switching-frame">
        <div class="features__head">
          <h3 class="features__ttl">患者様想いの<br>皮膚科診療体制</h3>
          <div class="features__num">2</div>
        </div>

        <!-- コンテンツ表示部 -->
        <div class="features__img switching-frame__view swiper">
          <div class="swiper-wrapper">
            <!-- content1 -->
            <div id="content1" class="switching-frame__content content1 swiper-slide active">
              <div class="switching-frame__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/switching-frame01_sp.webp" alt="">
              </div>
              <h4 class="switching-frame__ttl">
                診察の前に、スタッフが事前に症状や<br class="sp">お悩みをお伺いします
              </h4>
              <p class="switching-frame__txt">
                医師の診察前に、スタッフが患者様の現在の状態やご要望をお聞きいたします。お話しいただいた内容はしっかりと医師に引き継ぎますので、気になる点や不安なことはどうぞ遠慮なくお伝えください。
              </p>
            </div>

            <!-- content2 -->
            <div id="content2" class="switching-frame__content content2 swiper-slide">
              <div class="switching-frame__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/switching-frame02_sp.webp" alt="">
              </div>
              <h4 class="switching-frame__ttl">
                お一人おひとりに寄り添い、<br>最適な皮膚科治療をお届けします。
              </h4>
              <p class="switching-frame__txt">
                当院では皮膚科専門医が患者さまの症状を詳しく診察し、最適な治療法をご提案いたします。疾患やケアについて分かりやすく説明し、肌トラブルの改善と理想の肌づくりをサポート。常に最善の医療をお届けできるよう、学会や講習会へ積極的に参加し、新しい治療や薬の知識向上に努めております。
              </p>
            </div>

            <!-- content3 -->
            <div id="content3" class="switching-frame__content content3 swiper-slide">
              <div class="switching-frame__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/switching-frame03_sp.webp" alt="">
              </div>
              <h4 class="switching-frame__ttl">
                看護師によるお薬の塗り方と、<br>安心のホームケア指導
              </h4>
              <p class="switching-frame__txt">
                皮膚疾患をしっかりと治すためには、毎日の正しい外用ケアの継続が欠かせません。初めての方や久しぶりにご来院された方が、ご自宅でも迷わずにお薬を使えるよう、看護師が塗り方のコツを丁寧に指導いたします。パンフレット等も活用し、どなたでも分かりやすい安心のサポートを心がけています。
              </p>
            </div>

            <!-- content4 -->
            <div id="content4" class="switching-frame__content content4 swiper-slide">
              <div class="switching-frame__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/switching-frame04_sp.webp" alt="">
              </div>
              <h4 class="switching-frame__ttl">
                必要に応じた検査や処置も<br>丁寧に行います
              </h4>
              <p class="switching-frame__txt">
                採血やアレルギー検査、皮膚生検などを行う際は、患者さまのご負担や痛みを最小限に抑えるよう細心の注意を払います。事前に目的や内容を分かりやすくお話しし、十分にご納得いただいた上で進めます。安全かつ精度の高い検査を通じて、正確な診断と適切な治療へと結びつけます。
              </p>
            </div>
          </div>

          <!-- Swiper ページネーション（SPのみ） -->
          <div class="swiper-button__wrap">
            <div class="switching-frame__view-swiper-button-prev swiper-button-prev"></div>
            <div class="switching-frame__view-swiper-button-next swiper-button-next"></div>
            <div class="switching-frame__view-swiper-pagination swiper-pagination"></div>
          </div>
        </div>
        <div class="features__panel switching-frame__btn">
          <div class="btn" data-target="content1">診察の前に、スタッフが事前に症状やお悩みをお伺いします </div>
          <div class="btn" data-target="content2">お一人おひとりに寄り添い、最適な皮膚科治療をお届けします </div>
          <div class="btn" data-target="content3">看護師によるお薬の塗り方と、安心のホームケア指導</div>
          <div class="btn" data-target="content4">必要に応じた検査や処置も丁寧に行います </div>
        </div>
      </div>
      <!-- features03 -->
      <div class="features__item">
        <div class="features__head">
          <h3 class="features__ttl">病診連携・診診連携先の<br>江南厚生病院のすぐ隣</h3>
          <div class="features__num">3</div>
        </div>
        <div class="features__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/features03.webp" alt="">
        </div>
        <div class="features__panel">
          <p class="txt">
            当院は、院長がかつて勤務していた江南厚生病院のすぐ隣に位置しています。<br>
            その深いご縁から緊密な病診連携体制を築いており、万が一高度な医療が必要な際もスムーズな対応が可能です。<br>
            同院から徒歩１分という抜群のアクセスを活かし、地域の皆さまに安心して通っていただける質の高い医療を提供いたします。
          </p>
        </div>
      </div>
      <!-- features04 -->
      <div class="features__item">
        <div class="features__head">
          <h3 class="features__ttl">待ち時間に配慮した工夫<br>午後診療は14時開始</h3>
          <div class="features__num">4</div>
        </div>
        <div class="features__img img-slider">
          <div class="slider-track">
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide01.webp" alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide02.webp" alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide03.webp" alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide01.webp" alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide02.webp" alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide03.webp" alt=""></div>
          </div>
        </div>
        <div class="features__panel">
          <p class="txt">
            当院は近隣では数少ない「14時からの午後診療」を行っています。<br>
            夕方の混雑する前の時間帯に通えるため、お子さまのお迎え前やお仕事の合間など、ご予定に合わせて時間を有効活用していただけます。<br>
            他にはない通いやすさと質の高い医療を両立し、江南市の皆さまにストレスが少ない通院を提供できればと考えています。
          </p>
        </div>
      </div>
      <!-- features05 -->
      <div class="features__item">
        <div class="features__head">
          <h3 class="features__ttl">本院同等の皮膚科医療を江南市で<br>確かな診断を支える設備体制</h3>
          <div class="features__num">5</div>
        </div>
        <div class="features__panel">
          <p class="txt">
            大口本院と同等の診療クオリティを江南市でお届けするため、充実の医療機器を整えました。<br>
            皮膚エコーやダーモスコピーによる的確な診断をはじめ、迅速アレルギー検査（ドロップスクリーン）や光線療法（エキシプレックス）、ヒーライト、各種レーザーを完備。<br>
            身近な江南院で、大城皮フ科グループならではの高水準の皮膚科医療を提供いたします。
          </p>

        </div>
        <div class="machine-slider">
          <ul class="machine-slider__list">
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img01.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img02.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img03.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img04.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img05.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img06.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img07.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img08.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img09.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img10.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img11.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img12.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img13.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img14.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img15.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img16.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img17.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img18.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img01.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img02.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img03.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img04.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img05.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img06.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img07.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img08.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img09.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img10.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img11.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img12.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img13.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img14.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img15.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img16.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img17.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img18.webp" alt=""></li>
          </ul>
          <ul class="machine-slider__list">
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img18.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img17.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img16.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img15.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img14.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img13.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img12.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img11.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img10.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img09.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img08.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img07.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img06.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img05.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img04.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img03.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img02.webp" alt=""></li>
            <li class="machine-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img01.webp" alt=""></li>

          </ul>
        </div>

      </div>
    </div>
  </section>

  <section class="top--greeting">
    <div class="greeting__head">
      <div class="sec-ttl--bilingual">
        <p class="en">GREETING</p>
        <h2 class="ja">院長からのご挨拶</h2>
        <p class="copy">患者さまの目線に立った、<br>確かな皮膚科医療を。</p>
      </div>
    </div>
    <div class="greeting__contents">
      <div class="greeting__message">
        <p class="txt">
          私の幼少期からの重度のアトピー経験を原点に「日本一患者さま想いのクリニック」を目指し、2016年に現在の江南院に大城皮フ科クリニックを開院しました。<br>
          6万人以上の患者さまにご来院いただき手狭となったため、2023年10月に大口本院を開設し江南院を一時休診としていましたが、地域の皆さまのご要望を受け、2025年7月1日に再開、2026年4月1日より午前・午後のフル診療を再開いたしました。<br>
          <br>
          新たな江南院は、快適な診療空間への全面改装、50台の駐車場完備に加え、複数の皮膚科専門医が診察する体制へとパワーアップ。江南厚生病院徒歩1分の通いやすさはそのままに、よりスムーズで安心な医療環境を整えました。<br>
          <br>
          私が「自らが使いたい」という想いから開発した、敏感肌の方でも安心して使えるスキンケア「Chrono Verso（クロノバーソ）」の導入をはじめ、私たちは常に学び続け、あらゆる肌のお悩みに誠実に向き合います。<br>
          新しく生まれ変わった江南院をよろしくお願いいたします。
        </p>
        <div class="name-area">
          <p class="position">大城皮フ科クリニック大口本院院長/理事長</p>
          <p class="name">大城 宏治</p>
        </div>
      </div>
      <div class="greeting__img-area">
        <div class="greeting__img greeting__img01"><img
            src="<?php echo get_template_directory_uri(); ?>/img/greeting-obj01.webp" alt=""></div>
        <div class="greeting__img greeting__img02"><img
            src="<?php echo get_template_directory_uri(); ?>/img/greeting-obj02.webp" alt=""></div>
      </div>
    </div>
  </section>

  <section class="top--our-team">
    <div class="container">
      <div class="sec-ttl--bilingual">
        <p class="en">OUR TEAM</p>
        <h2 class="ja">医師と専門スタッフのご紹介</h2>
      </div>

      <ul class="our-team__list">
        <li class="our-team__item">
          <div class="our-team__item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/our-team_shibata.webp" alt="">
          </div>
          <div class="our-team__item-info">
            <p class="our-team__item-name">柴田</p>
            <p class="our-team__item-category">皮膚科専門医</p>
          </div>
          <p class="our-team__item-message txt">
            乾癬やアトピー性皮膚炎などの高い専門性を要する疾患から、一部自費の美容診療まで対応いたします。お一人おひとりの症状に深く向き合う丁寧な診察を徹底し、誰もが安心してお肌の悩みを相談できる医療環境の提供を常に心がけております。
          </p>
        </li>
        <li class="our-team__item">
          <div class="our-team__item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/our-team_nagata.webp" alt="">
          </div>
          <div class="our-team__item-info">
            <p class="our-team__item-name">永田</p>
            <p class="our-team__item-category">皮膚科専門医</p>
          </div>
          <p class="our-team__item-message txt">
            小さなお子さまからご高齢の方まで、ご家族皆さまのお肌の健康を支えるパートナーとして、一般皮膚科・美容皮膚科の両面からサポートします。地域密着のクリニックとして、分かりやすく納得感のある説明を大切にし、心からリラックスして受診いただける体制を整えています。
          </p>
        </li>
        <li class="our-team__item">
          <div class="our-team__item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/our-team_i.webp" alt="">
          </div>
          <div class="our-team__item-info">
            <p class="our-team__item-name">I</p>
            <p class="our-team__item-category">看護師</p>
          </div>
          <p class="our-team__item-message txt">
            患者さまの心に寄り添う姿勢を礎に、保険診療から高度な美容医療まで多角的かつ誠実なアプローチを追求します。スタッフ一丸となって研鑽を積み、専門知識を共有しながら、お肌が良い方向へと変化していく過程を看護の面からも全力で支えてまいります。
          </p>
        </li>
        <li class="our-team__item">
          <div class="our-team__item-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/our-team_o.webp" alt="">
          </div>
          <div class="our-team__item-info">
            <p class="our-team__item-name">O</p>
            <p class="our-team__item-category">医療事務</p>
          </div>
          <p class="our-team__item-message txt">
            来院される皆さまが心穏やかに過ごせるよう、常に笑顔と誠実な対応を追求しています。受付から診察、お会計にいたるまで、全てのプロセスで心地よさを感じていただける空間づくりに注力し、安心感と満足感を持ってお帰りいただけるクリニックを目指します。
          </p>
        </li>
      </ul>
    </div>
  </section>

  <section class="top--menu">
    <div class="sec-ttl--bilingual">
      <p class="en">MENU</p>
      <h2 class="ja">診療メニューのご紹介</h2>
    </div>

    <div class="menu__tab tab">
      <!-- ボタン -->
      <div class="container">
        <div class="menu__tab--button-area tab__button-area">
          <div class="menu__tab--button button-general tab__button active">
            <p class="ja">一般皮膚科/<br class="sp">小児皮膚科/皮膚外科</p>
            <p class="en">GENERAL</p>
          </div>
          <div class="menu__tab--button button-beauty tab__button">
            <p class="ja">美容皮膚科</p>
            <p class="en">BEAUTY</p>
          </div>
        </div>
      </div>


      <div class="tab__panel-area">
        <!-- 一般皮膚科/小児皮膚科/皮膚外科 -->
        <div class="menu__tab--panel panel-general tab__panel show">

          <!-- よくご相談いただく疾患 -->
          <div class="menu__pickup-area">
            <div class="container">
              <ul class="menu__pickup-list">
                <li class="menu__pickup-item">
                  <a href="<?php echo home_url(); ?>/general/">
                    <div class="menu__pickup-bg">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/general_pickup-menu01.webp" alt="">
                    </div>
                    <p class="menu__pickup-label">一般皮膚科</p>
                    <p class="menu__pickup-more">詳しく見る</p>
                  </a>
                </li>
                <li class="menu__pickup-item">
                  <a href="<?php echo home_url(); ?>/child/">
                    <div class="menu__pickup-bg">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/general_pickup-menu02.webp" alt="">
                    </div>
                    <p class="menu__pickup-label">小児皮膚科</p>
                    <p class="menu__pickup-more">詳しく見る</p>
                  </a>
                </li>
                <li class="menu__pickup-item">
                  <a href="<?php echo home_url(); ?>/surgery/">
                    <div class="menu__pickup-bg">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/general_pickup-menu03.webp" alt="">
                    </div>
                    <p class="menu__pickup-label">皮膚外科・形成外科</p>
                    <p class="menu__pickup-more">詳しく見る</p>
                  </a>
                </li>
              </ul>

            </div>
          </div>

          <!-- 疾患一覧 -->
          <div class="menu__all-area">
            <div class="sec-ttl--bilingual-medium color-general">
              <p class="en">ALL CONCERNS</p>
              <h2 class="ja">疾患一覧</h2>
            </div>

            <?php
            $terms = get_terms(array(
              'taxonomy' => 'general-worries',
              'hide_empty' => true, // 投稿があるタームだけ表示
              'orderby' => 'menu_order',
              'order' => 'ASC',
            ));
            ?>

            <?php if (!empty($terms) && !is_wp_error($terms)): ?>
              <?php foreach ($terms as $term): ?>

                <?php
                $args = array(
                  'post_type' => 'general',
                  'posts_per_page' => -1,
                  'post_status' => 'publish',
                  'orderby' => 'menu_order',
                  'order' => 'ASC',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'general-worries',
                      'field' => 'term_id',
                      'terms' => $term->term_id,
                    ),
                  ),
                );

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()): ?>
                  <div class="subject-area container">
                    <h3 class="subject-ttl"><?php echo esc_html($term->name); ?></h3>

                    <ul class="menu__all-list">
                      <?php while ($the_query->have_posts()):
                        $the_query->the_post(); ?>
                        <li class="menu__all-item">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                          </a>
                        </li>
                      <?php endwhile; ?>
                    </ul>
                  </div>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

              <?php endforeach; ?>
            <?php endif; ?>
          </div>

        </div>

        <!-- 美容皮膚科 -->
        <div class="menu__tab--panel panel-beauty tab__panel">
          <?php get_template_part('template-parts/common/beauty-note-konan'); ?>
          <!-- ピックアップ -->
          <div class="menu__pickup-area">
            <div class="sec-ttl--bilingual-medium color-beauty">
              <p class="en">PICKUP</p>
              <h2 class="ja">ピックアップ</h2>
            </div>
            <div class="container">
              <ul class="menu__pickup-list">
                <li class="menu__pickup-item">
                  <a href="<?php echo home_url(); ?>/beauty/">
                    <div class="menu__pickup-bg">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/beauty_pickup-menu01.webp" alt="">
                    </div>
                    <p class="menu__pickup-label">美容皮膚科</p>
                    <p class="menu__pickup-more">詳しく見る</p>
                  </a>
                </li>
                <li class="menu__pickup-item">
                  <a href="<?php echo home_url(); ?>/worries/removal/">
                    <div class="menu__pickup-bg">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/beauty_pickup-menu02.webp" alt="">
                    </div>
                    <p class="menu__pickup-label">医療脱毛</p>
                    <p class="menu__pickup-more">詳しく見る</p>
                  </a>
                </li>
                <li class="menu__pickup-item">
                  <a href="<?php echo home_url(); ?>/beauty/beauty/art-make/">
                    <div class="menu__pickup-bg">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/beauty_pickup-menu03.webp" alt="">
                    </div>
                    <p class="menu__pickup-label">アートメイク</p>
                    <p class="menu__pickup-more">詳しく見る</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- お悩み一覧 -->
          <div class="menu__all-area">
            <div class="sec-ttl--bilingual-medium color-beauty">
              <p class="en">ALL CONCERNS</p>
              <h2 class="ja">お悩み一覧</h2>
            </div>

            <div class="container">
              <?php include(get_template_directory() . '/template-parts/beauty_worries-list.php'); ?>
            </div>
          </div>

          <!-- 美しさを叶える治療法のご案内 -->
          <div class="menu__treatment-area">
            <div class="sec-ttl--bilingual-medium">
              <p class="en">TREATMENT</p>
              <h2 class="ja">美しさを叶える治療法のご案内</h2>
            </div>
            <div class="container">
              <?php include(get_template_directory() . '/template-parts/beauty_treatment-list.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="top--loop-slider">
    <div class="loop-slider">
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider01.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider02.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider03.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider04.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider05.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider06.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider07.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider08.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider01.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider02.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider03.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider04.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider05.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider06.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider07.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider08.webp" alt=""></div>
    </div>
  </section>

  <div class="instagram-blog__wrap container">
    <!-- INSTAGRAM -->
    <section class="top--instagram">
      <h2 class="sec-ttl">Instagram</h2>
      <div class="instagram__area">
        <!-- SnapWidget -->
        <script src="https://snapwidget.com/js/snapwidget.js"></script>
        <iframe src="https://snapwidget.com/embed/1108935" class="snapwidget-widget" allowtransparency="true"
          frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "
          title="大城皮フ科クリニック"></iframe>
      </div>
      <div class="instagram__btn btn-more--underline">
        <a href="https://www.instagram.com/oshiro_skin_clinic/" target="_blank">oshiro_skin_clinic</a>
      </div>
    </section>

    <!-- BLOG -->
    <?php
    $args = array(
      'post_type' => 'blog',
      'posts_per_page' => 4,
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => array(
        array(
          'taxonomy' => 'genre',  // タクソノミー名
          'field' => 'slug',   // タームをスラッグで指定
          'terms' => 'blog',   // 表示したいタームのスラッグ
        ),
      ),
    );
    $the_query = new WP_Query($args);
    ?>
    <section class="top--blog">
      <h2 class="sec-ttl">BLOG</h2>

      <?php if ($the_query->have_posts()): ?>
        <ul class="blog__list">
          <?php while ($the_query->have_posts()):
            $the_query->the_post(); ?>
            <li class="blog__item">
              <a href="<?php the_permalink(); ?>">
                <div class="blog__eyecatch">
                  <?php if (has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dummy.webp" alt="">
                  <?php endif; ?>
                </div>
                <time class="blog__date"><?php the_time('Y.m.d'); ?></time>
                <p class="blog__ttl">
                  <?php the_title(); ?>
                </p>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
        <div class="blog__btn btn-more--underline">
          <a href="<?php echo home_url(); ?>/genre/blog/">もっと見る</a>
        </div>
      <?php endif;
      wp_reset_postdata(); ?>
    </section>
  </div>

  <section class="top--banner-recruit">
    <div class="container">
      <a href="https://oshiro-skin-clinic.com/recruit/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/banner-recruit.webp" alt="求人バナーPC" class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/banner-recruit_sp.webp" alt="求人バナーSP" class="sp">
      </a>
    </div>
  </section>

</main>


<?php get_footer(); ?>
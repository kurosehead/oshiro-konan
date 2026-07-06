<?php get_header(); ?>

<main>
  <!-- MV -->
  <div class="top--mv">
    <p class="mv__logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.svg" alt="大城皮フ科クリニック">
      </a>
    </p>
    <!-- ご予約・お問い合わせ/ハンバーガー -->
    <!-- <div class="contact-ham__btn">
      <div class="common__btn-contact reservation-modal__open">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/img/reservation_icon.webp" alt="">
          <p class="contact-ham__btn_txt">大口本院予約</p>
        </a>
      </div>
      <div class="common__btn-contact beauty__btn-contact ">
        <a href="https://konan.oshiro-skin-clinic.com/" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/reservation_icon.webp" alt="">
          <p class="contact-ham__btn_txt">江南院予約</p>
        </a>
      </div>

      <div class="common__btn-hamburger openbtn">
        <div class="hamburger_lines">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
    </div> -->
    <div class="mv__video-wrap">
      <video class="video" src="<?php echo get_template_directory_uri(); ?>/video/oshiroskinclinic_720.mp4" autoplay
        muted playsinline loop preload="auto"></video>
      <span class="multiply"></span>
    </div>
    <div class="mv__copy">
      <p class="ttl">貴方の想像を超える大規模なクリニック</p>
      <p class="ja">安心と最新を、あなたの肌に</p>
      <p class="en">Confidence and Innovation, For Your Skin</p>
      <p class="ja">専門医の手で輝く毎日へ</p>
      <p class="en">Expert Care for a Radiant Days</p>

      <div class="mv__achievements">
        <div class="achievements-item">
          <p class="row">総患者数</p>
          <p class="row row-num">
            <span class="num">70</span><span class="small">万人</span>
          </p>
          <p class="row">以上</p>
        </div>
        <div class="achievements-item">
          <p class="row">累計手術件数</p>
          <p class="row row-num">
            <span class="num">6,000</span><span class="small">件</span>
          </p>
          <p class="row">以上</p>
        </div>
        <div class="achievements-item">
          <p class="row">皮膚科専門医</p>
          <p class="row row-num">
            <span class="num">10</span><span class="small">名以上</span>
          </p>
          <p class="row">在籍</p>
        </div>
      </div>
    </div>
  </div>

  <!-- 注目のお知らせ -->
  <section class="top--featured-news">
    <div class="featured-news__inner">
      <div class="featured-news__inner-ttl">
        <p class="en">FEATURED<br>NEWS</p>
        <h2 class="ja">注目のお知らせ</h2>
        <div class="swiper-button__wrap">
          <div class="featured-news-swiper-button-prev swiper-button-prev"></div>
          <div class="featured-news-swiper-button-next swiper-button-next"></div>
        </div>
      </div>
    </div>
    <div class="swiper featured-news-swiper">
      <ul class="swiper-wrapper">
        <li class="swiper-slide">
          <a href="<?php echo home_url(); ?>/blogcat/pickup/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/20260514_img_item_banner_oshiro_blog.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="<?php echo home_url(); ?>/recruit/nurse/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/20260605_img_banner_oshiro_recruit_nurse.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="<?php echo home_url(); ?>/general/epidermal-cyst/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/20260514_img_item_banner_oshiro_hokuro.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="https://konan.oshiro-skin-clinic.com/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/20260514_img_item_banner_oshiro_konan.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="https://oshiro-skin-clinic.shop/?utm_source=official_site&utm_medium=referral&utm_campaign=cosme_product_page&utm_content=&top" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/20260514_img_item_banner_oshiro_onlineshop.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="<?php echo home_url(); ?>/worries/rosacea/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/img_banner_oshiro_akarasyusa.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="<?php echo home_url(); ?>/general/atipic-dermatitis/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/img_banner_oshiro_atopy.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="<?php echo home_url(); ?>/worries/removal/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/img_banner_oshiro_datsumou.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="<?php echo home_url(); ?>/beauty/hyaluron/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/img_banner_oshiro_hyaluron.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="<?php echo home_url(); ?>/general/acne-php/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/img_banner_oshiro_nikibi.webp" alt="">
          </a>
        </li>
        <li class="swiper-slide">
          <a href="<?php echo home_url(); ?>/worries/stain/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pickup/img_banner_oshiro_shimi.webp" alt="">
          </a>
        </li>
      </ul>
    </div>
  </section>

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
              <th>15:30~<br class="sp">18:30</th>
              <td class="on">〇</td>
              <td class="on">〇</td>
              <td class="on">〇</td>
              <td class="off">ー</td>
              <td class="on">〇</td>
              <td class="on red">〇</td>
              <td class="off">ー</td>
            </tr>
          </tbody>
        </table>
        <p class="notes red">土曜日の午後は、14：00〜17：00までとなります。</p>
        <p class="notes">【休診日】木曜、日曜、祝日</p>
        <p class="notes">受付時間が過ぎても診察が続いている場合、ご予約をされている患者さまに限り午前は12：30まで、午後は19：00まで（土曜は17：30まで）</p>
        <p class="notes">美容カウンセリング受付時間は、通常の診療時間より各枠30分早く終了します。</p>
      </div>
    </section>
  </div>

  <!-- ACCESS -->
  <section class="top--access" id="anchor-access">
    <div class="container">
      <h2 class="sec-ttl">ACCESS</h2>
      <div class="map-area">
        <div class="illust-map">
          <img src="<?php echo get_template_directory_uri(); ?>/img/illust-map.webp" alt="地図イラスト">
        </div>
        <div class="google-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26041.134049942437!2d136.89518235215982!3d35.327301186563226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003096c56bb6849%3A0x41249c2038c752fa!2z5aSn5Z-O55qu44OV56eR44Kv44Oq44OL44OD44Kv5aSn5Y-j5pys6Zmi!5e0!3m2!1sja!2sjp!4v1758015203842!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="btn-more">
        <a href="https://maps.app.goo.gl/6V6FWP1YcmwqtLb78" target="_blank">Googleマップを見る</a>
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
        地域の皆さまの「皮膚のかかりつけ医」として適切な医療をお届けすることをお約束します。<br>
        「日本で一番患者様想いの皮膚科に」「地域の皆様に気軽に最新の医療を」という思いを胸に、<br>
        皆様が気軽に最新の医療にアクセスできる場をつくることを大切にしてきました。<br>
        <br>
        今後も、専門性を活かしつつ、一人ひとりの声に耳を傾けた丁寧な診療を心がけ、<br>
        皆さまに「ここに来てよかった」と思っていただけるクリニックを目指してまいります。<br>
        肌のことで少しでも気になることがあれば、どうぞお気軽にご相談ください。
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
          <h3 class="features__ttl">豊富な実績と確かな信頼を誇る、<br>皮膚科クリニック</h3>
          <div class="features__num">1</div>
        </div>
        <div class="features__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/features01-figure.webp" alt="">
        </div>
        <div class="features__panel">
          <p class="txt">
            あらゆる皮膚の悩みに高いレベルで対応できるメガスケールのクリニックです。多数の皮膚科専門医が在籍し、一般診療から小手術・美容皮膚科まで一院完結でサポート。多様なお悩みに一貫して向き合うことができます。
            どんな皮膚の悩みも、“まずはここに相談すれば安心”と思っていただけるクリニックをめざしています。
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
                医師の診察前にスタッフが<br class="pc">丁寧に症状をお伺いします
              </h4>
              <p class="switching-frame__txt">
                医師の診察の前に、経験豊富なスタッフが問診票をもとに症状やお悩みを丁寧にお伺いします。気になる症状の経過や、生活習慣・スキンケア方法なども確認し、診察がスムーズに進むよう準備を整えます。患者さま一人ひとりの思いに寄り添い、不安や疑問を安心に変える丁寧な対応を心がけています。
              </p>
            </div>

            <!-- content2 -->
            <div id="content2" class="switching-frame__content content2 swiper-slide">
              <div class="switching-frame__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/switching-frame02_sp.webp" alt="">
              </div>
              <h4 class="switching-frame__ttl">
                医師による診察と患者さま一人ひとりに<br class="pc">合った治療のご提案
              </h4>
              <p class="switching-frame__txt">
                患者さまの症状に合わせた治療をご提案いたします。皮膚科専門医が疾患・治療について丁寧に説明し、患者さまの症状改善、求める肌づくりができるようサポートいたします。学会や講習会にも積極的に参加し、新しい治療や薬に関する知識を深めています。
              </p>
            </div>

            <!-- content3 -->
            <div id="content3" class="switching-frame__content content3 swiper-slide">
              <div class="switching-frame__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/switching-frame03_sp.webp" alt="">
              </div>
              <h4 class="switching-frame__ttl">
                看護師からの説明と<br class="pc">丁寧なホームケア指導
              </h4>
              <p class="switching-frame__txt">
                皮膚疾患の治療は、「正しい方法で、継続して、外用薬を塗る」ことが重要になります。「初めて」または「久しぶり」にご来院された患者さまには、ご自宅で正しく外用薬を使用できるよう、塗り方のアドバイスや指導を行います。説明の際はパンフレットを使用し、「分かりやすい指導」にも努めています。
              </p>
            </div>

            <!-- content4 -->
            <div id="content4" class="switching-frame__content content4 swiper-slide">
              <div class="switching-frame__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/switching-frame04_sp.webp" alt="">
              </div>
              <h4 class="switching-frame__ttl">
                必要に応じた処置・検査も<br class="pc">丁寧に対応します
              </h4>
              <p class="switching-frame__txt">
                採血・アレルギー検査・皮膚生検なども、患者さまの負担を最小限に抑えながら丁寧に行います。事前に検査内容や目的をわかりやすくご説明し、ご納得いただいたうえで実施します。安全で正確な検査を通じ、適切な診断と治療につなげます。
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
          <div class="btn" data-target="content1">医師の診察前にスタッフが丁寧に症状をお伺いします</div>
          <div class="btn" data-target="content2">医師による診察と患者さま一人ひとりに合った治療のご提案</div>
          <div class="btn" data-target="content3">看護師からの説明と丁寧なホームケア指導</div>
          <div class="btn" data-target="content4">必要に応じた処置・検査も丁寧に対応します</div>
        </div>
      </div>
      <!-- features03 -->
      <div class="features__item">
        <div class="features__head">
          <h3 class="features__ttl">全国の医師が<br>学びに訪れる教育体制</h3>
          <div class="features__num">3</div>
        </div>
        <div class="features__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/features03.webp" alt="">
        </div>
        <div class="features__panel">
          <p class="txt">
            大城皮フ科クリニックでは、<span class="bold">診療・小手術・美容皮膚科の技術指導</span>にも力を入れています。
            開院以来培ってきた知識と経験をもとに、これまで<span class="bold">多くの医師が当院の技術を学びに訪れています。</span>また医師向けの講演会やセミナーでも多数登壇しています。<br><br>
            「ここに来れば自分に合った治療を受けられる」という安心のもと、専門的な知見に基づいた医療を、多彩な治療プランから選択することができます。</span>
          </p>
        </div>
      </div>
      <!-- features04 -->
      <div class="features__item">
        <div class="features__head">
          <h3 class="features__ttl">美しさと癒しが融合する<br>特別な空間</h3>
          <div class="features__num">4</div>
        </div>
        <div class="features__img img-slider">
          <div class="slider-track">
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide01.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide02.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide03.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide04.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide05.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide06.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide01.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide02.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide03.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide04.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide05.webp"
                alt=""></div>
            <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/img/features04-slide06.webp"
                alt=""></div>
          </div>
        </div>
        <div class="features__panel">
          <p class="txt">
            2階の美容専用フロア「Chrono medical retreat」（クロノ・メディカル・リトリート）」は、
            <span class="bold">医療×美容×癒しを融合した完全予約制・個室対応の特別な空間です。</span>美容皮膚科に精通した医師とスタッフが、最適な施術を行います。<br><br>
            内装や照明、香りにもこだわり、非日常を感じながら “肌と心を整える時間”を、ぜひこの空間でご体感ください。
          </p>
        </div>
      </div>
      <!-- features05 -->
      <div class="features__item">
        <div class="features__head">
          <h3 class="features__ttl">KOLが厳選した美容機器で、<br>あらゆる肌のお悩みに対応</h3>
          <div class="features__num">5</div>
        </div>
        <div class="features__panel">
          <p class="txt">
            世界最大の美容機器メーカー、サイノシュア社・ルートロニック社のKOL（Key Opinion Leader）を務める院長が厳選した同社の機器を、1医院で最も多く導入。（17台）<br>
            しみ・しわ・たるみ・ニキビ跡・赤ら顔・毛穴など、あらゆる肌トラブルに対して、機器ごとの特性を熟知した医師が、<span
              class="bold">患者様のお悩みやご希望に合わせてオーダーメイド</span>で治療をご提案いたします。<br><br>
              ※① 2026年5月末現在　サイノシュアー・ルートロニック社確認済み。
              ※②スペクトラ4台・ヒーライトⅡ4台・モザイク3D2台・エコツーエボリューション1台・ラセムド1台・インフィニハイブリッド1台・XERF（ザーフ）1台・クラリティツイン2台　合計16台。
          </p>
          
        </div>
        <div class="machine-slider">
          <ul class="machine-slider__list">
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img01.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img02.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img03.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img04.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img05.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img06.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img07.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img08.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img09.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img10.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img11.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img12.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img13.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img14.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img01.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img02.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img03.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img04.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img05.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img06.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img07.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img08.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img09.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img10.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img11.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img12.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img13.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img14.webp" alt=""></li>
          </ul>
          <ul class="machine-slider__list">
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img14.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img13.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img12.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img11.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img10.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img09.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img08.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img07.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img06.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img05.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img04.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img03.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img02.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img01.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img14.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img13.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img12.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img11.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img10.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img09.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img08.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img07.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img06.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img05.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img04.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img03.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img02.webp" alt=""></li>
            <li class="machine-slider__item"><img
                src="<?php echo get_template_directory_uri(); ?>/img/machine-slide_img01.webp" alt=""></li>
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
          幼いころから重度のアトピー性皮膚炎に悩み、今も治療を続けています。<br>
          その頃に感じていた「こんなクリニックがあればいいのに」を実現したい。<br>
          その一心で開業し、今も日々全力を尽くしています。<br><br>
          皮膚科専門医としての科学的根拠を軸にしながら、患者さまの生活リズムやお気持ちに合わせた “気軽に続けられる医療”
          を大切にしています。症状が改善したときは一緒に喜び合い、次の一歩への力にしていただければ幸いです。<br><br>

          皮膚外科や美容医療では、安全性と自然な仕上がり を両立させることを信条に、日々研鑽を重ねています。必要なときに最善を尽くせるよう、スタッフ一同、技術と心配りの両面でお迎えいたします。<br><br>

          「肌のことで困ったら、まずは大城皮フ科へ」 <br>
          どうぞお気軽にご相談ください。
        </p>
        <div class="name-area">
          <p class="position">院長</p>
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
            乾癬やアトピー性皮膚炎など専門性の高い皮膚疾患から美容診療まで幅広く対応。丁寧な診察を大切にし、一人ひとりに安心してご相談いただける診療を心がけています。
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
            赤ちゃんからご高齢の方まで幅広く診療し、一般皮膚科から美容皮膚科まで対応。地域に寄り添い、丁寧でわかりやすい診療で安心して相談できる環境を大切にしています。
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
            患者様に寄り添う気持ちを大切に、一般皮膚科から美容医療まで幅広く対応。温かなチームの中で学び続けながら、前向きな変化を支える看護を心がけています。
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
            来院される患者様が安心して過ごせるよう、笑顔と丁寧な対応を大切にしています。受付から診療まで、気持ちよく通っていただける環境づくりを心がけています。
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
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider01.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider02.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider03.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider04.webp" alt=""></div>
      <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/img/loop-slider05.webp" alt=""></div>
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
      </section>
    </div>
  <?php endif;
      wp_reset_postdata(); ?>

  <section class="top--banner-recruit">
    <div class="container">
      <a href="/recruit/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/banner-recruit.webp" alt="求人バナーPC" class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/banner-recruit_sp.webp" alt="求人バナーSP" class="sp">
      </a>
    </div>
  </section>

</main>


<?php get_footer(); ?>

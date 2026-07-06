<?php get_header(); ?>
<!-- 診療案内 -->
<section class="top_medical_information">
  <div class="sec_ttl">
    <p class="en">Medical Information</p>
    <h2 class="ja">診療案内</h2>
  </div>
  <div class="medical_time">
    <div class="medical_time_container">
      <div class="container_inner">
        <h3 class="ttl">診療時間</h3>
        <picture class="time_table">
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/time_table.webp?20260310"
            media="(min-width: 767px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/time_table_sp.webp?20260310" alt="">
        </picture>
        <p class="time">AM 9:00 ～ 12:00 / PM 2:00 ～ 5:00</p>
        <p class="holiday">【休診日】木・土・日・祝日</p>
      </div>
    </div>
  </div>

  <!-- 勤務医カレンダー -->
  <div class="dr_calendar">
    <div class="dr_calendar_container">
      <div class="container_inner">
        <h3 class="ttl">勤務医カレンダー</h3>
        <div class="calendar_area">
          <div class="icon_explanation">
            <p class="man"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_oshiro.svg"
                alt="大城医師アイコン">大城医師</p>
            <p class="man"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_shibata.svg"
                alt="柴田医師アイコン">柴田医師</p>
            <p class="man"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_takeuchi.svg"
                alt="竹内医師アイコン">竹内医師</p>
            <p class="woman"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_nagata.svg"
                alt="永田医師アイコン">永田医師</p>
            <p class="woman"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_kamata.svg"
                alt="鎌田医師アイコン">鎌田医師</p>
          </div>
          <div class="icon_gender">
            <p class="man">男性</p>
            <p class="woman">女性</p>
          </div>
          <div class="calendar">
            <div class="btn_area">
              <div id="prev-btn" class="btn_prev_next prev" style="display: none;"></div>
              <button id="next-btn" class="btn_prev_next next"></button>
              <p class="year_month" id="calendar-month-tougetu">2026年6月</p>
              <p class="year_month" id="calendar-month-jigetu" style="display: none;">2026年7月</p>
            </div>
            <div class="calendar_img">
              <div class="img" id="calendar-image-tougetu" style="display: block;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar/202606.png" alt="">
              </div>
              <div class="img" id="calendar-image-jigetu" style="display: none;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar/202607.png" alt="">
              </div>
            </div>
            <p class="calendar_notes">AM 9:00 ～ 12:00 / PM 2:00 ～ 5:00</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 当院の特徴 -->
<section class="top_features">
  <div class="sec_ttl">
    <p class="en">Features</p>
    <h2 class="ja">当院の特徴</h2>
  </div>
  <picture class="features_img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/img/features_img.webp" media="(min-width: 767px)">
    <img src="<?php echo get_template_directory_uri(); ?>/img/features_img_sp.webp" alt="">
  </picture>
  <p class="copy">江南市や近隣に<br>お住まいの皆さまへ</p>
  <p class="txt">皮膚科専門医が、お一人おひとりの肌の悩みに丁寧に向き合います。<br>
    皮膚のかゆみ、湿疹、ニキビ、じんましんなどの一般的な皮膚トラブルから、しみ・しわ・たるみ・赤ら顔など美容皮膚科領域のお悩みまで、皮膚科専門医3名体制で対応いたします。<br>
    地域の皆さまに安心して通っていただけるよう、医療の質と通院のしやすさを両立したクリニックを目指しております。</p>
</section>

<!-- 江南院 再開のご挨拶 -->
<section class="top_message">
  <div class="container_s">
    <div class="message_first">
      <div class="sec_ttl">
        <p class="en">Message</p>
        <h2 class="ja">江南院 再開のご挨拶</h2>
      </div>
      <p class="read">このたび、<br>
        大城皮フ科クリニック江南院を<br class="sp">約2年ぶりに<br class="pc">再開できる<br class="sp">運びとなりましたことを<br>ご報告申し上げます。</p>
      <div class="dr_img">
        <div class="name_area">
          <p class="clinic_name">大城皮フ科クリニック</p>
          <p class="name"><small>院長</small>大城 宏治</p>
        </div>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/dr_oshiro.webp"
            alt="大城皮フ科クリニック院長 大城 宏治"></div>
      </div>
    </div>
    <p class="message">私は2013年より江南厚生病院皮膚科に勤務し、そのご縁をきっかけに、2016年6月、江南厚生病院のすぐ近くに大城皮フ科クリニック江南院を開院いたしました。<br>
      地域の皆さまに支えられ、これまでに延べ6万人以上の方にご来院いただき、診療を続けてまいりましたが、1日400名を超える患者様にお越しいただくようになり、江南院は明らかに手狭となりました。<br>
      そのため、2023年10月には、日本最大級の規模となる大口本院を新たに開院し、江南院は一時休診とさせていただきました。長期にわたりご不便をおかけしましたことを、心よりお詫び申し上げます。<br>
      休診期間中も、皆さまから「江南院を再開してほしい」という温かいお声を多数頂戴し、そのお気持ちに何とかお応えしたいと強く願っておりましたが、診療体制や人員の調整に時間を要し、再開までに長い年月を要しました。<br>
      そしてこのたび、2025年7月1日より、平日午前のみの診療体制ではございますが、ようやく江南院を再開できる運びとなりました。<br>
      再開にあたり、院内を全面改装し、より快適で清潔な診療空間をご用意いたしました。<br>
      また、50台分の駐車場を完備し、院長を含む皮膚科専門医3名体制での診療を行うことで、これまで以上に安心してご来院いただける環境を整えております。<br>
      当院は江南厚生病院から徒歩1分とアクセスに優れており、江南市・一宮市・各務原市にお住まいの方にとっても、大口本院より通いやすい立地となっております。<br>
      再びこの場所で、地域の皆さまの皮膚の健康をお守りできることを、心より嬉しく思っております。<br>
      スタッフ一同、初心を忘れず、丁寧で信頼される医療の提供に努めてまいります。<br>
      今後とも、どうぞよろしくお願い申し上げます。</p>
  </div>
</section>

<!-- 診療メニュー -->
<section class="top_menu">
  <div class="sec_ttl">
    <p class="en">Medical<br class="sp"> Treatment Menu</p>
    <h2 class="ja">診療メニュー</h2>
  </div>
  <div class="container_s">
    <!-- 一般皮膚科 -->
    <div class="menu_box">
      <h3 class="subject_ttl">一般皮膚科<a href="https://oshiro-skin-clinic.com/general/" target="_blank"
          class="btn">詳しくはこちら</a></h3>
      <ul class="menu_list">
        <li>アトピー性皮膚炎</li>
        <li>乾燥肌</li>
        <li>じんましん</li>
        <li>湿疹</li>
        <li>ニキビ</li>
        <li>赤ら顔</li>
        <li>いぼ</li>
        <li>みずいぼ</li>
        <li>水虫</li>
        <li>爪水虫</li>
        <li>乾癬</li>
        <li>脂漏性角化症</li>
        <li>手湿疹手荒れ</li>
        <li>かぶれ</li>
        <li>掌蹠膿疱症</li>
        <li>しもやけ</li>
        <li>帯状疱疹</li>
        <li>口唇ヘルペス</li>
        <li>円形脱毛症</li>
        <li>白斑</li>
        <li>多汗症</li>
        <li>瘢痕ケロイド</li>
        <li>あざ</li>
        <li>たこ</li>
        <li>魚の目</li>
        <li>巻き爪</li>
        <li>やけど</li>
        <li>虫刺され</li>
        <li>おむつかぶれ</li>
        <li>とびひ</li>
        <li>乳児湿疹</li>
        <li class="column2">手術（ほくろ・いぼ）</li>
        <li class="column2">光線療法</li>
        <li class="column4">アレルギー検査等（ドロップスクリーン・パッチテスト・舌下免疫療法）</li>
      </ul>
    </div>
    <!-- 美容診療 -->
    <div class="menu_box uninsured">
      <h3 class="subject_ttl">美容診療<a href="https://oshiro-skin-clinic.com/beauty/" target="_blank"
          class="btn">詳しくはこちら</a></h3>
      <ul class="menu_list">
        <li>しみ</li>
        <li>あざ</li>
        <li>ほくろ（レーザー治療）</li>
        <li>しわ</li>
        <li>たるみ</li>
        <li>ピアス</li>
        <li>ダイエット注射</li>
        <li>ニキビ痕</li>
        <li>AGA</li>
        <li>FAGA</li>
      </ul>
      <!-- 自費診療 -->
      <h3 class="subject_ttl">自費診療</h3>
      <ul class="menu_list">
        <li class="column4">巻き爪治療（ワイヤー法、ガター法）</li>
      </ul>
      <div class="notes_box">
        <ul class="notes_list">
          <li>現時点ではAGA、ピアスのみお受けしております。人員が整い次第、順次施術を受付してまいります。</li>
          <li>それ以外の施術は大口本院にお問い合わせください。</li>
        </ul>
      </div>
    </div>
    <!-- 生物学的製剤 -->
    <div class="menu_box">
      <h3 class="subject_ttl">生物学的製剤</h3>
      <ul class="menu_list">
        <li>デュピクセント</li>
        <li>イブグリース</li>
        <li>アドトラーザ</li>
        <li>ゾレア</li>
      </ul>
      <!-- ワクチン -->
      <h3 class="subject_ttl">ワクチン</h3>
      <ul class="menu_list">
        <li>帯状疱疹ワクチン</li>
      </ul>
      <div class="notes_box">
        <ul class="notes_list">
          <li>生物学的製剤については、現時点では江南院ではお受けいただくことはできません。<br>
            人員が整い次第、順次治療を受付してまいります。生物学的製剤の治療をご希望の方は大口本院にお問い合わせください。</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
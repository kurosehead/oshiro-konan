  </main>

  <footer>
    <div class="footer_inner">
      <div class="footer_logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.svg" alt="大城皮フ科クリニック 江南院"></a>
      </div>
      <div class="box medical_time">
        <p class="ttl">診療時間</p>
        <p class="txt">月・火・水・金（9:00～12:00）<br>【休診日】木・土・日・祝日</p>
      </div>
      <div class="box access">
        <p class="ttl">アクセス</p>
        <p class="txt">〒483-8086<br>愛知県江南市高屋町大松原１１９−１<br>
          駐車場50台分完備</p>
        <p class="txt">江南厚生病院すぐ隣です。</p>
        <ul class="list_square">
          <li>一宮方面からお越しの方<br>県道64号線を北東へお車で約10分～30分です。</li>
          <li>江南駅からお越しの方<br>江南駅から県道63号線を北へお車で約10分です。</li>
          <li>犬山市方面からお越しの方<br>県道183号線を南西へお車で約10分～25分です。</li>
          <li>各務原市方面からお越しの方<br>各務原大橋を渡って南東方面へお車で約20分です。</li>
        </ul>
        <div class="map"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_map.webp" alt=""></div>
        <div class="btn">
          <a href="https://maps.app.goo.gl/twLkwTmyyaFQyWTw7" target="_blank">Googleマップを見る</a>
        </div>
      </div>
      <div class="box contact">
        <p class="ttl">お問い合わせ</p>
        <p class="txt">TEL：0587-53-0111</p>
      </div>
      <div class="banner">
        <a href="https://oshiro-skin-clinic.com/" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/footer_banner.webp?20250728" alt="">
        </a>
      </div>
      <div class="f_nav">
        <a href="<?php echo home_url(); ?>/facility-standards/">施設基準および加算について</a>
      </div>
    </div>
    <p class="copyright">Copyright &copy; 2018-2025 Oshiro Skin Clinic, All Rights Reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
  <?php wp_footer(); ?>
</body>

</html>
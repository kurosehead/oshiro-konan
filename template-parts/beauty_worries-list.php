<?php
// =============================
// menu 投稿一覧ループ
// =============================

$menu_query = new WP_Query(array(
  'post_type' => 'worries', // ← カスタム投稿タイプ名
  'posts_per_page' => -1,     // 全件取得（必要なら件数制限してOK）
  'post_status' => 'publish',
  'orderby' => 'menu_order', // 管理画面の順序で並べたい場合
  'order' => 'ASC',
));
?>

<?php if ($menu_query->have_posts()): ?>
  <ul class="menu__all-list">
    <?php while ($menu_query->have_posts()):
      $menu_query->the_post();
      $noindex = false;
    ?>
      <li class="menu__all-item">
        <?php if ($noindex): ?>
          <span>
            <p class="treatment-label"><?php the_title(); ?></p>
          </span>
        <?php else: ?>
          <a href="<?php the_permalink(); ?>">
            <p class="treatment-label"><?php the_title(); ?></p>
          </a>
        <?php endif; ?>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

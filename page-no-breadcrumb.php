<?php
/*
Template Name: 固定ページテンプレート(パンくずなし)
*/
get_header(); ?>

<!-- ページヘッダー -->
<div class="lower-header">
  <div class="lower-header__inner container">
    <p class="lower-header__en"><?php the_field('page_title_en') ?></p>
    <p class="lower-header__ja"><?php the_title(); ?></p>
  </div>
</div>
<main class="<?php if (is_page('visit')) {
  echo 'style-general';
} ?>">
  <?php if (have_posts()): ?>
    <?php while (have_posts()):
      the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>

<?php
/*
Template Name: 固定ページテンプレート
*/
get_header(); ?>

<!-- ページヘッダー -->
<div class="lower-header">
  <div class="lower-header__inner container">
    <?php
    $page_title_en = strtoupper(str_replace('-', ' ', get_post_field('post_name', get_the_ID())));
    ?>
    <p class="lower-header__en"><?php echo esc_html($page_title_en); ?></p>
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

  <?php breadcrumb(); //パンくず ?>
</main>

<?php if (is_page('access')): ?>
  <?php get_template_part('template-parts/page-access'); ?>
<?php endif; ?>

<?php get_footer(); ?>

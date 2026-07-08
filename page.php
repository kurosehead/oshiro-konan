<?php
/*
Template Name: 固定ページテンプレート
*/
get_header(); ?>

<!-- ページヘッダー -->
<div class="lower-header">
  <div class="lower-header__inner container">
    <p class="lower-header__en"><?php the_field('page_title_en') ?></p>
    <p class="lower-header__ja"><?php the_title(); ?></p>
  </div>
</div>
<?php
$layout = get_field('sidebar_option');
if ($layout === 'on'): //sidebarがあるときだけmainとsidebarをdivで囲む
  ?>
  <div class="main-aside--wrapper">

    <button class="btn-index" id="btn-index">目次</button>
    <div class="aside-overlay" id="aside-overlay"></div>

    <!-- サイドバー -->
    <aside class="aside-left <?php if(get_field('sidebar_color')) {echo 'aside-'.get_field('sidebar_color');} ?>">
      <p class="aside__logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-color.svg" alt="大城フ科クリニック">
        </a>
      </p>
      <!-- <div class="btn-back">
        <a href="#">一覧ページに戻る</a>
      </div> -->
      <?php echo wp_kses_post(get_field('sidebar_code')); ?>
      <button class="aside-close" id="aside-close">
      </button>

    </aside>
  <?php endif; ?>

  <main class="<?php if (is_page('visit')) {
    echo 'style-general';
  } ?>">
    <?php if (have_posts()): ?>

      <?php if ($layout === 'on'): //sidebarがあるときだけページヘッダーが2回登場 ?>
        <!-- ページヘッダー -->
        <div class="lower-header">
          <div class="lower-header__inner container">
            <p class="lower-header__en"><?php the_field('page_title_en') ?></p>
            <h1 class="lower-header__ja"><?php the_title(); ?></h1>
          </div>
        </div>
      <?php endif; ?>

      <?php while (have_posts()):
        the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php breadcrumb(); //パンくず ?>
  </main>

  <?php if ($layout === 'on'): //sidebarがあるときだけmainとsidebarをdivで囲む ?>
  </div>
  <?php endif; ?>

<?php if (is_page('access')): ?>
  <?php get_template_part('template-parts/page-access'); ?>
<?php endif; ?>

<?php get_footer(); ?>

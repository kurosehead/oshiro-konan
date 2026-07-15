<?php
/* ---------- アップデート関連 ---------- */
// WordPress本体：メジャーアップデートは止める
add_filter('allow_major_auto_core_updates', '__return_false');

// WordPress本体：マイナーアップデートは有効
add_filter('allow_minor_auto_core_updates', '__return_true');

// プラグイン・テーマ：自動更新を無効化
add_filter('auto_update_plugin', '__return_false');
add_filter('auto_update_theme', '__return_false');

/* ---------- 【カスタム投稿：ブログ】と関連タクソノミー作成 ---------- */
function register_blog_post_type_and_taxonomies()
{


  // ▼ カスタム投稿 blog
  register_post_type('blog', [
    'label' => 'お知らせ/ブログ一覧',
    'public' => true,
    'has_archive' => true,
    'rewrite' => [
      'slug' => 'blog',
      'with_front' => false,
    ],
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
  ]);

  // ▼ ジャンル（genre）
  register_taxonomy('genre', ['blog'], [
    'label' => 'ジャンル',
    'hierarchical' => true, // 階層あり
    'rewrite' => [
      'slug' => 'genre', // ✅ 本来の形に戻す（blog/genreではなくgenre）
      'with_front' => false,
    ],
    'show_admin_column' => true,
    'show_in_rest' => true,
  ]);
  register_taxonomy_for_object_type('genre', 'blog');

  // ▼ ブログカテゴリー（blogcat）
  register_taxonomy('blogcat', ['blog'], [
    'label' => 'ブログカテゴリー',
    'hierarchical' => true,
    'rewrite' => [
      'slug' => 'blogcat', // ✅ 本来の形に戻す（blog/blogcatではなくblogcat）
      'with_front' => false,
    ],
    'show_admin_column' => true,
    'show_in_rest' => true,
  ]);
  register_taxonomy_for_object_type('blogcat', 'blog');

  // ▼ 個別記事（数字スラッグ対応） /blog/1170
  add_rewrite_rule(
    '^blog/([0-9]+)/?$',
    'index.php?post_type=blog&name=$matches[1]',
    'top'
  );
}
add_action('init', 'register_blog_post_type_and_taxonomies', 0);



/* ---------- 【カスタム投稿：ブログ】に関するリライトルール ---------- */
add_action('init', function () {

  /* ▼ 月別アーカイブ /blog/date/2025/10/ */
  add_rewrite_rule(
    '^blog/date/([0-9]{4})/([0-9]{1,2})/?$',
    'index.php?post_type=blog&year=$matches[1]&monthnum=$matches[2]',
    'top'
  );

  /* ▼ 月別アーカイブ（ページネーション付き）/blog/date/2025/10/page/2/ */
  add_rewrite_rule(
    '^blog/date/([0-9]{4})/([0-9]{1,2})/page/([0-9]{1,})/?$',
    'index.php?post_type=blog&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]',
    'top'
  );

  /* ▼ ジャンル /blog/genre/〇〇/ */
  add_rewrite_rule(
    '^blog/genre/([^/]+)/?$',
    'index.php?genre=$matches[1]',
    'top'
  );

  /* ▼ ジャンル（ページネーション対応） /blog/genre/〇〇/page/2/ */
  add_rewrite_rule(
    '^blog/genre/([^/]+)/page/([0-9]{1,})/?$',
    'index.php?genre=$matches[1]&paged=$matches[2]',
    'top'
  );

  /* ▼ カテゴリ /blog/blogcat/〇〇/ */
  add_rewrite_rule(
    '^blog/blogcat/([^/]+)/?$',
    'index.php?blogcat=$matches[1]',
    'top'
  );

  /* ▼ カテゴリ（ページネーション対応） /blog/blogcat/〇〇/page/2/ */
  add_rewrite_rule(
    '^blog/blogcat/([^/]+)/page/([0-9]{1,})/?$',
    'index.php?blogcat=$matches[1]&paged=$matches[2]',
    'top'
  );
}, 11);


/* ---------- アーカイブページのタームに応じたデフォルトアイキャッチ画像を返す ---------- */
function my_get_default_eyecatch_url($post_id = null)
{
  $post_id = $post_id ?: get_the_ID();

  // 最終 fallback
  $default_img = get_template_directory_uri() . '/img/dummy.webp';

  // 対象タクソノミー
  $target_taxonomies = array('genre', 'blogcat');

  // タームスラッグごとの画像
  $term_images = array(
    'news'   => 'news-eyecatch.webp',
    'column' => 'column-eyecatch.webp',
    'event'  => 'event-eyecatch.webp',
  );

  foreach ($target_taxonomies as $taxonomy) {
    $terms = get_the_terms($post_id, $taxonomy);

    if (empty($terms) || is_wp_error($terms)) {
      continue;
    }

    foreach ($terms as $term) {
      if (isset($term_images[$term->slug])) {
        return get_template_directory_uri() . '/img/' . $term_images[$term->slug];
      }
    }
  }

  return $default_img;
}

/* ---------- 【管理画面】メニュー制限 ---------- */
//全員
function remove_menus()
{
  global $menu;
  remove_menu_page('edit.php'); // 投稿を非表示
  remove_menu_page('edit-comments.php'); // コメントを非表示
}
add_action('admin_menu', 'remove_menus');


/* ---------- タイトルタグの有効化 ---------- */
add_theme_support('title-tag');

/* ---------- アイキャッチ画像の有効化 ---------- */
add_theme_support('post-thumbnails');

/* ---------- SVGのアップロードを許可 ---------- */
function add_file_types_to_uploads($file_types)
{
  $file_types['svg'] = 'image/svg+xml';
  $file_types['svgz'] = 'image/svg+xml';
  return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

/* ---------- 固定ページの画像のパス省略 ---------- */
function replaceImagePath($arg)
{
  $content = str_replace('"./img/', '"' . get_template_directory_uri() . '/img/', $arg);
  return $content;
}
add_action('the_content', 'replaceImagePath');

/* ---------- wysiwygの画像のパス省略 ---------- */
function shortcode_theme_url()
{
  return get_template_directory_uri();
}
add_shortcode('theme_url', 'shortcode_theme_url');

/* ---------- 固定ページでショートコードを使ったphpファイルの呼び出し---------- */
function my_php_Include($params = array())
{
  extract(shortcode_atts(array('file' => 'default'), $params));
  ob_start();
  include(STYLESHEETPATH . "/template-parts/$file.php");
  return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');


/* ---------- contactform7でwpautopを無効化 ---------- */
add_filter('wpcf7_autop_or_not', '__return_false');


/* ---------- contactform7の設定 ---------- */
// メールアドレス確認
function custom_cf7_email_confirm_validation($result, $tag)
{
  $tag = new WPCF7_FormTag($tag);

  if ($tag->name === 'your-email2') {
    $email1 = isset($_POST['your-email']) ? trim(wp_unslash($_POST['your-email'])) : '';
    $email2 = isset($_POST['your-email2']) ? trim(wp_unslash($_POST['your-email2'])) : '';

    if ($email1 !== $email2) {
      $result->invalidate($tag, 'メールアドレスが一致しません。');
    }
  }

  return $result;
}
add_filter('wpcf7_validate_email', 'custom_cf7_email_confirm_validation', 20, 2);
add_filter('wpcf7_validate_email*', 'custom_cf7_email_confirm_validation', 20, 2);

// フリガナのカタカナ判定
function custom_cf7_katakana_validation($result, $tag)
{
  $tag = new WPCF7_FormTag($tag);

  $target_fields = array(
    'your-last-name-kana',
    'your-first-name-kana',
  );

  if (in_array($tag->name, $target_fields, true)) {
    $value = isset($_POST[$tag->name]) ? trim(wp_unslash($_POST[$tag->name])) : '';

    if ($value !== '' && !preg_match('/^[ァ-ヶー　\s]+$/u', $value)) {
      $result->invalidate($tag, '全角カタカナで入力してください。');
    }
  }

  return $result;
}
add_filter('wpcf7_validate_text', 'custom_cf7_katakana_validation', 20, 2);
add_filter('wpcf7_validate_text*', 'custom_cf7_katakana_validation', 20, 2);

// AjaxZip3 読み込み
function my_enqueue_ajaxzip3()
{
  wp_enqueue_script(
    'ajaxzip3',
    'https://ajaxzip3.github.io/ajaxzip3.js',
    array(),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'my_enqueue_ajaxzip3');

function my_cf7_zip_autofill_script()
{
?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const zip1 = document.querySelector('input[name="your-zip1"]');
      const zip2 = document.querySelector('input[name="your-zip2"]');

      if (!zip1 || !zip2 || typeof AjaxZip3 === 'undefined') return;

      function runAutoFill() {
        const val1 = zip1.value.replace(/[^0-9]/g, '');
        const val2 = zip2.value.replace(/[^0-9]/g, '');

        if (val1.length === 3 && val2.length === 4) {
          AjaxZip3.zip2addr('your-zip1', 'your-zip2', 'your-address1', 'your-address2');
        }
      }

      zip1.addEventListener('input', runAutoFill);
      zip2.addEventListener('input', runAutoFill);
      zip1.addEventListener('blur', runAutoFill);
      zip2.addEventListener('blur', runAutoFill);
    });
  </script>
<?php
}
add_action('wp_footer', 'my_cf7_zip_autofill_script', 30);

/* ---------- ページャーカスタマイズ ---------- */
function pagination()
{
  $args = array(
    'mid_size' => 2, // 現在ページの左右に表示するページ番号の数
    'prev_next' => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
    'prev_text' => __('PREV'),
    'next_text' => __('NEXT'),
  );
  the_posts_pagination($args);
}

/* ---------- カンマやクォーテーションなどの自動変換禁止 ---------- */
remove_filter('the_title', 'wptexturize'); //記事タイトル
remove_filter('the_content', 'wptexturize'); //本文
remove_filter('the_excerpt', 'wptexturize'); //抜粋

/* ---------- 固定ページで自動でpが入るのを禁止 ---------- */
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content)
{
  global $post;
  $remove_filter = false;

  //自動整形を無効にする投稿タイプを記述 ＝固定ページ
  $arr_types = array('page');
  $post_type = get_post_type($post->ID);
  if (in_array($post_type, $arr_types)) {
    $remove_filter = true;
  }

  if ($remove_filter) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }

  return $content;
}

/* ---------- カスタム投稿のパーマリンクをPOST IDに変更 ---------- */
add_filter('post_type_link', 'custom_post_link', 1, 2);
function custom_post_link($link, $post)
{
  if ($post->post_type === 'case') {
    return home_url('/case/' . $post->ID . '/');
  } else if ($post->post_type === 'price') {
    return home_url('/price/' . $post->ID . '/');
  } else {
    return $link;
  }
}

//書き換えたパーマリンクに対応したリライトルールを追加
add_filter('rewrite_rules_array', 'custom_post_link_rewrite');
function custom_post_link_rewrite($rules)
{
  $rewrite_rules = array(
    'case/([0-9]+)/?$' => 'index.php?post_type=case&p=$matches[1]',
    'price/([0-9]+)/?$' => 'index.php?post_type=price&p=$matches[1]',
  );
  return $rewrite_rules + $rules;
}

/* ---------- カスタム投稿の日付アーカイブのリライトルール ---------- */
function add_custom_post_date_archive_rules()
{
  $post_types = ['post', 'blog']; // 使っているカスタム投稿タイプを指定

  foreach ($post_types as $post_type) {
    // 年と月別アーカイブ
    add_rewrite_rule(
      $post_type . '/([0-9]{4})/([0-9]{1,2})/?$',
      'index.php?post_type=' . $post_type . '&year=$1&monthnum=$2',
      'top'
    );

    // 年別アーカイブ
    add_rewrite_rule(
      $post_type . '/([0-9]{4})/?$',
      'index.php?post_type=' . $post_type . '&year=$1',
      'top'
    );
  }
}
add_action('init', 'add_custom_post_date_archive_rules');

/* ---------- ブロックエディタ用のCSSを読み込み ---------- */
add_action('after_setup_theme', function () {
  add_theme_support('editor-styles');
});

add_filter('block_editor_settings_all', function ($editor_settings, $editor_context) {

  // 投稿情報が取れない場合は何もしない
  if (empty($editor_context->post)) {
    return $editor_settings;
  }

  $post_type = $editor_context->post->post_type;

  // 固定ページには当てない
  if ($post_type === 'page') {
    return $editor_settings;
  }

  $editor_css_path = get_theme_file_path('/css/editor-style.css');

  if (file_exists($editor_css_path)) {
    $editor_settings['styles'][] = array(
      'css' => file_get_contents($editor_css_path),
    );
  }

  return $editor_settings;
}, 10, 2);

/* ---------- 見出しブロックの設定を制御 ---------- */
function my_customize_heading_block_settings($args, $block_type)
{
  if ($block_type !== 'core/heading') {
    return $args;
  }

  /*
   * H1を選べないようにする
   */
  if (isset($args['attributes']['levelOptions'])) {
    $args['attributes']['levelOptions']['default'] = array(2, 3, 4, 5, 6);
  }

  /*
   * 見出しブロックの色設定を無効化
   */
  $args['supports']['color'] = array(
    'text'       => false,
    'background' => false,
    'link'       => false,
    'gradients'  => false,
    'button'     => false,
    '__experimentalDefaultControls' => array(
      'text'       => false,
      'background' => false,
      'link'       => false,
    ),
  );

  /*
   * 見出しブロックのタイポグラフィ設定を無効化
   */
  $args['supports']['typography'] = false;

  return $args;
}
add_filter('register_block_type_args', 'my_customize_heading_block_settings', 10, 2);


/* ---------- wysiwygの見出しを制御 ---------- */
function custom_tmce_settings($initArray)
{
  $current_post_type = get_post_type();

  if (in_array($current_post_type, ['beauty', 'worries', 'general'], true)) {
    $initArray['block_formats'] = "見出し3=h3; 見出し4=h4; 見出し5=h5; 見出し6=h6; 段落=p;";

    $style_formats = [
      [
        'title' => 'ボタンリンク',
        'selector' => 'a',
        'classes' => 'btn-link',
      ],
      // [
      //   'title' => '矢印リンク',
      //   'selector' => 'a',
      //   'classes' => 'link-arrow',
      // ],
      // [
      //   'title' => '別窓アイコン付き',
      //   'selector' => 'a',
      //   'classes' => 'link-blank',
      // ],
    ];

    $initArray['style_formats'] = wp_json_encode($style_formats);
  } else {
    $initArray['block_formats'] = "見出し2=h2; 見出し3=h3; 見出し4=h4; 見出し5=h5; 段落=p;";
  }

  return $initArray;
}
add_filter('tiny_mce_before_init', 'custom_tmce_settings');


/* ---------- ブロックエディタの項目を制御 ---------- */
add_filter('allowed_block_types', function ($allowed_block_types, $post) {

  $allowed_block_types = [
    // 一般ブロック 'common'
    'core/paragraph',           // 段落
    'core/heading',             // 見出し
    'core/image',               // 画像
    //'core/quote',               // 引用
    //'core/gallery',             // ギャラリー
    'core/list',                // リスト親
    'core/list-item',           // リスト子
    //'core/audio',               // 音声
    //'core/cover',               // カバー
    //'core/file',                // ファイル
    //'core/video',               // 動画

    // フォーマット 'formatting'
    //'core/code',                // ソースコード
    //'core/freeform',            // クラシック
    'core/html',                // カスタムHTML
    //'core/preformatted',        // 整形済み
    //'core/pullquote',           // プルクオート
    'core/table',               // テーブル
    //'core/verse',               // 詩

    // レイアウト要素 'layout'
    //'core/button',              // ボタン
    'core/columns',             // カラム
    //'core/media-text',          // メディアと文章
    //'core/more',                // 続きを読む
    //'core/nextpage',            // 改ページ
    //'core/separator',           // 区切り
    //'core/spacer',              // スペーサー

    // ウィジェット 'widgets'
    //'core/shortcode',           // ショートコード
    //'core/archives',            // アーカイブ
    //'core/calender',            // カレンダー 5.2追加
    //'core/categories',          // カテゴリー
    //'core/latest-comments',     // 最新のコメント
    //'core/latest-posts',        // 最新の記事
    //'core/rss',                 // RSS 5.2追加
    //'core/search',              // 検索 5.2追加
    //'core/tag-cloud',           // タグクラウド 5.2追加

    // 埋め込み 'embed'
    //'core/embed',               // 埋め込み
    //'core-embed/twitter',       // Twitter
    //'core-embed/youtube',       // YouTube
    //'core-embed/facebook',      // Facebook
    //'core-embed/instagram',     // Instagram
    //'core-embed/wordpress',     // WordPress
    //'core-embed/soundcloud',    // SoundCloud
    //'core-embed/spotify',       // Spotify
    //'core-embed/flickr',        // Flickr
    //'core-embed/vimeo',         // Viemo
    //'core-embed/animoto',       // Animoto
    //'core-embed/cloudup',       // Cloudup
    //'core-embed/collegehumor',  // CollegeHumor
    //'core-embed/cloudsignal',  // Cloudsignal 5.x追加
    //'core-embed/dailymotion',   // Dailymotion
    //'core-embed/hulu',          // Hulu
    //'core-embed/imgur',         // Imgur
    //'core-embed/issuu',         // Issuu
    //'core-embed/kickstarter',   // Kickstarter
    //'core-embed/meetup-com',    // Meetup.com
    //'core-embed/mixcloud',      // Mixcloud
    //'core-embed/reddit',        // Reddit
    //'core-embed/reverbnation',  // ReverbNation
    //'core-embed/screencast',    // Screencast
    //'core-embed/scribd',        // Scribd
    //'core-embed/slideshare',    // Slideshare
    //'core-embed/smugmug',       // SmugMug
    //'core-embed/speaker-deck',  // Speaker Deck
    //'core-embed/ted',           // TED
    //'core-embed/tumblr',        // Tumblr
    //'core-embed/videopress',    // VideoPress
    //'core-embed/wordpress-tv',  // WordPress.tv
    //'core-embed/amazon-kindle',  // Amazon Kindle 5.2で追加

    // 再利用ブロック 'reusable'
    'core/block',                  // 再利用ブロック
  ];
  return $allowed_block_types;
}, 10, 2);

/* ---------- body class ---------- */
function my_body_class($classes)
{
  // 固定ページ
  if (is_page()) {
    $page = get_post();
    if ($page) {

      // 階層スラッグ（親→子）
      $slugs = array();

      // まず自分
      $slugs[] = $page->post_name;

      // 親がいれば辿る
      $parent_id = (int) $page->post_parent;
      while ($parent_id) {
        $parent = get_post($parent_id);
        if (!$parent)
          break;

        array_unshift($slugs, $parent->post_name);
        $parent_id = (int) $parent->post_parent;
      }

      // page-親-子-孫... 形式
      $classes[] = 'page-' . implode('-', $slugs);

      // （必要なら単体スラッグも残す場合）
      // $classes[] = 'page-' . $page->post_name;

    }

    // カスタム投稿 beauty
  } elseif (is_singular('beauty')) {
    $post = get_post();
    if ($post) {
      $classes[] = $post->post_name;
    }

    // priceとcaseのアーカイブのとき
  } elseif (is_post_type_archive(array('price', 'case'))) {
    $classes[] = 'has-sidebar-left';
  }

  return array_values(array_unique($classes));
}
add_filter('body_class', 'my_body_class');

/* ---------- タイトルやクラスなど各ページの設定情報 ---------- */
function get_page_meta_info()
{
  global $post;
  $page_title_ja = '';
  $page_title_tag = 'h1';
  $logo_tag = is_front_page() ? 'h1' : 'p';

  if (is_page()) {
    $page_title_ja = get_the_title();
  } elseif (is_tax()) {
    $term = get_queried_object();
    if ($term) {
      $taxonomy = $term->taxonomy;
      $tax_obj = get_taxonomy($taxonomy);
      if ($tax_obj && isset($tax_obj->object_type[0])) {
        $post_type = $tax_obj->object_type[0];
        $post_type_obj = get_post_type_object($post_type);
        if ($post_type_obj) {
          $page_title_ja = $post_type_obj->label;
        }
      }
    }
  } elseif (is_post_type_archive()) {
    $post_type = get_query_var('post_type');
    if (is_array($post_type)) {
      $post_type = reset($post_type);
    }

    switch ($post_type) {
      case 'recommend':
        $page_title_ja = 'おすすめ情報';
        break;

      case 'column':
        $page_title_ja = 'コラム';
        break;

      case 'news':
        $page_title_ja = 'お知らせ';
        break;

      case 'case':
        $page_title_ja = '症例写真';
        break;

      case 'menu':
        $page_title_ja = '施術一覧';
        break;

      case 'price':
        $page_title_ja = '料金表';
        break;

      default:
        $post_type_obj = get_post_type_object($post_type);
        if ($post_type_obj) {
          $page_title_ja = $post_type_obj->label;
        }
        break;
    }
  } elseif (is_singular()) {
    $post_type = get_post_type();
    if ($post_type && in_array($post_type, ['recommend', 'column', 'news', 'case'])) {
      $post_type_obj = get_post_type_object($post_type);
      if ($post_type_obj) {
        $page_title_ja = $post_type_obj->label;
      }
    } elseif ($post_type && in_array($post_type, ['menu'])) {
      $post_type_obj = get_post_type_object($post_type);
      if ($post_type_obj) {
        $page_title_ja = get_the_title();
      }
    }
  } elseif (is_404()) {
    $page_title_ja = 'ページが見つかりません';
  } elseif (!is_front_page()) {
    $page_title_ja = get_the_title();
  }

  if (is_singular('case')) {
    $page_title_tag = 'p';
  }

  return [
    'page_title_ja' => $page_title_ja,
    'title_tag' => $page_title_tag,
    'logo_tag' => $logo_tag,
  ];
}

/* ---------- パンくずリスト ---------- */
function breadcrumb()
{
?>
  <nav class="breadcrumb">
    <ol class="breadcrumb_list" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo esc_url(home_url()); ?>">
          <span itemprop="name">TOP</span>
        </a>
        <meta itemprop="position" content="1">
      </li>

      <!-- 固定ページの場合 -->
      <?php if (is_page()): ?>
        <?php
        global $post;

        $parents = array_reverse(get_post_ancestors($post->ID));
        $position = 2;

        // 親ページがあれば順番に出力
        if (!empty($parents)):
          foreach ($parents as $parent_id):
        ?>
            <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="<?php echo esc_url(get_permalink($parent_id)); ?>">
                <span itemprop="name"><?php echo esc_html(get_the_title($parent_id)); ?></span>
              </a>
              <meta itemprop="position" content="<?php echo $position; ?>">
            </li>
        <?php
            $position++;
          endforeach;
        endif;
        ?>

        <!-- 現在のページ -->
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php echo esc_html(get_the_title()); ?></span>
          <meta itemprop="position" content="<?php echo $position; ?>">
        </li>

        <!-- 年別アーカイブページの場合 -->
      <?php elseif (is_year()): ?>
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
            itemid="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"
            href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">
            <span itemprop="name"><?php echo get_the_category()[0]->name; ?></span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php echo get_query_var('year'); ?>年</span>
          <meta itemprop="position" content="3">
        </li>

        <!-- 月別アーカイブページの場合 --><?php elseif (is_month()): ?>
        <?php
                              // blog（またはpost_type=blog）ならパンくずリンクを固定する
                              $post_type = get_query_var('post_type');
                              if ($post_type === 'blog' || $post_type === '' || $post_type === 'post'):
        ?>
          <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
              itemid="<?php echo esc_url(home_url('/blog/')); ?>" href="<?php echo esc_url(home_url('/blog/')); ?>">
              <span itemprop="name">お知らせ/ブログ一覧</span>
            </a>
            <meta itemprop="position" content="2">
          </li>

        <?php else: ?>
          <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <span itemprop="name">ホーム</span>
            </a>
            <meta itemprop="position" content="2">
          </li>
        <?php endif; ?>

        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">
            <?php echo esc_html(get_query_var('year')); ?>年
            <?php echo esc_html(get_query_var('monthnum')); ?>月
          </span>
          <meta itemprop="position" content="3">
        </li>

        <!-- 投稿のタグページの場合 -->
      <?php elseif (is_tag()): ?>
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php single_tag_title(); ?></span>
          <meta itemprop="position" content="2">
        </li>

        <!-- タクソノミーのアーカイブページの場合 -->
      <?php elseif (is_tax(array('genre', 'blogcat'))): ?>
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item" itemid="<?php echo home_url(); ?>/blog/"
            href="<?php echo home_url(); ?>/blog/">
            <span itemprop="name">お知らせ/ブログ一覧</span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php single_term_title(); ?></span>
          <meta itemprop="position" content="3">
        </li>

        <!-- タクソノミーのアーカイブページの場合 -->
      <?php elseif (is_tax()): ?>
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
            itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>"
            href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
            <span itemprop="name"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php single_term_title(); ?></span>
          <meta itemprop="position" content="3">
        </li>

        <!-- カスタム投稿のアーカイブページの場合 -->
      <?php elseif (is_post_type_archive()): ?>
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php post_type_archive_title(); ?></span>
          <meta itemprop="position" content="2">
        </li>

        <!-- 投稿のカテゴリーページの場合 -->
      <?php elseif (is_category()):
                              $current_category = get_queried_object(); ?>
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php echo $current_category->name; ?></span>
          <meta itemprop="position" content="2">
        </li>

        <!-- カスタム投稿のシングルページの場合 -->
      <?php elseif (is_singular("worries")): ?>
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php single_post_title(); ?></span>
          <meta itemprop="position" content="2">
        </li>

      <?php elseif (is_singular("beauty")): ?>
        <!-- カスタム投稿のシングルページの場合 -->
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
            itemid="<?php echo home_url(); ?>/beauty/"
            href="<?php echo home_url(); ?>/beauty/">
            <span itemprop="name"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php single_post_title(); ?></span>
          <meta itemprop="position" content="3">
        </li>

      <?php elseif (is_single()): ?>
        <!-- カスタム投稿のシングルページの場合 -->
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemscope itemtype="https://schema.org/WebPage" itemprop="item"
            itemid="<?php echo get_post_type_archive_link(get_post_type()); ?>"
            href="<?php echo get_post_type_archive_link(get_post_type()); ?>">
            <span itemprop="name"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
          </a>
          <meta itemprop="position" content="2">
        </li>

        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"><?php single_post_title(); ?></span>
          <meta itemprop="position" content="3">
        </li>

      <?php elseif (is_404()): ?>
        <!--  404エラーページの場合 -->
        <li class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">404</span>
          <meta itemprop="position" content="2">
        </li>

      <?php endif; ?>
    </ol>
  </nav>
<?php
}

/* ---------- breadcrumb() をショートコード化 ---------- */
function breadcrumb_shortcode()
{
  if (function_exists('breadcrumb')) {
    // 出力をキャプチャ
    ob_start();
    breadcrumb(); // HTMLを出力する関数
    return ob_get_clean(); // 出力を返す
  }
}
add_shortcode('breadcrumb', 'breadcrumb_shortcode');



// ---------- NEWS REST API ---------- 
function konan_get_remote_news_items()
{
  $cache_key = 'konan_remote_news_items';
  $cache = get_transient($cache_key);

  if ($cache !== false) {
    return $cache;
  }

  $url = add_query_arg(
    array(
      'blogcat'  => 56,
      'per_page' => 3,
      'orderby'  => 'date',
      'order'    => 'desc',
      '_fields'  => 'id,date,link,title',
    ),
    'https://oshiro-skin-clinic.com/wp-json/wp/v2/blog'
  );

  $response = wp_remote_get($url, array(
    'timeout' => 5,
  ));

  if (is_wp_error($response)) {
    return array();
  }

  $status_code = wp_remote_retrieve_response_code($response);

  if ($status_code !== 200) {
    return array();
  }

  $body = wp_remote_retrieve_body($response);
  $posts = json_decode($body, true);

  if (empty($posts) || !is_array($posts)) {
    return array();
  }

  $items = array();

  foreach ($posts as $post) {
    $items[] = array(
      'title' => !empty($post['title']['rendered']) ? wp_strip_all_tags($post['title']['rendered']) : '',
      'url'   => !empty($post['link']) ? $post['link'] : '',
      'date'  => !empty($post['date']) ? date_i18n('Y.m.d', strtotime($post['date'])) : '',
    );
  }

  set_transient($cache_key, $items, 10 * MINUTE_IN_SECONDS);

  return $items;
}


// ---------- BLOG REST API ---------- 
function konan_get_remote_blog_items()
{
  $cache_key = 'konan_remote_blog_items';
  $cache = get_transient($cache_key);

  if ($cache !== false) {
    return $cache;
  }

  $url = add_query_arg(
    array(
      'genre'    => 4,
      'per_page' => 4,
      'orderby'  => 'date',
      'order'    => 'desc',
      '_embed'   => 1,
    ),
    'https://oshiro-skin-clinic.com/wp-json/wp/v2/blog'
  );

  $response = wp_remote_get($url, array(
    'timeout' => 5,
  ));

  if (is_wp_error($response)) {
    return array();
  }

  $status_code = wp_remote_retrieve_response_code($response);

  if ($status_code !== 200) {
    return array();
  }

  $body = wp_remote_retrieve_body($response);
  $posts = json_decode($body, true);

  if (empty($posts) || !is_array($posts)) {
    return array();
  }

  $items = array();

  foreach ($posts as $post) {
    $eyecatch = '';

    if (!empty($post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['medium_large']['source_url'])) {
      $eyecatch = $post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['medium_large']['source_url'];
    } elseif (!empty($post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['large']['source_url'])) {
      $eyecatch = $post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['large']['source_url'];
    } elseif (!empty($post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['medium']['source_url'])) {
      $eyecatch = $post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['medium']['source_url'];
    } elseif (!empty($post['_embedded']['wp:featuredmedia'][0]['source_url'])) {
      $eyecatch = $post['_embedded']['wp:featuredmedia'][0]['source_url'];
    }

    $items[] = array(
      'title'    => !empty($post['title']['rendered']) ? wp_strip_all_tags($post['title']['rendered']) : '',
      'url'      => !empty($post['link']) ? $post['link'] : '',
      'date'     => !empty($post['date']) ? date_i18n('Y.m.d', strtotime($post['date'])) : '',
      'eyecatch' => $eyecatch,
    );
  }

  set_transient($cache_key, $items, 10 * MINUTE_IN_SECONDS);

  return $items;
}

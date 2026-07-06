<?php
/* ---------- 【管理画面】メニュー制限 ---------- */
//全員
function remove_menus()
{
  global $menu;
  remove_menu_page('edit.php'); // 投稿を非表示
  remove_menu_page('edit-comments.php'); // コメントを非表示
}
add_action('admin_menu', 'remove_menus');

//ユーザーの制限
function restrict_admin_features()
{
  // 制限を適用するユーザーID
  $restricted_user_id = 2;

  // 現在のユーザー情報を取得
  $current_user = wp_get_current_user();

  // 現在のユーザーが制限対象ユーザーかどうかをチェック
  if ($current_user->ID == $restricted_user_id) {
    // 制限するメニュー項目をリストアップ
    global $menu;
    global $submenu;

    // 管理画面メニューの一部を削除
    remove_menu_page('themes.php'); // 外観
    remove_menu_page('plugins.php'); // プラグイン
    remove_menu_page('users.php'); // ユーザー
    remove_menu_page('tools.php'); // ツール
    remove_menu_page('options-general.php'); // 設定
    remove_menu_page('aioseo'); // ALL in One SEO
    remove_menu_page('optin-monster-dashboard'); // optin monster
    remove_menu_page('calendar'); // ALL in One SEO
    remove_menu_page('wpcf7'); // Contact form7
    remove_menu_page('ai1wm_export'); // WP Migration
    remove_menu_page('password-protected'); // password protected
    remove_menu_page('broken-link-checker'); // broken-link-checker
    remove_menu_page('setup-checklist'); // インサイト
    remove_menu_page('WFAssistant'); // WFAssistant
    remove_menu_page('Wordfence'); // Wordfence
    remove_menu_page('edit.php?post_type=calendar'); // カレンダー

    // サブメニューの一部を削除 (例: 設定メニューの一般設定を削除)
    remove_submenu_page('index.php', 'update-core.php'); // ダッシュボード＞更新
  }
}

add_action('admin_menu', 'restrict_admin_features', 999);

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
function shortcode_theme_url() {
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

/* ---------- 固定ページでビジュアルエディタを無効 ---------- */
function disable_visual_editor_except_specific_templates()
{
  global $post;

  // 現在の投稿が固定ページであるか確認
  if (isset($post) && $post->post_type === 'page') {
    // 選択されているテンプレートを取得
    $template = get_page_template_slug($post->ID);

    // ビジュアルエディタを有効にするテンプレートのリスト
    $allowed_templates = [
      'page-price.php',
      'page-problems.php',
    ];

    // 許可されたテンプレートに含まれていない場合、ビジュアルエディタを無効化
    if (!in_array($template, $allowed_templates, true)) {
      add_filter('user_can_richedit', '__return_false', 10);
    }
  }
}

// 投稿が読み込まれた後にビジュアルエディタの有効/無効を切り替え
add_action('edit_form_after_title', 'disable_visual_editor_except_specific_templates');

/* ---------- 管理画面用CSSを読み込む ---------- */
function add_admin_style()
{
  $path_css = get_template_directory_uri() . '/css/admin.css';
  wp_enqueue_style('admin_style', $path_css);
}
add_action('admin_enqueue_scripts', 'add_admin_style');

/* ---------- 管理画面用CSSを読み込む ---------- */
function my_acf_wysiwyg_custom_styles($init)
{
  $init['content_css'] = get_template_directory_uri() . '/css/admin_acf.css';
  return $init;
}
add_filter('tiny_mce_before_init', 'my_acf_wysiwyg_custom_styles');

/* ---------- カスタム投稿のパーマリンクをPOST IDに変更 ---------- */
add_filter('post_type_link', 'custom_post_link', 1, 2);
function custom_post_link($link, $post)
{
  if ($post->post_type === 'column') {
    return home_url('/column/' . $post->ID . '/');
  } elseif ($post->post_type === 'news') {
    return home_url('/news/' . $post->ID . '/');
  } elseif ($post->post_type === 'recommend') {
    return home_url('/recommend/' . $post->ID . '/');
  } elseif ($post->post_type === 'case') {
    return home_url('/case/' . $post->ID . '/');
  } else {
    return $link;
  }
}

//書き換えたパーマリンクに対応したリライトルールを追加
add_filter('rewrite_rules_array', 'custom_post_link_rewrite');
function custom_post_link_rewrite($rules)
{
  $rewrite_rules = array(
    'column/([0-9]+)/?$' => 'index.php?post_type=column&p=$matches[1]',
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
    'recommend/([0-9]+)/?$' => 'index.php?post_type=recommend&p=$matches[1]',
    'case/([0-9]+)/?$' => 'index.php?post_type=case&p=$matches[1]',
  );
  return $rewrite_rules + $rules;
}

/* ---------- カスタム投稿の日付アーカイブのリライトルール ---------- */
function add_custom_post_date_archive_rules()
{
  $post_types = ['news', 'column', 'recommend']; // 使っているカスタム投稿タイプを指定

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

/* ---------- wysiwygの見出しを制御 ---------- */
function custom_tmce_settings($initArray)
{
  $current_post_type = get_post_type();

  if (in_array($current_post_type, ['menu', 'worries'], true)) {
    $initArray['block_formats'] = "見出し3=h3; 見出し4=h4; 見出し5=h5; 段落=p; グループ=div;";

    // $style_formats = [
    //   [
    //     'title' => '文字サイズ大',
    //     'block' => 'p',
    //     'classes' => 'large',
    //     'wrapper' => false,
    //     'exact' => true,
    //   ],
    //   [
    //     'title' => '文字サイズ中',
    //     'block' => 'p',
    //     'classes' => 'medium',
    //     'wrapper' => false,
    //     'exact' => true,
    //   ],
    //   [
    //     'title' => '文字サイズ小',
    //     'block' => 'p',
    //     'classes' => 'small',
    //     'wrapper' => false,
    //     'exact' => true,
    //   ],
    // ];
    // $initArray['style_formats'] = json_encode( $style_formats );
  } else {
    $initArray['block_formats'] = "見出し2=h2; 見出し3=h3; 見出し4=h4; 見出し5=h5; 段落=p; グループ=div;";
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
    //'core/columns',             // カラム
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
  // 固定ページのとき
  if (is_page()) {
    $page = get_post();
    $slug = $page->post_name;
    $classes[] = 'page_' . $slug;

  // カスタム投稿 menu のシングルページのとき
  } elseif (is_singular('menu')) {
    $post = get_post();
    if ($post) {
      $classes[] = $post->post_name; // スラッグだけ追加（例：sushi）
    }
  }

  return $classes;
}
add_filter('body_class', 'my_body_class');


/* ---------- タイトルやクラスなど各ページの設定情報 ---------- */
function get_page_meta_info()
{
  global $post;
  $page_title_ja = '';
  $page_title_en = '';
  $page_title_tag = 'h1';
  $logo_tag = is_front_page() ? 'h1' : 'p';

  if (is_page()) {
    $page_title_ja = get_the_title();

    // 特定ページ名は明示的に上書き
    if ($post->post_name === 'contact-confirm') {
      $page_title_en = 'CONTACT';

    } else {
      // ACFの値がある場合は使用、なければpost_nameを使う
      if (!empty($acf_title)) {
        $page_title_en = $acf_title;
      } else {
        $page_title_en = strtoupper($post->post_name);
      }
    }

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
          $page_title_en = strtoupper($post_type);
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
        $page_title_en = 'RECOMMENDED INFORMATION';
        break;

      case 'column':
        $page_title_ja = 'コラム';
        $page_title_en = 'COLUMN';
        break;

      case 'news':
        $page_title_ja = 'お知らせ';
        $page_title_en = 'INFORMATION';
        break;

      case 'case':
        $page_title_ja = '症例写真';
        $page_title_en = 'CASE PHOTO';
        break;

      case 'menu':
        $page_title_ja = '施術一覧';
        $page_title_en = 'MENU LIST';
        break;

      case 'price':
        $page_title_ja = '料金表';
        $page_title_en = 'PRICE TABLE';
        break;

      default:
        $post_type_obj = get_post_type_object($post_type);
        if ($post_type_obj) {
          $page_title_ja = $post_type_obj->label;
          $page_title_en = strtoupper($post_type);
        }
        break;
    }

  } elseif (is_singular()) {
    $post_type = get_post_type();
    if ($post_type && in_array($post_type, ['recommend', 'column', 'news', 'case'])) {
      $post_type_obj = get_post_type_object($post_type);
      if ($post_type_obj) {
        $page_title_ja = $post_type_obj->label;
        $page_title_en = strtoupper($post_type);
      }
    } elseif ($post_type && in_array($post_type, ['menu'])) {
      $post_type_obj = get_post_type_object($post_type);
      if ($post_type_obj) {
        $page_title_ja = get_the_title();
        $page_title_en = strtoupper($post_type);
      }
    }

  } elseif (is_404()) {
    $page_title_ja = 'ページが見つかりません';
    $page_title_en = '404';

  } elseif (!is_front_page()) {
    $page_title_ja = get_the_title();
  }

  if (is_singular('case')) {
    $page_title_tag = 'p';
  }

  return [
    'page_title_ja' => $page_title_ja,
    'page_title_en' => $page_title_en,
    'title_tag' => $page_title_tag,
    'logo_tag' => $logo_tag,
  ];
}

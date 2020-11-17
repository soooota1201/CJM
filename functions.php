<?php

/*------------------------
スタイルシート・スクリプト登録
--------------------------*/
function enqueue_scripts()
{
  wp_enqueue_script('script_js', get_template_directory_uri() . '/dist/main.js', array('jquery'));
  wp_enqueue_style('main_css', get_template_directory_uri() . '/dist/css/style.css', array());
}


/*--------------------------
スタイルシート・スクリプト読み込み
----------------------------*/
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/*----------------------
    アイキャッチ画像有効化
-----------------------*/
add_theme_support('post-thumbnails');

/*----------------------
  カスタム投稿登録
-----------------------*/
function modify_main_query($wp_query)
{

  if (is_admin() || !$wp_query->is_main_query()) return;

  if ($wp_query->is_post_type_archive('news')) { //()内には、登録したカスタム投稿名を記述
    $wp_query->set('post_type', array('news'));
    $wp_query->set('posts_per_page', 10); //一覧投稿表示数を指定
    return;
  };

  //複数のカスタム投稿の登録が可能↓
  if ($wp_query->is_post_type_archive('shop')) {
    $wp_query->set('post_type', array('shop'));
    $wp_query->set('posts_per_page', 10);
    return;
  }
}

add_action('pre_get_posts', 'modify_main_query');


/*----------------------------
      pタグ自動挿入制御
------------------------------*/
add_action(
  'init',
  function () {
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_content', 'wpautop');
  }
);
add_filter(
  'tiny_mce_before_init',
  function ($init) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = true;
    return $init;
  }
);

?>
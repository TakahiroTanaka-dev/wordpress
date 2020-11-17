<?php

// スタイルシートを適用させる関数
function easiestwp_scripts(){
  wp_enqueue_style('easiestwp-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'easiestwp_scripts');

// easiest-wpのセットアップ
function easiestwp_setup(){
  // タイトルを読み込むやつ
  add_theme_support('title-tag');

  // サムネイルを表示するやつ
  add_theme_support('post-thumbnails');

// 画像のサイズを調整するやつ、最後のtrueは画像を切り抜くかどうか
  add_image_size('easiestwp-thumbnail', 190, 130, true);  
  add_image_size('easiestwp-hero', 1200, 630, true);

  // カスタムメニューを有効化する
  register_nav_menus(array(
    'global' => 'Global Menu',
  ));

  // コメント一覧とフォーム部分にhtml5のマークアップを適用
  add_theme_support('html5', array(
    'comment-form',
    'comment-list',
  ));

}

add_action('after_setup_theme', 'easiestwp_setup');

// ウィジェットを読み込む関数
function easiestwp_widgets_init(){
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar'
  ));

// footerのウィジェットを追加
  register_sidebar(array(
    'name' => 'Footer',
    'id' => 'footer',
  ));
}

add_action('widgets_init', 'easiestwp_widgets_init');


// カスタマイズAPI

function easiestwp_customize_register($wp_customize){

}


add_action('customize_register', 'easiestwp_customize_register')
?>
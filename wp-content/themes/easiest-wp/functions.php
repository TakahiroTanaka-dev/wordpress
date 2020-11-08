<?php

// スタイルシートを適用させる関数
function easiestwp_scripts(){
  wp_enqueue_style('easiestwp-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'easiestwp_scripts');

// タイトルを読み込むやつ
function easiestwp_setup(){
  add_theme_support('title-tag');

  // サムネイルを表示するやつ
  add_theme_support('post-thumbnails');

// 画像のサイズを調整するやつ
  add_image_size('easiestwp-thumbnails', 190, 130);
  add_image_size('easiestwp-hero', 1200, 630);
  
}

add_action('after_setup_theme', 'easiestwp_setup');
?>
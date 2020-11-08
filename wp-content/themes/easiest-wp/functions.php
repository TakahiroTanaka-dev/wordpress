<?php

// スタイルシートを適用させる関数
function easiestwp_scripts(){
  wp_enqueue_style('easiestwp-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'easiestwp_scripts');

// タイトルを読み込むやつ
function easiestwp_setup(){
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'easiestwp_setup');
?>
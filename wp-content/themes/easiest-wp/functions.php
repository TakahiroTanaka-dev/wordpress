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
// ここでパネル、セクション、コントロール、セッティングを追加します
  $wp_customize -> add_section('theme_options', array(
    'title' => 'Theme Options',
    'priority' => 130,
  ));

  // セッティングを追加する
  for($i=1; $i <= 5; $i++){
  $wp_customize -> add_setting('front_page_content_'.$i, array(
    'default' => false,
    'sanitize_callback' => 'absint',
  ));

  // コントロールを追加する
  
  $wp_customize -> add_control('front_page_content_'.$i,array(
    'label' => 'Front Page Content '.$i,
    'section' => 'theme_options',
    'type' => 'dropdown-pages',
    'allow-addition' => true,
  ));
  }

}

add_action('customize_register', 'easiestwp_customize_register');

function easiestwp_front_page_template($template){
  return is_home() ? '' : $template;
}

if(function_exists('register_block_pattern')){
  function my_block_pattern(){

    $block_pattern_html = '<!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column -->
        <div class="wp-block-column">
   
          <!-- wp:paragraph {"textColor":"black","fontSize":"medium"} -->
            <p class="has-black-color has-text-color has-medium-font-size"><strong>吾輩は猫である</strong></p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph {"textColor":"black","fontSize":"small"} -->
            <p class="has-black-color has-text-color has-small-font-size">吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。</p>
          <!-- /wp:paragraph -->
   
        </div>
      <!-- /wp:column -->
   
      <!-- wp:column -->
        <div class="wp-block-column">
          <!-- wp:paragraph {"textColor":"black","fontSize":"small"} -->
            <p class="has-black-color has-text-color has-small-font-size">この書生というのは時々我々を捕えて煮て食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始であろう。</p>
          <!-- /wp:paragraph -->
        </div>
      <!-- /wp:column -->
   
      <!-- wp:column -->
        <div class="wp-block-column">
          <!-- wp:paragraph {"textColor":"black","fontSize":"small"} -->
            <p class="has-black-color has-text-color has-small-font-size">この時妙なものだと思った感じが今でも残っている。第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。その後猫にもだいぶ逢ったがこんな片輪には一度も出会わした事がない。のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙を吹く。どうも咽せぽくて実に弱った。</p>
          <!-- /wp:paragraph -->
        </div>
      <!-- /wp:column -->
    </div>
  <!-- /wp:columns -->
  ';
    register_block_pattern(
      'three_columns_text',
      array(
        'title' => '3カラムテキスト',
        'category' => array('columns'),
        'content' => $block_pattern_html,
      )
      );
  }

  add_action('init', 'my_block_pattern');
}

?>

<!DOCTYPE HTML>
<!-- wordpressにひっす -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset=<?php bloginfo('charset'); ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="style.css" /> -->
	<!-- ヘッダーのフック -->
	<?php	wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="page-header">
		<div class="header-area">
			<div class="panel-site-title">
				<p class="site-title"><a href=<?php echo esc_url(home_url()); ?>><?php bloginfo('name'); ?></a></p>
				<p class="site-subtitle"><?php bloginfo('description'); ?></p>
			</div>

			<!-- <nav class="global-nav">
				<ul id="global-menu" class="menu">
					<li class="current-menu-item"><a href="index.html">ホーム</a></li>
					<li><a href="portfolio.html">ポートフォリオ</a></li>
					<li><a href="profile.html">プロフィール</a></li>
					<li><a href="contact.html">お問い合わせ</a></li>
				</ul>
			</nav> -->

			<!-- グローバルメニューを表示 -->
			<?php if (has_nav_menu('global')):?>
				<?php wp_nav_menu(array(
					'theme_location' => 'global',
					'menu_id' =>'global-menu',
					'container' => 'nav',
					'container_class' => 'global-nav'
				)); ?>
			<?php endif; ?>
		</div>
	</header>
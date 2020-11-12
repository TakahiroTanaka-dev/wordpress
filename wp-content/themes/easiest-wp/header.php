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
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
	
	<?php get_header(); ?>

	<div class="hero"></div>
	<div class="content-area has-side-col">
		<div class="main-column">
			<h1 class="box-heading box-heading-main-col">Blog</h1>
			<div class="box-content">

			<!-- こっから記事があれば表示される -->
				<?php if(have_posts()): ?>
					<ul class="archive">
						
						<!-- こっからループ処理 -->
						<?php while(have_posts()): ?>
							<?php the_post(); ?>
							<li class="item-archive">
								<div class="time-and-thumb-archive">
									<time class="pub-date" datetime=<?php echo get_the_date('DATE_W3C') ?>><?php echo get_the_date() ?></time>

									<!-- PHP使ってループ処理の中でサムネイルを適用した -->
									<?php if(has_post_thumbnail()): ?>
										<p class="thumb thumb-archive"><a href=<?php the_permalink(); ?>><?php the_post_thumbnail('easiestwp-thumbnail') ?></a></p>
									<?php endif; ?>

								</div>
								<div class="data-archive">
									<p class="list-categories-archive"><?php the_category(','); ?></p>
									<h2 class="title-archive"><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
									<p class="list-tags-archive"><?php the_tags(); ?></p>
								</div>
						<?php endwhile; ?>
					</ul>
				<?php else :?>
					<p>投稿はありません</p>
				<?php endif;?>
			</div>

			<!-- 最下部のページネーションを表示 -->
			<?php the_posts_pagination(array(
				'prev_text' => '<img class="arrow" src="'.get_theme_file_uri().'/images/arrow-left.png" srcset="'.get_theme_file_uri().'/images/arrow-left@2x.png 2x" alt="前へ">',
				'next_text' => '<img class="arrow" src="'.get_theme_file_uri().'/images/arrow-right.png" srcset="'.get_theme_file_uri().'/images/arrow-right@2x.png 2x" alt="次へ">'
			)); ?>

			

		</div>

		<ul class="side-column">
			<li class="widget">
				<form class="searchform">
					<div>
						<input type="text">
						<input value="検索" type="submit">
					</div>
				</form>
			</li>
			<li class="widget">
				<h2 class="widgettitle">最近の投稿</h2>
				<ul>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
					<li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
				</ul>
			</li>
			<li class="widget">
				<h2 class="widgettitle">カテゴリー</h2>
				<ul>
					<li><a href="archive.html">カテゴリ名</a></li>
					<li><a href="archive.html">カテゴリ名</a></li>
					<li><a href="archive.html">カテゴリ名</a></li>
				</ul>
			</li>
		</ul>

	</div>

	<footer class="page-footer">
		<div class="footer-widget-area">
			<ul class="footer-widgets">
				<li><a href="#"><img src="http://placehold.it/320x80"></a></li>
				<li><a href="#"><img src="http://placehold.it/320x80"></a></li>
				<li><a href="#"><img src="http://placehold.it/320x80"></a></li>
			</ul>
			<div class="back-to-top">
				<a href="#"><img src="images/arrow-up.png" srcset="images/arrow-up@2x.png 2x" alt="">TOP</a>
			</div>
		</div>
		<div class="copyright">
			<p>Copyright ©  Gijutsu-Hyohron Co., Ltd.</p>
		</div>
	</footer>
	<!-- footerのフック -->
	<?php wp_footer(); ?>
</body>
</html>
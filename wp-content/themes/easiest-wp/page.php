<?php get_header(); ?>

<?php while(have_posts()):?>
  <?php the_post(); ?>
	<div class="page-title">
		<h1>プロフィール</h1>
	</div>

	<div class="content-area content-area-profile">
		<div class="main-column">
			<div class="box-content radius-tl">
				<article>
					<header class="profile-header">
						<p class="pic-profile"><img src="http://placehold.it/180x180"></p>
						<h2>Toru Yamamoto</h2>
					</header>
					<div class="text-body">
						<p>1979年 奈良県生まれ。
						平成美術大学カメラ研究会を経て、2002年から アサオカフォトスタジオにて浅岡豊氏に師事。
						2008年12月にフリーランスとして活動を開始、ファミリーポートレイトから風景写真まで幅広い写真を手がける。
						2009年、山本徹写真事務所を開設、広告撮影を中心に活動中。</p>
						<address class="profile-address">
							<p class="studio-name">山本徹 写真事務所</p>
							<p>532-0023 大阪府大阪市淀川区十三東1-17-13<br>
								水交ビル 403号室</p>
							<p>お問い合わせは<a href="contact.html">メールフォーム</a>からお願いいたします</p>
						</address>
						<div class="google-maps">
							Google Maps
						</div>
					</div>
				</article>
			</div>
    </div>
    <?php if(comments_open() || get_comments_number()): comments_template(); endif; ?>
  </div>
  
<?php endwhile;?>

	<?php get_footer(); ?>
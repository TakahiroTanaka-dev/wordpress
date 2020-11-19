<?php get_header(); ?>

<div class="hero"></div>
<div class="content-area has-side-col">
	<div class="main-column">
		<!-- for分でメインコンテンツを5回分繰り返す -->
		<?php for ($i = 1; $i <= 5; $i++) : ?>
			<!-- get_theme_modでfront_page_content_1~5に登録されているかどうかを判定する -->
			<?php if (get_theme_mod('front_page_content_' . $i)) : ?>
				<?php
				$post = get_post(get_theme_mod('front_page_content_' . $i));
				setup_postdata($post);
				?>
				<h1 class="box-heading box-heading-main-col"><?php the_title(); ?></h1>
				<div class="box-content">

					<!-- ページのIDを取得する -->
					<?php
					$blog_posts_page_id = get_the_ID();
					if ($blog_posts_page_id === (int) get_option('page_for_posts')) :
					?>

						<!-- サブループ -->
						<?php
						$blog_posts = new WP_Query(array(
							'posts_per_page' => 5,
							'post_status' => 'publish',
							'no_found_rows' => true,
						));
						?>
						<!-- こっから記事があれば表示される -->
						<?php if ($blog_posts->have_posts()) : ?>
							<ul class="archive">

								<!-- こっからループ処理 -->
								<?php while ($blog_posts->have_posts()) : ?>
									<?php $blog_posts->the_post(); ?>
									<li class="item-archive">
										<div class="time-and-thumb-archive">
											<time class="pub-date" datetime=<?php echo get_the_date('DATE_W3C') ?>><?php echo get_the_date() ?></time>

											<!-- PHP使ってループ処理の中でサムネイルを適用した -->
											<?php if (has_post_thumbnail()) : ?>
												<p class="thumb thumb-archive"><a href=<?php the_permalink(); ?>><?php the_post_thumbnail('easiestwp-thumbnail') ?></a></p>
											<?php endif; ?>

										</div>
										<div class="data-archive">
											<p class="list-categories-archive"><?php the_category(','); ?></p>
											<h2 class="title-archive"><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
											<p class="list-tags-archive"><?php the_tags(); ?></p>
										</div>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php else : ?>
							<p>投稿はありません</p>
						<?php endif; ?>
					<?php else : ?>
						<?php the_content(); ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		<?php endfor; ?>

		<?php wp_reset_postdata(); ?>

		<!-- 最下部のページネーションを表示 -->
		<?php the_posts_pagination(array(
			'prev_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-left.png" srcset="' . get_theme_file_uri() . '/images/arrow-left@2x.png 2x" alt="前へ">',
			'next_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-right.png" srcset="' . get_theme_file_uri() . '/images/arrow-right@2x.png 2x" alt="次へ">'
		)); ?>



	</div>
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

</body>

</html>
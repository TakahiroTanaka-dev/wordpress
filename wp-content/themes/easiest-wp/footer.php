<footer class="page-footer">
	<div class="footer-widget-area">

		<!-- フッターのウィジェットをPHPで表示 -->
		<?php if (is_active_sidebar('footer')) : ?>
			<ul class="footer-widgets">
				<?php dynamic_sidebar('footer'); ?>
			</ul>
		<?php endif; ?>
		<div class="back-to-top">
			<a href="#"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/images/arrow-up.png" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/images/arrow-up@2x.png 2x" alt="">TOP</a>
		</div>
	</div>
	<div class="copyright">
		<p>Copyright © Gijutsu-Hyohron Co., Ltd.</p>
	</div>
</footer>
<!-- footerのフック -->
<?php wp_footer(); ?>
</body>

</html>
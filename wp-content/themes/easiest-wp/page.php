<?php get_header(); ?>

<?php while(have_posts()):?>
  <?php the_post(); ?>
	<div class="page-title">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="content-area content-area-profile">
		<div class="main-column">
			<div class="box-content radius-tl">
				<article>
					<?php the_content(); ?>
				</article>
			</div>
    </div>
    <?php if(comments_open() || get_comments_number()): comments_template(); endif; ?>
  </div>
  
<?php endwhile;?>

	<?php get_footer(); ?>
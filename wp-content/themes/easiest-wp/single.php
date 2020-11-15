<?php get_header(); ?>

<?php while (have_posts()) : ?>
  <?php the_post(); ?>
  <!-- サムネイル画像表示 -->
  <?php if (the_post_thumbnail()) : ?>
    <div class="hero eyecatch">
      <?php the_post_thumbnail('easiestwp-hero'); ?>
    </div>
  <?php endif; ?>

  <div class="content-area has-side-col">
    <div class="main-column">
      <div class="box-generic">
        <h1 class="box-heading box-heading-article"><?php the_title(); ?></h1>
        <div class="box-content">

          <article class="entry">
            <?php the_content(); ?>
          </article>

          <div class="meta-data">
            <time class="meta meta-entry-date" datetime="<?php echo get_the_date(DATE_W3C); ?>"><?php echo get_the_date(); ?></time>
            <p class="meta meta-author"><?php the_author_posts_link(); ?></p>
            <p class="meta meta-cat"><a href="archive.html"><?php the_category(','); ?></a></p>
            <p class="meta meta-tag"><?php the_tags(); ?></p>
          </div>

          <?php the_post_navigation(array(
            'prev_text' => '前の記事：%title',
            'next_text' => '次の記事：%title',
          )); ?>
        </div>
      </div>

      <div class="box-generic">
        <div class="box-content box-comment-display">
          <h2>コメントとトラックバック</h2>
          <ul class="comment-list">
            <li id="comment-1" class="comment even thread-even depth-1 parent">
              <article id="div-comment-1" class="comment-body">
                <footer class="comment-meta">
                  <div class="comment-author vcard">
                    <img class="avatar" src="http://placehold.it/130x130">
                    <b class="fn"><a href="#" rel="external nofollow" class="url">WordPress コメントの投稿者</a></b> <span class="says">より:</span>
                  </div><!-- .comment-author -->
                  <div class="comment-metadata">
                    <a href="#">
                      <time datetime="2017-04-16T23:40:30+00:00">2017年4月16日 11:40 PM </time>
                    </a>
                    <span class="edit-link"><a class="comment-edit-link" href="#">編集</a></span>
                  </div><!-- .comment-metadata -->
                </footer><!-- .comment-meta -->
                <div class="comment-content">
                  <p>こんにちは、これはコメントです。<br>
                    コメントの承認、編集、削除を始めるにはダッシュボードの「コメント画面」にアクセスしてください。<br>
                    コメントのアバターは「<a href="https://gravatar.com">Gravatar</a>」から取得されます。</p>
                </div><!-- .comment-content -->
                <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#" aria-label="WordPress コメントの投稿者 に返信">返信</a></div>
              </article><!-- .comment-body -->
              <ul class="children">
                <li id="comment-3" class="comment byuser comment-author-admin bypostauthor odd alt depth-2">
                  <article id="div-comment-3" class="comment-body">
                    <footer class="comment-meta">
                      <div class="comment-author vcard">
                        <img class="avatar" src="http://placehold.it/130x130">
                        <b class="fn">admin</b> <span class="says">より:</span>
                      </div><!-- .comment-author -->
                      <div class="comment-metadata">
                        <a href="#">
                          <time datetime="2017-04-18T17:45:33+00:00">2017年4月18日 5:45 PM</time>
                        </a>
                        <span class="edit-link"><a class="comment-edit-link" href="#">編集</a></span>
                      </div><!-- .comment-metadata -->
                    </footer><!-- .comment-meta -->
                    <div class="comment-content">
                      <p>こんにちは、これはコメントです。<br />
                        コメントの承認、編集、削除を始めるにはダッシュボードの「コメント画面」にアクセスしてください。<br />
                        コメントのアバターは「Gravatar」から取得されます。</p>
                    </div><!-- .comment-content -->
                    <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#" aria-label="admin に返信">返信</a></div>
                  </article><!-- .comment-body -->
                </li><!-- #comment-## -->
              </ul><!-- .children -->
            </li><!-- #comment-## -->
          </ul>
        </div>
      </div>
      <div class="box-generic">
        <div class="box-content box-comment-input">
          <h3 id="reply-title" class="comment-reply-title">コメントを残す</h3>
          <p class="comment-notes">メールアドレスが公開されることはありません。 * が付いている欄は必須項目です</p>
          <form action="#" class="comment-form">
            <p class="comment-notes"></p>
          </form>
        </div>
      </div>

    </div>

    <?php get_sidebar(); ?>

  </div>

<?php endwhile; ?>
<?php get_footer(); ?>
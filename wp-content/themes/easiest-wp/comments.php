<?php if (have_comments()) : ?>
  <div class="box-generic">
    <div class="box-content box-comment-display">
      <h2>コメントとトラックバック</h2>
      <ul class="comment-list">
        <?php wp_list_comments(array(
          'avatar_size' => 130,
        )) ?>
      </ul>
    </div>
  </div>
<?php endif; ?>
<div class="box-generic">
  <div class="box-content box-comment-input">
    <h3 id="reply-title" class="comment-reply-title">コメントを残す</h3>
    <p class="comment-notes">メールアドレスが公開されることはありません。 * が付いている欄は必須項目です</p>
    <form action="#" class="comment-form">
      <p class="comment-notes"></p>
    </form>
  </div>
</div>
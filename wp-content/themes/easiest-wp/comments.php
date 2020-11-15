<?php if(post_password_required()){
  return false;
} ?>
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
<?php if(comments_open()): ?>
<div class="box-generic">
  <div class="box-content box-comment-input">
    <?php comment_form(); ?>
  </div>
</div>
<?php endif ?>
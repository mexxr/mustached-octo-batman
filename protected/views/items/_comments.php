<?php
/* @var $comments array */
/* @var $comment Comments */
/* @var $model Items */
?>
<div class="comment hidden"></div>
<?php foreach ($comments[$index] as $comment): ?>
    <?php $this->renderPartial('_comment', array('index' => $index, 'comment' => $comment, 'model' => $model)); ?>
    <?php if (isset($comments[$comment->id])) $this->renderPartial('_comments', array('comments' => $comments, 'index' => $comment->id, 'model' => $model)); ?>
<?php endforeach; ?>
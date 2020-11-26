<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */

$this->title = 'Комментарии';
?>
<div class="comments-create">

    <?php foreach($comments as $comment): ?>
        <div class="comments__line">
            <div class="comments__info">
                <p class="comments__name"><?= $comment->name; ?></p>
                <div class="comments__date-container">
                    <?php
                    $date = $comment->date;
                    ?>
                    <p class="comments__time"><?= date('H:i ', strtotime($date)); ?></p>
                    <p class="comments__date"><?= date('d.m.Y ', strtotime($date)); ?></p>
                </div>
            </div>
            <p class="comments__text"><?= $comment->comments; ?></p>
        </div>
    <?php endforeach; ?>

    <hr class="hr">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

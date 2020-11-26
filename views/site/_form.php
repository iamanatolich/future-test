<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>



    <?php $form = ActiveForm::begin(); ?>
    <h3 class="form__title">Оставьте комментарий<h3>
            <div class="form__fields">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class' => 'form__input form__input_type_name', 'required=' => '']) ?>

    <?= $form->field($model, 'comments')->textarea(['maxlength' => true, 'class' => 'form__input form__input_type_comment', 'required=' => '']) ?>

            </div>
        <?= Html::submitButton('Отправить', ['class' => 'form__btn form__btn_type_submit', 'align' => 'right']) ?>

    <?php ActiveForm::end(); ?>
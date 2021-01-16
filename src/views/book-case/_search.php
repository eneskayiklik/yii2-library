<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model eneskayiklik\library\models\BookCaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-case-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'genre') ?>

    <?= $form->field($model, 'book_name') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'effective_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

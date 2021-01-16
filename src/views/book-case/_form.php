<?php

use eneskayiklik\library\models\Genre;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model eneskayiklik\library\models\BookCase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-case-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $genres=Genre::find()->all();
    $listData=ArrayHelper::map($genres,'genre_name','genre_name'); ?>

    <?= $form->field($model, 'genre')->dropDownList($listData,
        ['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'book_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'effective_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

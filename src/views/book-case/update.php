<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model eneskayiklik\library\models\BookCase */

$this->title = 'Update Book Case: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Book Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-case-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

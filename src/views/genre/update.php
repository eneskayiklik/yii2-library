<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model eneskayiklik\library\models\Genre */

$this->title = 'Update Genre: ' . $model->genre_name;
$this->params['breadcrumbs'][] = ['label' => 'Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->genre_name, 'url' => ['view', 'id' => $model->genre_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

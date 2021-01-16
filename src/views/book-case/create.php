<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model eneskayiklik\library\models\BookCase */

$this->title = 'Create Book Case';
$this->params['breadcrumbs'][] = ['label' => 'Book Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-case-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Look Genre\'s', ['./genre/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

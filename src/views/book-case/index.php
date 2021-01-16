<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel eneskayiklik\library\models\BookCaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Book Cases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-case-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book Case', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'genre',
            'book_name',
            'author',
            'effective_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

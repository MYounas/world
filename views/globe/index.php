<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GlobeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Globes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="globe-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Globe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'g_id',
            'co_id',
            'ci_id',
            'a_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

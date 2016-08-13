<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Countries */

$this->title = 'Update Countries: ' . $model->co_id;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->co_id, 'url' => ['view', 'id' => $model->co_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="countries-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

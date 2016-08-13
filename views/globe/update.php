<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Globe */

$this->title = 'Update Globe: ' . $model->g_id;
$this->params['breadcrumbs'][] = ['label' => 'Globes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->g_id, 'url' => ['view', 'id' => $model->g_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="globe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

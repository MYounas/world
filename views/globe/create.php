<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Globe */

$this->title = 'Create Globe';
$this->params['breadcrumbs'][] = ['label' => 'Globes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="globe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Globe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="globe-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model,'co_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Countries::find()->all(),'co_id','co_name'),['prompt'=>'Select Country']
    ) ?>

    <?= $form->field($model,'ci_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Cities::find()->all(),'ci_id','ci_name'),['prompt'=>'Select City']
    ) ?>

    <?= $form->field($model,'a_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Areas::find()->all(),'a_id','a_name'),['prompt'=>'Select Area']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

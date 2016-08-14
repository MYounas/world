<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cities;

/* @var $this yii\web\View */
/* @var $model app\models\Areas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="areas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model,'ci_id')->dropDownList(
        ArrayHelper::map(Cities::find()->all(),'ci_id','ci_name'),['prompt'=>'Select City']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

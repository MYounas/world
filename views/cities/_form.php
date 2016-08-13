<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cities */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cities-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ci_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ci_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model,'co_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Countries::find()->all(),'co_id','co_name'),['prompt'=>'Select Country']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

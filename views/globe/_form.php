<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Countries;
use app\models\Cities;
use app\models\Areas;


/* @var $this yii\web\View */
/* @var $model app\models\Globe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="globe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'co_id')->dropDownList(
        ArrayHelper::map(Countries::find()->all(),'co_id','co_name'),[
            'prompt'=>'Select Country',
            'onchange'=>'$.post("index.php?r=globe/get-cities&id="+$(this).val(),function(data){
                                                                                    alert(JSON.parse(data));
                                                                                    });'
        ]
    ) ?>

    <?= $form->field($model,'ci_id')->dropDownList(
        ArrayHelper::map(Cities::find()->all(),'ci_id','ci_name'),['prompt'=>'Select City']
    ) ?>

    <?= $form->field($model,'a_id')->dropDownList(
        ArrayHelper::map(Areas::find()->all(),'a_id','a_name'),['prompt'=>'Select Area']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

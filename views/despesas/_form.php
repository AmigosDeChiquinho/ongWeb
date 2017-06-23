<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Despesa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="despesa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'recorrente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataFim')->textInput() ?>

    <?= $form->field($model, 'dataPagamento')->textInput() ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Animal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idade')->textInput() ?>

    <?= $form->field($model, 'raca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caracteristicas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelagem')->dropDownList([ 'Pequeno' => 'Pequeno', 'Médio' => 'Médio', 'Grande' => 'Grande', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'brevehistorico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Profile_User_idUser')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

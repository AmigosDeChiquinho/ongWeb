<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\Animal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataEntrada')->textInput() ?>

    <?= $form->field($model, 'idade')->textInput() ?>

    <?= $form->field($model, 'caracteristicas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->dropDownList([ 'male' => 'Macho', 'female' => 'Femea', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'porte')->dropDownList([ 'Pequeno' => 'Pequeno', 'Médio' => 'Médio', 'Grande' => 'Grande', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pelagem')->dropDownList([ 'Curto' => 'Curto', 'Médio' => 'Médio', 'Grande' => 'Grande', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'breveHistorico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Profile_idProfile')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'arquivado')->textInput() ?>

    <?= $form->field($model, 'especie')->dropDownList([ 'Cachorro' => 'Cachorro', 'Gato' => 'Gato', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Perfil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataNascimento')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <!-- Endereço -->
    
    <?= $form->field($endereco, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($endereco, 'uf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($endereco, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($endereco, 'logradouro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($endereco, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($endereco, 'complemento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($endereco, 'cep')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

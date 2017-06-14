<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Caixinha */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caixinha-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeEstabelecimento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomeResposavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataCriacao')->textInput() ?>

    <?= $form->field($model, 'dataRetirada')->textInput() ?>

    <?= $form->field($model, 'aprovado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

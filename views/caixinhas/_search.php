<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CaixinhaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caixinha-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCaixinha') ?>

    <?= $form->field($model, 'nomeEstabelecimento') ?>

    <?= $form->field($model, 'nomeResposavel') ?>

    <?= $form->field($model, 'telefone') ?>

    <?= $form->field($model, 'endereco') ?>

    <?php // echo $form->field($model, 'dataCriacao') ?>

    <?php // echo $form->field($model, 'dataRetirada') ?>

    <?php // echo $form->field($model, 'aprovado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

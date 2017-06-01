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

    <?= $form->field($model, 'endereco') ?>

    <?= $form->field($model, 'dataCriacao') ?>

    <?= $form->field($model, 'dataRetirada') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

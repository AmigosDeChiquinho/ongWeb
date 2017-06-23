<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DoacaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doacao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idDoacao') ?>

    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'dataDoacao') ?>

    <?= $form->field($model, 'Profile_idProfile') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

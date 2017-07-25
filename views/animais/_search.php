<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnimalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idanimal') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'dataEntrada') ?>

    <?= $form->field($model, 'idade') ?>

    <?= $form->field($model, 'caracteristicas') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'porte') ?>

    <?php // echo $form->field($model, 'pelagem') ?>

    <?php // echo $form->field($model, 'breveHistorico') ?>

    <?php // echo $form->field($model, 'Profile_idProfile') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'arquivado') ?>

    <?php // echo $form->field($model, 'especie') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

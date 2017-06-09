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

    <?= $form->field($model, 'data_entrada') ?>

    <?= $form->field($model, 'idade') ?>

    <?= $form->field($model, 'raca') ?>

    <?php // echo $form->field($model, 'caracteristicas') ?>

    <?php // echo $form->field($model, 'cor') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'porte') ?>

    <?php // echo $form->field($model, 'pelagem') ?>

    <?php // echo $form->field($model, 'brevehistorico') ?>

    <?php // echo $form->field($model, 'Profile_idProfile') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Endereco */

$this->title = 'Update Endereco: ' . $model->Profile_idProfile;
$this->params['breadcrumbs'][] = ['label' => 'Enderecos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Profile_idProfile, 'url' => ['view', 'id' => $model->Profile_idProfile]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="endereco-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

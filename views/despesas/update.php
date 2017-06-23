<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Despesa */

$this->title = 'Update Despesa: ' . $model->idDespesa;
$this->params['breadcrumbs'][] = ['label' => 'Despesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDespesa, 'url' => ['view', 'id' => $model->idDespesa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="despesa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

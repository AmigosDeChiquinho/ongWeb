<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Animal */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Animal',
]) . $model->idanimal;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Animals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idanimal, 'url' => ['view', 'id' => $model->idanimal]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="animal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

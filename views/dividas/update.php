<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Divida */

$this->title = Yii::t('app', 'Update Divida: ') . $model->idDivida;
$this->params['breadcrumbs'][] = ['label' => 'Dividas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDivida, 'url' => ['view', 'id' => $model->idDivida]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="divida-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

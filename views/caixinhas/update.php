<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Caixinha */

$this->title = 'Update Caixinha: ' . $model->idCaixinha;
$this->params['breadcrumbs'][] = ['label' => 'Caixinhas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCaixinha, 'url' => ['view', 'id' => $model->idCaixinha]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="caixinha-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

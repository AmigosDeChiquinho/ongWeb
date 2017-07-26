<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CaixaDoacao */

$this->title = 'Update Caixa Doacao: ' . $model->idCaixinha;
$this->params['breadcrumbs'][] = ['label' => 'Caixa Doacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCaixinha, 'url' => ['view', 'id' => $model->idCaixinha]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="caixa-doacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

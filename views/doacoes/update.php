<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Doacao */

$this->title = Yii::t('app', 'Update Doacao: ') . $model->idDoacao;
$this->params['breadcrumbs'][] = ['label' => 'Doacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDoacao, 'url' => ['view', 'id' => $model->idDoacao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

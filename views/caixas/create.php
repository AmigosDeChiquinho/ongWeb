<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CaixaDoacao */

$this->title = 'Create Caixa Doacao';
$this->params['breadcrumbs'][] = ['label' => 'Caixa Doacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-doacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

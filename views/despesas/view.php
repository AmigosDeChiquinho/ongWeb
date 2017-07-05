<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Despesa */

$this->title = $model->idDespesa;
$this->params['breadcrumbs'][] = ['label' => 'Despesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="despesa-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idDespesa',
            'recorrente',
            'dataFim',
            'dataPagamento',
            'valor',
        ],
    ]) ?>

     <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idDespesa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idDespesa], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>

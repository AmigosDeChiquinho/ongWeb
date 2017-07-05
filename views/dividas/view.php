<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Divida */

$this->title = $model->idDivida;
$this->params['breadcrumbs'][] = ['label' => 'Dividas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divida-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idDivida',
            'valor',
            'descricao',
            'dataPagamento',
        ],
    ]) ?>

     <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idDivida], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idDivida], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>

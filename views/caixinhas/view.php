<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Caixinha */

$this->title = $model->nomeEstabelecimento;
$this->params['breadcrumbs'][] = ['label' => 'Caixinhas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixinha-view">

    <h1><?= Html::encode($this->title) ?></h1>

  

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idCaixinha',
            'nomeEstabelecimento',
            'nomeResposavel',
            'telefone',
            'endereco',
            'dataCriacao',
            'dataRetirada',
            'aprovado',
        ],
    ]) ?>

      <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idCaixinha], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idCaixinha], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CaixaDoacao */

$this->title = $model->idCaixinha;
$this->params['breadcrumbs'][] = ['label' => 'Caixa Doacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-doacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idCaixinha], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idCaixinha], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idCaixinha',
            'nomeEstabelecimento',
            'telefone',
            'endereco',
            'dataInicio',
            'dataFim',
            'aprovado',
            'created_at',
            'updated_at',
            'profile_idProfile',
        ],
    ]) ?>

</div>

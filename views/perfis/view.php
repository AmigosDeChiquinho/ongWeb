<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Perfil */

$this->title = $model->idProfile;
$this->params['breadcrumbs'][] = ['label' => 'Perfils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idProfile], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idProfile], [
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
            'idProfile',
            'email:email',
            'nome',
            'cpf',
            'dataNascimento',
            'celular',
            'telefone',
            'endereco.cidade',
            'endereco.uf',
            'endereco.bairro',
            'endereco.logradouro',
            'endereco.numero',
            'endereco.complemento',
            'endereco.cep',
        ],
    ]) ?>

</div>

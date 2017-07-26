<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CaixaDoacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Caixa Doacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-doacao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Caixa Doacao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCaixinha',
            'nomeEstabelecimento',
            'telefone',
            'endereco',
            'dataInicio',
            // 'dataFim',
            // 'aprovado',
            // 'created_at',
            // 'updated_at',
            // 'profile_idProfile',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

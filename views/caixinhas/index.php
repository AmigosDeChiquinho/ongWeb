<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CaixinhaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Caixinhas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixinha-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Caixinha', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCaixinha',
            'nomeEstabelecimento',
            'endereco',
            'dataCriacao',
            'dataRetirada',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

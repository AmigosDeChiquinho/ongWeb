<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DividaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dividas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divida-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Divida', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idDivida',
            'valor',
            'descricao',
            'dataPagamento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Animals');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Animal'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idanimal',
            'nome',
            'dataEntrada',
            'idade',
            'caracteristicas',
            // 'sexo',
            // 'porte',
            // 'pelagem',
            // 'breveHistorico',
            // 'Profile_idProfile',
            // 'created_at',
            // 'updated_at',
            // 'arquivado',
            // 'especie',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

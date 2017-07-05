<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Animal */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idanimal',
            'nome',
            'data_entrada',
            'idade',
            'raca',
            'caracteristicas',
            'cor',
            'sexo',
            'porte',
            'pelagem',
            'brevehistorico',
            'Profile_idProfile',
            'created_at',
            'updated_at',
            'arquivado',
        ],
    ]) ?>

     <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idanimal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idanimal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>

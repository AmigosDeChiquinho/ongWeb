<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Doacao */

$this->title = $model->idDoacao;
$this->params['breadcrumbs'][] = ['label' => 'Doacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idDoacao',
            'valor',
            'dataDoacao',
            'Profile_idProfile',
        ],
    ]) ?>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idDoacao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idDoacao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>

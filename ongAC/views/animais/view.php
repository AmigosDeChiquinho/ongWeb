<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Animal */

$this->title = $model->idanimal;
$this->params['breadcrumbs'][] = ['label' => 'Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idanimal' => $model->idanimal, 'Profile_User_idUser' => $model->Profile_User_idUser], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idanimal' => $model->idanimal, 'Profile_User_idUser' => $model->Profile_User_idUser], [
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
            'idanimal',
            'nome',
            'idade',
            'raca',
            'caracteristicas',
            'cor',
            'sexo',
            'pelagem',
            'brevehistorico',
            'Profile_User_idUser',
        ],
    ]) ?>

</div>

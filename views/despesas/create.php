<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Despesa */

$this->title = 'Create Despesa';
$this->params['breadcrumbs'][] = ['label' => 'Despesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="despesa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
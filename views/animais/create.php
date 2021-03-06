<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\Animal */

$this->title = Yii::t('app', 'Create Animal');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Animals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

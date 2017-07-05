<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Divida */

$this->title = Yii::t('app', 'Create {var}',[ 'var'=>Yii::t('app','Divida')]);
$this->params['breadcrumbs'][] = ['label' => 'Dividas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divida-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

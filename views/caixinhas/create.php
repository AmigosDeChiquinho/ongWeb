<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Caixinha */

$this->title = Yii::t('app', 'Create {var}',[ 'var'=>Yii::t('app','Caixinha')]);
$this->params['breadcrumbs'][] = ['label' => 'Caixinhas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixinha-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

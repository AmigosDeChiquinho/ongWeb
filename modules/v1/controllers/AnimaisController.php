<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

class AnimaisController extends ActiveController
{
   
   public $modelClass = 'app\modules\v1\models\Animal';
/*
   public function actions()
   {
        $actions = parent::actions();
        unset($actions['delete']);

        return $actions();
   }
   */
}

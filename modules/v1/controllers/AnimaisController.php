<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

class AnimaisController extends ActiveController
{
   
   public $modelClass = 'app\modules\v1\models\Animal';

   public function actions() 
    { 
    $actions = parent::actions();
    $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
    return $actions;
    }

    public function prepareDataProvider() 
    {
    $searchModel = new \app\modules\v1\models\AnimalSearch();    
    return $searchModel->search(\Yii::$app->request->queryParams);
    }

}

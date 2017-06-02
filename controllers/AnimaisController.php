<?php

namespace app\controllers;

use Yii;
use app\models\Animal;
use app\models\AnimalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AnimaisController implements the CRUD actions for Animal model.
 */
class AnimaisController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Animal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AnimalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Animal model.
     * @param integer $idanimal
     * @param integer $Profile_User_idUser
     * @return mixed
     */
    public function actionView($idanimal, $Profile_User_idUser)
    {
        return $this->render('view', [
            'model' => $this->findModel($idanimal, $Profile_User_idUser),
        ]);
    }

    /**
     * Creates a new Animal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Animal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idanimal' => $model->idanimal, 'Profile_User_idUser' => $model->Profile_User_idUser]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Animal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idanimal
     * @param integer $Profile_User_idUser
     * @return mixed
     */
    public function actionUpdate($idanimal, $Profile_User_idUser)
    {
        $model = $this->findModel($idanimal, $Profile_User_idUser);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idanimal' => $model->idanimal, 'Profile_User_idUser' => $model->Profile_User_idUser]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Animal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idanimal
     * @param integer $Profile_User_idUser
     * @return mixed
     */
    public function actionDelete($idanimal, $Profile_User_idUser)
    {
        $this->findModel($idanimal, $Profile_User_idUser)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Animal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idanimal
     * @param integer $Profile_User_idUser
     * @return Animal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idanimal, $Profile_User_idUser)
    {
        if (($model = Animal::findOne(['idanimal' => $idanimal, 'Profile_User_idUser' => $Profile_User_idUser])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

<?php

namespace app\controllers;

use Yii;
use app\models\Perfil;
use app\models\PerfilSearch;
use app\models\Endereco;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerfisController implements the CRUD actions for Perfil model.
 */
class PerfisController extends Controller
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
     * Lists all Perfil models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerfilSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Perfil model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Perfil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Perfil();
        $endereco = new Endereco();

        if ($model->load(Yii::$app->request->post()) && $model->save() && $endereco->load(Yii::$app->request->post())) {
            
            $endereco->Profile_idProfile = $model->idProfile;
            $endereco->save();

            return $this->redirect(['view', 'id' => $model->idProfile]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'endereco' => $endereco,
            ]);
        }
    }

    /**
     * Updates an existing Perfil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $endereco = $this->findModelEndereco($id);

        if ($model->load(Yii::$app->request->post()) && $endereco->load(Yii::$app->request->post()) && $model->save() && $endereco->save()) {
            return $this->redirect(['view', 'id' => $model->idProfile]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'endereco' => $endereco,
            ]);
        }
    }

    /**
     * Deletes an existing Perfil model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        //$this->findModelEndereco($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Perfil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Perfil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Perfil::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findModelEndereco($id)
    {
        if (($model = Endereco::findOne(['Profile_idProfile'=>$id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

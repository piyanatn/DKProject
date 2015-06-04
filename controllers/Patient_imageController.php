<?php

namespace app\controllers;

use Yii;
use app\models\Patientimage;
use app\models\PatientimageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Patient_imageController implements the CRUD actions for Patientimage model.
 */
class Patient_imageController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Patientimage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PatientimageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Patientimage model.
     * @param string $hn
     * @param string $image_name
     * @return mixed
     */
    public function actionView($hn, $image_name)
    {
        return $this->render('view', [
            'model' => $this->findModel($hn, $image_name),
        ]);
    }

    /**
     * Creates a new Patientimage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Patientimage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'hn' => $model->hn, 'image_name' => $model->image_name]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Patientimage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $hn
     * @param string $image_name
     * @return mixed
     */
    public function actionUpdate($hn, $image_name)
    {
        $model = $this->findModel($hn, $image_name);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'hn' => $model->hn, 'image_name' => $model->image_name]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Patientimage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $hn
     * @param string $image_name
     * @return mixed
     */
    public function actionDelete($hn, $image_name)
    {
        $this->findModel($hn, $image_name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Patientimage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $hn
     * @param string $image_name
     * @return Patientimage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($hn, $image_name)
    {
        if (($model = Patientimage::findOne(['hn' => $hn, 'image_name' => $image_name])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

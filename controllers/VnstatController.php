<?php

namespace app\controllers;

use Yii;
use app\models\Vnstat;
use app\models\Labhead;
use app\models\Oapp;
use app\models\Laborder;
use app\models\Patientimage;
use app\models\PatientimageSearch;
use app\models\Ovstdiag;
use app\models\VnstartSearch;
use app\models\Opitemrece;
use app\models\OpitemreceSearch;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * VnstatController implements the CRUD actions for Vnstat model.
 */
class VnstatController extends Controller
{
    public function behaviors()
    {
        return [
            
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Vnstat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VnstartSearch();
        $searchModelDetail = new Vnstat();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

       $dataProvidervn_stat=new ActiveDataProvider([
            'query'=> Vnstat::find()->
            where(['vstdate'=>date("y-m-d")])->
            orderBy('vstdate'), 
            'pagination'=>[
                'pageSize'=>20,
            ],
        ]);
            return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
             'dataProvidervnstat' =>$dataProvidervn_stat,
            'searchModelDetail' => $searchModelDetail,
        ]);   
    }

    /**
     * Displays a single Vnstat model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        
        $picture=  Patientimage::find()->where(['hn'=>'0145279']);
              

 
       $diag=new ActiveDataProvider([
            'query'=> Ovstdiag::find()->
            where(['vn'=>$id])->
            orderBy('diagtype'), 
            'pagination'=>[
                'pageSize'=>20,
            ],
        ]);
       
       $drug=new ActiveDataProvider([
            'query'=> Opitemrece::find()
             ->join('LEFT OUTER JOIN', 's_drugitems',
                   'opitemrece.icode =s_drugitems.icode')  
             ->where(['vn'=>$id]),
//             ->orderBy('vstdate DESC'), 
            'pagination'=>[
                'pageSize'=>20,
            ],
        ]);
       
       $lab=new ActiveDataProvider([
            'query'=> Laborder::find()
           // ->select('lab_items.lab_items_name as lab_items_name,lab_order.lab_order_result as lab_order_result')
            ->join('LEFT OUTER JOIN', 'lab_head',
               'lab_order.lab_order_number =lab_head.lab_order_number')  
           ->join('LEFT OUTER JOIN', 'lab_items',
               'lab_order.lab_items_code =lab_items.lab_items_code')  
            ->where(['vn'=>$id]),
            //->orderBy('order_date DESC'), 
            'pagination'=>[
                'pageSize'=>20,
            ],
        ]);

        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProvider' => $drug,
            'dataProviderLab' => $lab,
            'dataProviderDiag' => $diag,
            'picture'=>$picture,

        ]);
    }

    /**
     * Creates a new Vnstat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Vnstat();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->vn]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Vnstat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->vn]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Vnstat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vnstat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Vnstat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vnstat::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
}

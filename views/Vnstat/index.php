<?php

use yii\helpers\Html;

use backend\models\Standard;
use yii\widgets\ActiveForm;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\VnstartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ระบบ EMR Online';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vnstat-index">

  
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <p>   
    
    <div class="alert alert-success" role="alert">ผลการค้นหา</div>
    </p> 
    
    <p>
       

        
    </p>    


<?php

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'vstdate',
        'label' => 'วันที่รับบริการ',
        'value' => 'Visitdays',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'cid',
        'value' => 'cid',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'hn',
        'value' => 'hn',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'hn',
        'value' => 'patient.fullname',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'pdx',
        'value' => 'pdx',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'pdx',
        'value' => 'icd101.name',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],

    [
         'class' => '\kartik\grid\ActionColumn',
        //'deleteOptions' => ['label' => '<i class="glyphicon glyphicon-remove"></i>',
        'template' => '{info}',
        'buttons' => [
        'info' => function ($url, $model) {
            return Html::a('<a class="btn btn-lg btn-success" href="index.php?r=vnstat%2Fview&id='.$model->vn.'">เรียกดู</a>', $url, [
                        'title' => Yii::t('app', 'Info'),
            ]);
        }
    ],
    ],
    
    
];
echo GridView::widget([
    'dataProvider' => $dataProvider,
    
    'columns' => $gridColumns,
    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
   
    'pjax' => true,
    'bordered' => true,
    'striped' => false,
    'condensed' => false,
    'responsive' => true,
 
   
    'panel' => [
        'type' => GridView::TYPE_PRIMARY
    ],
]);

?>
    

</div>

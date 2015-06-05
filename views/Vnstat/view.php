<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
use kartik\detail\DetailView;
use yii\widgets\ActiveForm;
use himiklab\thumbnail\EasyThumbnailImage;


/* @var $this yii\web\View */
/* @var $model app\models\Vnstat */

$this->title = $model->patient->fullname;
$this->params['breadcrumbs'][] = ['label' => 'ระบบ EMR Online', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->cid;
?>

   <div class="row">
    <div class="col-md-1">   
    </div>    
    <div class="col-md-9">
        <div class="alert alert-success" role="alert">
            <h1>HN <font color="green"><?php echo $model->hn; ?></font> ชื่อ-สกุล <font color="green"><?= Html::encode($this->title) ?></font></h1>
            <h4><b>เลขที่บัตรประชาชน : </b> <?php echo $model->cid  ?> <b>วันที่มารับบริการ : </b> <?php echo $model->Visitdays  ?></h4>
        </div>   
    </div>  
    <div class="col-md-2">
    <?php     
        echo "<img src='./index.php?r=vnstat/getimage&hn=".$model->hn."' class=\"img-rounded\" align=center height=130 width=150>"; 
      //  echo "<img src=\"./blank.jpg\" class=\"img-circle\" alt=\"Cinque Terre\" align=center height=130>";
    ?>
    </div>
  </div>     
  <div class="row">  
    <div class="col-md-1">

    </div>
      <div class="col-md-11">
      <div class="alert alert-info" role="alert">
         <h4><b>น้ำหนัก : </b> <?php echo $model->opdscreen->bw  ?>  <b>สูง : </b> <?php echo $model->opdscreen->height  ?>  <b>BP : </b> <?php echo $model->opdscreen->bps ."/" .$model->opdscreen->bpd ?> <b>อัตราการเต้นของหัวใจ : </b> <?php echo $model->opdscreen->pulse ?> <b>อุณหภูมิ : </b> <?php echo $model->opdscreen->temperature ?> <b>BMI : </b> <?php echo $model->opdscreen->bmi ?></h4>
      </div>
      <div class="alert alert-danger" role="alert">
         <h4><b>การแพ้ยา : </b> <?php echo $model->patient->drugallergy  ?>
      </div>
      <div class="alert alert-warning" role="alert">
           <h4><b>นัดครั้งหน้า : </b> <?php echo $model->oapp['oappdate'];  ?> 
      </div>
    </div>        
</div>
 
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-11">
<div class="panel panel-primary">
      <div class="panel-heading">
      อาการสำคัญ
      </div>
      <div class="panel-body">
          <p>
          <b>CC</b> : <?php echo $model->opdscreen->cc  ?>
          </p>
          <p>
          <b>HPI</b> : <?php echo $model->opdscreen->hpi  ?>
          </p>
      </div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-11"><?php
                $gridColumns = [
                    ['class' => 'kartik\grid\SerialColumn'],
                    [
                        'class' => 'kartik\grid\DataColumn',
                        'attribute' => 'lab_items_code',
                        'label' => 'ขื่อ Lab',
                        'value' => 'labitem.lab_items_name',
                        'hAlign'=>'middle',
                        'vAlign'=>'middle',
                    ],
                    [
                        'class' => 'kartik\grid\DataColumn',
                        'attribute' => 'lab_order_result',
                        'label' => 'ผล Lab',
                        'value' => 'lab_order_result',
                        'hAlign'=>'middle',
                        'vAlign'=>'middle',
                    ],
                    ];
                echo GridView::widget([
                    'dataProvider' => $dataProviderLab,
                    'columns' => $gridColumns,
                    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
                    'pjax' => true,
                    'bordered' => true,
                    'striped' => false,
                    'condensed' => false,
                    'responsive' => true,
                    'showFooter' => false,
       
                    'panel' => [
                        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-grain"></i> รายการ Lab</h3>',
                        'type' => GridView::TYPE_PRIMARY,
                         'before' => '',

                    ],
                ]);
            ?></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-11"><?php

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'icode',
        'label' => 'ขื่อยา',
        'value' => 'sdrugitems.fullname',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'qty',
        'value' => 'qty',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],

    
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'icode',
        'label' => 'วิธีการใช้',
        'value' => 'drugusagetable.name1',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'icode',
        'label' => '',
        'value' => 'drugusagetable.name2',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'icode',
        'label' => '',
        'value' => 'drugusagetable.name3',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
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
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-grain"></i> รายการยา</h3>',
        'type' => GridView::TYPE_PRIMARY
    ],
]);

?></div>
 
</div>
  

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-11">

         <?php
         //dataProviderDiag
        
$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'diagtype',
        'label' => 'diagtype',
        'value' => 'diagtype',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'diagtype',
        'label' => 'diagtype',
        'value' => 'diagtypename.name',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'icd10',
        'value' => 'icd10',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\DataColumn',
        'attribute' => 'icd10',
        'value' => 'icd101.name',
        'hAlign'=>'middle',
        'vAlign'=>'middle',
    ],
    ];
echo GridView::widget([
    'dataProvider' => $dataProviderDiag,
    'columns' => $gridColumns,
    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
    'pjax' => true,
    'bordered' => true,
    'striped' => false,
    'condensed' => false,
    'responsive' => true,
 
    'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-grain"></i> Diagnosis</h3>',
        'type' => GridView::TYPE_PRIMARY
    ],
]);
?>
    </div>
 

</div>
 
 
<div align="center">
    <a class="btn btn-lg btn-danger" href="index.php?r=vnstat/index">กลับ</a>
</div>
<p></p>

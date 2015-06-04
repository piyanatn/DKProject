<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PatientimageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patientimages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patientimage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Patientimage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hn',
            'image_name',
            'image',
            'width',
            'height',
            // 'capture_date',
            // 'hos_guid',
            // 'hos_guid_ext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

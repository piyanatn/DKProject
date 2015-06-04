<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Icd101Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Icd101s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="icd101-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Icd101', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'code',
            'name',
            'spclty',
            'tname',
            'code3',
            // 'code4',
            // 'code5',
            // 'sex',
            // 'ipd_valid',
            // 'icd10compat',
            // 'icd10tmcompat',
            // 'active_status',
            // 'hos_guid',
            // 'hos_guid_ext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
